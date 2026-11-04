<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-bagestaal/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-bagestaal',
	'title'    => 'Bagestål: Vores bud på de 3 bedste',
	'excerpt'  => 'Et bagestål giver sprøde pizzaer og brød med skorpe i en almindelig ovn – og knækker ikke som en pizzasten. Her er vores bud på de 3 bedste.',
	'more_cat' => 'pizzasten',
	'intro'    => <<<'HTML'
<p>Et bagestål – eller pizzastål – er en tyk stålplade, du lægger i ovnen. Stål leder varmen hurtigere end sten, så pizzabunden bliver sprød, og brødet får en flot skorpe, selvom en almindelig ovn ikke bliver lige så varm som en pizzaovn. Og i modsætning til en pizzasten kan stålet ikke knække.</p>
<p>Herunder er vores bud på de 3 bedste bagestål hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7350100570020',
			'price'   => 629,
			'name'    => 'Gourmetstål Classic pizzastål',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Pizzastål, der ikke knækker ved store temperaturudsving – og som ifølge butikken vejer 9 kg.',
			'why'     => <<<'HTML'
<p>Gourmetstål Classic fungerer som en pizzasten, bare af stål. Butikken forklarer, at stålet ikke knækker ved store temperaturudsving, og at pladen vejer 9 kg. Vægten er en fordel: jo mere stål, jo mere varme til bunden. Valget er vores vurdering ud fra butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Pizza og brød i ovnen', 'Grill' ],
			'less'    => [ 'Dig, der skal løfte den ofte' ],
		],
		[
			'ean'     => '7350101311721',
			'price'   => 439,
			'name'    => 'Kockums Jernverk bage-/pizzastål 35 cm',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Bagestål i 6 mm kulstofstål fra SSAB, fremstillet i Sverige.',
			'why'     => <<<'HTML'
<p>Kockums Jernverks bagestål fremstilles ifølge butikken i Sverige af 6 mm kulstofstål fra SSAB, og stålet holder optimalt på varmen, så både pizza og brød får skorpe og krumme. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Brød med skorpe', 'Lavt budget' ],
			'less'    => [ 'Store pizzaer over 35 cm' ],
		],
		[
			'ean'     => '7350100570150',
			'price'   => 450,
			'name'    => 'Gourmetstål rundt pizzastål 30 cm',
			'role'    => 'Bedst til grill og små ovne',
			'reviews' => [],
			'verdict' => 'Rundt pizzastål på 30 cm, der passer i mindre ovne og på grillen.',
			'why'     => <<<'HTML'
<p>Gourmetståls runde pizzastål er inspireret af den klassiske pizzasten, og butikken fremhæver, at du ikke skal være nervøs for, at det knækker. Den runde form passer godt på grillen og i mindre ovne. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Grill og kamado', 'Små ovne' ],
			'less'    => [ 'Brød og store pizzaer' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan bruger du et bagestål</h2>
<h3>Varm det godt op</h3>
<p>Læg stålet på den øverste eller næstøverste rille, og varm ovnen op på maks. i mindst 45 minutter. Stålet skal være helt gennemvarmt.</p>
<h3>Tykkelse</h3>
<p>Et tykkere stål holder mere varme, så du kan bage flere pizzaer i træk. 6–10 mm er almindeligt til hjemmet.</p>
<h3>Pleje</h3>
<p>Kulstofstål kan ruste. Tør det efter brug og giv det et tyndt lag olie.</p>
<p>Se alle <a href="/pizza-bagning/pizzasten/">pizzasten og bagestål</a>, eller se guiderne til <a href="/bedste-pizzaovn/">pizzaovne</a> og <a href="/bedste-pizzaovn-til-grill/">pizza på grillen</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på et bagestål og en pizzasten?', 'Stål leder varmen hurtigere og kan ikke knække. En pizzasten suger fugt fra dejen.' ],
		[ 'Hvor længe skal et bagestål varmes op?', 'Mindst 45 minutter ved ovnens højeste temperatur.' ],
		[ 'Kan man bage brød på et bagestål?', 'Ja, det giver en flot skorpe på både brød og boller.' ],
	],
];
