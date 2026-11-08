<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/ostesaet/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-ostesaet',
	'title'    => 'Ostesæt: Vores bud på de 5 bedste',
	'excerpt'  => 'Et ostesæt med knive til hårde, bløde og smørbare oste gør ostebordet både pænere og nemmere. Her er vores bud på de 5 bedste ostesæt fra de butikker, vi samarbejder med.',
	'more_cat' => 'ostesaet',
	'intro'    => <<<'HTML'
<p>Et godt ostebord kræver forskellige knive: en kniv med huller til bløde oste, der ellers klistrer, en spids eller gaffelformet kniv til hårde oste, og en lille spatel til smøreoste. Et ostesæt samler dem i ét sæt, der også er en populær gave.</p>
<p>Herunder er vores bud på de 5 bedste ostesæt fra de butikker, vi samarbejder med. Nederst finder du en guide til, hvilken kniv der passer til hvilken ost.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5055202612532',
			'price'   => 1519,
			'name'    => 'Robert Welch Radford osteknivsæt 5 dele',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Komplet osteknivsæt i 18/10 rustfrit stål med 25 års garanti fra Robert Welch.',
			'why'     => <<<'HTML'
<p>Robert Welch er et britisk designmærke kendt for bestik. Radford-sættet indeholder alt, hvad du skal bruge til et ostebord, at knivene er i 18/10 rustfrit stål, og robert Welch giver 25 års garanti på bestikket.</p>
<p>Fem dele dækker alle typer ost, og garantien siger noget om, hvor længe sættet er bygget til at holde.</p>
HTML,
			'good'    => [ 'Gaver', 'Dig, der ofte har ostebord' ],
			'less'    => [ 'Små budgetter' ],
		],
		[
			'ean'     => '5712087100690',
			'price'   => 300,
			'name'    => 'Hâws Laguiole ostesæt 3 dele',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Tre osteknive i Laguiole-stil til hårde, bløde og smørbare oste – leveres i gaveæske.',
			'why'     => <<<'HTML'
<p>Hâws' ostesæt i Laguiole-stil indeholder tre forskellige osteknive, der dækker både hårde, bløde og smørbare oste, og leveres i gaveæske – perfekt til oste- eller tapasbordet.</p>
<p>Til prisen er det et godt sæt at give væk eller have i skuffen til julefrokosten.</p>
HTML,
			'good'    => [ 'Gaver', 'Tapas og ostebord' ],
			'less'    => [ 'Dig, der vil have et sæt til mange år' ],
		],
		[
			'ean'     => '7058677550710',
			'price'   => 379,
			'name'    => 'Hardanger Bestikk ostesæt 2 dele',
			'role'    => 'Bedst skandinavisk design',
			'reviews' => [],
			'verdict' => 'Ostesæt med perforeret kniv og ostekniv med delt spids, designet af Per Finne.',
			'why'     => <<<'HTML'
<p>Hardanger Bestikk er en norsk producent. Sættet består af en perforeret kniv og en glat ostekniv med bøjet og delt spids, og det er designet af Per Finne.</p>
<p>To knive er nok til de fleste oste: den perforerede til bløde oste og den med delt spids, der også kan bruges til at tage osten op med.</p>
HTML,
			'good'    => [ 'Skandinavisk borddækning', 'Dig, der vil have få, gode knive' ],
			'less'    => [ 'Smøreoste' ],
		],
		[
			'ean'     => '5722000300779',
			'price'   => 319,
			'name'    => 'Morsø Foresta ostesæt 3 dele',
			'role'    => 'Bedst med egetræsskaft',
			'reviews' => [],
			'verdict' => 'Tre osteknive i rustfrit stål med skafter i olieret eg, der får patina og bliver smukkere med årene.',
			'why'     => <<<'HTML'
<p>Morsø Foresta er til dig, der vil have naturmaterialer på ostebordet. Sættet består af tre osteknive, så du har en kniv til flere slags ost og ikke blander smagene.</p>
<p>Knivbladene er i rustfrit kvalitetsstål, og skafterne er i olieret eg. Træet udvikler patina, jo mere du bruger knivene, så sættet bliver smukkere med tiden – i stedet for at se slidt ud. Det varme træ passer fint til et ostebræt i træ og et nordisk dækket bord.</p>
<p>Skafter i træ har det bedst med opvask i hånden.</p>
HTML,
			'good'    => [ 'Nordisk borddækning', 'Gaver', 'Dig, der kan lide træ med patina' ],
			'less'    => [ 'Dig, der vil komme knivene i opvaskemaskinen' ],
		],
		[
			'ean'     => '8032732821884',
			'price'   => 149,
			'name'    => 'Legnoart Lattevivo ostesæt 3 dele',
			'role'    => 'Billigst',
			'reviews' => [],
			'verdict' => 'Tre osteknive i japansk stål med lyst pakkatræ – et pænt sæt til ostebordet til en lav pris.',
			'why'     => <<<'HTML'
<p>Legnoart Lattevivo er det billigste sæt i guiden, men du får stadig tre osteknive, der ser godt ud på serveringsbordet. Sættet er lavet til osteelskere og værter, der gerne vil have både funktion og et gennemført udtryk, når osten skal frem.</p>
<p>Knivbladene er i japansk stål, og skafterne er i lyst pakkatræ, der giver et lyst og venligt look. Det passer til både hverdagens ostebord og den store anretning med flere slags ost.</p>
<p>Til prisen er det også oplagt at købe ét sæt til dig selv og ét i værtindegave.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Værtindegaver', 'Lyse borddækninger' ],
			'less'    => [ 'Skafter i træ skal vaskes i hånden' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du et ostesæt</h2>
<h3>Hvilken kniv til hvilken ost?</h3>
<p>Bløde oste som brie og camembert skæres bedst med en kniv med huller i bladet, så osten ikke klistrer. Hårde oste som parmesan brækkes i stykker med en lille spids kniv. Halvfaste oste skæres med en almindelig ostekniv eller en ostehøvl. Smøreoste serveres med en lille spatel.</p>
<h3>Materiale</h3>
<p>Rustfrit stål er nemt at holde rent og holder i mange år. Skafter i træ er pæne, men skal vaskes i hånden.</p>
<h3>Ostebræt</h3>
<p>Mange ostesæt sælges sammen med et ostebræt. Ellers kan et skærebræt i træ eller bambus sagtens bruges – se vores guide til <a href="/bedste-bambus-skaerebraet/">skærebrætter i bambus</a>.</p>
<h3>Servering</h3>
<p>Tag osten ud af køleskabet en time før servering, så den får stuetemperatur og smager mere. Giv hver ost sin egen kniv, så smagene ikke blandes.</p>
<p>Se alle <a href="/servering/ostesaet/">ostesæt og ostebrætter</a>, og find vinen til i guiden til <a href="/bedste-roedvinsglas/">rødvinsglas</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er et ostesæt?', 'Et sæt med forskellige osteknive – typisk til bløde, hårde og smørbare oste – nogle gange med et ostebræt.' ],
		[ 'Hvorfor har osteknive huller?', 'Hullerne gør, at bløde oste ikke klistrer til bladet.' ],
		[ 'Kan osteknive komme i opvaskemaskinen?', 'Knive i rustfrit stål kan ofte, men tjek producentens anvisning. Skafter i træ skal vaskes i hånden.' ],
	],
];
