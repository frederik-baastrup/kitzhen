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
<p>Instant er kendt for Instant Pot. Riskogeren har hele 8 tilberedningsfunktioner, og den er kompakt og kraftfuld. Med en dampindsats kan du lave ris og dampede grøntsager på samme tid.</p>
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
			'verdict' => 'Laver cremet risotto helt uden omrøring – og kan også sautere, dampe ris og slow cooke i 3,7 liter.',
			'why'     => <<<'HTML'
<p>Sage The Risotto Plus er til dig, der elsker risotto, men ikke gider stå ved komfuret og røre i en halv time. Maskinen klarer omrøringen selv, så du kan dække bord, lave salat eller hælde et glas vin op imens.</p>
<p>Den har fem faste programmer: risotto, sauté, dampede ris samt slow cook på lav og høj varme. Du kan altså svitse løg og ris i samme gryde, før risottoen går i gang, eller brune kød og lade en gryderet simre i timevis. Med 3,7 liter er der plads til familiemiddagen, og hold varm-funktionen sørger for, at maden er klar, når alle sidder ved bordet.</p>
<p>I kassen følger et rismål, en serveringsske og en kogesi i rustfrit stål til dampning. Gryden kan tages op og skylles under hanen. Sage giver 2 års garanti.</p>
HTML,
			'good'    => [ 'Risotto uden at stå og røre', 'Gryderetter og slow cooking', 'Familier' ],
			'less'    => [ 'Dig, der kun laver almindelige ris', 'Dig, der vil have udskudt start' ],
		],
		[
			'ean'     => '7044876021694',
			'price'   => 450,
			'name'    => 'Wilfa RC-10CD 1,8 liter',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Enkel og billig riskoger på 700 W med plads til 1,8 liter færdige ris og non-stick i bunden.',
			'why'     => <<<'HTML'
<p>Wilfa RC-10CD er til dig, der bare vil have løse, velkogte ris uden at holde øje med gryden. Du hælder ris og vand i, tænder, og riskogeren klarer arbejdet, mens du laver resten af aftensmaden.</p>
<p>Der er plads til 1,8 liter færdige ris, så du kan lave nok til hele familien eller have rester til madpakken dagen efter. Non-stick-belægningen i bunden gør, at risene ikke brænder fast, og de 700 W giver kræfter nok til hverdagens portioner.</p>
<p>Den enkle betjening gør den nem at bruge for alle i husstanden. Riskogeren fylder 28 x 28 cm og vejer 2,9 kg, så den er let at stille væk i skabet efter brug. Bemærk, at den ikke har en hold varm-funktion.</p>
HTML,
			'good'    => [ 'Dig, der vil have det enkelt', 'Lavt budget', 'Ris til hele familien' ],
			'less'    => [ 'Dig, der vil holde risene varme længe', 'Flere programmer' ],
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
