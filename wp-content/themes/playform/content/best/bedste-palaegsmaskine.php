<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-palaegsmaskine/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-palaegsmaskine',
	'title'    => 'Pålægsmaskine: Vores bud på de 3 bedste',
	'excerpt'  => 'En pålægsmaskine skærer pålæg, ost og brød i tynde, ensartede skiver. Her er vores bud på de 3 bedste pålægsmaskiner fra danske butikker.',
	'more_cat' => 'palaegsmaskine',
	'intro'    => <<<'HTML'
<p>En pålægsmaskine skærer rullepølse, skinke, serrano, ost og brød i tynde, ensartede skiver – præcis så tykke, som du vil have dem. Det er især rart op til julefrokosten, hvis du laver dit eget pålæg, eller hvis du køber store stykker og skærer selv.</p>
<p>Herunder er vores bud på de 3 bedste pålægsmaskiner hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4001627002343',
			'price'   => 2799,
			'name'    => 'Graef Master M90',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Robust pålægsmaskine fra tyske Graef til serrano, hamburgerryg, rullepølse, ost og brød.',
			'why'     => <<<'HTML'
<p>Graef er en tysk producent, der er specialiseret i skæremaskiner. Butikken beskriver Master M90 som en robust pålægsmaskine til friskskåret serrano, hamburgerryg, rullepølse og meget mere – og den kan også bruges til ost, grøntsager og brød. Valget er vores vurdering ud fra butikkens oplysninger og mærkets ry.</p>
HTML,
			'good'    => [ 'Julefrokost og hjemmelavet pålæg', 'Dig, der vil have en maskine, der holder' ],
			'less'    => [ 'Små køkkener' ],
		],
		[
			'ean'     => '4001627038816',
			'price'   => 3000,
			'name'    => 'Graef Mytiny foldbar',
			'role'    => 'Bedst til små køkkener',
			'reviews' => [],
			'verdict' => 'Sammenklappelig skæremaskine fra Graef, der kan ligge i en køkkenskuffe.',
			'why'     => <<<'HTML'
<p>Graef Mytiny kan klappes sammen. Butikken beskriver den som en kompakt og praktisk skæremaskine, der nemt kan opbevares i en køkkenskuffe, når den ikke er i brug. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Små køkkener', 'Dig, der ikke vil have maskinen fremme' ],
			'less'    => [ 'Store mængder' ],
		],
		[
			'ean'     => '7044876020284',
			'price'   => 1099,
			'name'    => 'Wilfa FS-200W',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Kraftig pålægsmaskine med multi-knivblad og tykkelse fra 1 til 15 mm.',
			'why'     => <<<'HTML'
<p>Wilfas pålægsmaskine skærer ifølge butikken nemt kød, ost og brød. Der følger et solidt multi-knivblad i rustfrit stål med, tykkelsen kan justeres mellem 1 og 15 mm, og maskinen kan nemt skilles ad til rengøring. Valget er vores vurdering ud fra pris og butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Kød, ost og brød' ],
			'less'    => [ 'Meget tynde skiver serrano' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en pålægsmaskine</h2>
<h3>Glat eller takket knivblad?</h3>
<p>Et glat blad er bedst til pålæg og ost. Et takket blad er bedst til brød. Mange maskiner kommer med et multiblad, der kan begge dele.</p>
<h3>Skivetykkelse</h3>
<p>Kig efter en maskine, der kan skære helt tyndt – omkring 1 mm – hvis du vil skære serrano og rullepølse.</p>
<h3>Sikkerhed og rengøring</h3>
<p>Brug altid restholderen, så fingrene holdes væk fra bladet. Vælg en maskine, der er nem at skille ad, så bladet og slæden kan gøres grundigt rene.</p>
<p>Se alle <a href="/koekkenmaskiner/palaegsmaskine/">pålægsmaskiner</a>, og lav din egen rullepølse med guiden til <a href="/bedste-rullepoelsepresse/">rullepølsepresser</a>.</p>
HTML,
	'faq'      => [
		[ 'Kan man skære brød på en pålægsmaskine?', 'Ja, med et takket blad eller et multiblad.' ],
		[ 'Hvordan rengør man en pålægsmaskine?', 'Tag stikket ud, skil maskinen ad efter anvisningen, og rengør bladet forsigtigt med en klud fra midten og udad.' ],
		[ 'Kan man skære frossent kød på en pålægsmaskine?', 'Halvfrosset kød er nemmere at skære tyndt, men helt frossent kød kan skade maskinen.' ],
	],
];
