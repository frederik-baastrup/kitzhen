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
			'verdict' => 'Multicooker på 7,5 liter med 14 funktioner under ét låg – trykkog kødet mørt, og giv det sprød skorpe bagefter.',
			'why'     => <<<'HTML'
<p>Ninja Foodi OL750EU er til dig, der vil have slow cooker, trykkoger og varmluft i ét apparat. Den har 14 funktioner – fra slow cooking og dampning til bagning og yoghurt – og med 7,5 liter er der plads til en stor familie eller til mad til flere dage.</p>
<p>Med SmartLid skifter du mellem trykkogning, slow cooking, dampning og varmluftsstegning med det samme låg. TenderCrisp lader dig først trykkoge fx en kylling, så den bliver mør, og derefter give den en sprød overflade. Det indbyggede digitale termometer holder øje med temperaturen, så maden bliver færdig, som du vil have den.</p>
<p>Effekten er 1750 W, gryden har non-stick, og tilbehøret tåler opvaskemaskine. Mål pladsen op først: Den er 43 cm høj og vejer 15 kg.</p>
HTML,
			'good'    => [ 'Store familier', 'Dig, der vil erstatte flere apparater', 'Sprød mad uden friture' ],
			'less'    => [ 'Små køkkener – den fylder og vejer 15 kg' ],
		],
		[
			'ean'     => '0810102266538',
			'price'   => 1299,
			'name'    => 'Instant Pot multicooker 5,7 liter',
			'role'    => 'Bedst til trykkogning',
			'reviews' => [],
			'verdict' => 'Trykkoger og slow cooker i én: 5,7 liter til seks portioner og fire pladser til dine egne favoritindstillinger.',
			'why'     => <<<'HTML'
<p>Instant Pot på 5,7 liter er til familien, der vil have både hurtig og langsom mad fra samme gryde. En travl hverdag trykkoger du gryderetten på kort tid, og i weekenden slår du over på slow cooking og lader den simre. Den kan også sautere og dampe – i alt 7 funktioner – og rummer op til 6 portioner.</p>
<p>Har du en ret, du laver tit, gemmer du den som en af 4 egne forindstillinger og starter den med ét tryk. Statusindikatoren viser, hvor langt den er, så du ikke behøver at stå ved siden af. Låget kan låses, og dampen lukkes nemt og sikkert ud.</p>
<p>Indergryden og låget er i rustfrit stål og tåler opvaskemaskine. Effekten er 1000 W, og den vejer 5 kg.</p>
HTML,
			'good'    => [ 'Familier op til 6 personer', 'Hurtige gryderetter på hverdage', 'Dig, der laver de samme retter tit' ],
			'less'    => [ 'Store selskaber' ],
		],
		[
			'ean'     => '0810102265463',
			'price'   => 549,
			'name'    => 'Instant Superior Slow Cooker 7 liter',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Slow cooker på 7,1 liter til omkring 10 portioner – brun kødet i samme gryde, og bær den direkte ud på bordet.',
			'why'     => <<<'HTML'
<p>Instant Superior er slow cookeren til dig, der vil lave store portioner uden besvær. Gryden rummer 7,1 liter, hvilket svarer til cirka 10 portioner. Det er nok til en stor familie, til gæster eller til at fylde fryseren op med mørt oksekød, pulled pork, krydrede gryderetter eller vegetarretter.</p>
<p>Du kan brune ingredienserne direkte i gryden, før den langsomme tilberedning går i gang. Det giver mere smag og sparer dig for en ekstra pande i opvasken. Når maden er færdig, holder den automatisk retten varm, så aftensmaden står klar, selv om I bliver forsinkede.</p>
<p>Indergryden er let og har EasyGrab-håndtag, så du nemt kan sætte den på bordet. Den tåler opvaskemaskine, og hele apparatet vejer kun 3,5 kg.</p>
HTML,
			'good'    => [ 'Store familier og gæster', 'Mad til fryseren', 'Dig, der vil have det enkelt' ],
			'less'    => [ 'Dig, der også vil kunne trykkoge' ],
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
