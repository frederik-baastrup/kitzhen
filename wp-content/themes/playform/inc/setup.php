<?php
/**
 * Grundopsætning, når temaet aktiveres: danske URL'er, forside og standardsider.
 * Kan køres igen sikkert (opretter kun det, der mangler).
 */

defined( 'ABSPATH' ) || exit;

add_action( 'after_switch_theme', 'playform_setup_site' );

/**
 * Opdateringer efter en udrulning: kategorier, tekster, plugin-tabeller og URL-regler.
 *
 * Udrulningen (GitHub Actions) uploader filerne én ad gangen og lægger til sidst et nyt id i
 * wp-content/playform-deploy.txt. Først når id'et skifter, er alle filer på plads, og så kører vi
 * opdateringerne. (Tidligere brugte vi kun versionsnumre, men en sidevisning midt i uploaden kunne
 * så køre opdateringen med halvt gamle filer og markere den som færdig.)
 * Lokalt, uden id-fil, køres de, når PLAYFORM_THEME_VERSION ændres.
 */
add_action(
	'init',
	static function () {
		$file      = WP_CONTENT_DIR . '/playform-deploy.txt';
		$deploy_id = is_readable( $file ) ? trim( (string) file_get_contents( $file ) ) : ''; // phpcs:ignore
		$want      = $deploy_id !== '' ? $deploy_id : PLAYFORM_THEME_VERSION;
		if ( get_option( 'playform_content_version' ) === $want || get_transient( 'playform_upgrading' ) ) {
			return;
		}
		set_transient( 'playform_upgrading', 1, 5 * MINUTE_IN_SECONDS ); // kun én ad gangen
		@set_time_limit( 300 ); // phpcs:ignore
		playform_run_upgrades();
		$GLOBALS['pf_upgrade_ran'] = true;
		update_option( 'playform_content_version', $want, false );
		delete_transient( 'playform_upgrading' );
		playform_purge_everything(); // nye filer → tøm sidecachen, så besøgende ikke får gammel HTML
	},
	25
);

/**
 * Tømmer SiteGrounds sidecache (SiteGround Optimizer). Prøver alle kendte indgange og returnerer, hvad der blev brugt
 * ("none" = ingen fundet). Resultatet sendes som header ved udrulningens kald, så det kan ses i GitHub Actions.
 */
/** Sider, der kan ligge i SiteGrounds sidecache. 'terms' = forside + alle kategorisider (vigtigst), 'rest' = tilbudssider, guides og artikler. */
function playform_purge_urls( string $group ): array {
	$urls = [];
	if ( $group === 'terms' ) {
		$urls[] = home_url( '/' );
		foreach ( get_terms( [ 'taxonomy' => 'product_cat', 'hide_empty' => false ] ) as $t ) {
			$l = get_term_link( $t );
			if ( ! is_wp_error( $l ) ) {
				$urls[] = $l;
			}
		}
	} else {
		$urls = [ home_url( '/koebsguide/' ), home_url( '/viden/' ), home_url( '/vores-butikker/' ) ];
		foreach ( get_terms( [ 'taxonomy' => 'product_cat', 'hide_empty' => false ] ) as $t ) {
			$l = get_term_link( $t );
			if ( ! is_wp_error( $l ) ) {
				$urls[] = trailingslashit( $l ) . 'tilbud/';
			}
		}
		foreach ( get_posts( [ 'post_type' => [ 'post', 'page' ], 'post_status' => 'publish', 'posts_per_page' => 300, 'fields' => 'ids', 'orderby' => 'ID' ] ) as $pid ) {
			$urls[] = get_permalink( $pid );
		}
	}
	return array_values( array_unique( $urls ) );
}

/**
 * Tømmer SiteGrounds sidecache side for side (SiteGrounds samlede "tøm alt" rammer ikke undersider). SiteGround tager kun
 * imod ca. én tømning pr. sekund. $group: 'terms' (forside + kategorier, ca. 1 min) eller 'rest' (resten, via cron).
 */
function playform_purge_cache( string $group = 'terms' ): string {
	delete_transient( 'playform_front_mobile_cats' );
	@set_time_limit( 300 ); // phpcs:ignore
	$S = '\\SiteGround_Optimizer\\Supercacher\\Supercacher';
	if ( class_exists( $S ) && method_exists( $S, 'purge_cache_request' ) ) {
		$purge = static fn( string $u ) => $S::purge_cache_request( $u, false );
		$used  = 'Supercacher::purge_cache_request';
	} elseif ( function_exists( 'sg_cachepress_purge_cache' ) ) {
		$purge = static fn( string $u ) => sg_cachepress_purge_cache( $u );
		$used  = 'sg_cachepress_purge_cache(url)';
	} else {
		update_option( 'playform_last_purge', gmdate( 'c' ) . ' none', false );
		return 'none';
	}
	$urls = playform_purge_urls( $group );
	foreach ( $urls as $i => $u ) {
		if ( $i ) {
			usleep( 1100000 ); // SiteGround: højst én tømning pr. sekund
		}
		$purge( $u );
	}
	$used .= sprintf( ' | %s: %d sider', $group, count( $urls ) );
	update_option( 'playform_last_purge', gmdate( 'c' ) . ' ' . $used, false );
	return $used;
}

/** Forside + kategorier tømmes straks; resten (tilbudssider, guides, artikler) lægges i cron og tømmes inden for 15 minutter. */
function playform_purge_everything(): void {
	playform_purge_cache( 'terms' );
	if ( ! wp_next_scheduled( 'playform_purge_rest' ) ) {
		wp_schedule_single_event( time() + 5, 'playform_purge_rest' );
	}
}
add_action( 'playform_purge_rest', static fn() => playform_purge_cache( 'rest' ) );

// Diagnose: udrulningens kald til /wp-json/?pf_deploy=… får at vide, om opdateringerne kørte, og hvordan cachen blev tømt.
add_filter(
	'rest_post_dispatch',
	static function ( $response ) {
		if ( isset( $_GET['pf_deploy'] ) && $response instanceof WP_REST_Response ) { // phpcs:ignore
			$response->header( 'X-PF-Upgrade', ! empty( $GLOBALS['pf_upgrade_ran'] ) ? 'ran' : 'skipped' );
			$response->header( 'X-PF-Purge', (string) get_option( 'playform_last_purge', 'never' ) );
			$response->header( 'X-PF-Css', (string) filemtime( get_template_directory() . '/assets/css/main.css' ) );
			// Produkter i købsguides, der ikke kan købes: guide:EAN=status (status, lager, kategori).
			if ( function_exists( 'playform_root_posts' ) ) {
				global $wpdb;
				$bad = [];
				foreach ( playform_root_posts() as $slug => $pid ) {
					foreach ( playform_picks( (int) $pid ) as $pk ) {
						$ean = (string) ( $pk['ean'] ?? '' );
						$row = $wpdb->get_row( $wpdb->prepare( "SELECT p.ID, p.post_status FROM {$wpdb->posts} p JOIN {$wpdb->postmeta} m ON m.post_id = p.ID AND m.meta_key = '_pf_ean' WHERE p.post_type = 'product' AND m.meta_value = %s LIMIT 1", $ean ) );
						if ( ! $row ) {
							$offer = $wpdb->get_var( $wpdb->prepare( "SELECT CONCAT(shop, '/', product_id) FROM {$wpdb->prefix}pf_offers WHERE ean = %s LIMIT 1", $ean ) );
							$bad[] = "$slug:$ean=none(offer:" . ( $offer ?: '-' ) . ')';
						} elseif ( $row->post_status !== 'publish' || ! get_post_meta( $row->ID, '_pf_in_stock', true ) ) {
							$bad[] = "$slug:$ean={$row->ID}/{$row->post_status}/stock" . (int) get_post_meta( $row->ID, '_pf_in_stock', true ) . '/img' . ( get_post_meta( $row->ID, '_pf_image', true ) ? 1 : 0 ) . '/' . get_post_meta( $row->ID, '_pf_category', true );
						}
					}
				}
				$response->header( 'X-PF-Picks', $bad ? implode( ' ', $bad ) : 'ok' );
				$response->header( 'X-PF-Imageless', (string) get_option( 'playform_imageless_hidden', 'unset' ) );
				$last = (array) get_option( 'playform_feeds_last_run', [] );
				$sum  = [ 'started=' . ( $last['started'] ?? '-' ), 'finished=' . ( $last['finished'] ?? '-' ) ];
				foreach ( (array) ( $last['shops'] ?? [] ) as $k => $st ) {
					$sum[] = $k . ':' . (int) ( $st['read'] ?? 0 ) . 'r/' . (int) ( $st['new'] ?? 0 ) . 'n' . ( ! empty( $st['error'] ) ? '/ERR ' . substr( (string) $st['error'], 0, 80 ) : '' );
				}
				$response->header( 'X-PF-Lastrun', implode( ' ', $sum ) );
				$counts = $wpdb->get_results( "SELECT shop, COUNT(*) n FROM {$wpdb->prefix}pf_offers GROUP BY shop", ARRAY_A ) ?: [];
				$response->header( 'X-PF-Offers', implode( ' ', array_map( static fn( $r ) => $r['shop'] . '=' . $r['n'], $counts ) ) );
				$state = get_option( 'playform_import_state' );
				$response->header( 'X-PF-State', $state ? wp_json_encode( array_intersect_key( (array) $state, array_flip( [ 'shop', 'offset', 'queue', 'started', 'today', 'i' ] ) ) ) : 'none' );
				$response->header( 'X-PF-Running', get_transient( 'playform_feeds_running' ) ? 'yes' : 'no' );
			}
		}
		return $response;
	}
);

// Efter hver import har priser og lager ændret sig – tøm også cachen her.
add_action( 'playform_feeds_after_import', 'playform_purge_everything', 99 );


function playform_run_upgrades(): void {
	playform_update_legal_pages();
	playform_author_profile();
	playform_hide_imageless_products();
	// Importens tabeller og kategorier (kolonner, underkategorier, omsortering).
	if ( class_exists( '\Playform\Feeds\Install' ) ) {
		\Playform\Feeds\Install::activate();
	}
	playform_restructure_menu_categories();
	playform_seed_category_texts();
	playform_seed_articles();
	playform_fix_author_name();
	playform_seed_best();
	if ( function_exists( 'playform_best_check' ) && ! get_option( 'playform_best_checked' ) ) {
		playform_best_check( false ); // første rapport med det samme
	}
	playform_article_images();
	playform_guide_topics();
	if ( class_exists( '\Playform\Feeds\Sales' ) ) {
		\Playform\Feeds\Sales::refresh_all( current_time( 'Y-m-d' ) ); // kontrollerede førpriser
	}
	foreach ( [ 'playform_front_popular', 'playform_front_deals', 'playform_front_new', 'playform_price_ranges' ] as $t ) {
		delete_transient( $t );
	}
	// Indlæg (guides) ligger direkte under roden: /bedste-gasgrill/ (samme adresser som det gamle site).
	if ( get_option( 'permalink_structure' ) !== '/%postname%/' ) {
		update_option( 'permalink_structure', '/%postname%/' );
		global $wp_rewrite;
		$wp_rewrite->set_permalink_structure( '/%postname%/' );
	}
	// WooCommerce kræver et præfiks. Det bruges kun til gamle links, som omdirigeres (se permalinks.php).
	$perma = (array) get_option( 'woocommerce_permalinks', [] );
	if ( ( $perma['category_base'] ?? '' ) !== 'kategori' ) {
		$perma['category_base'] = 'kategori';
		update_option( 'woocommerce_permalinks', $perma );
	}
	flush_rewrite_rules( false );
}

/**
 * Opretter grupperingskategorierne (playform_virtual_groups()) og flytter de rigtige kategorier
 * ind under dem. Kitzhen har ingen grupper endnu. Kan køres igen sikkert.
 */
function playform_restructure_menu_categories(): void {
	foreach ( playform_virtual_groups() as $slug => $group ) {
		$parent = get_term_by( 'slug', $slug, 'product_cat' );
		if ( ! $parent ) {
			$result    = wp_insert_term( $group['label'], 'product_cat', [ 'slug' => $slug ] );
			$parent_id = is_wp_error( $result ) ? 0 : (int) $result['term_id'];
		} else {
			$parent_id = (int) $parent->term_id;
		}
		if ( ! $parent_id ) {
			continue;
		}
		foreach ( $group['children'] as $child_slug ) {
			$child = get_term_by( 'slug', $child_slug, 'product_cat' );
			if ( $child && (int) $child->parent !== $parent_id ) {
				wp_update_term( $child->term_id, 'product_cat', [ 'parent' => $parent_id ] );
			}
		}
	}
}

/** Retter en bestemt sætning på en fast side (kun hvis den står der uændret – redaktørens rettelser vinder). */
function playform_update_text( string $slug, string $old, string $new ): void {
	$page = get_page_by_path( $slug );
	if ( $page && str_contains( $page->post_content, $old ) ) {
		wp_update_post( [ 'ID' => $page->ID, 'post_content' => str_replace( $old, $new, $page->post_content ) ] );
	}
}

/**
 * Artikelbilleder (Pexels, fri licens) fra assets/img/articles/<slug>.jpg.
 * Sættes på indlæg uden billede eller med et for lille billede (< 1200 px) – et billede,
 * redaktøren selv har valgt i den rigtige størrelse, bliver stående.
 */
function playform_article_images(): void {
	$files = glob( get_template_directory() . '/assets/img/articles/*.jpg' ) ?: [];
	if ( ! $files ) {
		return;
	}
	require_once ABSPATH . 'wp-admin/includes/media.php';
	require_once ABSPATH . 'wp-admin/includes/file.php';
	require_once ABSPATH . 'wp-admin/includes/image.php';
	foreach ( $files as $src ) {
		$slug = basename( $src, '.jpg' );
		$post = get_posts( [ 'name' => $slug, 'post_type' => 'post', 'post_status' => 'any', 'numberposts' => 1 ] );
		if ( ! $post ) {
			continue;
		}
		$id    = $post[0]->ID;
		$thumb = get_post_thumbnail_id( $id );
		$hash  = md5_file( $src );
		if ( $thumb ) {
			if ( get_post_meta( $thumb, '_pf_auto_img', true ) === $hash ) {
				continue; // allerede dette billede
			}
			$meta = wp_get_attachment_metadata( $thumb );
			if ( (int) ( $meta['width'] ?? 0 ) >= 1200 && ! get_post_meta( $thumb, '_pf_auto_img', true ) ) {
				continue; // redaktørens eget billede i god størrelse
			}
		}
		$tmp = wp_tempnam( $slug . '.jpg' );
		copy( $src, $tmp );
		$att = media_handle_sideload( [ 'name' => $slug . '.jpg', 'tmp_name' => $tmp ], $id, get_the_title( $id ) );
		if ( is_wp_error( $att ) ) {
			@unlink( $tmp ); // phpcs:ignore
			continue;
		}
		update_post_meta( $att, '_pf_auto_img', $hash );
		update_post_meta( $att, '_wp_attachment_image_alt', get_the_title( $id ) );
		set_post_thumbnail( $id, $att );
	}
}

/** Emner under Viden & guides: /viden/emne/<emne>/ med en kort beskrivelse (kun hvis den er tom). */
function playform_guide_topics(): void {
	if ( get_option( 'category_base' ) !== 'viden/emne' ) {
		update_option( 'category_base', 'viden/emne' );
		// Kategoriens adresse er allerede registreret i denne forespørgsel – ret den, så flush_rewrite_rules() bruger den nye.
		global $wp_rewrite;
		$wp_rewrite->set_category_base( 'viden/emne' );
		if ( isset( $wp_rewrite->extra_permastructs['category'] ) ) {
			$wp_rewrite->extra_permastructs['category']['struct'] = 'viden/emne/%category%';
		}
	}
	$texts = [
		'Købsguides' => 'Vores bud på de bedste modeller, og hvad du skal kigge efter, før du køber gryder, knive, grill, kaffemaskiner og andet køkkenudstyr.',
		'Viden'      => 'Svar på de spørgsmål, der dukker op, når du bruger og passer på dit køkkenudstyr.',
	];
	foreach ( $texts as $name => $desc ) {
		$t = get_term_by( 'name', $name, 'category' );
		if ( $t && trim( $t->description ) === '' ) {
			wp_update_term( $t->term_id, 'category', [ 'description' => $desc ] );
		}
	}
}

function playform_setup_site(): void {
	update_option( 'timezone_string', 'Europe/Copenhagen' );
	// Guides ligger direkte under roden: /bedste-gasgrill/
	update_option( 'permalink_structure', '/%postname%/' );
	// WooCommerce' ordresporing sætter cookies (sourcebuster) – den bruges ikke, da der ikke handles på siden.
	update_option( 'woocommerce_feature_order_attribution_enabled', 'no' );
	update_option( 'date_format', 'j. F Y' );
	update_option( 'WPLANG', 'da_DK' );
	update_option( 'blogname', playform_site( 'name' ) );
	update_option( 'blogdescription', playform_site( 'tagline' ) );
	// Danske URL'er: /produkt/navn/. Kategorier får flade URL'er (se permalinks.php).
	$perma = (array) get_option( 'woocommerce_permalinks', [] );
	$perma['category_base'] = 'kategori';
	$perma['tag_base']      = 'emne';
	$perma['product_base']  = 'produkt';
	update_option( 'woocommerce_permalinks', $perma );

	$pages = [
		'forside'                => [ 'Forside', '' ],
		'produkter'              => [ 'Alle produkter', '' ],
		'viden'                  => [ 'Viden & guides', '' ],
		'vores-butikker'         => [ 'Vores butikker', playform_default_text( 'butikker' ) ],
		'saadan-tjener-vi-penge' => [ 'Sådan tjener vi penge', playform_default_text( 'penge' ) ],
		'privatlivspolitik'      => [ 'Privatlivspolitik', playform_legal_privacy() ],
		'cookies'                => [ 'Cookiepolitik', playform_legal_cookies() ],
	];
	foreach ( $pages as $slug => [ $title, $content ] ) {
		$existing = get_page_by_path( $slug );
		if ( $existing && str_starts_with( trim( $existing->post_content ), '<p>[' ) && $content ) {
			wp_update_post( [ 'ID' => $existing->ID, 'post_title' => $title, 'post_content' => $content ] );
		}
		if ( ! $existing ) {
			wp_insert_post( [ 'post_type' => 'page', 'post_status' => 'publish', 'post_name' => $slug, 'post_title' => $title, 'post_content' => $content ] );
		}
	}
	$front = get_page_by_path( 'forside' );
	$blog  = get_page_by_path( 'viden' );
	if ( $front && $blog ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $front->ID );
		update_option( 'page_for_posts', $blog->ID );
	}
	$shop = get_page_by_path( 'produkter' );
	if ( $shop ) {
		update_option( 'woocommerce_shop_page_id', $shop->ID );
	}
	playform_seed_category_texts();
	// WordPress' eksempelindhold fjernes.
	foreach ( [ 'hello-world' => 'post', 'sample-page' => 'page' ] as $slug => $type ) {
		$p = get_page_by_path( $slug, OBJECT, $type );
		if ( $p ) {
			wp_delete_post( $p->ID, true );
		}
	}
	flush_rewrite_rules();
}

function playform_default_text( string $which ): string {
	$name  = playform_site( 'name' );
	$niche = playform_site( 'niche' );
	if ( $which === 'butikker' ) {
		return "<p>$name samler $niche fra flere danske webshops ét sted. Vi henter produkter, priser og lagerstatus direkte fra butikkerne to gange i døgnet. Når du klikker på \"Gå til butik\", sendes du videre til butikken, hvor du handler som normalt.</p><h2>Butikker på $name</h2>";
	}
	return "<p>$name er gratis at bruge. Når du klikker videre til en butik og handler, får vi en lille provision fra butikken. Det koster ikke dig noget ekstra. Du kan altid sortere efter pris, tilbud eller nyeste.</p><p>Som tilbud viser vi kun butikkernes egne tilbud, og kun i højst 14 dage. Har vi selv fulgt prisen hos butikken i de 30 dage før tilbuddet, viser vi den laveste pris i perioden som førpris. Ellers viser vi butikkens egen førpris, tydeligt mærket som butikkens. Tjek altid den endelige pris hos butikken.</p>";
}

/**
 * Introtekst, SEO-tekst og FAQ til kategorierne og underkategorierne fra content/category-texts.php.
 * Tomme felter udfyldes; felter med tekst røres ikke (redaktøren kan rette dem under Produkter › Kategorier).
 */
function playform_seed_category_texts(): void {
	$texts = (array) require get_template_directory() . '/content/category-texts.php';
	foreach ( $texts as $slug => $t ) {
		$term = get_term_by( 'slug', $slug, 'product_cat' );
		if ( ! $term ) {
			continue;
		}
		if ( ! $term->description && ! empty( $t['intro'] ) ) {
			wp_update_term( $term->term_id, 'product_cat', [ 'description' => $t['intro'] ] );
		}
		if ( ! empty( $t['seo'] ) && ! get_term_meta( $term->term_id, 'pf_seo_text', true ) ) {
			update_term_meta( $term->term_id, 'pf_seo_text', $t['seo'] );
		}
		if ( ! empty( $t['faq'] ) && ! get_term_meta( $term->term_id, 'pf_faq', true ) ) {
			update_term_meta( $term->term_id, 'pf_faq', $t['faq'] );
		}
	}
}

/**
 * Opretter artiklerne i content/articles-*.php som KLADDER, hvis de ikke findes i forvejen
 * (uanset status). Eksisterende indlæg røres aldrig, så redaktørens rettelser bevares.
 */
function playform_seed_articles(): void {
	$articles = [];
	foreach ( glob( get_template_directory() . '/content/articles-*.php' ) ?: [] as $file ) {
		$articles = array_merge( $articles, (array) require $file );
	}
	if ( ! $articles ) {
		return;
	}
	require_once ABSPATH . 'wp-admin/includes/media.php';
	require_once ABSPATH . 'wp-admin/includes/file.php';
	require_once ABSPATH . 'wp-admin/includes/image.php';
	$author = get_users( [ 'role' => 'administrator', 'number' => 1, 'fields' => 'ID' ] );
	foreach ( $articles as $a ) {
		$exists = get_posts( [ 'name' => $a['slug'], 'post_type' => 'post', 'post_status' => 'any', 'numberposts' => 1, 'fields' => 'ids' ] );
		if ( $exists ) {
			continue;
		}
		$cat = term_exists( $a['cat'], 'category' ) ?: wp_insert_term( $a['cat'], 'category' );
		$id  = wp_insert_post(
			[
				'post_type'     => 'post',
				'post_status'   => $a['status'] ?? 'draft',
				'post_name'     => $a['slug'],
				'post_title'    => $a['title'],
				'post_excerpt'  => $a['excerpt'],
				'post_content'  => trim( $a['html'] ),
				'post_category' => is_wp_error( $cat ) ? [] : [ (int) ( is_array( $cat ) ? $cat['term_id'] : $cat ) ],
				'post_author'   => $author ? (int) $author[0] : 1,
			]
		);
		if ( ! $id || is_wp_error( $id ) ) {
			continue;
		}
		$src = get_template_directory() . '/assets/img/' . ( $a['img'] ?? '' );
		if ( ! empty( $a['img'] ) && is_readable( $src ) ) {
			$tmp = wp_tempnam( $a['img'] );
			copy( $src, $tmp );
			$att = media_handle_sideload( [ 'name' => $a['slug'] . '.jpg', 'tmp_name' => $tmp ], $id );
			if ( ! is_wp_error( $att ) ) {
				set_post_thumbnail( $id, $att );
			}
		}
	}
}

// Viden & guides: 1 fremhævet + 12 i gitteret pr. side.
add_action(
	'pre_get_posts',
	static function ( WP_Query $q ) {
		if ( ! is_admin() && $q->is_main_query() && ( $q->is_home() || $q->is_category() ) ) {
			$q->set( 'posts_per_page', 13 );
		}
	}
);

/**
 * Én adresse: https://<domæne> uden www. www-adressen og http sendes videre med 301.
 * Gælder kun på sitets eget domæne (Config::site()['domain']), så SiteGrounds midlertidige
 * adresse og localhost virker, indtil domænet peger på den nye hosting.
 */
add_action(
	'init',
	static function () {
		if ( ( defined( 'WP_CLI' ) && WP_CLI ) || wp_doing_cron() || 'cli' === PHP_SAPI ) {
			return;
		}
		$domain = playform_site( 'domain' );
		$host   = strtolower( (string) ( $_SERVER['HTTP_HOST'] ?? '' ) ); // phpcs:ignore
		$host   = preg_replace( '/:\d+$/', '', $host );
		if ( $domain === '' || ! in_array( $host, [ $domain, 'www.' . $domain ], true ) ) {
			return;
		}
		$https = is_ssl()
			|| 'https' === strtolower( (string) ( $_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '' ) ) // phpcs:ignore
			|| 'on' === strtolower( (string) ( $_SERVER['HTTP_X_FORWARDED_SSL'] ?? '' ) ); // phpcs:ignore
		if ( $domain !== $host || ! $https ) {
			wp_redirect( 'https://' . $domain . ( $_SERVER['REQUEST_URI'] ?? '/' ), 301 ); // phpcs:ignore
			exit;
		}
	},
	0
);

// Advarsel i administrationen, hvis siden står som skjult for søgemaskiner (fx før lanceringen).
add_action(
	'admin_notices',
	static function () {
		if ( '0' === (string) get_option( 'blog_public' ) && current_user_can( 'manage_options' ) ) {
			echo '<div class="notice notice-error"><p><b>' . esc_html( playform_site( 'name' ) ) . ' er skjult for Google.</b> Gå til Indstillinger → Læsning og fjern markeringen i "Frarådet søgemaskiner at indeksere dette websted", når siden skal lanceres.</p></div>';
		}
	}
);

/**
 * Produkter uden billede er typisk udgåede varer eller reservedele, hvis side hos butikken ofte er væk.
 * De skjules (kladde). Får de et billede, viser importen dem igen. Kører én gang.
 */
function playform_hide_imageless_products(): void {
	if ( get_option( 'playform_imageless_hidden' ) ) {
		return;
	}
	global $wpdb;
	$ids = $wpdb->get_col(
		"SELECT p.ID FROM {$wpdb->posts} p
		 LEFT JOIN {$wpdb->postmeta} m ON m.post_id = p.ID AND m.meta_key = '_pf_image'
		 WHERE p.post_type = 'product' AND p.post_status = 'publish' AND ( m.meta_value IS NULL OR m.meta_value = '' )"
	);
	foreach ( (array) $ids as $id ) {
		wp_update_post( [ 'ID' => (int) $id, 'post_status' => 'draft' ] );
	}
	update_option( 'playform_imageless_hidden', count( (array) $ids ), false );
}

/**
 * Favicon: SVG til moderne browsere, PNG (192 px, deler af 48) til Google og Android, Apple-ikon til iOS.
 * /favicon.ico (som mange browsere og crawlere beder om uden at læse siden) sendes videre til PNG'en.
 */
add_action(
	'wp_head',
	static function () {
		$u = get_template_directory_uri() . '/assets/img/';
		echo '<link rel="icon" href="' . esc_url( $u . 'favicon.svg' ) . '" type="image/svg+xml">' . "\n";
		echo '<link rel="icon" href="' . esc_url( $u . 'favicon-32.png' ) . '" type="image/png" sizes="32x32">' . "\n";
		echo '<link rel="icon" href="' . esc_url( $u . 'favicon-192.png' ) . '" type="image/png" sizes="192x192">' . "\n";
		echo '<link rel="apple-touch-icon" href="' . esc_url( $u . 'apple-touch-icon.png' ) . '">' . "\n";
	},
	2
);
add_action(
	'template_redirect',
	static function () {
		$path = wp_parse_url( $_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH ); // phpcs:ignore
		if ( '/favicon.ico' === $path ) {
			wp_safe_redirect( get_template_directory_uri() . '/assets/img/favicon-32.png', 301 );
			exit;
		}
	},
	0
);
