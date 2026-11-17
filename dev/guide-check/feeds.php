<?php
// php feeds.php <repo> <feeddir> – henter alle shops' Partner-ads-feeds (parallelt med curl).
require __DIR__ . '/stubs.php';
[ , $repo, $dir ] = $argv;
playform_load_plugin( $repo );
@mkdir( $dir, 0777, true );
$mh = curl_multi_init(); $hs = [];
foreach ( \Playform\Feeds\Config::shops() as $key => $shop ) {
	if ( empty( $shop['url'] ) ) { continue; }
	$fp = fopen( "$dir/$key.xml", 'w' );
	$ch = curl_init( $shop['url'] );
	curl_setopt_array( $ch, [ CURLOPT_FILE => $fp, CURLOPT_TIMEOUT => 600, CURLOPT_FOLLOWLOCATION => true ] );
	curl_multi_add_handle( $mh, $ch ); $hs[ $key ] = [ $ch, $fp ];
}
do { curl_multi_exec( $mh, $run ); curl_multi_select( $mh ); } while ( $run );
foreach ( $hs as $key => [ $ch, $fp ] ) { fclose( $fp ); echo $key . ' ' . filesize( "$dir/$key.xml" ) . "\n"; }
