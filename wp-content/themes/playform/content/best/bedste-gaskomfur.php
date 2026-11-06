<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-gaskomfur/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-gaskomfur',
	'title'    => 'Gaskomfur: Vores bud på de 3 bedste',
	'excerpt'  => 'Et gaskomfur giver direkte flamme og fuld kontrol over varmen. Her er vores bud på de 3 bedste gaskomfurer og gasblus fra danske butikker.',
	'more_cat' => 'gaskomfur',
	'intro'    => <<<'HTML'
<p>Mange kokke foretrækker gas, fordi flammen reagerer med det samme, når du skruer op og ned, og fordi den varmer hele vejen op ad wokken og panden. Et gaskomfur kræver en gasinstallation eller en gasflaske, og installationen skal udføres af en autoriseret gasmester.</p>
<p>Herunder er vores bud på de 3 bedste gaskomfurer og gasblus hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8017709149963',
			'price'   => 16490,
			'name'    => 'Smeg SCB92MX8 gaskomfur 90 cm',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Fem gasblus og to elektriske ovne på 70 og 35 liter – laver du steg og kage samtidig.',
			'why'     => <<<'HTML'
<p>Smeg SCB92MX8 er gaskomfuret til dig, der laver meget mad og ofte har gæster. På toppen er fem gasblus fra 1 til 3,5 kW, og to af dem varmer ekstra hurtigt op. Flammen tænder automatisk, og gryderne står trygt på kraftige riste af støbejern.</p>
<p>Under blussene sidder to elektriske ovne. Den store på 70 liter har varmluft, grill, rotisserie, eco-tilstand og optøning og når op på 260 grader. Den lille på 35 liter har over- og undervarme og klarer kagen, mens stegen passer sig selv ved siden af. Timeren giver lyd, når maden er klar.</p>
<p>Rengøringen er gjort let: Vapor Clean løsner fedt og fastbrændte rester, så du blot tørrer efter med en klud. Ovnlågen har tre lag glas, og de to inderste kan tages af og vaskes. Komfuret fås til flaskegas, bygas og naturgas.</p>
HTML,
			'good'    => [ 'Store familier og madentusiaster', 'Dig, der bager og steger på samme tid', 'Køkkener med plads til 90 cm' ],
			'less'    => [ 'Små køkkener', 'Den lille ovn har ikke varmluft' ],
		],
		[
			'ean'     => '8056772401431',
			'price'   => 14695,
			'name'    => 'La Germania Prima RIS95C61BX',
			'role'    => 'Godt alternativ',
			'reviews' => [],
			'verdict' => 'Fem brændere med wokblus og én stor ovn på 85 liter med varmluft – plads til flere retter ad gangen.',
			'why'     => <<<'HTML'
<p>La Germania Prima er et 90 cm gaskomfur i rustfrit stål til dig, der vil have masser af plads både på toppen og i ovnen. De fem brændere står under solide riste af støbejern, og wokbrænderen har to trin, så du kan give den fuld skrue til stegning og skrue ned til simring.</p>
<p>Multifunktionsovnen rummer 85 liter. Med varmluft kan du lave flere retter på én gang, uden at de smager af hinanden – godt, når der er mange til middag. De sorte knapper på stålfronten er nemme at aflæse.</p>
<p>Sikkerheden er i orden: Alle brændere har en sikkerhedsventil mod gasudslip og tænder elektrisk med ét tryk. Komfuret er sat op til flaskegas (G30), og dyser til G110 og G20 følger med.</p>
HTML,
			'good'    => [ 'Mange gryder på én gang', 'Wok ved høj varme', 'Store retter i én stor ovn' ],
			'less'    => [ 'Dig, der vil have to ovne' ],
		],
		[
			'ean'     => '6410412639974',
			'price'   => 698,
			'name'    => 'Mustang gasblus med 2 kogeplader',
			'role'    => 'Bedst til sommerhus',
			'reviews' => [],
			'verdict' => 'To kraftige brændere på 3,4 og 4,3 kW, der kan bruges både inde og ude.',
			'why'     => <<<'HTML'
<p>Mustangs gasblus er den enkle løsning, når du har brug for gas uden et helt komfur. Det kan bruges både indendørs og udendørs, så det passer til sommerhuset, campingturen, terrassen eller som ekstra blus, når pladsen på komfuret slipper op.</p>
<p>De to brændere er på 3,4 og 4,3 kW – kraft nok til en stor gryde eller en wok, der skal være rigtig varm. Begge tænder med indbygget piezo-tænding, så du ikke skal lede efter tændstikker, og en flammeafbryder giver ekstra tryghed.</p>
<p>Stellet er i rustfrit stål, der tåler at blive brugt udenfor. Med 5,65 kg og en højde på 10,5 cm er blusset let at flytte og gemme væk. Der er 2 års garanti. Husk, at regulatoren skal købes for sig.</p>
HTML,
			'good'    => [ 'Sommerhus og camping', 'Ekstra blus til wok og paella', 'Let at flytte og gemme væk' ],
			'less'    => [ 'Dig, der vil have en ovn', 'Regulator følger ikke med' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du et gaskomfur</h2>
<h3>Bygas eller flaskegas?</h3>
<p>Tjek, om du har bygas eller skal bruge flaskegas. Mange komfurer kan omstilles med andre dyser. Installationen skal udføres af en autoriseret gasmester.</p>
<h3>Antal brændere og effekt</h3>
<p>Fire brændere er standard; et 90 cm komfur har ofte fem, heriblandt en kraftig wokbrænder.</p>
<h3>Ovnen</h3>
<p>De fleste moderne gaskomfurer har en elektrisk ovn med varmluft, fordi den giver en mere præcis varme end en gasovn.</p>
<p>Se alle <a href="/ovne-apparater/gaskomfur/">gaskomfurer og gasblus</a>, og find den rigtige <a href="/bedste-wokpande/">wokpande</a>.</p>
HTML,
	'faq'      => [
		[ 'Må man selv installere et gaskomfur?', 'Nej, i Danmark skal en gasinstallation udføres af en autoriseret gasmester.' ],
		[ 'Er gas bedre end induktion?', 'Gas giver direkte flamme og varmer op ad panden. Induktion er hurtigere, mere energieffektiv og nemmere at gøre ren.' ],
		[ 'Kan man bruge alle gryder på gas?', 'Ja, gas virker med alle typer gryder og pander.' ],
	],
];
