<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-panini-grill/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-panini-grill',
	'title'    => 'Panini grill: Vores bud på de 3 bedste',
	'excerpt'  => 'En panini grill giver sprøde, varme sandwich med grillstriber på få minutter. Her er vores bud på de 3 bedste panini grills fra danske butikker.',
	'more_cat' => 'paninigrill',
	'intro'    => <<<'HTML'
<p>En panini grill – eller kontaktgrill – griller fra begge sider, så paninien bliver sprød udenpå og varm indeni på få minutter. Mange kan foldes helt ud og bruges som bordgrill til kød, fisk og grøntsager.</p>
<p>Herunder er vores bud på de 3 bedste panini grills hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5712087101864',
			'price'   => 618,
			'name'    => 'Hâws Møn Proff bord-/paninigrill',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Kraftig panini- og bordgrill på 2000 W i rustfrit stål med sort finish.',
			'why'     => <<<'HTML'
<p>Hâws Møn Proff er en kraftfuld bord- og paninigrill med en effekt på 2000 watt og et robust design i rustfrit stål. Den kan bruges både til paninier og som bordgrill.</p>
HTML,
			'good'    => [ 'Paninier og grillmad', 'Familier' ],
			'less'    => [ 'Små køkkener' ],
		],
		[
			'ean'     => '7391091867577',
			'price'   => 599,
			'name'    => 'Champion Paninigrill Pro 2-i-1',
			'role'    => 'Bedst 2-i-1',
			'reviews' => [],
			'verdict' => 'Paninigrill og bordgrill i ét med non-stick plader – fra panini til burgere.',
			'why'     => <<<'HTML'
<p>Champion Paninigrill Pro kombinerer to funktioner i ét apparat, så du kan grille alt fra sprøde paninier til saftige burgere, og grillpladerne har non-stick.</p>
HTML,
			'good'    => [ 'Burgere og paninier', 'Nem rengøring' ],
			'less'    => [ 'Meget tykke sandwich' ],
		],
		[
			'ean'     => '7350101117835',
			'price'   => 379,
			'name'    => 'NOD panini- og sandwichgrill',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Enkel panini- og sandwichgrill til perfekt grillede sandwich.',
			'why'     => <<<'HTML'
<p>NODs panini- og sandwichgrill er det perfekte værktøj til nemt at lave grillede sandwich. Den er et godt valg, hvis du mest skal bruge den til frokost.</p>
HTML,
			'good'    => [ 'Frokost', 'Lavt budget' ],
			'less'    => [ 'Grillmad til aftensmad' ],
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
