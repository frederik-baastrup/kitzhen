<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-kulgrill/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-kulgrill',
	'title'    => 'Kulgrill: Vores bud på de 5 bedste',
	'excerpt'  => 'En kulgrill giver den klassiske grillsmag. Her er vores bud på de 5 bedste kulgrills fra de butikker, vi samarbejder med – fra kuglegrill til transportabel grill.',
	'more_cat' => 'kulgrill',
	'intro'    => <<<'HTML'
<p>Kul giver højere varme og mere røgsmag end gas, og for mange er det at tænde op en del af hyggen. En kulgrill med låg kan både grille direkte over gløderne og indirekte med låget lukket, så du kan lave alt fra bøffer til hel kylling.</p>
<p>Herunder er vores bud på de 5 bedste kulgrills fra de butikker, vi samarbejder med.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '6410413247352',
			'price'   => 1279,
			'name'    => 'Mustang Gourmet 57',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Kuglegrill i porcelænsemaljeret stål med rustfri grillrist på 54 cm, låg-termometer og to store hjul.',
			'why'     => <<<'HTML'
<p>Mustang Gourmet 57 er den klassiske kuglegrill til dig, der vil grille for hele familien i haven. Grillristen har en diameter på 54 cm, så der er plads til pølser, bøffer og grøntsager på én gang. Både låg og grillskål er porcelænsemaljeret, og det løfter den op i den bedre ende af kuglegrillene.</p>
<p>Risten er i rustfrit stål og er en multi-grillrist: Midten kan tages ud, så du kan sætte tilbehør fra Mustangs multi-grillserie i og udvide grillen efter behov. Termometeret i låget viser temperaturen, og med ventilerne i låg og skål styrer du, hvor meget luft kullene får.</p>
<p>Asken falder ned i en aftagelig askeopsamler, som du bare tømmer. Et kraftigt håndtag og to store hjul gør det nemt at trille grillen på plads, og lågets håndtag er varmebeskyttet.</p>
HTML,
			'good'    => [ 'Familier og havegrill', 'Dig, der vil styre varmen med ventiler', 'Udvidelse med multi-grilltilbehør' ],
			'less'    => [ 'Dig, der vil have sidebord til fade og redskaber' ],
		],
		[
			'ean'     => '0062703114705',
			'price'   => 7499,
			'name'    => 'Broil King KEG 5000',
			'role'    => 'Bedst til rygning',
			'reviews' => [],
			'verdict' => 'Dobbeltvægget kulgrill på 47 cm, der holder varmen længe – med askeskuffe, sidehylder og 10 års garanti på kammeret.',
			'why'     => <<<'HTML'
<p>Broil King KEG 5000 er kulgrillen til dig, der gerne vil ryge og langtidsstege – men også bare grille en hurtig aftensmad. Kammeret er dobbeltvægget og isoleret, så varmen bliver inde, og temperaturen holder sig stabil, også når maden skal have mange timer.</p>
<p>Med Deluxe Accu-Temp-termometeret holder du øje med varmen, og ristens højde kan justeres, så du kan grille hårdt tæt på gløderne eller lade maden passe sig selv længere oppe. Du fyrer op med briketter eller trækul. Ovnrummet er porcelænsbelagt og modstår rust, og der er 10 års garanti på det (2 år på øvrige dele og lak).</p>
<p>De flytbare sidehylder har kroge til grillværktøjet, og der sidder en oplukker på kabinettet. Asken samles i en skuffe, der tages af og tømmes. Grillen vejer 60 kg, men står på hjul, så du kan flytte den rundt på terrassen.</p>
HTML,
			'good'    => [ 'Rygning og langtidsstegning', 'Dig, der vil styre varmen præcist', 'Grill med plads til værktøjet' ],
			'less'    => [ 'Tung at flytte langt (60 kg)', 'Lavt budget' ],
		],
		[
			'ean'     => '5710441424598',
			'price'   => 904,
			'name'    => 'HAY Outdoor Market transportabel kulgrill',
			'role'    => 'Bedst til tur',
			'reviews' => [],
			'verdict' => 'Kompakt kulgrill i rustfrit stål på kun 1,95 kg, designet af Jasper Morrison – nem at tage med på stranden.',
			'why'     => <<<'HTML'
<p>HAYs Outdoor Market-grill er til dig, der vil kunne pakke grillen og tage aftensmaden med til stranden, parken eller sommerhuset. Den er designet af Jasper Morrison og har et enkelt, stilrent udtryk, der ser godt ud på picnictæppet.</p>
<p>Grillen måler 40 x 34 cm og er 25,5 cm høj, og med kun 1,95 kg er den let at bære. Sidehåndtagene gør det nemt at løfte den fra bilen til tæppet. Den er lavet af slidstærkt rustfrit stål, der kan tåle at blive flyttet frem og tilbage mellem haven og picnicpladsen igen og igen.</p>
<p>Tøm grillen og gør den grundigt ren efter hver tur, så holder stålet sin flotte finish i mange sæsoner.</p>
HTML,
			'good'    => [ 'Picnic, strand og sommerhus', 'Dig, der vil have en flot grill', 'Små altaner og terrasser' ],
			'less'    => [ 'Store familier og mange gæster' ],
		],
		[
			'ean'     => '0077924922220',
			'price'   => 2290,
			'name'    => 'Weber Master-Touch GBS C-5755 57 cm',
			'role'    => 'Klassisk Weber-kuglegrill',
			'reviews' => [],
			'verdict' => 'Webers klassiske 57 cm kuglegrill med GBS-rist, One-Touch askesystem, låg-termometer og 10 års begrænset garanti.',
			'why'     => <<<'HTML'
<p>Weber Master-Touch er kuglegrillen til dig, der vil have den klassiske Weber med alle de praktiske detaljer. Grillfladen på 57 cm giver plads til 6–8 personer, og kedel og låg er porcelænsemaljerede i røggrå, så de holder på varmen og modstår rust og ridser.</p>
<p>Risten i rustfrit stål har to sider, du kan klappe op, så du nemt fylder kul på undervejs. Midten passer til Webers runde GBS-tilbehør, fx pizzasten og wok (sælges separat). Spjæld i låg og kedel styrer varmen, termometeret i låget viser temperaturen, og låget kan hænges på siden af kedlen, mens du griller.</p>
<p>Efter grillningen fejer One-Touch-systemet asken ned i en lukket askebeholder. Aluminiumsbenene giver 5 cm ekstra arbejdshøjde, og hjulene gør den nem at flytte. Weber giver 10 års begrænset garanti.</p>
HTML,
			'good'    => [ 'Familier op til 6–8 personer', 'Dig, der vil udbygge med GBS-tilbehør', 'Nem tømning af aske' ],
			'less'    => [ 'Dig, der vil have sidebord til fade og redskaber' ],
		],
		[
			'ean'     => '0077924907449',
			'price'   => 5799,
			'name'    => 'Weber Performer Deluxe Smart 57 cm',
			'role'    => 'Med temperaturstyring',
			'reviews' => [],
			'verdict' => 'Kulgrill med WiFi-styring og digital blæser, der holder temperaturen selv – plus gastænding og stort arbejdsbord.',
			'why'     => <<<'HTML'
<p>Weber Performer Deluxe Smart giver dig smagen fra kul med samme styr på varmen som på en gas- eller pillegrill. Du indstiller temperaturen på LCD-enheden, og en digital blæser styrer luften, så grillen holder varmen stabil. Det gør lange low and slow-sessioner og røgning natten over meget nemmere.</p>
<p>Gastændingen og Rapidfire Assist får gang i briketterne uden optændingsskorsten. I Weber Connect-appen følger du grilltemperatur og madens kernetemperatur og får besked på mobilen.</p>
<p>Grillen står på en vogn med stort arbejdsbord, to hylder, to hjul og to låsbare drejehjul. Risten på 57 cm er hængslet og passer til GBS-tilbehør, og One-Touch-systemet gør asken nem at tømme.</p>
HTML,
			'good'    => [ 'Rygning og lange grillforløb', 'Dig, der vil styre grillen fra mobilen', 'Dig, der vil have arbejdsplads ved grillen' ],
			'less'    => [ 'Små terrasser – den er 121 cm bred', 'Dig, der vil holde det enkelt' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en kulgrill</h2>
<h3>Med eller uden låg?</h3>
<p>Med låg kan du grille indirekte og lave større stykker kød og hel kylling. Uden låg er grillen bedst til pølser og bøffer.</p>
<h3>Størrelse</h3>
<p>En rist på 47 cm passer til 4–6 personer, 57 cm til større familier.</p>
<h3>Optænding</h3>
<p>Brug en grillstarter i stedet for tændvæske – det giver bedre smag og er nemmere.</p>
<p>Se alle <a href="/grill/kulgrill/">kulgrills</a>, eller se guiderne til <a href="/bedste-kamado-grill/">kamado grills</a> og <a href="/bedste-gasgrill/">gasgrills</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er bedst: kul eller gas?', 'Kul giver mere røgsmag og højere varme. Gas er hurtigere og nemmere at styre.' ],
		[ 'Hvor lang tid tager det at tænde en kulgrill?', 'Med en grillstarter er kullene klar efter 15–20 minutter.' ],
		[ 'Kan man ryge på en kulgrill?', 'Ja, med låg og indirekte varme. En isoleret grill holder temperaturen bedre.' ],
	],
];
