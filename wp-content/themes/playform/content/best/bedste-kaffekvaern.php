<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-kaffekvaern/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-kaffekvaern',
	'title'    => 'Kaffekværn: Vores bud på de 3 bedste',
	'excerpt'  => 'Friskmalede bønner er det største løft, du kan give din kaffe. Her er vores bud på de 3 bedste kaffekværne fra danske butikker – elektriske og manuelle.',
	'more_cat' => 'kaffekvaern',
	'intro'    => <<<'HTML'
<p>Kaffe mister aroma meget hurtigt, når den er malet. Derfor er en kaffekværn den bedste investering, du kan gøre for din kaffe – uanset om du brygger filterkaffe, stempelkande, mokkakande eller espresso. Det vigtigste er, at kværnen maler ensartet, og at du kan indstille formalingen til din bryggemetode.</p>
<p>Herunder er vores bud på de 3 bedste kaffekværne hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8017709339883',
			'price'   => 2295,
			'name'    => 'Smeg CGF02 kaffekværn',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Elektrisk kaffekværn i Smeg-design med præcise indstillinger.',
			'why'
=> <<<'HTML'
<p>Smegs kaffekværn kombinerer ifølge butikken stilrent design med avanceret funktionalitet og præcise indstillinger, så du kan få det bedste ud af dine bønner. Den passer til andre Smeg-apparater. Valget er vores vurdering ud fra butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Filterkaffe og stempelkande', 'Design' ],
			'less'    => [ 'Dig, der kun brygger espresso på højt niveau' ],
		],
		[
			'ean'     => '4260113437490',
			'price'   => 1879,
			'name'    => 'Comandante MK4',
			'role'    => 'Bedst manuel',
			'reviews' => [],
			'verdict' => 'Robust håndkværn med kegleformet kværnhjul – en favorit blandt kaffenørder.',
			'why'     => <<<'HTML'
<p>Comandante er en tysk håndkværn. Butikken beskriver MK4 som en robust, hånddrevet kaffekværn med høj præstationsevne og et kværnhjul med avanceret design. En god håndkværn kan male lige så ensartet som en dyr elektrisk kværn og kan tages med på tur. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Filterkaffe og pour over', 'Rejser og camping' ],
			'less'    => [ 'Store mængder kaffe hver morgen' ],
		],
		[
			'ean'     => '4008146045370',
			'price'   => 437,
			'name'    => 'Severin KM 3880 Deluxe',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Stilren og brugervenlig kaffekværn med fuld kontrol over kværningen.',
			'why'     => <<<'HTML'
<p>Severin KM 3880 er ifølge butikken en stilren og brugervenlig kaffekværn til kaffeentusiaster, der ønsker fuld kontrol over kværningen – uanset om der brygges én kop eller en hel kande. Valget er vores vurdering ud fra pris og butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Filterkaffe' ],
			'less'    => [ 'Espresso' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en kaffekværn</h2>
<h3>Kværnhjul eller knive?</h3>
<p>En kværn med kværnhjul (burr) maler bønnerne ensartet. Billige kværne med roterende knive hakker bønnerne i forskellige størrelser og giver en ujævn kaffe. Vælg kværnhjul.</p>
<h3>Formaling til bryggemetoden</h3>
<p>Espresso kræver meget fin og præcis formaling. Mokkakande lidt grovere, filterkaffe mellem, og stempelkande groft. Tjek, at kværnen kan indstilles til det, du brygger.</p>
<h3>Elektrisk eller manuel?</h3>
<p>En elektrisk kværn er hurtig. En håndkværn er stille, billigere for samme kvalitet og kan tages med.</p>
<p>Se alle <a href="/kaffe-drikke/kaffekvaern/">kaffekværne</a>, og find bryggeren i guiderne til <a href="/bedste-espressomaskine/">espressomaskiner</a>, <a href="/bedste-mokkakande/">mokkakander</a> og <a href="/bedste-stempelkande/">stempelkander</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvorfor skal man male kaffen selv?', 'Malet kaffe mister aroma hurtigt. Friskmalede bønner giver en mere aromatisk kop.' ],
		[ 'Hvad er en burr-kværn?', 'En kværn med to kværnhjul, der knuser bønnerne til en ensartet størrelse.' ],
		[ 'Hvor fint skal kaffen males?', 'Fint til espresso, mellem til filterkaffe og groft til stempelkande.' ],
	],
];
