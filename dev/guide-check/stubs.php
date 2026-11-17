<?php
// Minimale WordPress-stubs, så plugin-klasserne kan køres uden WordPress.
namespace Playform\Feeds {
	function get_option( $k, $d = false ) { return $d; }
	function wp_parse_url( $u, $c = -1 ) { return parse_url( $u, $c ); }
	function wp_strip_all_tags( $s ) { return strip_tags( (string) $s ); }
	function esc_url_raw( $s ) { return $s; }
	function sanitize_text_field( $s ) { return trim( strip_tags( (string) $s ) ); }
	function apply_filters( $h, $v ) { return $v; }
	function sanitize_title( $s ) { return strtolower( preg_replace( '/[^a-z0-9]+/i', '-', (string) $s ) ); }
	function remove_accents( $s ) { return $s; }
	function wp_json_encode( $v, $f = 0 ) { return json_encode( $v, $f ); }
}
namespace {
	if ( ! defined( 'ABSPATH' ) ) { define( 'ABSPATH', '/' ); }
	function playform_load_plugin( string $repo ): void {
		$src = rtrim( $repo, '/' ) . '/wp-content/plugins/playform-feeds/src';
		foreach ( [ 'Config', 'Classifier', 'FeedReader', 'Normalizer' ] as $c ) {
			require_once "$src/$c.php";
		}
	}
}
