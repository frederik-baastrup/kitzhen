<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-riskoger/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-riskoger',
	'title'    => 'Riskoger: Vores bud på de 3 bedste',
	'excerpt'  => 'En riskoger giver perfekte ris hver gang – uden at koge over eller brænde på. Her er vores bud på de 3 bedste riskogere fra danske butikker.',
	'more_cat' => 'riskoger',
	'intro'    => <<<'HTML'
<p>En riskoger tager gætteriet ud af risene. Du kommer ris og vand i, trykker på knappen, og riskogeren slår selv over på varmhold, når risene er færdige. De koger ikke over, brænder ikke på og holder sig varme, til maden er klar. Mange kan også dampe grøntsager og fisk og lave grød, quinoa og bulgur.</p>
<p>Herunder er vores bud på de 3 bedste riskogere hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '0810102261106',
			'price'   => 900,
			'name'    => 'Instant 12 Cup riskoger og steamer',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Kompakt riskoger og damper på 5 liter med 8 tilberedningsfunktioner.',
			'why'     => <<<'HTML'
<p>Instant er kendt for Instant Pot. Butikken oplyser, at riskogeren har hele 8 tilberedningsfunktioner, og at den er kompakt og kraftfuld. Med en dampindsats kan du lave ris og dampede grøntsager på samme tid. Valget er vores vurdering ud fra butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Familier', 'Ris, quinoa og dampet mad' ],
			'less'    => [ 'Én person' ],
		],
		[
			'ean'     => '9312432029957',
			'price'   => 1190,
			'name'    => 'Sage The Risotto Plus',
			'role'    => 'Bedst til risotto',
			'reviews' => [],
			'verdict' => 'Riskoger fra Sage, der laver risotto uden at du skal stå og røre.',
			'why'     => <<<'HTML'
<p>Sage Risotto Plus er lavet til risotto. Butikken forklarer, at den gør det nemt at lave risotto helt uden at røre i den – normalt det mest tidskrævende ved retten. Den kan også bruges som almindelig riskoger. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Risotto', 'Dig, der vil have flere funktioner' ],
			'less'    => [ 'Dig, der kun laver almindelige ris' ],
		],
		[
			'ean'     => '7044876021694',
			'price'   => 450,
			'name'    => 'Wilfa RC-10CD 1,8 liter',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Enkel riskoger fra norske Wilfa med plads til 1,8 liter færdige ris og non-stick-belægning.',
			'why'     => <<<'HTML'
<p>Wilfas riskoger har ifølge butikken plads til 1,8 liter færdige ris og en non-stick-belægning. Butikken skriver, at der vist ikke findes en nemmere måde at lave ris på. Valget er vores vurdering ud fra pris og butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Dig, der vil have det enkelt', 'Lavt budget' ],
			'less'    => [ 'Mange funktioner' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en riskoger</h2>
<h3>Størrelse</h3>
<p>Kapaciteten angives som rå ris eller færdige ris – læs det med småt. 1–1,8 liter er nok til de fleste familier.</p>
<h3>Enkel eller med programmer?</h3>
<p>En enkel riskoger har én knap og varmhold. Dyrere modeller har programmer til brune ris, sushiris, grød og risotto og en timer, så risene er klar, når du kommer hjem.</p>
<h3>Indersiden</h3>
<p>En gryde med non-stick gør rengøringen nem. Brug træ- eller plastredskaber, så belægningen holder.</p>
<p>Se alle <a href="/ovne-apparater/riskoger/">riskogere</a>, eller se vores guide til <a href="/bedste-slow-cooker/">slow cookers</a>.</p>
HTML,
	'faq'      => [
		[ 'Skal man skylle ris før de kommer i riskogeren?', 'Det anbefales for de fleste ristyper, så risene ikke bliver klistrede.' ],
		[ 'Hvor meget vand skal der i en riskoger?', 'Følg markeringen i gryden eller producentens anvisning. Det afhænger af ristypen.' ],
		[ 'Kan man lave andet end ris i en riskoger?', 'Ja, fx quinoa, bulgur, grød og dampede grøntsager, afhængigt af modellen.' ],
	],
];
