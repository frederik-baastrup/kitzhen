<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-japanske-kokkekniv/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-japanske-kokkekniv',
	'title'    => 'Japansk kokkekniv: Vores bud på de 4 bedste',
	'excerpt'  => 'En japansk kokkekniv er tynd, hård og meget skarp. Her er vores bud på de 4 bedste japanske kokkeknive fra danske butikker – fra MAC til Miyabi og Kai Shun.',
	'more_cat' => 'kokkekniv',
	'intro'    => <<<'HTML'
<p>Japanske knive er lavet af hårdere stål end europæiske og slibes i en spidsere vinkel. Det gør dem ekstremt skarpe og præcise – perfekte til tynde skiver grønt, fisk og kød. Den klassiske japanske kokkekniv hedder gyuto; santoku og bunka er kortere alternativer med et bredere blad.</p>
<p>Herunder er vores bud på de 4 bedste japanske kokkeknive hos danske butikker lige nu. Leder du efter en mere robust europæisk kniv, så se vores guide til den <a href="/bedste-kokkekniv/">bedste kokkekniv</a>.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4901601406245',
			'price'   => 1209,
			'name'    => 'Kai Shun Classic kokkekniv 15 cm',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Klassisk Shun-kniv med blad i 32 lag rustfrit stål og en hård kerne af VG-MAX.',
			'why'     => <<<'HTML'
<p>Kai Shun Classic er en af de mest kendte japanske knivserier. Bladet er fremstillet i 32 lag rustfrit stål med en hård stålkerne af VG-MAX, en videreudvikling af VG-10. Med 15 cm er den kort og let at styre.</p>
HTML,
			'good'    => [ 'Præcist arbejde med grønt og fisk', 'Mindre hænder' ],
			'less'    => [ 'Store stykker kød og store grøntsager' ],
		],
		[
			'ean'     => '4009839308048',
			'price'   => 1725,
			'name'    => 'Miyabi 6000 MCT Gyutoh 24 cm',
			'role'    => 'Bedst lang kniv',
			'reviews' => [],
			'verdict' => 'Lang gyuto fra Miyabi med enorm hårdhed og skarphed.',
			'why'     => <<<'HTML'
<p>Miyabi laver japanske knive i Seki. 6000 MCT Gyutoh har en enorm hårdhed og skarphed, og du mærker forskellen, når du skærer, hakker eller fileterer. Med 24 cm er den god til store grøntsager og kød.</p>
HTML,
			'good'    => [ 'Store grøntsager og kød', 'Erfarne brugere' ],
			'less'    => [ 'Begyndere og små skærebrætter' ],
		],
		[
			'ean'     => '6971251080131',
			'price'   => 990,
			'name'    => 'Satake Ame Gyuto 21 cm',
			'role'    => 'Smukkest',
			'reviews' => [],
			'verdict' => 'Gyuto fra Satakes Ame-serie med blad inspireret af regn.',
			'why'     => <<<'HTML'
<p>Ame betyder regn på japansk, og knivene i Satakes Ame-kollektion er dekoreret med inspiration fra kraftigt regnvejr. Gyutoen på 21 cm er en klassisk japansk kokkekniv i en god allround-længde.</p>
HTML,
			'good'    => [ 'Allround-brug', 'Gaver' ],
			'less'    => [ 'Dig, der vil have det mest kendte mærke' ],
		],
		[
			'ean'     => '4950673107697',
			'price'   => 599,
			'name'    => 'MAC Black Fluorine kokkekniv 18 cm',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Japansk kniv i højkulstofstål med et ultratyndt blad på 2 mm og hårdhed 58–59 HRC.',
			'why'     => <<<'HTML'
<p>MAC Black Fluorine er en japansk stålkniv i højkulstofstål med krom, molybdæn og vanadium. Bladet har en hårdhed på 58–59 HRC og er kun 2 mm tyndt, håndtaget er i pakkatræ, og en fluorbelægning modvirker misfarvning. Til prisen er det en meget skarp kniv.</p>
HTML,
			'good'    => [ 'Dig, der vil prøve en japansk kniv', 'Præcisionsskæring' ],
			'less'    => [ 'Hårdt arbejde med ben og frosne varer' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en japansk kokkekniv</h2>
<h3>Gyuto, santoku eller bunka?</h3>
<p>En gyuto er den japanske udgave af kokkekniven – lang og spids til alt. En santoku er kortere med et bredere blad og god til grøntsager. En bunka minder om santokuen, men har en spidsere tip.</p>
<h3>Stål og hårdhed</h3>
<p>Japanske knive har typisk en hårdhed på 58–62 HRC. Hårdere stål holder skarpheden længere, men er mere skørt. Kulstofstål bliver meget skarpt, men kan ruste; rustfrit stål er nemmere at passe.</p>
<h3>Pleje og slibning</h3>
<p>Vask kniven i hånden og tør den med det samme. Brug et skærebræt i træ. Slib på en slibesten eller en sliber lavet til japanske knive – en almindelig knivsliber kan ødelægge æggen.</p>
<p>Se alle <a href="/knive-redskaber/japansk-kniv/">japanske knive</a> og <a href="/knive-redskaber/knivsliber/">slibesten</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på en japansk og en europæisk kniv?', 'Japanske knive er lavet af hårdere stål, har et tyndere blad og slibes i en spidsere vinkel. De er skarpere, men mere skrøbelige.' ],
		[ 'Kan japanske knive komme i opvaskemaskinen?', 'Nej. Vask dem i hånden og tør dem med det samme.' ],
		[ 'Hvad er en gyuto?', 'Den japanske udgave af kokkekniven – en lang, alsidig kniv til de fleste opgaver i køkkenet.' ],
	],
];
