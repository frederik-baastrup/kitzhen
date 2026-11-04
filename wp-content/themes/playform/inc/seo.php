<?php
/**
 * Grundlæggende SEO: titler, metabeskrivelser og noindex på filtrerede URL'er.
 * Bruger du senere Rank Math eller Yoast, slår temaet sine egne beskrivelser fra automatisk.
 */

defined( 'ABSPATH' ) || exit;

function playform_has_seo_plugin(): bool {
	return defined( 'RANK_MATH_VERSION' ) || defined( 'WPSEO_VERSION' );
}

/** Filtre, sortering og fritekst skaber uendeligt mange URL'er – de skal ikke i Google. */
add_filter(
	'wp_robots',
	static function ( array $robots ): array {
		if ( ! playform_is_catalog() ) {
			return $robots;
		}
		$noise = array_intersect( array_keys( $_GET ), array_merge( array_keys( playform_filter_groups() ), [ 'sortering', 'q', 'tilbud' ] ) ); // phpcs:ignore
		// En tilbudsside uden tilbud lige nu bliver stående, men skal ikke i Google som tom side.
		$empty_offers = playform_is_tilbud_page() && ! playform_catalog_state()['total'];
		if ( $noise || is_search() || $empty_offers ) {
			$robots['noindex'] = true;
			$robots['follow']  = true;
			unset( $robots['max-image-preview'] );
		}
		return $robots;
	}
);

add_filter(
	'document_title_parts',
	static function ( array $parts ): array {
		if ( playform_has_seo_plugin() ) {
			return $parts;
		}
		if ( is_front_page() ) {
			return [ 'title' => playform_site( 'name' ) . '.dk – Find det rigtige ' . playform_site( 'niche' ) ];
		}
		if ( function_exists( 'playform_current_campaign' ) && playform_current_campaign() ) {
			$c              = playform_current_campaign();
			$parts['title'] = playform_campaign_defs()[ $c ]['name'] . ' ' . wp_date( 'Y', playform_campaign_next_period( $c )[0]->getTimestamp() ) . ' – tilbud på ' . playform_site( 'niche' );
		} elseif ( playform_is_tilbud_page() ) {
			$t              = get_queried_object();
			$parts['title'] = $t instanceof WP_Term ? 'Tilbud på ' . mb_strtolower( playform_cat_label( $t ) ) . ' – aktuelle tilbud fra danske shops' : 'Tilbud på ' . playform_site( 'niche' ) . ' – aktuelle tilbud fra danske shops';
		} elseif ( is_tax( 'product_cat' ) ) {
			$parts['title'] = 'Køb ' . mb_strtolower( single_term_title( '', false ) ) . ' – stort udvalg fra danske shops';
		} elseif ( is_singular( 'product' ) ) {
			$parts['title'] = get_the_title() . ' – se pris';
		}
		$parts['site'] = playform_site( 'name' );
		unset( $parts['tagline'] );
		return $parts;
	}
);
add_filter( 'document_title_separator', static fn() => '|' );

add_action(
	'wp_head',
	static function () {
		if ( playform_has_seo_plugin() ) {
			return;
		}
		$desc = '';
		if ( is_front_page() ) {
			$desc = 'Find gryder, knive, grill, kaffemaskiner og andet køkkenudstyr fra danske webshops ét sted. Sammenlign priser, se tilbud og læs vores købsguides.';
		} elseif ( function_exists( 'playform_current_campaign' ) && playform_current_campaign() ) {
			$desc = playform_campaign_page_text( playform_current_campaign() )['intro'];
		} elseif ( playform_is_tilbud_page() ) {
			$t    = get_queried_object();
			$desc = sprintf( 'Se %s, som danske webshops har sat på tilbud lige nu. Vi samler butikkernes egne tilbud ét sted, og du handler direkte hos butikken.', $t instanceof WP_Term ? mb_strtolower( playform_cat_label( $t ) ) : playform_site( 'niche' ) );
		} elseif ( is_tax( 'product_cat' ) ) {
			$desc = wp_strip_all_tags( term_description() );
		} elseif ( is_singular( 'product' ) ) {
			$id   = get_the_ID();
			$p    = wc_get_product( $id );
			$shop = playform_shop_name( (string) get_post_meta( $id, '_pf_best_shop', true ) );
			$desc = $p ? sprintf( '%s til %s hos %s. Se pris, lagerstatus og prishistorik på %s.', $p->get_name(), playform_kr( (float) $p->get_price() ), $shop, playform_site( 'name' ) ) : '';
		}
		if ( $desc ) {
			echo '<meta name="description" content="' . esc_attr( mb_substr( $desc, 0, 160 ) ) . '">' . "\n";
		}
		if ( is_tax( 'product_cat' ) && ! array_intersect( array_keys( $_GET ), array_keys( playform_filter_groups() ) ) ) { // phpcs:ignore
			$paged = max( 1, (int) get_query_var( 'paged' ) );
			$base  = playform_is_tilbud_page() ? playform_tilbud_url( get_queried_object() ) : get_term_link( get_queried_object() );
			echo '<link rel="canonical" href="' . esc_url( $paged > 1 ? get_pagenum_link( $paged ) : $base ) . '">' . "\n";
		}
	},
	2
);
