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
			'verdict' => 'Slow cooker med bruning, dampning og stegning i én gryde – keramisk non-stick, der tåler metalredskaber.',
			'why'     => <<<'HTML'
<p>GreenPan Elite Slowcooker er til dig, der elsker gryderetter, pulled pork og mørt kød, men ikke vil stå ved komfuret hele dagen. På LCD-displayet vælger du mellem programmer til slow cooking, helstegning, bruning/sautering og dampning. Du kan fx brune kødet først og derefter sænke varmen og lade det simre i samme gryde – det giver mere smag og mindre opvask.</p>
<p>Den aftagelige gryde har GreenPans keramiske non-stick-belægning Thermolon Volt. Den er slidstærk, tåler metalredskaber og gør det let at få gryden ren. Gennem glaslåget kan du følge med uden at løfte det. De 1350 W giver kræfter til bruningen.</p>
<p>Gryden og låget kan komme i opvaskemaskinen, og slowcookeren fås i flere farver.</p>
HTML,
			'good'    => [ 'Gryderetter og pulled pork', 'Dig, der vil brune og simre i samme gryde', 'Nem rengøring' ],
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
<p>Ninja Foodi OL750EU er til dig, der vil have ét apparat til meget mere end slow cooking. Den er en 14-i-1 multicooker, så den kan erstatte flere apparater på køkkenbordet.</p>
<p>Med 7,5 liter er der plads til en stor familie eller til at lave mad til flere dage og fryse resten ned.</p>
HTML,
			'good'    => [ 'Store familier', 'Dig, der vil have mange funktioner i ét apparat' ],
			'less'    => [ 'Små køkkener' ],
		],
		[
			'ean'     => '0810102266538',
			'price'   => 1299,
			'name'    => 'Instant Pot multicooker 5,7 liter',
			'role'    => 'Bedst til trykkogning',
			'reviews' => [],
			'verdict' => 'Instant Pot på 5,7 liter, der både trykkoger og slow cooker.',
			'why'     => <<<'HTML'
<p>Instant Pot er en multicooker til dig, der både vil have hurtige og langsomme gryderetter. Når tiden er knap, trykkoger du, så kødet bliver mørt på en brøkdel af tiden. Når du har god tid, slår du over på slow cook.</p>
<p>Gryden rummer 5,7 liter, hvilket passer til de fleste familier.</p>
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
			'verdict' => 'Stor slow cooker på 7 liter fra Instant – enkel og til en lav pris.',
			'why'     => <<<'HTML'
<p>Instant Superior er til dig, der bare vil have en god slow cooker uden at betale for funktioner, du ikke bruger. Du fylder gryden om morgenen, og når du kommer hjem, er aftensmaden klar.</p>
<p>Med 7 liter er den stor nok til en hel familie og til at lave dobbelt portion, så der er rester til fryseren.</p>
HTML,
			'good'    => [ 'Store portioner', 'Lavt budget' ],
			'less'    => [ 'Dig, der vil have mange programmer' ],
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
