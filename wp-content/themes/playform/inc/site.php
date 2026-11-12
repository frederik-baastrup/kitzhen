<?php
/**
 * Sitets profil: navn, domæne, e-mail, niche og firma. Kommer fra Config::site() i importpluginnet,
 * så Fitbase og Kitzhen kan dele samme tema. Brug playform_site( 'name' ) i stedet for at skrive navnet.
 */

defined( 'ABSPATH' ) || exit;

/**
 * @return array|string Hele profilen, eller ét felt, når $key er angivet.
 */
function playform_site( string $key = '' ) {
	static $site = null;
	if ( $site === null ) {
		$defaults = [
			'name'    => get_bloginfo( 'name' ),
			'domain'  => (string) wp_parse_url( home_url(), PHP_URL_HOST ),
			'email'   => '',
			'niche'   => '',
			'tagline' => get_bloginfo( 'description' ),
			'company' => '',
			'cvr'     => '',
			'address' => '',
			'owner'   => '',
			'accent'  => '#24FF00',
		];
		$site = class_exists( '\Playform\Feeds\Config' ) && method_exists( '\Playform\Feeds\Config', 'site' )
			? array_merge( $defaults, \Playform\Feeds\Config::site() )
			: $defaults;
	}
	return $key === '' ? $site : (string) ( $site[ $key ] ?? '' );
}

/** Prisintervaller (Config::price_bands()): nøgle => [ label, min, max ]. */
function playform_price_bands(): array {
	if ( class_exists( '\Playform\Feeds\Config' ) && method_exists( '\Playform\Feeds\Config', 'price_bands' ) ) {
		return \Playform\Feeds\Config::price_bands();
	}
	return [
		'0-1000'     => [ 'Under 1.000 kr', 0, 1000 ],
		'1000-3000'  => [ '1.000–3.000 kr', 1000, 3000 ],
		'3000-6000'  => [ '3.000–6.000 kr', 3000, 6000 ],
		'6000-10000' => [ '6.000–10.000 kr', 6000, 10000 ],
		'10000-'     => [ 'Over 10.000 kr', 10000, PHP_INT_MAX ],
	];
}

/**
 * Hovedkategorier, hvis foto (assets/img/cat-<slug>.jpg) er tjekket og viser netop det, kategorien handler om.
 * Kun de får billedheaderen; en kategori, der ikke står her, beholder den lyse top, så et foto aldrig ses på en
 * kategori, det ikke passer til. Nyt foto: læg det i assets/img/cat-<slug>.jpg (1600×1100, Pexels) og tilføj slug'en.
 * Ovne & apparater mangler et foto af en ovn (det nuværende viser en brødrister).
 */
function playform_category_hero_photos(): array {
	return [ 'grill', 'gryder-pander', 'kaffe-drikke', 'knive-redskaber', 'koekkenmaskiner', 'ovne-apparater', 'pizza-bagning', 'servering' ];
}

/**
 * Billedheaderens foto til en kategori (alle kategorier, ejerens ønske 12. nov. 2026): underkategorier bruger
 * hovedkategoriens foto. hero-<slug>.jpg vinder over cat-<slug>.jpg (ovne-apparater: kategorikortets brødrister
 * passer ikke som header). Tom streng = ingen billedheader.
 */
function playform_category_hero_image( WP_Term $term ): string {
	$root = $term;
	while ( $root->parent ) {
		$up = get_term( $root->parent, 'product_cat' );
		if ( ! $up instanceof WP_Term ) {
			break;
		}
		$root = $up;
	}
	if ( ! in_array( $root->slug, playform_category_hero_photos(), true ) ) {
		return '';
	}
	foreach ( [ 'hero-', 'cat-' ] as $prefix ) {
		$file = get_template_directory() . '/assets/img/' . $prefix . $root->slug . '.jpg';
		if ( is_readable( $file ) ) {
			return playform_asset( $prefix . $root->slug . '.jpg' ) . '?v=' . filemtime( $file );
		}
	}
	return '';
}
