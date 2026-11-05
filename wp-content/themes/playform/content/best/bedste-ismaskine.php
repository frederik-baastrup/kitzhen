<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-ismaskine/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-ismaskine',
	'title'    => 'Ismaskine: Vores bud på de 3 bedste',
	'excerpt'  => 'Med en ismaskine laver du hjemmelavet is, sorbet og frozen yoghurt. Her er vores bud på de 3 bedste ismaskiner fra danske butikker.',
	'more_cat' => 'ismaskine',
	'intro'    => <<<'HTML'
<p>Hjemmelavet is er nemmere, end mange tror. En ismaskine rører isblandingen, mens den fryser, så den bliver cremet i stedet for at fryse til en isklump. Du bestemmer selv smagen, sødmen og ingredienserne – fra klassisk vaniljeis til sorbet og frozen yoghurt.</p>
<p>Herunder er vores bud på de 3 bedste ismaskiner hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '3030050199468',
			'price'   => 2655,
			'name'    => 'Cuisinart FreezeEase Pro',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Ismaskine fra Cuisinart til hjemmelavede desserter på professionelt niveau.',
			'why'     => <<<'HTML'
<p>Cuisinart er et af de store mærker inden for ismaskiner. FreezeEase Pro er en maskine, der gør det nemt at skabe hjemmelavede desserter, der både imponerer og smager som hos en professionel.</p>
HTML,
			'good'    => [ 'Dig, der laver is ofte', 'Forskellige frosne desserter' ],
			'less'    => [ 'Små budgetter' ],
		],
		[
			'ean'     => '5413184909314',
			'price'   => 1399,
			'name'    => 'KitchenAid 5KSMICM ismaskine',
			'role'    => 'Bedst til KitchenAid',
			'reviews' => [],
			'verdict' => 'Isskål til KitchenAid-røremaskinen – til dig, der allerede har maskinen.',
			'why'     => <<<'HTML'
<p>KitchenAid 5KSMICM er tilbehør til KitchenAid-røremaskinen. Den er et førsteklasses tilbehør til både isveteraner og nybegyndere. Skålen fryses på forhånd, og røremaskinen rører isen. Har du allerede maskinen, sparer du både plads og penge.</p>
HTML,
			'good'    => [ 'Dig med en KitchenAid-røremaskine' ],
			'less'    => [ 'Dig uden KitchenAid' ],
		],
		[
			'ean'     => '7350101117743',
			'price'   => 1099,
			'name'    => 'NOD ismaskine 1,5 liter',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Ismaskine på 1,5 liter til is med forskellige smage og konsistenser.',
			'why'     => <<<'HTML'
<p>NODs ismaskine har en generøs kapacitet på 1,5 liter, så du kan lave is til hele familien, og den gør det nemt og hurtigt at lave is med forskellige smage og konsistenser.</p>
HTML,
			'good'    => [ 'Familier', 'Is om sommeren' ],
			'less'    => [ 'Is mange gange i træk' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en ismaskine</h2>
<h3>Med kompressor eller fryseskål?</h3>
<p>En ismaskine med kompressor fryser selv og kan lave is igen og igen. En maskine med fryseskål er billigere, men skålen skal i fryseren i mindst et døgn før brug, så du kan kun lave én portion ad gangen.</p>
<h3>Kapacitet</h3>
<p>1–1,5 liter er nok til en familie. Isblandingen udvider sig, når den fryser, så fyld aldrig skålen helt.</p>
<h3>Tips til cremet is</h3>
<p>Brug fløde og æggeblommer til den cremeste is, og lad isblandingen være helt kold, før den kommer i maskinen. Kom isen i fryseren en times tid efter, så den bliver fast nok til at kugle.</p>
<p>Se alle <a href="/ovne-apparater/ismaskine/">ismaskiner</a>, eller se vores guide til <a href="/bedste-isterningmaskine/">isterningmaskiner</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvor lang tid tager det at lave is i en ismaskine?', 'Typisk 20–40 minutter, afhængigt af maskinen og blandingen.' ],
		[ 'Kan man lave sorbet i en ismaskine?', 'Ja. Sorbet laves af frugt, sukker og vand og bliver ofte endnu bedre i en ismaskine.' ],
		[ 'Skal fryseskålen i fryseren før brug?', 'Ja, hvis maskinen ikke har kompressor. Typisk mindst 12–24 timer.' ],
	],
];
