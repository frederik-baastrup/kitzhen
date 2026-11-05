<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-isterningmaskine/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-isterningmaskine',
	'title'    => 'Isterningmaskine: Vores bud på de 3 bedste',
	'excerpt'  => 'En isterningmaskine laver isterninger på få minutter – uden plads i fryseren. Her er vores bud på de 3 bedste isterningmaskiner fra danske butikker.',
	'more_cat' => 'isterningmaskine',
	'intro'    => <<<'HTML'
<p>En isterningmaskine laver isterninger på få minutter, så du aldrig løber tør til fest, sommerdag eller cocktails. Den skal ikke kobles til vand – du fylder bare tanken op – og den fylder ikke i fryseren.</p>
<p>Herunder er vores bud på de 3 bedste isterningmaskiner hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7044876033642',
			'price'   => 1490,
			'name'    => 'Wilfa ICM1-600 Glacier',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Kompakt isterningmaskine i matsort, der laver 12 kg is på 24 timer.',
			'why'     => <<<'HTML'
<p>Wilfa Glacier kan lave hele 12 kg is på 24 timer og måler kun 20,6 × 26,8 × 28,2 cm, så den kan stå diskret på køkkenbordet.</p>
HTML,
			'good'    => [ 'Køkkenbordet', 'Design' ],
			'less'    => [ 'Store fester alene' ],
		],
		[
			'ean'     => '4038437033014',
			'price'   => 969,
			'name'    => 'Caso IceMaster PRO',
			'role'    => 'Hurtigst',
			'reviews' => [],
			'verdict' => 'Isterningmaskine, der laver 500 g isterninger i timen – nye på 6–13 minutter.',
			'why'     => <<<'HTML'
<p>Caso IceMaster PRO laver 500 gram isterninger i timen, og løber du tør, tager det kun 6–13 minutter at lave flere.</p>
HTML,
			'good'    => [ 'Fester og sommer' ],
			'less'    => [ 'Små køkkener' ],
		],
		[
			'ean'     => '7350101118047',
			'price'   => 599,
			'name'    => 'NOD isterningmaskine',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Kompakt isterningmaskine: op til 12 kg is på 24 timer og 8 isterninger på 6–8 minutter.',
			'why'     => <<<'HTML'
<p>NODs isterningmaskine producerer op til 12 kg is på 24 timer, og du har 8 isterninger klar på 6–8 minutter. Den er kompakt nok til at tage med i sommerhuset eller campingvognen.</p>
HTML,
			'good'    => [ 'Sommerhus og camping', 'Lavt budget' ],
			'less'    => [ 'Dig, der vil have et særligt design' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en isterningmaskine</h2>
<h3>Kapacitet og hastighed</h3>
<p>Se på, hvor mange kilo is maskinen laver på et døgn, og hvor hurtigt den første portion er klar. 10–12 kg pr. døgn er rigeligt til de fleste.</p>
<h3>Isen smelter igen</h3>
<p>De fleste isterningmaskiner fryser ikke isen, de laver den. Isen i kurven smelter langsomt og bliver til vand, der bruges igen. Kom isen i fryseren, hvis du vil gemme den.</p>
<h3>Rengøring</h3>
<p>Tøm vandtanken, når maskinen ikke bruges, og rengør den jævnligt, så der ikke kommer kalk og bakterier.</p>
<p>Se alle <a href="/kaffe-drikke/isterningmaskine/">isterningmaskiner</a>, og hold drikkene kolde med et <a href="/bedste-koeleskab-til-drikkevarer/">køleskab til drikkevarer</a>.</p>
HTML,
	'faq'      => [
		[ 'Skal en isterningmaskine kobles til vand?', 'Nej, de fleste til hjemmet har en vandtank, du fylder selv.' ],
		[ 'Hvorfor smelter isen i isterningmaskinen?', 'Fordi den ikke er en fryser. Smeltevandet løber tilbage og bliver brugt til nye isterninger.' ],
		[ 'Hvor hurtigt laver en isterningmaskine is?', 'Typisk 6–13 minutter for den første portion.' ],
	],
];
