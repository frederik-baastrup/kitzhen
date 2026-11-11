<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/tykbundet-gryde/). De gamle tekster er ikke flyttet over.
 * Fakta om produkterne kommer kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-tykbundet-gryde',
	'date'     => '2023-07-27 12:11:47',
	'title'    => 'Tykbundet gryde: Vores bud på de 5 bedste',
	'excerpt'  => 'En tykbundet gryde fordeler varmen jævnt, så sovs og gryderetter ikke brænder på. Her er vores bud på de 5 bedste fra de butikker, vi samarbejder med – i stål og støbejern.',
	'more_cat' => 'gryde',
	'intro'    => <<<'HTML'
<p>En tykbundet gryde er den gryde, du griber efter til gryderetter, supper, risengrød og sovs – alt det, der skal simre længe uden at brænde på. Den tykke bund fordeler varmen ud over hele bunden og holder på den, så du undgår varme pletter midt på gryden og kan skrue ned uden at maden går helt i stå.</p>
<p>Der er to hovedtyper: gryder i rustfrit stål med en bund af flere lag, ofte med en kerne af aluminium, og tunge gryder i emaljeret støbejern. Herunder er vores bud på de 5 bedste fra de butikker, vi samarbejder med – tre i stål og to i støbejern. Nederst finder du en købsguide til materialer, bund, størrelse og induktion.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5412191973202',
			'price'   => 1230,
			'name'    => 'Demeyere Black 5 gryde 20 cm, 3 l',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Gryde i fem lag fra Demeyere med ridsefast stål indeni og sort, varmebestandig yderside – til komfur, ovn og induktion.',
			'why'     => <<<'HTML'
<p>Demeyere er belgisk og kendt for gryder, hvor konstruktionen er hele pointen. Black 5 er bygget op i fem lag, så varmen fordeles jævnt, og sovs, ris og risengrød ikke så let brænder fast midt i gryden.</p>
<p>Indeni er der ridsefast 18/10 rustfrit stål, mens ydersiden har en sort, keramisk belægning, der tåler høj varme. Det giver et markant udseende og en gryde, du kan bruge på alle kogeplader, også induktion, og sætte i ovnen. Låget følger med, og de store, nittede håndtag er nemme at tage fat i med ovnhandsker.</p>
<p>Med 20 cm og 3 liter er den en god hverdagsgryde til sovs, kartofler og ris – og den tåler opvaskemaskine.</p>
HTML,
			'good'    => [ 'Dig, der vil have én gryde til mange års brug', 'Sovs, ris og retter, der let brænder på', 'Induktion og ovn' ],
			'less'    => [ 'Store gryderetter til mange', 'Dig med et stramt budget' ],
		],
		[
			'ean'     => '3272341026064',
			'slug'    => 'staub-la-cocotte-rund-stoebejernsgryde-26-cm-5-2-l-kirsebaerroed',
			'name'    => 'Staub La Cocotte rund 26 cm, 5,2 l',
			'role'    => 'Bedst til ovn og grydebrød',
			'reviews' => [], // Consumer Reports' test kan ikke åbnes fra Danmark (blokeret + betalingsmur), så den bruges ikke.
			'verdict' => 'Klassisk støbejernsgryde til simreretter og grydebrød – bedst i ovnen og ved lav varme.',
			'why'     => <<<'HTML'
<p>Staub La Cocotte er en af de mest kendte støbejernsgryder. Den 26 cm runde gryde på 5,2 liter er en allrounder til kraftige simreretter som boeuf bourguignon, kødgryder, fyldige supper og grydebrød med sprød skorpe.</p>
<p>Støbejern er langsomt om at blive varmt, men holder varmen længe, når det først er varmt. Derfor er gryden stærkest i ovnen og til lange retter ved lav varme, hvor støbejernet kan nå at blive varmt hele vejen igennem. På kogepladen skal du give den tid til at varme op og holde varmen moderat, så maden ikke brænder på i bunden.</p>
HTML,
			'good'    => [ 'Grydebrød', 'Gryderetter, der skal stå længe i ovnen', 'Dig, der vil have en gryde, der også kan stå på bordet' ],
			'less'    => [ 'Sovs og retter, der skal røres i på kogepladen ved høj varme', 'Dig, der vil have en let gryde' ],
		],
		[
			'ean'     => '5706631004138',
			'slug'    => 'eva-trio-multi-gryde-6-5-liter',
			'name'    => 'Eva Trio Multi Gryde 6,5 l',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Stor gryde fra danske Eva Trio med 3 lag hele vejen op i siderne – til gryderetter og suppe til hele familien.',
			'why'     => <<<'HTML'
<p>Eva Trio Multi er vores bud, hvis du vil have en stor tykbundet gryde uden at betale Demeyere-priser. Gryden er 24 cm i diameter og rummer 6,5 liter, og både bund og sider er opbygget af tre lag: rustfrit stål med en kerne af aluminium. Den kombination giver en rigtig god varmefordeling.</p>
<p>At lagene går hele vejen op i siderne – og ikke kun sidder som en plade i bunden – er en fordel, fordi varmen så også fordeles op ad gryden. Det er især rart til store mængder suppe, gryderetter og pasta.</p>
HTML,
			'good'    => [ 'Familier og dig, der laver mad til flere dage', 'Suppe, gryderetter og pasta', 'Dig, der vil have stål i stedet for tungt støbejern' ],
			'less'    => [ 'Små køkkener og små portioner' ],
		],
		[
			'ean'     => '8719324830836',
			'slug'    => 'combekk-stoebejernsgryde-emaljeret-24-cm-sort',
			'name'    => 'Combekk Støbejernsgryde emaljeret 24 cm',
			'role'    => 'Billigere støbejern',
			'reviews' => [],
			'verdict' => 'Emaljeret støbejernsgryde af genanvendt materiale, lavet så let som muligt – til alle varmekilder, også induktion.',
			'why'     => <<<'HTML'
<p>Combekk er et hollandsk mærke, og gryden er et billigere alternativ til de klassiske franske støbejernsgryder. Den er lavet af 100 % genanvendt materiale fra produktionsrester, at den er lavet til at være så let som muligt, og den passer til alle slags varmekilder, også induktion.</p>
<p>Lav vægt er en reel fordel ved støbejern, som ellers hurtigt bliver tungt at løfte, når gryden er fuld.</p>
HTML,
			'good'    => [ 'Dig, der vil prøve støbejern uden at betale for et af de dyreste mærker', 'Dig, der synes, støbejernsgryder er for tunge' ],
			'less'    => [ 'Dig, der foretrækker en gryde i rustfrit stål' ],
		],
		[
			'ean'     => '6424002017158',
			'price'   => 1285,
			'name'    => 'Fiskars Norden gryde 5 liter',
			'role'    => 'Bedst nordisk design',
			'reviews' => [],
			'verdict' => 'Finsk gryde i rustfrit stål med flerlagsbund og aluminiumskerne fra kant til kant – tåler ovn op til 270 °C.',
			'why'     => <<<'HTML'
<p>Fiskars Norden er til dig, der vil have en tykbundet stålgryde med et rent, nordisk udtryk. Den er lavet i Finland i rustfrit stål, og designet er inspireret af naturen. Med 5 liter er den en god størrelse til gryderetter, supper og kartofler til familien.</p>
<p>Bunden er tyk og bygget af flere lag med en kerne af aluminium, der går helt ud til kanten. Det giver jævn varme over hele bunden, så sovs og gryderetter ikke brænder på midt i gryden. Indvendig er der målestreger, og gryden virker på alle kogeplader, også induktion.</p>
<p>Håndtag og låg er udformet, så de leder mindst mulig varme, og gryden tåler ovnen op til 270 °C. Der er 3 års garanti.</p>
HTML,
			'good'    => [ 'Dig, der vil have nordisk design', 'Gryderetter og suppe til familien', 'Komfur og ovn – også induktion' ],
			'less'    => [ 'Store portioner til mange gæster' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en tykbundet gryde</h2>
<p>"Tykbundet" står på mange gryder, men det dækker over meget forskellige konstruktioner. Her er det, du skal kigge efter.</p>
<h3>Stål med flere lag eller støbejern?</h3>
<p>En gryde i rustfrit stål med flere lag reagerer hurtigt, når du skruer op og ned, og den er let at gøre ren – den er det bedste valg til sovs, ris og daglig madlavning på kogepladen. Emaljeret støbejern er langsommere om at blive varmt, men holder til gengæld på varmen i lang tid. Det gør det godt til retter, der skal simre i timer eller stå i ovnen, og til grydebrød. Til gengæld er det tungt, og emaljen kan skalle, hvis gryden bliver slået eller varmet op tom.</p>
<h3>Sandwichbund eller lag hele vejen op</h3>
<p>Mange stålgryder har en "sandwichbund": en plade af aluminium eller kobber, der er indkapslet i stål under bunden. Den fordeler varmen godt i bunden. Gryder, hvor lagene går hele vejen op i siderne, fordeler også varmen op ad gryden. Det er især en fordel i store gryder, hvor du laver meget mad ad gangen.</p>
<h3>Induktion</h3>
<p>Skal gryden bruges på induktion, skal bunden være magnetisk. Rustfrit stål med en magnetisk bund og støbejern virker begge, men tjek altid, at der står induktion i beskrivelsen. Læs også vores guide til <a href="/bedste-kedel-til-induktion/">kedler til induktion</a>.</p>
<h3>Størrelse</h3>
<p>En gryde på 3–4 liter passer til sovs, kartofler og ris i en almindelig husstand. Til gryderetter, suppe og pasta til en familie skal du op omkring 5–6 liter eller mere. Vælg diameteren efter dine kogezoner – en gryde, der er meget større end zonen, bliver ikke varm ude i kanten.</p>
<h3>Låg, håndtag og ovn</h3>
<p>Kig efter et tætsluttende låg, håndtag, der ikke bliver for varme, og om gryden – også låget og knoppen – kan tåle ovnen. Det giver langt flere muligheder for gryderetter og brød.</p>
<h3>Pleje</h3>
<p>Varm ikke en tom gryde op på høj varme, og lad den køle lidt af, før du skyller den. Brændt mad i bunden af en stålgryde kan ofte løsnes ved at koge lidt vand i gryden. Se alle <a href="/gryder-pander/gryde/">gryder</a> med aktuelle priser, eller hele udvalget af <a href="/gryder-pander/">gryder og pander</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er en tykbundet gryde?', 'En gryde med en kraftig bund, typisk af flere lag metal eller af støbejern, der fordeler og holder på varmen. Det gør, at maden ikke så let brænder på.' ],
		[ 'Hvad er bedst: støbejern eller rustfrit stål?', 'Rustfrit stål med flere lag er bedst til daglig madlavning på kogepladen og er let at gøre rent. Støbejern er bedst til lange simreretter, ovnretter og brød, men er tungere.' ],
		[ 'Kan en tykbundet gryde bruges på induktion?', 'Ja, hvis bunden er magnetisk. Det gælder de fleste gryder i rustfrit stål med magnetisk bund og støbejernsgryder. Tjek altid beskrivelsen.' ],
		[ 'Hvorfor brænder maden på i min gryde?', 'Ofte er bunden for tynd, så varmen samles i midten, eller også er varmen for høj. En tykbundet gryde og lidt lavere varme hjælper på begge dele.' ],
		[ 'Hvor stor skal en gryde være?', 'Til sovs og tilbehør er 3–4 liter nok. Til gryderetter og suppe til en familie er 5–6 liter et godt udgangspunkt.' ],
	],
];
