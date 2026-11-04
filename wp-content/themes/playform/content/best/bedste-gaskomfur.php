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
			'verdict' => '90 cm gaskomfur i rustfrit stål fra italienske Smeg med to elektriske ovne.',
			'why'     => <<<'HTML'
<p>Smeg SCB92MX8 er et stort gaskomfur med to elektriske ovne. Butikken nævner funktioner som eco-tilstand, rotisserie, grill og luftcirkulation. To ovne gør det muligt at lave steg og kage samtidig. Valget er vores vurdering ud fra butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Store familier og madentusiaster', 'Køkkener med plads til 90 cm' ],
			'less'    => [ 'Små køkkener' ],
		],
		[
			'ean'     => '8056772401431',
			'price'   => 14695,
			'name'    => 'La Germania Prima RIS95C61BX',
			'role'    => 'Godt alternativ',
			'reviews' => [],
			'verdict' => '90 cm gaskomfur i rustfrit stål med multifunktionsovn, 5 brændere og støbejernsriste.',
			'why'     => <<<'HTML'
<p>La Germania er et italiensk mærke. Butikken oplyser, at Prima er et 90 cm gaskomfur i rustfrit stål med multifunktionsovn og 5 brændere, og at det har en solid gaskogeplade med robuste støbejernsriste. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Mange gryder på én gang', 'Wok' ],
			'less'    => [ 'Dig, der vil have to ovne' ],
		],
		[
			'ean'     => '6410412639974',
			'price'   => 698,
			'name'    => 'Mustang gasblus med 2 kogeplader',
			'role'    => 'Bedst til sommerhus',
			'reviews' => [],
			'verdict' => 'Gasblus i rustfrit stål med to brændere på 3,4 og 4,3 kW og piezo-tænding.',
			'why'     => <<<'HTML'
<p>Mustangs gasblus er ifølge butikken egnet til både indendørs og udendørs brug. Det har to kogeplader med integreret piezo-tænding og en effekt på 3,4 kW og 4,3 kW. Det er et godt valg til sommerhuset, campingvognen eller som ekstra blus. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Sommerhus og camping', 'Ekstra blus til wok og paella' ],
			'less'    => [ 'Dig, der vil have en ovn' ],
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
