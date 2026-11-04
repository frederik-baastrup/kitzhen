<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/julestel/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-julestel',
	'title'    => 'Julestel: Vores bud på de 3 bedste',
	'excerpt'  => 'Et julestel gør julebordet festligt. Her er vores bud på de 3 bedste julestel og juletallerkener fra danske butikker – fra Spodes klassiske juletræ til danske Hammershøi.',
	'more_cat' => 'tallerkener',
	'intro'    => <<<'HTML'
<p>Et julestel er det service, der kommer frem i december – til juleaften, julefrokosten og risalamanden. Mange køber et par dele hvert år og bygger stellet op over tid, og et julestel er derfor også en populær gave.</p>
<p>Herunder er vores bud på de 3 bedste julestel hos danske butikker lige nu. Nederst finder du en guide til, hvordan du vælger og bygger et julestel op.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '0749151592971',
			'price'   => 1400,
			'name'    => 'Spode Christmas Tree juleservice 12 dele',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Komplet juleservice til fire med Spodes ikoniske juletræsmotiv.',
			'why'     => <<<'HTML'
<p>Spode Christmas Tree er et af de mest kendte julestel i verden. Butikken oplyser, at sættet består af 12 dele – 4 skåle, 4 middagstallerkener og 4 desserttallerkener – alle med juletræsmotivet fra Spodes klassiske juleserie.</p>
<p>Et sæt til fire er en god måde at komme i gang på, og serien har mange dele som saucekande, fade og kopper, så stellet kan bygges op år efter år. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Et komplet julestel fra start', 'Klassisk, engelsk julestemning' ],
			'less'    => [ 'Dig, der vil have et enkelt, skandinavisk udtryk' ],
		],
		[
			'ean'     => '5703779181455',
			'price'   => 279,
			'name'    => 'Kähler Hammershøi juletallerken 27 cm',
			'role'    => 'Bedst dansk',
			'reviews' => [],
			'verdict' => 'Hvid porcelænstallerken fra danske Kähler med julemotiver af trompeter og trommer.',
			'why'     => <<<'HTML'
<p>Kähler Hammershøi er en af de mest populære danske serier, og juleudgaven bygger videre på den. Butikken beskriver tallerkenen som hvidt porcelæn dekoreret med julemotiver af trompeter og trommer, der hænger fra en løkke.</p>
<p>Fordi den er hvid, passer den også sammen med almindeligt hvidt service – du kan blande den med det, du har. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Julefrokosten', 'Dig, der vil bygge stellet op over tid' ],
			'less'    => [ 'Dig, der vil have et helt sæt på én gang' ],
		],
		[
			'ean'     => '0749151842052',
			'price'   => 249,
			'name'    => 'Spode Blue Italian Christmas Tree tallerken 27 cm',
			'role'    => 'Bedst til blåt stel',
			'reviews' => [],
			'verdict' => 'Juletallerken, der kombinerer Spodes Blue Italian-kant med juletræet i midten.',
			'why'     => <<<'HTML'
<p>Denne tallerken kombinerer ifølge butikken den ikoniske blå kantdekoration fra Spodes Blue Italian-serie med det velkendte Christmas Tree-motiv i midten.</p>
<p>Den er et godt valg, hvis du har blåt stel i forvejen, eller hvis du vil have et julestel, der er lidt mindre rødt og grønt. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Dig med blåt service', 'Et mere afdæmpet julebord' ],
			'less'    => [ 'Dig, der vil have det klassiske røde og grønne' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du et julestel</h2>
<h3>Byg det op over tid</h3>
<p>Et julestel behøver ikke at blive købt på én gang. Mange starter med middagstallerkener og køber skåle, desserttallerkener og fade til de følgende år. Vælg en serie, der har mange dele og bliver produceret i mange år.</p>
<h3>Bland med det, du har</h3>
<p>Juletallerkener med hvid bund passer godt sammen med almindeligt hvidt service. Så kan du nøjes med juletallerkener og bruge dine egne skåle, glas og fade.</p>
<h3>Opvaskemaskine</h3>
<p>Tjek, om stellet tåler opvaskemaskine – det gør det meget nemmere efter en stor julefrokost. Dekorationer med guld og sølv skal ofte vaskes i hånden.</p>
<h3>Gaveidé</h3>
<p>Et julestel er en god gave, fordi det kan bygges op år for år. Spørg, hvilken serie modtageren har, og køb en ny del hvert år.</p>
<p>Se alle <a href="/servering/tallerkener/">tallerkener</a> og <a href="/servering/spisestel/">spisestel</a>, og find glassene til julebordet i guiderne til <a href="/bedste-roedvinsglas/">rødvinsglas</a> og <a href="/bedste-store-vinglas/">store vinglas</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er det mest kendte julestel?', 'Spode Christmas Tree er et af de mest kendte julestel i verden. I Danmark er også Bing & Grøndahl, Royal Copenhagen og Kähler populære.' ],
		[ 'Kan julestel komme i opvaskemaskinen?', 'Mange kan, men tjek producentens anvisning – især hvis stellet har guld- eller sølvkant.' ],
		[ 'Hvor mange dele skal et julestel have?', 'Start med middagstallerkener til det antal, I plejer at være, og byg op med skåle, desserttallerkener og fade.' ],
	],
];
