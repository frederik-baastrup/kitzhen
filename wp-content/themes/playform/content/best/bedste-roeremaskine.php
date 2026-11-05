<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-roeremaskine/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-roeremaskine',
	'title'    => 'Røremaskine: Vores bud på de 4 bedste',
	'excerpt'  => 'En røremaskine ælter dej, pisker flødeskum og rører kagedej, mens du laver noget andet. Her er vores bud på de 4 bedste røremaskiner fra danske butikker.',
	'more_cat' => 'roeremaskine',
	'intro'    => <<<'HTML'
<p>En røremaskine – eller køkkenmaskine – er bagerens bedste ven. Den ælter brøddej, pisker æggehvider og flødeskum og rører kagedej, mens du har hænderne fri. Med tilbehør som kødhakker, pastavalser og grøntsagsrivejern kan den meget mere end at bage.</p>
<p>Herunder er vores bud på de 4 bedste røremaskiner hos danske butikker lige nu. Nederst finder du en købsguide til skålstørrelse, effekt og type.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5413184200718',
			'price'   => 3999,
			'name'    => 'KitchenAid Artisan KSM175 4,8 liter',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Den ikoniske røremaskine med en skål på 4,8 liter – plads til omkring 1 kg mel.',
			'why'     => <<<'HTML'
<p>KitchenAid Artisan er den røremaskine, de fleste kender. KSM175 har en skål på 4,8 liter med plads til op imod 1 kg mel eller 12 æggehvider, og den er en videreudvikling af KSM150-modellen. Der findes meget tilbehør til KitchenAid, og maskinen fås i mange farver.</p>
HTML,
			'good'    => [ 'Kager, flødeskum og almindelig brøddej', 'Dig, der vil udvide med tilbehør' ],
			'less'    => [ 'Meget store og tunge deje' ],
		],
		[
			'ean'     => '7350061086783',
			'price'   => 5495,
			'name'    => 'Ankarsrum Assistent AKM 6230',
			'role'    => 'Bedst til brød',
			'reviews' => [],
			'verdict' => 'Den svenske klassiker med roterende skål og en motor på 1500 W – lavet i Sverige siden 1940.',
			'why'     => <<<'HTML'
<p>Ankarsrum Assistent har en helt anden opbygning end de fleste røremaskiner: skålen drejer rundt, og dejen æltes af en rulle og en skraber. Den nye udgave har en forbedret motor på 1500 W, der kører mere ensartet ved store belastninger og er mere lydsvag, og maskinen er produceret i Sverige siden 1940. Den er kendt for at kunne klare store mængder dej.</p>
HTML,
			'good'    => [ 'Store mængder brøddej', 'Dig, der bager meget' ],
			'less'    => [ 'Dig, der mest pisker flødeskum og kagedej' ],
		],
		[
			'ean'     => '7044876020314',
			'price'   => 5990,
			'name'    => 'Wilfa Probaker KM1GY-70',
			'role'    => 'Størst kapacitet',
			'reviews' => [],
			'verdict' => 'Røremaskine med 7 liters roterende skål, der kan ælte op til 5 kg dej.',
			'why'     => <<<'HTML'
<p>Wilfa Probaker er udviklet i samarbejde med det norske kokkelandshold. Den har en 7 liters roterende skål, der kan ælte en dej på op til 5 kg, og 20 hastighedsindstillinger. Det gør den til et godt valg for dig, der bager til mange eller bager meget brød.</p>
HTML,
			'good'    => [ 'Store familier og storbagning', 'Tunge brøddeje' ],
			'less'    => [ 'Små køkkener' ],
		],
		[
			'ean'     => '5011423012797',
			'price'   => 2499,
			'name'    => 'Kenwood KHC40.050',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Køkkenmaskine med en skål på 4,3 liter, der tager op til 1 kg mel – til en lavere pris.',
			'why'     => <<<'HTML'
<p>Kenwood har lavet køkkenmaskiner i årtier. KHC40-modellens skål på 4,3 liter har et praktisk håndtag og rummer op til 1.000 gram mel. Den er et fornuftigt valg, hvis du bager jævnligt og vil holde prisen nede.</p>
HTML,
			'good'    => [ 'Dig, der vil have en røremaskine uden at give meget' ],
			'less'    => [ 'Meget store mængder dej' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en røremaskine</h2>
<h3>Planetrøremaskine eller roterende skål?</h3>
<p>De fleste røremaskiner – som KitchenAid og Kenwood – er planetrøremaskiner, hvor redskabet drejer rundt i skålen. De er gode til alt fra flødeskum til brøddej. Maskiner med roterende skål, som Ankarsrum og Wilfa Probaker, er særligt gode til store mængder tung dej.</p>
<h3>Skålens størrelse</h3>
<p>4–5 liter er nok til de fleste husstande. Bager du store portioner brød, så vælg en skål på 6–7 liter.</p>
<h3>Effekt og tilbehør</h3>
<p>Watt-tallet siger ikke alt – det afhænger også af gearingen. Tjek, hvor meget mel maskinen kan ælte, og hvilket tilbehør der findes, fx kødhakker, pastavalser og <a href="/bedste-spiralizer/">spiralizer</a>.</p>
<p>Se alle <a href="/koekkenmaskiner/roeremaskine/">røremaskiner</a> med aktuelle priser.</p>
HTML,
	'faq'      => [
		[ 'Hvad er den bedste røremaskine?', 'KitchenAid Artisan er et sikkert valg til de fleste. Bager du meget brød, er Ankarsrum Assistent eller en maskine med stor skål bedre.' ],
		[ 'Hvor stor skal skålen være?', '4–5 liter er nok til de fleste. Til store mængder brøddej er 6–7 liter bedre.' ],
		[ 'Kan en røremaskine ælte rugbrødsdej?', 'De fleste kraftige røremaskiner kan, men hold dig inden for den mængde mel, producenten angiver.' ],
	],
];
