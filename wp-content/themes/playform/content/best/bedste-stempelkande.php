<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-stempelkande/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-stempelkande',
	'title'    => 'Stempelkande: Vores bud på de 3 bedste',
	'excerpt'  => 'En stempelkande brygger fyldig kaffe uden filter og strøm. Her er vores bud på de 3 bedste stempelkander fra danske butikker.',
	'more_cat' => 'stempelkande',
	'intro'    => <<<'HTML'
<p>Stempelkanden – eller french press – er den nemmeste måde at brygge god kaffe på. Groftmalet kaffe trækker i varmt vand i fire minutter, og så presser du stemplet ned. Kaffen bliver fyldig, fordi olierne fra bønnerne ikke bliver fanget i et papirfilter.</p>
<p>Herunder er vores bud på de 3 bedste stempelkander hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '0628233300928',
			'price'   => 1199,
			'name'    => 'Espro P7 0,9 liter',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Dobbeltvægget stempelkande i rustfrit stål, bygget som en tank – med Espros filter mod grums.',
			'why'     => <<<'HTML'
<p>Espro P7 er Espros bud på den ultimative måde at brygge kaffe og te på. I modsætning til de traditionelle stempelkander i glas er P7 bygget i rustfrit stål, der er vakuumisoleret, så kaffen holder sig varm. Espro er kendt for et dobbelt filter, der giver kaffe uden grums.</p>
HTML,
			'good'    => [ 'Kaffe uden grums', 'Kaffe, der skal holde sig varm' ],
			'less'    => [ 'Små budgetter' ],
		],
		[
			'ean'     => '5709846034570',
			'price'   => 490,
			'name'    => 'Stelton Emma 1 liter',
			'role'    => 'Bedst design',
			'reviews' => [],
			'verdict' => 'Stempelkande på 1 liter i lakeret rustfrit stål, designet af HolmbäckNordentoft.',
			'why'     => <<<'HTML'
<p>Stelton Emma er designet af HolmbäckNordentoft og rummer 1 liter, så den er velegnet til både hverdag og gæster. Den er lavet af lakeret rustfrit stål og passer til resten af Emma-serien.</p>
HTML,
			'good'    => [ 'Skandinavisk design', 'Kaffe til flere' ],
			'less'    => [ 'Dig, der vil se kaffen' ],
		],
		[
			'ean'     => '4037571312238',
			'price'   => 351,
			'name'    => 'AdHoc French Press 1000 ml',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Stempelkande på 1 liter til flere kopper ad gangen.',
			'why'     => <<<'HTML'
<p>AdHocs french press er udviklet til dig, der vil brygge flere kopper kaffe ad gangen uden at gå på kompromis.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Kaffe til flere' ],
			'less'    => [ 'Dig, der vil holde kaffen varm længe' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan brygger du kaffe i en stempelkande</h2>
<h3>Malingsgrad og mængde</h3>
<p>Brug groftmalet kaffe – fint malet kaffe giver grums og en bitter smag. Regn med ca. 60 g kaffe pr. liter vand.</p>
<h3>Tid og temperatur</h3>
<p>Brug vand lige under kogepunktet, rør kort, og lad kaffen trække i 4 minutter. Pres stemplet langsomt ned, og hæld kaffen op med det samme, så den ikke bliver bitter.</p>
<h3>Glas eller stål?</h3>
<p>Glas er klassisk og lader dig se kaffen. Dobbeltvægget stål holder kaffen varm og kan ikke knække.</p>
<p>Se alle <a href="/kaffe-drikke/stempelkande/">stempelkander</a>, og find kværnen i guiden til den bedste <a href="/bedste-kaffekvaern/">kaffekværn</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvor længe skal kaffen trække i en stempelkande?', 'Omkring 4 minutter.' ],
		[ 'Hvorfor er der grums i min stempelkandekaffe?', 'Kaffen er malet for fint. Brug groftmalet kaffe.' ],
		[ 'Kan man lave te i en stempelkande?', 'Ja, stempelkanden er god til løs te.' ],
	],
];
