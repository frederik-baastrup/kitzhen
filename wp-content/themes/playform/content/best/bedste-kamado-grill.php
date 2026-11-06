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
			'verdict' => 'Komplet kamado-station med 47 cm rist, sideborde og hjul – plads til grillmad for 8–10 personer.',
			'why'     => <<<'HTML'
<p>Kamado Sumo Signature Midi giver dig topmodellernes funktioner i en størrelse, der passer til familien og vennerne. Den runde rist på 47 cm har plads til mad til 8–10 personer, og du kan grille, ryge, bage pizza og brune kød ved høj varme i den samme grill.</p>
<p>Ristens højde kan justeres i flere niveauer, og med de to halvmåneformede varmefordelere skifter du nemt mellem direkte og indirekte grill. Termometeret i låget viser temperaturen, og gennem kontrollemmen kan du drysse røgflis i med det medfølgende værktøj uden at åbne låget og miste varmen.</p>
<p>Stativ, sideborde, håndtag, kulkurv og topventil er i rustfrit stål, og sidebordene har kroge til grillredskaberne. Asken samles i en skuffe, du kan tage ud, og der følger en askeskraber med. Grillen vejer 95 kg, men de store hjul gør den til at flytte på terrassen.</p>
HTML,
			'good'    => [ 'Familier og selskaber på 8–10 personer', 'Rygning og langtidsgrill', 'Dig, der vil have sideborde og hjul med' ],
			'less'    => [ 'Altaner og små terrasser – den er 116 cm bred med sideborde og vejer 95 kg' ],
		],
		[
			'ean'     => '0077924159152',
			'price'   => 18150,
			'name'    => 'Weber Summit Kamado E6',
			'role'    => 'Bedst luksus',
			'reviews' => [],
			'verdict' => 'Kamado med 61 cm grillrist, Webers største indbyggede termometer og en kulbeholder, du drejer af og tømmer på et øjeblik.',
			'why'     => <<<'HTML'
<p>Weber Summit Kamado E6 er til dig, der vil kunne det hele med kul: grille bøffer, ryge langsomt i mange timer og bage. Grillristen er 61 cm i diameter, så der er plads til mad til hele selskabet på én gang.</p>
<p>Termometeret er det største, Weber nogensinde har bygget ind i en grill. Det har markeringer for rygning, grill og bagning, så du med et blik kan se, om du har ramt den rigtige varme, før maden kommer på. Grillen passer til Webers Gourmet BBQ System, så du kan bygge videre med Webers udvalg af tilbehør til systemet.</p>
<p>Oprydningen er klaret på et øjeblik med One-Touch-systemet: Du drejer kulbeholderen af, tømmer kul og aske ud og sætter den på igen. Grillen vejer omkring 66 kg, men står på et stativ med hjul. Weber giver op til 10 års garanti gennem sit garantiprogram.</p>
HTML,
			'good'    => [ 'Rygning, grill og bagning med kul', 'Store selskaber', 'Dig, der vil udbygge med Weber-tilbehør' ],
			'less'    => [ 'Ingen sideborde', 'Små terrasser – den er 100 cm bred' ],
		],
		[
			'ean'     => '7350097264285',
			'price'   => 4495,
			'name'    => 'Kamado Sumo Icon Junior 34 cm',
			'role'    => 'Bedst til få personer',
			'reviews' => [],
			'verdict' => 'Kompakt keramisk kamado med 34 cm rist, støbejernsventil og teakdetaljer – kun 63 cm høj.',
			'why'     => <<<'HTML'
<p>Kamado Sumo Icon Junior er til dig, der har en lille terrasse eller altan, eller som vil have grillen med i sommerhuset. Risten på 34 cm i diameter har plads til det meste, og du kan både grille hurtigt over direkte varme og lave mad, der skal have tid.</p>
<p>Den tykke keramiske skal isolerer godt og holder temperaturen jævn i lang tid – ideelt til røg og indirekte varme. Med topventilen i støbejern og bundventilen med gnistbeskytter styrer du luften præcist, og termometeret i låget viser, hvor varmen er. Gennem inspektionslemmen tilsætter du røgspåner med det medfølgende værktøj uden at åbne låget. Hængslet med dobbelte fjedre gør det tunge låg let at løfte.</p>
<p>Grillristen er i rustfrit stål og nem at rengøre, og en askerive følger med. Grillen er 63 cm høj og 57 cm bred med håndtaget.</p>
HTML,
			'good'    => [ 'Par og små familier', 'Altaner og små terrasser', 'Sommerhuset' ],
			'less'    => [ 'Store selskaber' ],
		],
		[
			'ean'     => '7350097262816',
			'price'   => 3490,
			'name'    => 'Kamado Sumo Signature Junior',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Kompakt kamado på 31 kg med 33 cm rist og stativ i rustfrit stål – grill, røg og bag.',
			'why'     => <<<'HTML'
<p>Kamado Sumo Signature Junior giver dig ægte kamado-mad på meget lidt plads. Du kan grille, ryge og bage i den, og med 31 kg kan den følge med fra haven til sommerhuset eller på tur. Risten på 33 cm er god til mindre selskaber.</p>
<p>Selvom den er lille, har den de funktioner, du kender fra de store kamadoer: grillrist i rustfrit stål, en varmefordeler til jævn, indirekte varme, topventil i rustfrit stål med regnbeskyttelse, bundventil og termometer i låget. Gennem kontrollemmen tilsætter du røgflis med det medfølgende værktøj under tilberedningen.</p>
<p>Grillen står stabilt i et stativ i rustfrit stål med solide håndtag. Rengøringen går hurtigt med den medfølgende askeskraber.</p>
HTML,
			'good'    => [ 'Begyndere i kamado-grill', 'Lavere budget', 'Sommerhus og små terrasser' ],
			'less'    => [ 'Store stege og mange gæster' ],
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
