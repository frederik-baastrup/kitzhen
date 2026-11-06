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
			'verdict' => 'Elegant stempelkande på 1 liter i lakeret stål med håndtag i bøgetræ – en del af Steltons Emma-serie.',
			'why'     => <<<'HTML'
<p>Stelton Emma er stempelkanden til dig, der vil have en kaffekande, som er lige så pæn på bordet som i køkkenet. Den er tegnet af HolmbäckNordentoft og er lavet af lakeret rustfrit stål, mens håndtaget i bøgetræ giver et varmt, nordisk modspil til det blanke stål.</p>
<p>Med 1 liter brygger du kaffe til flere kopper på én gang – nok til morgenmaden, søndagsbesøget eller kaffen efter middagen. Du bestemmer selv styrken ved at justere mængden af kaffe og bryggetiden, og du slipper for filtre og kapsler. Har du andre dele fra Emma-serien, passer kanden fint ind i samlingen.</p>
<p>Kanden vejer kun 0,63 kg. Vask den i hånden med varmt vand og lidt sæbe, brug en flaskebørste indvendigt, og tør den af med en blød klud. Den tåler ikke opvaskemaskine.</p>
HTML,
			'good'    => [ 'Dig, der går op i nordisk design', 'Kaffe til flere', 'Dig med andre dele fra Emma-serien' ],
			'less'    => [ 'Dig, der vil kunne se kaffen under brygningen', 'Opvaskemaskinen' ],
		],
		[
			'ean'     => '4037571312238',
			'price'   => 351,
			'name'    => 'AdHoc French Press 1000 ml',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Stempelkande på 1 liter i glas, stål og silikone med filter, der kan skilles ad til rengøring.',
			'why'     => <<<'HTML'
<p>AdHoc French Press er til dig, der vil have masser af god kaffe uden at bruge mange penge. Kanden rummer 1 liter, så der er nok til hele morgenbordet, gæsterne eller de lange kaffepauser på hjemmekontoret.</p>
<p>French press-metoden lader kaffen trække i vandet, så den får en fyldig og aromatisk smag. Stemplet presser grumset effektivt ned i bunden, og den gennemsigtige glaskande gør det nemt at følge med i brygningen, så du rammer lige præcis den styrke, du kan lide. Kombinationen af glas, rustfrit stål og silikone i en rolig grå farve giver et moderne look.</p>
<p>Filteret kan skilles ad, så du nemt kan få alt grums ud. Vask kanden i hånden. Med 0,49 kg er den let at håndtere, også når den er fuld.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Kaffe til flere', 'Dig, der vil se kaffen trække' ],
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
