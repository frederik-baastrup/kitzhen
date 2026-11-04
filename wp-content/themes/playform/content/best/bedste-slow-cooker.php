<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-slow-cooker/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-slow-cooker',
	'title'    => 'Slow cooker: Vores bud på de 4 bedste',
	'excerpt'  => 'En slow cooker simrer gryderetter, pulled pork og supper mørt i løbet af dagen. Her er vores bud på de 4 bedste slow cookere og multicookere fra danske butikker.',
	'more_cat' => 'slow-cooker',
	'intro'    => <<<'HTML'
<p>En slow cooker tilbereder maden ved lav varme over mange timer. Du kommer ingredienserne i om morgenen, og når du kommer hjem, er gryderetten, chilien eller pulled pork mør og klar. Den bruger lidt strøm og kan stå uden opsyn. Mange multicookere kan også trykkoge, sautere og airfrye.</p>
<p>Herunder er vores bud på de 4 bedste slow cookere og multicookere hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4895156692775',
			'price'   => 1873,
			'name'    => 'GreenPan Elite Slowcooker',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Slow cooker med LCD-display og forudindstillede programmer – til gryderetter og pulled pork.',
			'why'     => <<<'HTML'
<p>GreenPan Elite er en ren slow cooker. Butikken beskriver den som perfekt til alt fra gryderetter og pulled pork til gennemstegt kød og kylling, og fremhæver det fleksible LCD-display med forudindstillede programmer. Valget er vores vurdering ud fra butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Gryderetter og pulled pork', 'Dig, der vil have en enkel slow cooker' ],
			'less'    => [ 'Trykkogning' ],
		],
		[
			'ean'     => '0622356245050',
			'price'   => 2499,
			'name'    => 'Ninja Foodi OL750EU',
			'role'    => 'Bedst multicooker',
			'reviews' => [],
			'verdict' => 'Multicooker på 7,5 liter med 14 funktioner i én – også slow cooking.',
			'why'     => <<<'HTML'
<p>Ninja Foodi OL750EU er en 14-i-1 multicooker. Butikken fremhæver den generøse kapacitet på 7,5 liter, der passer til store familier, eller hvis du vil lave mad i forvejen. Den kan langt mere end slow cooking. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Store familier', 'Dig, der vil have mange funktioner' ],
			'less'    => [ 'Små køkkener' ],
		],
		[
			'ean'     => '0810102266538',
			'price'   => 1299,
			'name'    => 'Instant Pot multicooker 5,7 liter',
			'role'    => 'Bedst til trykkogning',
			'reviews' => [],
			'verdict' => 'Den kendte Instant Pot – multicooker på 5,7 liter, der også kan slow cooke.',
			'why'     => <<<'HTML'
<p>Instant Pot er den multicooker, der gjorde trykkogere populære igen. Denne udgave rummer 5,7 liter. En trykkoger gør gryderetter møre på en brøkdel af tiden, og slow cook-funktionen er der, når du har god tid. Valget er vores vurdering ud fra modellens udbredelse.</p>
HTML,
			'good'    => [ 'Hurtige gryderetter', 'Dig, der både vil trykkoge og slow cooke' ],
			'less'    => [ 'Dig, der kun vil slow cooke' ],
		],
		[
			'ean'     => '0810102265463',
			'price'   => 549,
			'name'    => 'Instant Superior Slow Cooker 7 liter',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Stor slow cooker på 7 liter fra Instant til en lav pris.',
			'why'     => <<<'HTML'
<p>Instant Superior er en slow cooker på 7 liter – stor nok til en hel familie og til at fryse portioner ned. Den er et godt valg, hvis du bare vil have en slow cooker uden at betale for funktioner, du ikke bruger. Valget er vores vurdering ud fra pris og størrelse.</p>
HTML,
			'good'    => [ 'Store portioner', 'Lavt budget' ],
			'less'    => [ 'Mange programmer' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en slow cooker</h2>
<h3>Slow cooker eller multicooker?</h3>
<p>En slow cooker gør én ting godt: tilbereder maden langsomt. En multicooker kan også trykkoge, sautere, dampe og ofte airfrye – smart, hvis du vil have ét apparat til meget.</p>
<h3>Størrelse</h3>
<p>3–4 liter passer til to personer. 5–7 liter er bedre til familier og til at lave mad til flere dage.</p>
<h3>Timer og varmhold</h3>
<p>En timer, der automatisk skifter til varmhold, gør, at maden ikke bliver overkogt, hvis du kommer sent hjem.</p>
<p>Se alle <a href="/ovne-apparater/slow-cooker/">slow cookere og multicookere</a>, eller lav gryderetten i en <a href="/bedste-tykbundet-gryde/">tykbundet gryde</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvor lang tid tager det i en slow cooker?', 'Typisk 6–10 timer på lav varme eller 3–5 timer på høj varme.' ],
		[ 'Bruger en slow cooker meget strøm?', 'Nej, den har lav effekt, så selv mange timers brug bruger relativt lidt strøm.' ],
		[ 'Kan man komme frosset kød i en slow cooker?', 'Det frarådes, fordi kødet kan være for længe ved en temperatur, hvor bakterier trives. Tø kødet op først.' ],
	],
];
