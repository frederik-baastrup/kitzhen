<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-dehydrator/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-dehydrator',
	'title'    => 'Dehydrator: Vores bud på de 3 bedste',
	'excerpt'  => 'En dehydrator tørrer frugt, grøntsager, krydderurter og kød ved lav varme. Her er vores bud på de 3 bedste dehydratorer fra danske butikker.',
	'more_cat' => 'dehydrator',
	'intro'    => <<<'HTML'
<p>En dehydrator – eller tørreovn – tørrer mad ved lav varme over mange timer. Du kan lave frugtchips, tørrede tomater, krydderurter, frugtlæder, beef jerky og mad til turen, og du kan udnytte høsten fra haven, så intet går til spilde.</p>
<p>Herunder er vores bud på de 3 bedste dehydratorer hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4011833302571',
			'price'   => 1149,
			'name'    => 'Steba ED6',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Dehydrator med 6 indsatse i rustfrit stål og justerbar temperatur.',
			'why'     => <<<'HTML'
<p>Steba ED6 er ifølge butikken lavet med 6 indsatse i rustfrit stål, hvor du kan lægge frugt, grøntsager og krydderurter, og temperaturen kan indstilles. Riste i stål er nemmere at holde rene end plast. Valget er vores vurdering ud fra butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Frugt, grønt og urter', 'Dig, der vil undgå plast' ],
			'less'    => [ 'Meget store mængder' ],
		],
		[
			'ean'     => '12315684',
			'price'   => 799,
			'name'    => 'NOD dehydrator med nonstick-net',
			'role'    => 'Bedst til frugtlæder',
			'reviews' => [],
			'verdict' => 'Kompakt dehydrator med fem etager og nonstick-net og -ark til små bær og frugtlæder.',
			'why'     => <<<'HTML'
<p>NODs dehydrator er ifølge butikken kraftfuld og kompakt med fem etager og to nonstick-tilbehør: et net til små bær og et ark til frugtlæder. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Frugtlæder og bær', 'Små køkkener' ],
			'less'    => [ 'Kød i store mængder' ],
		],
		[
			'ean'     => '8712836318861',
			'price'   => 439,
			'name'    => 'Princess dehydrator',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Enkel tørreovn til frugt, grøntsager og urter til en lav pris.',
			'why'     => <<<'HTML'
<p>Princess' tørreovn er ifølge butikken en praktisk boks til at tørre frugt, grøntsager og urter hurtigt og effektivt. Den er et godt sted at starte. Valget er vores vurdering ud fra pris.</p>
HTML,
			'good'    => [ 'Begyndere', 'Lavt budget' ],
			'less'    => [ 'Store mængder' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en dehydrator</h2>
<h3>Lodret eller vandret luftstrøm?</h3>
<p>Dehydratorer med blæser bagtil (skuffemodeller) tørrer mere jævnt, og du skal ikke bytte om på ristene. Stablemodeller med blæser i bunden er billigere.</p>
<h3>Temperatur og timer</h3>
<p>Frugt og grønt tørres ved ca. 50–60 °C, urter lavere og kød højere. En timer gør, at du ikke skal huske at slukke.</p>
<h3>Antal riste</h3>
<p>Flere riste giver mere plads. Riste i rustfrit stål holder længere og er nemme at gøre rene.</p>
<p>Se alle <a href="/ovne-apparater/dehydrator/">dehydratorer</a>, og gem de tørrede varer bedre med en <a href="/bedste-vakuumpakker/">vakuumpakker</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvor lang tid tager det at tørre frugt i en dehydrator?', 'Typisk 6–12 timer, afhængigt af frugten og tykkelsen.' ],
		[ 'Kan man tørre kød i en dehydrator?', 'Ja, fx beef jerky. Følg producentens anvisning for temperatur, og brug frisk kød.' ],
		[ 'Bruger en dehydrator meget strøm?', 'Den har lav effekt, men kører mange timer. Fyld den helt op for at udnytte strømmen bedst.' ],
	],
];
