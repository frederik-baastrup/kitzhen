<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-stempelkande/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-stempelkande',
	'date'     => '2023-09-13 08:17:13',
	'title'    => 'Stempelkande: Vores bud på de 5 bedste',
	'excerpt'  => 'En stempelkande brygger fyldig kaffe uden filter og strøm. Her er vores bud på de 5 bedste stempelkander fra de butikker, vi samarbejder med.',
	'more_cat' => 'stempelkande',
	'intro'    => <<<'HTML'
<p>Stempelkanden – eller french press – er den nemmeste måde at brygge god kaffe på. Groftmalet kaffe trækker i varmt vand i fire minutter, og så presser du stemplet ned. Kaffen bliver fyldig, fordi olierne fra bønnerne ikke bliver fanget i et papirfilter.</p>
<p>Herunder er vores bud på de 5 bedste stempelkander fra de butikker, vi samarbejder med.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '0628233300928',
			'price'   => 1199,
			'name'    => 'Espro P7 0,9 liter',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Vakuumisoleret stempelkande i børstet stål med Espros dobbelte mikrofilter – ren kaffe uden grums, der holder sig varm.',
			'why'     => <<<'HTML'
<p>Espro P7 er stempelkanden til dig, der er træt af grums i bunden af koppen og af glaskander, der går i stykker. Den brygger 0,9 liter kaffe eller te og er bygget i børstet rustfrit stål i stedet for glas, så den kan holde til at blive brugt hver dag.</p>
<p>Under låget sidder Espros patenterede dobbelte mikrofilter. Det holder både grums og de fine partikler tilbage, så kaffen bliver ren og klar i smagen. Væggene er dobbelte og vakuumisolerede, så kaffen holder sig varm længe – og kop nummer to smager lige så godt som den første.</p>
<p>Bruger du den til te, får du samme fordel: Bladene bliver i kanden og ikke i koppen. Kanden vejer 1,5 kg og ser flot ud på morgenbordet.</p>
HTML,
			'good'    => [ 'Kaffe uden grums', 'Dig, der drikker mere end én kop', 'Te og kaffe i samme kande' ],
			'less'    => [ 'Små budgetter', 'Du kan ikke se kaffen, mens den trækker' ],
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
		[
			'ean'     => '0699965608873',
			'price'   => 320,
			'name'    => 'Bodum Chambord 8 kopper',
			'role'    => 'Den klassiske',
			'reviews' => [],
			'verdict' => 'Originalen blandt stempelkander: 1 liter til 8 kopper, tidløst design og den tåler opvaskemaskine.',
			'why'     => <<<'HTML'
<p>Bodum Chambord er stempelkanden, som mange tænker på, når de hører ordet french press. Den er elsket for sin enkelhed og rene smag, og designet har rødder helt tilbage til før krigen. Den klassiske Chambord, du kender i dag, kom til i 1991, da Bodum købte Melior-Martin.</p>
<p>Kanden rummer 1 liter, hvilket giver 8 kopper kaffe – nok til hele morgenbordet eller kaffen efter middagen. Den er lavet af glas, rustfrit stål og plast, så du kan følge kaffen, mens den trækker. Ingen filtre, ingen kapsler og intet spild.</p>
<p>Den tåler opvaskemaskine, og den fås i flere farver – her i gul og grøn, der giver lidt farve på bordet.</p>
HTML,
			'good'    => [ 'Dig, der vil have klassikeren', 'Kaffe til flere', 'Nem opvask' ],
			'less'    => [ 'Dig, der vil holde kaffen varm længe', 'Glaskanden kan gå i stykker' ],
		],
		[
			'ean'     => '5057982084028',
			'price'   => 305.95,
			'name'    => 'La Cafetière stempelkande 8 kopper, dobbeltvægget stål',
			'role'    => 'Holder kaffen varm længst',
			'reviews' => [],
			'verdict' => 'Stempelkande til 8 kopper i dobbeltvægget rustfrit stål, der holder kaffen varm meget længere end glas.',
			'why'     => <<<'HTML'
<p>La Cafetière i dobbeltvægget stål er til dig, der brygger en hel kande og drikker den over lang tid. De dobbelte vægge i rustfrit stål holder den friskbryggede kaffe varm markant længere end en traditionel glaskande, så kop nummer tre er stadig varm.</p>
<p>Med plads til 8 kopper rækker den til hele familien, gæsterne eller en lang formiddag på hjemmekontoret. Stålet giver et stilrent og elegant udtryk på bordet, og du slipper for bekymringen om en glaskande, der kan gå i stykker.</p>
<p>Vil du have en kande, der holder på varmen, men ikke har brug for Espros dobbelte mikrofilter, er den et oplagt alternativ.</p>
HTML,
			'good'    => [ 'Dig, der drikker kaffen langsomt', 'Kaffe til flere', 'Dig, der vil undgå glas' ],
			'less'    => [ 'Du kan ikke se kaffen, mens den trækker' ],
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
