<?php
// php check.php <repo> <offers.jsonl> – tjekker alle købsguides' valg mod de aktuelle tilbud.
// Udskriver JSON: pr. guide de valg, der ikke kan købes, med kategori og pris (til at finde en erstatning).
require __DIR__ . '/stubs.php';
[ , $repo, $offf ] = $argv;
playform_load_plugin( $repo );
use Playform\Feeds\Normalizer;
$by = [];
foreach ( file( $offf ) as $l ) { $o = json_decode( $l, true ); $by[ $o['ean'] ][] = $o; }
$res = [];
foreach ( glob( rtrim( $repo, '/' ) . '/wp-content/themes/playform/content/best/*.php' ) as $f ) {
	$g = include $f;
	if ( ! is_array( $g ) || empty( $g['picks'] ) ) { continue; }
	$bad = [];
	foreach ( $g['picks'] as $i => $p ) {
		$eans = array_filter( array_map( [ Normalizer::class, 'ean' ], array_map( 'strval', array_merge( (array) ( $p['eans'] ?? [] ), [ (string) ( $p['ean'] ?? '' ) ] ) ) ) );
		$hit  = false;
		foreach ( $eans as $e ) { if ( isset( $by[ $e ] ) ) { $hit = $by[ $e ][0]; break; } }
		if ( $hit ) { continue; }
		if ( ! empty( $p['slug'] ) && ! $eans ) { continue; } // kun slug – kan ikke tjekkes offline
		$bad[] = [ 'index' => $i, 'name' => $p['name'] ?? '', 'role' => $p['role'] ?? '', 'ean' => $p['ean'] ?? '', 'price' => $p['price'] ?? 0 ];
	}
	if ( $bad ) { $res[] = [ 'file' => $f, 'slug' => $g['slug'] ?? basename( $f, '.php' ), 'title' => $g['title'] ?? '', 'more_cat' => $g['more_cat'] ?? '', 'picks' => count( $g['picks'] ), 'gone' => $bad ]; }
}
echo json_encode( $res, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) . "\n";
fwrite( STDERR, count( $res ) . " guides med problemer\n" );
