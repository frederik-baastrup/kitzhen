<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-suppegryde/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-suppegryde',
	'date'     => '2023-09-12 09:35:30',
	'title'    => 'Suppegryde: Vores bud på de 5 bedste',
	'excerpt'  => 'En stor suppegryde er til suppe, fond, pasta og gryderetter til mange. Her er vores bud på de 5 bedste suppegryder fra de butikker, vi samarbejder med.',
	'more_cat' => 'gryde',
	'intro'    => <<<'HTML'
<p>En suppegryde er den store gryde i køkkenet – til suppe, fond, pasta, kartofler til mange og gryderetter, der skal række til flere dage. Den skal være stor nok, have en bund, der fordeler varmen, og håndtag, der er gode at løfte i, når gryden er fuld.</p>
<p>Herunder er vores bud på de 5 bedste suppegryder fra de butikker, vi samarbejder med – fra 7,2 til 14,5 liter.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5706631257824',
			'price'   => 499,
			'name'    => 'Eva Trio gryde 10 liter, rustfrit stål',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Rummelig 10-liters gryde i rustfrit stål med sandwichbund, der virker på alle kogeplader og tåler opvaskemaskine.',
			'why'     => <<<'HTML'
<p>Eva Trio-gryden på 10 liter er til dig, der koger suppe, fond og pasta til mange. Den bygger på Ole Palsbys klassiske design fra 1977 og passer derfor til de Eva Trio-låg, du måske allerede har i skuffen.</p>
<p>Gryden er lavet af 90 % genanvendt rustfrit stål og har en indkapslet sandwichbund i aluminium, der fordeler varmen jævnt – så suppen ikke brænder på i bunden. Den virker på alle varmekilder inklusive induktion, tåler ovn, og håndtagene forbliver kolde, mens du laver mad.</p>
<p>Efter maden kommer den bare i opvaskemaskinen. Gryden fås også i mange andre størrelser, fra 2,2 til 15 liter.</p>
HTML,
			'good'    => [ 'Suppe og fond i store portioner', 'Pasta og kartofler til mange', 'Alle komfurer – også induktion' ],
			'less'    => [ 'Låg medfølger ikke', 'Små skabe' ],
		],
		[
			'ean'     => '5706631257831',
			'price'   => 600,
			'name'    => 'Eva Trio gryde 9 liter, rustfrit stål',
			'role'    => 'Lidt mindre',
			'reviews' => [],
			'verdict' => 'Eva Trio-gryde på 9 liter i genanvendt rustfrit stål – stor nok til familien, nem at gøre ren.',
			'why'     => <<<'HTML'
<p>Synes du, 10 liter er i overkanten, er Eva Trio på 9 liter et godt bud. Der er stadig plads til en stor gryde suppe, kartofler eller pasta til hele familien. Formen følger Ole Palsbys klassiske Eva Trio-design fra 1977, så låg fra serien passer.</p>
<p>Stålet er 90 % genanvendt, og bunden er en indkapslet sandwichbund i aluminium. Den giver jævn varme over hele bunden, så du undgår, at maden sætter sig fast ét sted. Gryden kan bruges på alle typer kogeplader, også induktion.</p>
<p>Når I har spist, sætter du den i opvaskemaskinen.</p>
HTML,
			'good'    => [ 'Familier', 'Supper og gryderetter til flere dage', 'Induktionskomfur' ],
			'less'    => [ 'Låg medfølger ikke' ],
		],
		[
			'ean'     => '083421715043',
			'price'   => 799,
			'name'    => 'Scanpan Impact suppegryde 7,2 liter',
			'role'    => 'Bedst til mindre husstande',
			'reviews' => [],
			'verdict' => 'Høj suppegryde på 7,2 liter i rustfrit stål med glaslåg, målestreger og 5 års garanti.',
			'why'     => <<<'HTML'
<p>Scanpan Impact er en rigtig suppegryde: høj og smal, så der er plads til store mængder suppe, fond, kartofler eller pasta, uden at gryden fylder hele komfuret. Med 7,2 liter passer den til den almindelige familie, og der følger glaslåg med, så du kan holde øje med maden.</p>
<p>Den er lavet i 18/10 rustfrit stål med en tyk bund af aluminium indkapslet i stål. Det giver hurtig og jævn varme, og gryden virker på alle komfurtyper, også induktion. Indvendig er der målestreger, og kanten er formet, så den ikke drypper, når du hælder suppen op.</p>
<p>Grebene i rustfrit stål holder sig kølige under madlavningen, og gryden tåler både opvaskemaskine og ovn op til 260 °C. Scanpan giver 5 års garanti.</p>
HTML,
			'good'    => [ 'Familien til hverdag', 'Induktionskomfur', 'Dig, der vil have låg med' ],
			'less'    => [ 'Store portioner til mange gæster' ],
		],
		[
			'ean'     => '5722002098285',
			'price'   => 399,
			'name'    => 'Funktion suppegryde 14,5 liter',
			'role'    => 'Bedst til store portioner',
			'reviews' => [],
			'verdict' => 'Den største gryde i guiden: 14,5 liter i rustfrit stål med låg, og den virker også på induktion.',
			'why'     => <<<'HTML'
<p>Funktion suppegryden på 14,5 liter er til de dage, hvor der skal laves mad til rigtig mange. En kraftig fond på marvben, der simrer natten over, gullaschsuppe til vejfesten, saftkogning sidst på sommeren eller krebsegildet i august – her er der plads til det hele.</p>
<p>Gryden er i rustfrit stål og 21 cm høj. Der følger et låg med damphul med, så dampen kan slippe ud, mens det simrer. Den passer til alle komfurtyper, også induktion.</p>
<p>Gør den ren med en blød børste, varmt vand og sæbe, så holder den sig pæn.</p>
HTML,
			'good'    => [ 'Fond, saftkogning og store fester', 'Dig, der vil have låg med', 'Induktionskomfur' ],
			'less'    => [ 'Små skabe og små familier', 'Bør vaskes i hånden' ],
		],
		[
			'ean'     => '0083421745040',
			'price'   => 999,
			'name'    => 'Scanpan Fusion 5 suppegryde 7,6 liter',
			'role'    => 'Bedst premium-valg',
			'reviews' => [],
			'verdict' => 'Suppegryde på 7,6 liter i rustfrit stål fra Scanpan med låg, målestreger og plads i opvaskemaskinen.',
			'why'     => <<<'HTML'
<p>Scanpan Fusion 5 er suppegryden til familien, der vil have en solid gryde fra Scanpan. Med 7,6 liter er der plads til en stor portion suppe, kartofler eller pasta, så alle bliver mætte, og der er rester til næste dag.</p>
<p>Både gryde og låg er i rustfrit stål, og gryden virker på alle varmekilder, også induktion. Indvendig er der målestreger, så du kan hælde vand og bouillon direkte i uden et målebæger.</p>
<p>Når I har spist, kan den komme i opvaskemaskinen. Der er 2 års garanti.</p>
HTML,
			'good'    => [ 'Familier', 'Dig, der vil have låg og målestreger', 'Alle komfurer – også induktion' ],
			'less'    => [ 'Store portioner til mange gæster' ],
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
