<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-toendekoeler/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-toendekoeler',
	'title'    => 'Tøndekøler: Vores bud på de 2 bedste',
	'excerpt'  => 'En tøndekøler eller party cooler holder øl og sodavand kolde lige der, hvor festen er. Her er de 2 tøndekølere, vi kan anbefale fra danske butikker lige nu.',
	'more_cat' => 'toendekoeler',
	'intro'    => <<<'HTML'
<p>En tøndekøler – eller party cooler – er et lille køleskab formet som en tønde eller kasse, der kan stå i stuen, udestuen, på terrassen eller i hobbyrummet. Du slipper for at gå frem og tilbage til køleskabet, og drikkene er kolde hele aftenen.</p>
<p>Herunder er de to party coolers, vi kan anbefale hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7350101118276',
			'price'   => 2690,
			'name'    => 'NOD Party Cooler 50 liter',
			'role'    => 'Bedst til fest',
			'reviews' => [],
			'verdict' => 'Stor og støjsvag party cooler på 50 liter (43 dB).',
			'why'     => <<<'HTML'
<p>NOD Party Cooler 50 liter er ifølge butikken praktisk, stilren og støjsvag med 43 dB, og den holder drikkevarer og andre varer kolde lige der, hvor du har brug for det. 50 liter er nok til en rigtig fest. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Fester og terrassen', 'Øl og sodavand i dåser' ],
			'less'    => [ 'Langtidsopbevaring af vin' ],
		],
		[
			'ean'     => '7350101118085',
			'price'   => 1990,
			'name'    => 'NOD Party Cooler 30 liter',
			'role'    => 'Bedst kompakt',
			'reviews' => [],
			'verdict' => 'Kompakt party cooler på 30 liter – lige så støjsvag.',
			'why'     => <<<'HTML'
<p>NOD Party Cooler 30 liter er ifølge butikken en kompakt, støjsvag (43 dB) og stilren køler til drikkevarer og lettere madvarer. Den passer bedre i stuen og på mindre altaner. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Stuen og små altaner' ],
			'less'    => [ 'Store fester' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en tøndekøler</h2>
<h3>Størrelse</h3>
<p>30 liter rækker til en hyggeaften, 50 liter til en fest.</p>
<h3>Støj</h3>
<p>Skal køleren stå i stuen, så kig efter støjniveauet i dB.</p>
<h3>Ude og inde</h3>
<p>Tjek, om køleren må stå udendørs, og stil den i skygge, så den ikke skal arbejde for hårdt.</p>
<p>Se også vores guide til <a href="/bedste-koeleskab-til-drikkevarer/">køleskab til drikkevarer</a> og <a href="/bedste-isterningmaskine/">isterningmaskiner</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er en tøndekøler?', 'Et lille køleskab til drikkevarer, ofte formet som en tønde, der kan stå, hvor festen er.' ],
		[ 'Kan en tøndekøler stå udenfor?', 'Det afhænger af modellen. Tjek producentens anvisning, og stil den i skygge.' ],
		[ 'Larmer en party cooler?', 'De bedste er støjsvage – omkring 40–45 dB.' ],
	],
];
