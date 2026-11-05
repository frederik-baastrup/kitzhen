<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-juicemaskine/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-juicemaskine',
	'title'    => 'Juicemaskine: Vores bud på de 4 bedste',
	'excerpt'  => 'En juicemaskine presser frisk juice af frugt og grønt. Her er vores bud på de 4 bedste juicemaskiner fra danske butikker – centrifuge, koldpresser og citruspresser.',
	'more_cat' => 'juicemaskine',
	'intro'    => <<<'HTML'
<p>Der findes tre typer juicemaskiner: en råsaftcentrifuge, der river frugten og slynger saften ud med høj hastighed, en slow juicer, der presser saften langsomt ud, og en citruspresser til appelsiner og citroner. Centrifugen er hurtigst, slow juiceren giver mest saft af grønt, og citruspresseren er nemmest til morgenens appelsinjuice.</p>
<p>Herunder er vores bud på de 4 bedste juicemaskiner hos danske butikker lige nu. Leder du specifikt efter en slow juicer, så se vores guide til <a href="/bedste-slow-juicer/">slow juicere</a>.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '9312432030649',
			'price'   => 3499,
			'name'    => 'Sage The Nutri Juicer Cold XL',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Stor juicer fra Sage med Nutri-disk – til juice af både frugt og grønt.',
			'why'     => <<<'HTML'
<p>Sage Nutri Juicer Cold XL er Sages store juicemaskine. Nutri-disken gør den til en smart juicer, der sætter gang i morgenen. Den er lavet til store mængder og hele frugter.</p>
HTML,
			'good'    => [ 'Juice hver dag', 'Store portioner' ],
			'less'    => [ 'Små køkkener' ],
		],
		[
			'ean'     => '0622356308694',
			'price'   => 1199,
			'name'    => 'Ninja koldpresset juicemaskine',
			'role'    => 'Bedst koldpresser til prisen',
			'reviews' => [],
			'verdict' => 'Koldpressende juicemaskine fra Ninja til næringsrige drikke fra bunden.',
			'why'     => <<<'HTML'
<p>Ninjas juicemaskine presser saften koldt ud. Den er en maskine til at lave velsmagende og næringsrige drikke fra bunden, så du selv bestemmer, hvad der kommer i glasset. Koldpressede juicere giver typisk mere saft af bladgrønt end en centrifuge.</p>
HTML,
			'good'    => [ 'Grønne juicer', 'Dig, der vil prøve koldpresset juice' ],
			'less'    => [ 'Dig, der vil have juice på få sekunder' ],
		],
		[
			'ean'     => '8710103718383',
			'price'   => 900,
			'name'    => 'Philips Viva Collection HR1856',
			'role'    => 'Bedst centrifuge',
			'reviews' => [],
			'verdict' => 'Råsaftcentrifuge fra Philips – hurtig juice med minimalt besvær.',
			'why'     => <<<'HTML'
<p>Philips HR1856 er en råsaftcentrifuge. Den er bygget til at give meget juice med minimalt besvær og har en række praktiske funktioner. En centrifuge er hurtig og god til hårde frugter og grøntsager som æbler og gulerødder.</p>
HTML,
			'good'    => [ 'Æbler og gulerødder', 'Hurtig morgenjuice' ],
			'less'    => [ 'Bladgrønt som spinat og grønkål' ],
		],
		[
			'ean'     => '8017709318871',
			'price'   => 1025,
			'name'    => 'Smeg citruspresser CJF01',
			'role'    => 'Bedst til appelsinjuice',
			'reviews' => [],
			'verdict' => 'Elektrisk citruspresser i Smeg-design, der starter og stopper automatisk.',
			'why'     => <<<'HTML'
<p>Smegs citruspresser er lavet til frisk appelsinjuice. Den har automatisk tænd og sluk, når du trykker frugten ned. Den er nem at bruge og gøre ren og passer til andre Smeg-apparater.</p>
HTML,
			'good'    => [ 'Appelsin, citron og grapefrugt', 'Design' ],
			'less'    => [ 'Andre frugter og grønt' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en juicemaskine</h2>
<h3>Centrifuge, slow juicer eller citruspresser?</h3>
<p>En centrifuge er hurtig og billig, men larmer og giver mindre saft af bladgrønt. En slow juicer presser langsomt, larmer mindre og giver mere saft – særligt af grønt. En citruspresser er kun til citrusfrugter.</p>
<h3>Påfyldningsåbning</h3>
<p>En stor åbning betyder, at du kan komme hele æbler i uden at skære dem ud først.</p>
<h3>Rengøring</h3>
<p>Juicemaskiner har mange dele. Skyl dem lige efter brug, før frugtkødet tørrer fast, og kig efter dele, der tåler opvaskemaskine.</p>
<p>Se alle <a href="/koekkenmaskiner/juicemaskine/">juicemaskiner</a> og <a href="/koekkenmaskiner/slow-juicer/">slow juicere</a>, eller se guiden til den bedste <a href="/bedste-blender/">blender</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på en juicer og en blender?', 'En juicer skiller saften fra frugtkødet. En blender blender hele frugten med fibre.' ],
		[ 'Er en slow juicer bedre end en centrifuge?', 'Til bladgrønt og maksimalt udbytte, ja. Til hurtig juice af æbler og gulerødder er en centrifuge fin.' ],
		[ 'Hvor længe holder frisk juice?', 'Bedst drikkes den med det samme. I køleskabet holder den et døgn eller to.' ],
	],
];
