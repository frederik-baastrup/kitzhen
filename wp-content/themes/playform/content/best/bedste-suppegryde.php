<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-suppegryde/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-suppegryde',
	'title'    => 'Suppegryde: Vores bud på de 3 bedste',
	'excerpt'  => 'En stor suppegryde er til suppe, fond, pasta og gryderetter til mange. Her er vores bud på de 3 bedste suppegryder fra danske butikker.',
	'more_cat' => 'gryde',
	'intro'    => <<<'HTML'
<p>En suppegryde er den store gryde i køkkenet – til suppe, fond, pasta, kartofler til mange og gryderetter, der skal række til flere dage. Den skal være stor nok, have en bund, der fordeler varmen, og håndtag, der er gode at løfte i, når gryden er fuld.</p>
<p>Herunder er vores bud på de 3 bedste suppegryder hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5706631257824',
			'price'   => 499,
			'name'    => 'Eva Trio gryde 10 liter, rustfrit stål',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Stor gryde på 10 liter i rustfrit stål fra Eva Trio – baseret på det klassiske Ole Palsby-design.',
			'why'     => <<<'HTML'
<p>Eva Trios 10-liters gryde er slidstærk og i rustfrit stål og bygger på det klassiske Ole Palsby-design. Den er god til gryderetter, supper, kartofler og pasta. 10 liter er rigeligt til suppe til mange eller fond.</p>
HTML,
			'good'    => [ 'Suppe og fond', 'Pasta til mange' ],
			'less'    => [ 'Små skabe' ],
		],
		[
			'ean'     => '5706631257831',
			'price'   => 600,
			'name'    => 'Eva Trio gryde 9 liter, rustfrit stål',
			'role'    => 'Lidt mindre',
			'reviews' => [],
			'verdict' => 'Samme Eva Trio-gryde i 9 liter.',
			'why'     => <<<'HTML'
<p>Den samme gryde findes i 9 liter, hvis du vil have lidt mindre.</p>
HTML,
			'good'    => [ 'Familier' ],
			'less'    => [ 'Meget store mængder' ],
		],
		[
			'ean'     => '3272341037251',
			'price'   => 3549,
			'name'    => 'Staub La Cocotte oval 8 liter',
			'role'    => 'Bedst til ovnen',
			'reviews' => [],
			'verdict' => 'Oval støbejernsgryde på 8 liter til lammeskank, kalkun og store gryderetter.',
			'why'     => <<<'HTML'
<p>Staubs ovale gryde på 8 liter (37 cm lang) er til at tilberede en hel lammeskank, stege en kalkun eller gås til festmiddagen eller koge store mængder vildtgryde. Den er tung, men holder varmen.</p>
HTML,
			'good'    => [ 'Festmiddage', 'Gryderetter i ovnen' ],
			'less'    => [ 'Pasta og suppe til mange' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en suppegryde</h2>
<h3>Størrelse</h3>
<p>6–8 liter er nok til de fleste familier. 10 liter eller mere er til fond, store selskaber og at lave mad til fryseren.</p>
<h3>Bund og induktion</h3>
<p>En tyk bund fordeler varmen og forhindrer, at suppen brænder på. Tjek, at gryden virker på induktion, og at bunden passer til din største kogezone.</p>
<h3>Håndtag og vægt</h3>
<p>En fuld gryde er tung. Kig efter solide håndtag, der er gode at gribe med grydelapper.</p>
<p>Se alle <a href="/gryder-pander/gryde/">gryder</a>, eller se guiden til <a href="/bedste-tykbundet-gryde/">tykbundede gryder</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvor stor skal en suppegryde være?', '6–8 liter er nok til de fleste. Til fond og store selskaber er 10 liter eller mere bedre.' ],
		[ 'Hvad er bedst: stål eller støbejern?', 'Rustfrit stål er let og robust. Støbejern holder varmen bedst, men er tungt.' ],
		[ 'Kan en stor gryde bruges på induktion?', 'Ja, hvis bunden er magnetisk. Den bliver dog ikke varm helt ude i kanten, hvis den er meget større end kogezonen.' ],
	],
];
