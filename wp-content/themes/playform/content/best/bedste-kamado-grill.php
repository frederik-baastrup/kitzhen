<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-kamado-grill/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-kamado-grill',
	'title'    => 'Kamado grill: Vores bud på de 4 bedste',
	'excerpt'  => 'En kamado grill kan grille, ryge og bage og holder varmen i mange timer. Her er vores bud på de 4 bedste kamado grills fra danske butikker.',
	'more_cat' => 'kamado-grill',
	'intro'    => <<<'HTML'
<p>En kamado er en kulgrill med tykke keramiske vægge, der holder på varmen. Med luftspjældene styrer du temperaturen præcist – fra lav varme til langtidsrøgning af pulled pork og brisket til meget høj varme til bøffer og pizza. Den bruger lidt kul og kan bruges hele året.</p>
<p>Herunder er vores bud på de 4 bedste kamado grills hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7350097262809',
			'price'   => 9995,
			'name'    => 'Kamado Sumo Signature Midi',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Robust kamado i mellemstørrelse – til at grille, ryge og bage.',
			'why'     => <<<'HTML'
<p>Kamado Sumo er et svensk mærke med fokus på kamado-grills. Signature Midi er en robust og gennemtænkt kulgrill, der tager grillningen til næste niveau. Midi-størrelsen er god til en almindelig familie.</p>
HTML,
			'good'    => [ 'Familier', 'Rygning og langtidsgrill' ],
			'less'    => [ 'Altaner – den er tung' ],
		],
		[
			'ean'     => '0077924159152',
			'price'   => 18150,
			'name'    => 'Weber Summit Kamado E6',
			'role'    => 'Bedst luksus',
			'reviews' => [],
			'verdict' => 'Webers kamado med Webers hidtil største integrerede termometer.',
			'why'     => <<<'HTML'
<p>Weber Summit Kamado er Webers bud på en kamado. Det store, integrerede termometer – Webers hidtil største – gør det let at holde øje med temperaturen. Den er dyr, men en komplet grillstation.</p>
HTML,
			'good'    => [ 'Grillentusiaster', 'Dig, der vil have Weber-kvalitet' ],
			'less'    => [ 'Små budgetter' ],
		],
		[
			'ean'     => '7350097264285',
			'price'   => 4495,
			'name'    => 'Kamado Sumo Icon Junior 34 cm',
			'role'    => 'Bedst til få personer',
			'reviews' => [],
			'verdict' => 'Mindre kamado med kraftfuld funktionalitet i et smart format.',
			'why'     => <<<'HTML'
<p>Icon Junior er en mindre kamado, der kombinerer kraftfuld funktionalitet med et smart format, og et fremragende valg til mindre selskaber.</p>
HTML,
			'good'    => [ 'Par og små familier', 'Små terrasser' ],
			'less'    => [ 'Store selskaber' ],
		],
		[
			'ean'     => '7350097262816',
			'price'   => 3490,
			'name'    => 'Kamado Sumo Signature Junior',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Kompakt kamado til at grille, ryge og bage – maksimal smag på minimal plads.',
			'why'     => <<<'HTML'
<p>Signature Junior er lavet til dig, der vil have maksimal smag på minimal plads, og den kan både grille, ryge og bage. Den er den billigste vej ind i kamado-verdenen.</p>
HTML,
			'good'    => [ 'Begyndere', 'Lavt budget' ],
			'less'    => [ 'Store stege' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en kamado grill</h2>
<h3>Størrelse</h3>
<p>Kamadoer angives ofte efter ristens diameter. Omkring 34–40 cm passer til 2–4 personer, 45–50 cm til familier og 55 cm og op til store selskaber.</p>
<h3>Tilbehør</h3>
<p>En varmeplade (deflektor) er nødvendig til indirekte grill og rygning. En pizzasten og et stativ eller bord er også gode investeringer.</p>
<h3>Vægt og placering</h3>
<p>Keramiske kamadoer er tunge. Vælg en grill med stel og hjul, hvis den skal flyttes, og placér den på et stabilt underlag.</p>
<p>Se alle <a href="/grill/kamado-grill/">kamado grills og tilbehør</a>, eller se vores guides til <a href="/bedste-kulgrill/">kulgrills</a> og <a href="/bedste-gasgrill/">gasgrills</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er en kamado grill?', 'En kulgrill med tykke keramiske vægge, der holder på varmen og gør det muligt at grille, ryge og bage ved præcis temperatur.' ],
		[ 'Hvilke kul skal man bruge i en kamado?', 'Brug trækul i store stykker – ikke briketter, der giver mere aske.' ],
		[ 'Kan man bruge en kamado om vinteren?', 'Ja. De tykke vægge holder varmen, også når det er koldt.' ],
	],
];
