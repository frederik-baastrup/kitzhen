<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-pastamaskine/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-pastamaskine',
	'title'    => 'Pastamaskine: Vores bud på de 3 bedste',
	'excerpt'  => 'Med en pastamaskine laver du frisk pasta som i Italien. Her er vores bud på de 3 bedste pastamaskiner fra danske butikker – manuel, med motor og elektrisk.',
	'more_cat' => 'pastamaskine',
	'intro'    => <<<'HTML'
<p>Frisk pasta smager anderledes end tørret – blødere, mere æggende og med en dejlig bid. Med en pastamaskine ruller du dejen tynd og skærer den i tagliatelle, spaghetti eller plader til lasagne og ravioli. Dejen er bare mel, æg og lidt salt.</p>
<p>Herunder er vores bud på de 3 bedste pastamaskiner hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8000011010083',
			'price'   => 929,
			'name'    => 'Marcato Atlas 150+',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Den klassiske italienske pastamaskine med håndsving – fuld kontrol over dejen.',
			'why'     => <<<'HTML'
<p>Marcato Atlas er den mest kendte pastamaskine i verden og laves i Italien. Butikken beskriver Atlas 150+ som en klassisk, manuel pastamaskine, hvor du selv drejer på håndsvinget og har fuld kontrol over dejen fra første udrulning til færdig pasta. Valget er vores vurdering ud fra butikkens oplysninger og maskinens ry.</p>
HTML,
			'good'    => [ 'Tagliatelle, lasagne og ravioli', 'Dig, der vil have den klassiske' ],
			'less'    => [ 'Store mængder alene – det er rart at have en hjælper' ],
		],
		[
			'ean'     => '8000011010151',
			'price'   => 1524,
			'name'    => 'Marcato Atlasmotor+',
			'role'    => 'Bedst med motor',
			'reviews' => [],
			'verdict' => 'Atlas-pastamaskinen med indbygget motor, så du har begge hænder fri.',
			'why'     => <<<'HTML'
<p>Atlasmotor+ er den samme klassiske Atlas – bare med indbygget motor. Butikken fremhæver, at du slipper for at dreje på håndsvinget og får begge hænder fri, så det er lettere at føre dejen ind og tage pastaen imod. Det gør det meget nemmere at lave pasta alene. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Dig, der laver pasta alene', 'Store portioner' ],
			'less'    => [ 'Dig, der vil holde prisen nede' ],
		],
		[
			'ean'     => '8003705116085',
			'price'   => 705,
			'name'    => 'Ariete Pasta maker',
			'role'    => 'Elektrisk alternativ',
			'reviews' => [],
			'verdict' => 'Elektrisk pastamaskine med 10 indstillinger og 9 tykkelser.',
			'why'     => <<<'HTML'
<p>Ariete er et italiensk mærke. Butikken oplyser, at pastamaskinen har 10 indstillinger, så du kan vælge mellem 9 forskellige tykkelser, og at den gør det nemt for alle at lave frisk pasta. Valget er vores vurdering ud fra butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Begyndere', 'Dig, der vil have det nemt' ],
			'less'    => [ 'Dig, der vil have den klassiske Atlas' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger og bruger du en pastamaskine</h2>
<h3>Manuel, med motor eller tilbehør?</h3>
<p>En manuel pastamaskine er billig og holder i mange år, men kræver en ekstra hånd. En maskine med motor giver begge hænder fri. Har du en KitchenAid-røremaskine, kan du også købe pastavalser som tilbehør.</p>
<h3>Sådan laver du pastadej</h3>
<p>Brug 100 g tipo 00-mel pr. æg. Ælt dejen glat i 8–10 minutter, og lad den hvile i en halv time. Rul den gennem maskinen fra den bredeste til den tyndeste indstilling.</p>
<h3>Rengøring</h3>
<p>En pastamaskine må aldrig vaskes i vand. Lad dejrester tørre, og børst dem af med en tør pensel.</p>
<p>Se alle <a href="/pizza-bagning/pastamaskine/">pastamaskiner</a>, og find tallerkenerne i guiden til <a href="/bedste-italiensk-pastatallerken/">italienske pastatallerkener</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvilket mel skal man bruge til pasta?', 'Italiensk tipo 00-mel giver en fin og smidig dej. Durumhvedemel bruges ofte til pasta uden æg.' ],
		[ 'Kan man vaske en pastamaskine?', 'Nej. Vand får den til at ruste. Børst dejrester af med en tør pensel, når de er tørre.' ],
		[ 'Hvor længe holder frisk pasta?', 'Et par dage i køleskabet, eller du kan tørre eller fryse den.' ],
	],
];
