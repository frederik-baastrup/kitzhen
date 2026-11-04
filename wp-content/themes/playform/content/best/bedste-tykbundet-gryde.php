<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/tykbundet-gryde/). De gamle tekster er ikke flyttet over.
 * Fakta om produkterne kommer kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-tykbundet-gryde',
	'title'    => 'Tykbundet gryde: Vores bud på de 4 bedste',
	'excerpt'  => 'En tykbundet gryde fordeler varmen jævnt, så sovs og gryderetter ikke brænder på. Her er vores bud på de 4 bedste fra danske butikker – i stål og støbejern.',
	'more_cat' => 'gryde',
	'intro'    => <<<'HTML'
<p>En tykbundet gryde er den gryde, du griber efter til gryderetter, supper, risengrød og sovs – alt det, der skal simre længe uden at brænde på. Den tykke bund fordeler varmen ud over hele bunden og holder på den, så du undgår varme pletter midt på gryden og kan skrue ned uden at maden går helt i stå.</p>
<p>Der er to hovedtyper: gryder i rustfrit stål med en bund af flere lag, ofte med en kerne af aluminium, og tunge gryder i emaljeret støbejern. Herunder er vores bud på de 4 bedste hos danske butikker lige nu – to af hver slags. Nederst finder du en købsguide til materialer, bund, størrelse og induktion.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5412191413227',
			'slug'    => 'demeyere-atlantis-gryde-med-laag-22-cm-4-l',
			'name'    => 'Demeyere Atlantis Gryde med låg 22 cm, 4 l',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Luksusgryde i 18/10-stål fra Demeyere, hvor bunden er hele pointen – til komfur og ovn.',
			'why'     => <<<'HTML'
<p>Demeyere er belgisk og kendt for gryder med en særligt kraftig bund, og Atlantis er mærkets luksusserie. Butikken oplyser, at gryden er lavet i 18/10-stål af høj kvalitet, der er hygiejnisk og let at gøre rent, at den kan bruges på alle varmeoverflader og også i ovnen – og fremhæver bunden som noget ganske særligt.</p>
<p>Med 22 cm og 4 liter er det en god hverdagsstørrelse til en familie: sovs, kartofler, ris og mindre gryderetter. Den er dyr for en gryde i den størrelse, men stål holder i årtier, hvis du passer på den. Vi har ikke fundet en uafhængig anmeldelse af netop denne model, så valget er vores vurdering ud fra butikkens oplysninger og mærkets ry.</p>
HTML,
			'good'    => [ 'Dig, der vil have én gryde, der holder resten af livet', 'Sovs, ris og retter, der let brænder på', 'Induktion' ],
			'less'    => [ 'Store gryderetter til mange', 'Dig med et stramt budget' ],
		],
		[
			'ean'     => '3272341026064',
			'slug'    => 'staub-la-cocotte-rund-stoebejernsgryde-26-cm-5-2-l-kirsebaerroed',
			'name'    => 'Staub La Cocotte rund 26 cm, 5,2 l',
			'role'    => 'Bedst til ovn og grydebrød',
			'reviews' => [
				[ 'Consumer Reports', 'https://www.consumerreports.org/home-garden/cookware/staub-round-cocotte/m396579/' ],
			],
			'verdict' => 'Klassisk støbejernsgryde til simreretter og grydebrød – stærk i ovnen, mindre jævn på kogepladen.',
			'why'     => <<<'HTML'
<p>Staub La Cocotte er en af de mest kendte støbejernsgryder. Butikken beskriver den 26 cm runde gryde på 5,2 liter som en allrounder til kraftige simreretter som boeuf bourguignon, kødgryder, fyldige supper og grydebrød med sprød skorpe.</p>
<p>Consumer Reports har testet Staubs runde cocotte, og resultatet er blandet – og det skal du kende, før du køber. Gryden blev hurtigt varm og gav gode resultater med brød, men den var mindre egnet til madlavning på kogepladen: varmen var ujævn over bunden, så maden kan brænde på nogle steder, mens den stadig er ved at blive varm andre steder, og tomatsovs simrede ujævnt. Den fik også en lav score for, hvor nem den er at gøre ren. Brug den derfor helst i ovnen og til lange retter ved lav varme, hvor støbejernet kan nå at blive varmt hele vejen igennem.</p>
HTML,
			'good'    => [ 'Grydebrød', 'Gryderetter, der skal stå længe i ovnen', 'Dig, der vil have en gryde, der også kan stå på bordet' ],
			'less'    => [ 'Sovs og retter, der skal røres i på kogepladen ved høj varme', 'Dig, der vil have en let gryde, der er nem at gøre ren' ],
		],
		[
			'ean'     => '5706631004138',
			'slug'    => 'eva-trio-multi-gryde-6-5-liter',
			'name'    => 'Eva Trio Multi Gryde 6,5 l',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Stor gryde fra danske Eva Trio med 3 lag hele vejen op i siderne – til gryderetter og suppe til hele familien.',
			'why'     => <<<'HTML'
<p>Eva Trio Multi er vores bud, hvis du vil have en stor tykbundet gryde uden at betale Demeyere-priser. Butikken oplyser, at gryden er 24 cm i diameter og rummer 6,5 liter, og at både bund og sider er opbygget af tre lag: rustfrit stål med en kerne af aluminium. Den kombination giver ifølge butikken en rigtig god varmefordeling.</p>
<p>At lagene går hele vejen op i siderne – og ikke kun sidder som en plade i bunden – er en fordel, fordi varmen så også fordeles op ad gryden. Det er især rart til store mængder suppe, gryderetter og pasta. Valget er vores vurdering; vi har ikke fundet uafhængige anmeldelser af modellen.</p>
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
<p>Combekk er et hollandsk mærke, og gryden er et billigere alternativ til de klassiske franske støbejernsgryder. Butikken oplyser, at den er lavet af 100 % genanvendt materiale fra produktionsrester, at den er lavet til at være så let som muligt, og at den passer til alle slags varmekilder, også induktion.</p>
<p>Lav vægt er en reel fordel ved støbejern, som ellers hurtigt bliver tungt at løfte, når gryden er fuld. Vi har ikke fundet en uafhængig test af netop denne gryde, så valget er vores vurdering ud fra butikkens oplysninger og prisen.</p>
HTML,
			'good'    => [ 'Dig, der vil prøve støbejern uden at betale for et af de dyreste mærker', 'Dig, der synes, støbejernsgryder er for tunge' ],
			'less'    => [ 'Dig, der vil have gryden testet af andre, før du køber' ],
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
