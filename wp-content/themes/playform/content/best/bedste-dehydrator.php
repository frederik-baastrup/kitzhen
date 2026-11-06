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
			'verdict' => 'Seks stålriste, 35–90 °C og timer op til 24 timer – så du kan tørre alt fra urter til kød.',
			'why'     => <<<'HTML'
<p>Steba ED6 er dehydratoren til dig, der vil tørre meget og tørre det rigtigt. Den har seks indsatse i rustfrit stål, hver med en tørreflade på 37 × 30 cm, så der er god plads til æbleskiver, tomater, svampe og krydderurter på én gang.</p>
<p>Temperaturen stiller du elektronisk mellem 35 og 90 °C. Det giver et bredt spænd: lav varme til skrøbelige urter og høj varme, når du laver jerky. Timeren går fra 1 til 24 timer, så du kan sætte den i gang om aftenen og lade den slukke af sig selv. De 800 W sørger for, at den kan holde varmen stabil.</p>
<p>Ristene i stål er nemme at vaske og slipper for plast. Den måler 36,5 × 29 × 47,5 cm og vejer 7,2 kg, så den skal have en fast plads i køkkenet.</p>
HTML,
			'good'    => [ 'Dig, der tørrer store portioner', 'Både urter, frugt og kød', 'Dig, der vil undgå plastriste' ],
			'less'    => [ 'Små køkkener – den er 47,5 cm dyb og vejer 7,2 kg' ],
		],
		[
			'ean'     => '12315684',
			'price'   => 799,
			'name'    => 'NOD dehydrator med nonstick-net',
			'role'    => 'Bedst til frugtlæder',
			'reviews' => [],
			'verdict' => 'Kompakt med fem etager, digital skærm og hele seks nonstick-dele til bær, urter og frugtlæder.',
			'why'     => <<<'HTML'
<p>NOD dehydratoren er til dig, der vil lave frugtlæder, tørre bær og små urter uden at noget falder gennem ristene. Den er kompakt, så den passer ind i de fleste køkkener, og den har fem etager, som kan udvides til syv, når høsten er stor.</p>
<p>I kassen ligger et nonstick-net til små bær, et nonstick-ark til frugtlæder og yderligere fire nonstick-net. Det betyder, at selv svampeskiver og blade har noget at ligge på, og at intet hænger fast. Temperatur og tid stiller du på den digitale skærm, og motoren på 500 W sørger for en jævn luftcirkulation.</p>
<p>Et godt råd: Byt rundt på etagerne undervejs, især når den er fyldt helt op. Så bliver alt lige tørt.</p>
HTML,
			'good'    => [ 'Frugtlæder, bær og urter', 'Små køkkener', 'Dig, der vil kunne udvide til syv etager' ],
			'less'    => [ 'Etagerne skal byttes rundt for et jævnt resultat' ],
		],
		[
			'ean'     => '8712836318861',
			'price'   => 439,
			'name'    => 'Princess dehydrator',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Let og enkel tørreovn med seks niveauer og 40–70 °C – en nem start på at tørre selv.',
			'why'     => <<<'HTML'
<p>Princess' dehydrator er det nemme første skridt, hvis du vil prøve at tørre frugt, grøntsager og krydderurter selv. Den bevarer smagen i råvarerne, så æbler, tomater og urter fra haven kan holde langt ind i vinteren.</p>
<p>Med seks niveauer er der plads til en god portion ad gangen, og temperaturen justerer du mellem 40 og 70 °C – det spænd, de fleste frugter, grøntsager og urter skal tørres ved. De 350 W holder strømforbruget nede, selv når den kører mange timer.</p>
<p>Den måler 36,5 × 21,5 × 36,5 cm og vejer kun 2,88 kg, så den er let at flytte frem og stille i skabet igen, når den ikke er i brug.</p>
HTML,
			'good'    => [ 'Begyndere', 'Frugt, grønt og urter', 'Dig, der vil kunne gemme den væk' ],
			'less'    => [ 'Dig, der vil have mere end 70 °C', 'Meget store mængder ad gangen' ],
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
