<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-panini-grill/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-panini-grill',
	'title'    => 'Panini grill: Vores bud på de 4 bedste',
	'excerpt'  => 'En panini grill giver sprøde, varme sandwich med grillstriber på få minutter. Her er vores bud på de 4 bedste panini grills fra de butikker, vi samarbejder med.',
	'more_cat' => 'paninigrill',
	'intro'    => <<<'HTML'
<p>En panini grill – eller kontaktgrill – griller fra begge sider, så paninien bliver sprød udenpå og varm indeni på få minutter. Mange kan foldes helt ud og bruges som bordgrill til kød, fisk og grøntsager.</p>
<p>Herunder er vores bud på de 4 bedste panini grills fra de butikker, vi samarbejder med.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5712087101864',
			'price'   => 618,
			'name'    => 'Hâws Møn Proff bord-/paninigrill',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Solid proffgrill på 2000 W i rustfrit stål med justerbar termostat og jævn varme.',
			'why'     => <<<'HTML'
<p>Hâws Møn Proff er til dig, der vil have en panini grill, der er bygget til at holde og kan klare mere end frokostbrød. Den er lavet til både hjemmet og cafébrug, og med 2000 W bliver den hurtigt varm og har kræfter til sprøde paninier, saftige kødstykker og friske grøntsager.</p>
<p>Pladerne fordeler varmen jævnt, så sandwichen bliver ensartet gylden fra kant til kant. Med den justerbare termostat vælger du selv, om der skal skarp stegeskorpe eller blid opvarmning til.</p>
<p>Non-stick-belægningen gør, at maden slipper let, og rengøringen klares hurtigt efter hver brug. Kabinettet i rustfrit stål med sort finish er robust og ser godt ud på køkkenbordet.</p>
HTML,
			'good'    => [ 'Paninier og grillmad', 'Familier og flittig brug', 'Dig, der vil styre temperaturen' ],
			'less'    => [ 'Små køkkener – den er solid og tung' ],
		],
		[
			'ean'     => '7391091867577',
			'price'   => 599,
			'name'    => 'Champion Paninigrill Pro 2-i-1',
			'role'    => 'Bedst 2-i-1',
			'reviews' => [],
			'verdict' => 'Fleksible hængsler, termostat fra ca. 160 til 205 °C og kan foldes ud til bordgrill.',
			'why'     => <<<'HTML'
<p>Champion Paninigrill Pro 2-i-1 er til dig, der vil kunne lave alt fra sprøde paninier til saftige burgere. De fleksible hængsler tilpasser låget til madens tykkelse, så både en tynd sandwich og et tykt stykke kød får kontakt med pladerne. Med 2000 W bliver den hurtigt varm, og de rillede plader på 29 × 23 cm giver flotte grillstriber.</p>
<p>Termostaten går fra cirka 160 til 205 °C, og lamper viser, når grillen er klar. Har du gæster, foldes den helt ud til 180 grader, så I får en bordgrill med to grillflader.</p>
<p>Non-stick-pladerne gør opvasken hurtig, og overskydende fedt løber ned i en beholder, der er nem at tømme. Håndtaget har Cool Touch, så du kan tage sikkert fat, og ledningen på 83 cm rulles op i bunden.</p>
HTML,
			'good'    => [ 'Burgere og paninier', 'Grill på bordet med gæster', 'Nem rengøring' ],
			'less'    => [ 'Dig, der vil have meget høj varme over 205 °C' ],
		],
		[
			'ean'     => '7350101117835',
			'price'   => 379,
			'name'    => 'NOD panini- og sandwichgrill',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Aftagelige plader, op til 230 °C og kan foldes ud til bordgrill – meget grill for pengene.',
			'why'     => <<<'HTML'
<p>NODs panini- og sandwichgrill er til dig, der elsker en god sandwich – tuna melt, grilled cheese, reuben eller din egen opfindelse. Hver plade har en grillflade på 29 × 23 cm med non-stick, og med 2000 W er den hurtigt klar.</p>
<p>Varmen styres med én knap fra 60–90 °C i bund til 230 °C i top, så du kan gå fra blid opvarmning til sprød skorpe. Grillen kan også åbnes 180 grader og lægges fladt på bordet, så gæsterne selv kan grille kød og grøntsager.</p>
<p>Rengøringen er nem, fordi grillpladerne kan tages af. Fedtet samles i en aftagelig bakke bagpå, som du bare tager af og vasker.</p>
HTML,
			'good'    => [ 'Frokost og sandwich', 'Lavt budget', 'Grill på bordet' ],
			'less'    => [ 'Pladerne tåler ikke opvaskemaskine', 'Kort ledning på 70 cm' ],
		],
		[
			'ean'     => '5708642068895',
			'price'   => 240,
			'name'    => 'OBH Nordica Onyx panini- og sandwichgrill',
			'role'    => 'Billigst',
			'reviews' => [],
			'verdict' => 'Enkel paninigrill med flydende non-stick-plader, drypbakke og lås, så den kan stå lodret i skabet.',
			'why'     => <<<'HTML'
<p>OBH Nordica Onyx er til dig, der bare vil have en sprød, varm sandwich eller panini uden at bruge mange penge. Fyld brødet med det, du har lyst til, luk låget, og lad grillen gøre resten.</p>
<p>Grillpladerne er flydende, så de lægger sig ned over brødet – uanset om det er en tynd toast eller en tyk ciabatta. Non-stick-belægningen gør, at osten ikke hænger fast, og drypbakken samler fedtet og mindsker røg og lugt.</p>
<p>Når du er færdig, låser du grillen og stiller den lodret i skabet, så den fylder minimalt. Den måler 23,9 × 28,8 cm, og OBH Nordica giver 2 års garanti.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Små køkkener – den kan stå lodret', 'Hurtige sandwich og paninier' ],
			'less'    => [ 'Dig, der vil have en grill med mange funktioner' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en panini grill</h2>
<h3>Riller eller flade plader?</h3>
<p>Riller giver grillstriber og lader fedtet løbe af. Flade plader er bedst til toast og æg.</p>
<h3>Flydende hængsel</h3>
<p>Et låg, der kan hæve sig, giver plads til tykke paniniier og burgere.</p>
<h3>Rengøring</h3>
<p>Aftagelige plader, der tåler opvaskemaskine, gør rengøringen meget nemmere.</p>
<p>Se alle <a href="/ovne-apparater/paninigrill/">paninigrills</a>, eller se guiden til <a href="/bedste-elektrisk-bordgrill/">elektriske bordgrills</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på en panini grill og et toastjern?', 'En panini grill har riflede plader og ofte et flydende låg, så den kan bruges til tykkere sandwich og grillmad.' ],
		[ 'Kan man grille kød på en panini grill?', 'Ja, bøffer, kylling og burgere griller fint fra begge sider.' ],
		[ 'Hvordan rengør man en panini grill?', 'Tør pladerne af med køkkenrulle, mens de er lune, eller tag dem af og vask dem, hvis de er aftagelige.' ],
	],
];
