<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-slow-juicer/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-slow-juicer',
	'title'    => 'Slow juicer: Vores bud på de 3 bedste',
	'excerpt'  => 'En slow juicer presser saften langsomt ud og giver mere juice af grønt end en centrifuge. Her er vores bud på de 3 bedste slow juicere fra danske butikker.',
	'more_cat' => 'slow-juicer',
	'intro'    => <<<'HTML'
<p>En slow juicer – også kaldet en koldpresser – presser frugt og grønt med en langsomt roterende snegl i stedet for at rive det i stykker ved høj hastighed. Det giver mere juice af bladgrønt som spinat og grønkål, mindre skum og mindre larm. Til gengæld tager det lidt længere tid.</p>
<p>Herunder er vores bud på de 3 bedste slow juicere hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4038437035117',
			'price'   => 1599,
			'name'    => 'Caso SJW 600 XL',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Kraftfuld slow juicer i stilfuldt design fra tyske Caso.',
			'why'     => <<<'HTML'
<p>Caso SJW 600 XL er en kraftfuld slow juicer, der er designet til at levere førsteklasses juice til enhver lejlighed, i et stilfuldt og moderne design.</p>
HTML,
			'good'    => [ 'Grøn juice', 'Juice hver dag' ],
			'less'    => [ 'Små budgetter' ],
		],
		[
			'ean'     => '5413184000745',
			'price'   => 2199,
			'name'    => 'KitchenAid SM1JA Slow Juicer',
			'role'    => 'Bedst til KitchenAid',
			'reviews' => [],
			'verdict' => 'Slow juicer-tilbehør til KitchenAid-røremaskinen – til æbler, citrus og gulerødder.',
			'why'     => <<<'HTML'
<p>Med SM1JA kan du lave slow juice på din KitchenAid-røremaskine. Æbler, citrusfrugter og gulerødder – kun fantasien sætter grænser. Har du maskinen, sparer du plads på køkkenbordet.</p>
HTML,
			'good'    => [ 'Dig med en KitchenAid-røremaskine' ],
			'less'    => [ 'Dig uden KitchenAid' ],
		],
		[
			'ean'     => '4008146026034',
			'price'   => 739,
			'name'    => 'Severin 3571 Slowjuicer',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Slow juicer i rustfrit stål og slankt design til en lav pris.',
			'why'     => <<<'HTML'
<p>Severins slow juicer er i rustfrit stål og har et slankt design kombineret med flere funktioner. Den er et godt sted at starte, hvis du vil prøve koldpresset juice.</p>
HTML,
			'good'    => [ 'Begyndere', 'Små køkkener' ],
			'less'    => [ 'Store mængder' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en slow juicer</h2>
<h3>Lodret eller vandret?</h3>
<p>Lodrette slow juicere fylder mindre og er hurtigere. Vandrette er ofte bedre til bladgrønt og hvedegræs.</p>
<h3>Påfyldningsåbning</h3>
<p>En stor åbning sparer dig for at skære frugten i små stykker.</p>
<h3>Rengøring</h3>
<p>Skyl sigten lige efter brug med den medfølgende børste, før frugtkødet tørrer fast.</p>
<p>Se alle <a href="/koekkenmaskiner/slow-juicer/">slow juicere og saftpressere</a>, eller sammenlign med andre <a href="/bedste-juicemaskine/">juicemaskiner</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er en slow juicer?', 'En juicemaskine, der presser saften ud med en langsomt roterende snegl i stedet for at rive frugten ved høj hastighed.' ],
		[ 'Er en slow juicer bedre end en centrifuge?', 'Den giver typisk mere juice af bladgrønt, mindre skum og larmer mindre, men er langsommere.' ],
		[ 'Kan man komme hele æbler i en slow juicer?', 'Kun hvis åbningen er stor nok. Ellers skal de skæres i stykker.' ],
	],
];
