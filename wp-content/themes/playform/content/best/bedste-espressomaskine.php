<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-espressomaskine/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-espressomaskine',
	'date'     => '2023-07-06 08:00:11',
	'title'    => 'Espressomaskine: Vores bud på de 5 bedste',
	'excerpt'  => 'En espressomaskine med portafilter giver dig kaffe på caféniveau derhjemme. Her er vores bud på de 5 bedste espressomaskiner fra de butikker, vi samarbejder med – fra begynder til entusiast.',
	'more_cat' => 'espressomaskine',
	'intro'    => <<<'HTML'
<p>En espressomaskine med portafilter – også kaldet en manuel eller halvautomatisk espressomaskine – er den maskine, baristaer bruger. Du maler bønnerne, doserer og presser kaffen i filteret og brygger selv. Det kræver lidt øvelse, men giver dig fuld kontrol over smagen og de bedste muligheder for cappuccino og latte med silkeblødt mælkeskum.</p>
<p>Herunder er vores bud på de 5 bedste espressomaskiner hos de butikker, vi samarbejder med, lige nu – fra en kompakt begyndermaskine til en maskine for entusiasten. Leder du efter en maskine, der klarer det hele med ét tryk, så se vores guide til <a href="/bedste-fuldautomatisk-espressomaskine/">fuldautomatiske espressomaskiner</a>.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '9355973007459',
			'price'   => 7499,
			'name'    => 'Sage Barista Pro',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Espressomaskine med indbygget kaffekværn og ThermoJet-opvarmning – alt, hvad du skal bruge, i én maskine.',
			'why'     => <<<'HTML'
<p>Sage Barista Pro er en af de mest populære espressomaskiner til hjemmet. Den integrerede kaffekværn sørger for den rette mængde kaffe, og ThermoJet-opvarmningen gør maskinen klar til at brygge på ingen tid.</p>
<p>Med kværnen indbygget slipper du for at købe en separat kværn, og det er netop kværnen, der afgør mest for smagen.</p>
HTML,
			'good'    => [ 'Dig, der vil have alt i én maskine', 'Cappuccino og latte' ],
			'less'    => [ 'Dig, der vil have den hurtigste kop om morgenen uden at lære noget' ],
		],
		[
			'ean'     => '9312432031523',
			'eans'    => [ '9312432031523', '9355973007428', '9312432031882' ],
			'price'   => 2999,
			'name'    => 'Sage Bambino Plus',
			'role'    => 'Bedst til begyndere',
			'reviews' => [],
			'verdict' => 'Kompakt espressomaskine, der øger trykket gradvist i starten af brygningen – som de store maskiner.',
			'why'     => <<<'HTML'
<p>Sage Bambino Plus er enkel og kompakt. Maskinen øger vandtrykket gradvist i starten af brygningen, ligesom de bedste kommercielle espressomaskiner, så kaffen trækkes jævnt.</p>
<p>Den har ingen indbygget kværn, så du skal købe formalet kaffe eller en separat kværn. Til gengæld fylder den lidt og er nem at komme i gang med.</p>
HTML,
			'good'    => [ 'Begyndere', 'Små køkkener' ],
			'less'    => [ 'Dig, der ikke har en kaffekværn' ],
		],
		[
			'ean'     => '8720389025419',
			'price'   => 3577,
			'name'    => 'Gaggia Classic E24',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Moderniseret udgave af klassikeren fra Gaggia med en 25 % større kedel i messing.',
			'why'     => <<<'HTML'
<p>Gaggia Classic har været en favorit blandt kaffeentusiaster i årtier. E24 er en moderniseret version med en 25 % større kedel i messing og forbedret kapacitet til både brygning og dampning.</p>
<p>Det er en enkel maskine uden mange knapper, men den er bygget til at holde, og mange bruger den som udgangspunkt for at lære espresso.</p>
HTML,
			'good'    => [ 'Dig, der vil lære espresso fra bunden', 'Holdbarhed' ],
			'less'    => [ 'Dig, der vil have kværn og automatik' ],
		],
		[
			'ean'     => '8004399036826',
			'price'   => 5299,
			'name'    => 'De\'Longhi La Specialista Arte',
			'role'    => 'Bedst med kværn til prisen',
			'reviews' => [],
			'verdict' => 'Espressomaskine med indbygget kværn og otte indstillinger, så du kan tilpasse den til dine bønner.',
			'why'     => <<<'HTML'
<p>La Specialista Arte er De'Longhis bud på en espressomaskine med kværn til en lavere pris. Du kan tilpasse maskinen til din yndlingsblanding af kaffebønner med otte indstillinger.</p>
<p>Den er et godt alternativ til Sage Barista Pro, hvis du vil have kværnen indbygget og holde prisen nede.</p>
HTML,
			'good'    => [ 'Dig, der vil have kværn uden at give 7.000 kr.' ],
			'less'    => [ 'Dig, der vil finjustere alt' ],
		],
		[
			'ean'     => '8009437005123',
			'price'   => 11999,
			'name'    => 'Lelit MaraX',
			'role'    => 'Til entusiasten',
			'reviews' => [],
			'verdict' => 'Italiensk espressomaskine for den, der vil gå hele vejen – her i guld-finish.',
			'why'     => <<<'HTML'
<p>Lelit er en italiensk producent af espressomaskiner til både hjem og professionelle. MaraX er mere end blot en espressomaskine og er rettet mod dig, der vil gøre kaffen til en fast og stor del af hverdagen.</p>
<p>Det er en maskine til dig, der allerede brygger espresso og vil et skridt videre. Du skal bruge en god separat kværn til.</p>
HTML,
			'good'    => [ 'Entusiaster', 'Mange mælkedrikke i træk' ],
			'less'    => [ 'Begyndere' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en espressomaskine</h2>
<h3>Manuel eller fuldautomatisk?</h3>
<p>En manuel espressomaskine giver den bedste kaffe og mest kontrol, men kræver, at du lærer at dosere, presse og skumme mælk. En fuldautomatisk maskine gør det hele med et tryk. Vil du bare have en god kop uden besvær, så vælg en <a href="/bedste-fuldautomatisk-espressomaskine/">fuldautomatisk espressomaskine</a>.</p>
<h3>Kværnen er vigtigst</h3>
<p>Espresso kræver friskmalet kaffe, der er malet meget præcist. Har maskinen ikke en indbygget kværn, så sæt penge af til en god <a href="/kaffe-drikke/kaffekvaern/">kaffekværn</a> – den betyder mere for smagen end maskinen.</p>
<h3>Én kedel, termoblok eller dobbeltkedel</h3>
<p>Maskiner med én kedel eller termoblok skal skifte mellem brygning og damp. Maskiner med dobbeltkedel eller varmeveksler kan begge dele på én gang – rart, hvis du laver mange mælkedrikke.</p>
<h3>Mælkeskum</h3>
<p>Til cappuccino og latte skal maskinen have et damprør. Et kraftigt damprør giver finere skum og er hurtigere.</p>
<h3>Vedligeholdelse</h3>
<p>Skyl portafilteret efter hver brug, rens damprøret med det samme, og afkalk maskinen jævnligt.</p>
<p>Se alle <a href="/kaffe-drikke/espressomaskine/">espressomaskiner</a> med aktuelle priser og tilbud.</p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på en espressomaskine og en fuldautomatisk espressomaskine?', 'Med en manuel espressomaskine doserer og brygger du selv med et portafilter. En fuldautomatisk maskine maler, doserer og brygger med ét tryk.' ],
		[ 'Skal man have en kaffekværn til en espressomaskine?', 'Ja, hvis maskinen ikke har en indbygget kværn. Friskmalet kaffe er afgørende for en god espresso.' ],
		[ 'Hvor meget skal en god espressomaskine koste?', 'Du kan få en god begyndermaskine for 3.000–5.000 kr. Maskiner med indbygget kværn ligger typisk fra 5.000 kr. og op.' ],
		[ 'Hvor ofte skal man afkalke en espressomaskine?', 'Det afhænger af vandets hårdhed og hvor meget du brygger. Følg producentens anvisning – typisk hver 1–3 måned.' ],
	],
];
