<?php
// php -d memory_limit=3G dump.php <repo> <feeddir> <out.jsonl>
// Skriver alle tilbud, der ville blive vist på sitet: på lager, med billede, i en kategori.
require __DIR__ . '/stubs.php';
[ , $repo, $dir, $outf ] = $argv;
playform_load_plugin( $repo );
use Playform\Feeds\{Config, Classifier, FeedReader, Normalizer};
$out = fopen( $outf, 'w' ); $n = 0;
foreach ( Config::shops() as $key => $shop ) {
	$f = "$dir/$key.xml";
	if ( ! is_file( $f ) || filesize( $f ) < 100 ) { fwrite( STDERR, "mangler feed: $key\n" ); continue; }
	foreach ( FeedReader::read( $f ) as $row ) {
		$o = Normalizer::offer( $row, $key, $shop['name'] );
		if ( empty( $o['ean'] ) || empty( $o['in_stock'] ) || '' === ( $o['image'] ?? '' ) ) { continue; }
		$cat = Classifier::classify( $o );
		if ( ! $cat || in_array( $cat, [ 'exclude', 'ukategoriseret' ], true ) ) { continue; }
		fwrite( $out, json_encode( [ 'shop' => $shop['name'], 'ean' => $o['ean'], 'name' => $o['name'], 'brand' => $o['brand'] ?? '', 'price' => $o['price'] ?? 0, 'cat' => $cat, 'url' => $o['url'] ?? '', 'desc' => mb_substr( strip_tags( (string) ( $o['description'] ?? '' ) ), 0, 900 ) ], JSON_UNESCAPED_UNICODE ) . "\n" );
		$n++;
	}
}
echo "$n tilbud\n";
