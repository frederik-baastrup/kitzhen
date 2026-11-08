<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-palaegsmaskine/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-palaegsmaskine',
	'title'    => 'Pålægsmaskine: Vores bud på de 4 bedste',
	'excerpt'  => 'En pålægsmaskine skærer pålæg, ost og brød i tynde, ensartede skiver. Her er vores bud på de 4 bedste pålægsmaskiner fra de butikker, vi samarbejder med.',
	'more_cat' => 'palaegsmaskine',
	'intro'    => <<<'HTML'
<p>En pålægsmaskine skærer rullepølse, skinke, serrano, ost og brød i tynde, ensartede skiver – præcis så tykke, som du vil have dem. Det er især rart op til julefrokosten, hvis du laver dit eget pålæg, eller hvis du køber store stykker og skærer selv.</p>
<p>Herunder er vores bud på de 4 bedste pålægsmaskiner fra de butikker, vi samarbejder med.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4001627002343',
			'price'   => 2799,
			'name'    => 'Graef Master M90',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Solid metalmaskine med glat 170 mm klinge og skiver fra helt tynde op til 20 mm.',
			'why'     => <<<'HTML'
<p>Graef Master M90 er pålægsmaskinen til dig, der vil have friskskåret serrano, hamburgerryg og rullepølse på frokostbordet. Den klarer også ost, grøntsager og brød, så den bliver brugt langt oftere end til jul.</p>
<p>Maskinen er bygget i metal og står på en robust glasplade, så den står stille, mens du skærer. Den glatte klinge på 170 mm i solidt stål giver rene skiver, og med drejeknappen stiller du tykkelsen fra 0 til 20 mm. Den hælder 30°, så selv de tyndeste skiver glider let af klingen.</p>
<p>I kassen følger en madholder, et kombinationsværktøj, en knivsliber og et gennemsigtigt plastfad. Den måler 43 × 36,5 × 34,5 cm og vejer 10 kg, så den fortjener en fast plads på bordet.</p>
HTML,
			'good'    => [ 'Julefrokost og hjemmelavet pålæg', 'Helt tynde skiver serrano', 'Dig, der vil have en maskine i metal' ],
			'less'    => [ 'Små køkkener – den vejer 10 kg' ],
		],
		[
			'ean'     => '4001627038816',
			'price'   => 3000,
			'name'    => 'Graef Mytiny foldbar',
			'role'    => 'Bedst til små køkkener',
			'reviews' => [],
			'verdict' => 'Klappes sammen og lægges i skuffen – og skærer stille og roligt skiver fra 0 til 15 mm.',
			'why'     => <<<'HTML'
<p>Graef Mytiny er løsningen, hvis du drømmer om friskskåret pålæg, men ikke har plads til en stor maskine. Den klapper sammen, så den kan ligge i en køkkenskuffe, og når den er slået ud, er den så pæn, at den gerne må blive stående fremme.</p>
<p>Knivene er i rustfrit stål, og skivetykkelsen stiller du fra 0 til 15 mm. Med drejeknappen vælger du mellem et hurtigt skær og kontinuerlig drift, alt efter om du skal bruge et par skiver ost eller et helt fad pålæg. Motoren kører normalt på 45 W og kan give op til 170 W, og den er støjsvag.</p>
<p>Den måler 23,4 × 18,2 × 34,5 cm og vejer 3,51 kg, så den er let at flytte rundt i køkkenet. Der er 24 måneders garanti.</p>
HTML,
			'good'    => [ 'Små køkkener', 'Dig, der ikke vil have maskinen fremme', 'Et stille køkken' ],
			'less'    => [ 'Skiver tykkere end 15 mm' ],
		],
		[
			'ean'     => '7044876020284',
			'price'   => 1099,
			'name'    => 'Wilfa FS-200W',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Kraftig 200 W-maskine med 19 cm multiklinge, der skærer kød, ost og brød lige godt.',
			'why'     => <<<'HTML'
<p>Wilfa FS-200W er den nemme vej til friskskåret pålæg uden at bruge en formue. Den skærer kød, ost og brød, så du kan skære rugbrødet, rullepølsen og osten på samme maskine.</p>
<p>Motoren på 200 W giver kræfter nok til både faste pølser og et groft brød. Klingen er et solidt multiblad i rustfrit stål med en diameter på 19 cm, og du stiller selv tykkelsen mellem 1 og 15 mm – fra tynde skiver skinke til tykke skiver brød.</p>
<p>Når du er færdig, skiller du maskinen ad, så det er nemt at komme til alle hjørner og gøre den ren. Den vejer 5 kg og står derfor stabilt på bordet.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Kød, ost og brød', 'Nem rengøring' ],
			'less'    => [ 'Meget tynde skiver serrano – den går ned til 1 mm' ],
		],
		[
			'ean'     => '4004822501093',
			'price'   => 550,
			'name'    => 'Ritter Markant 01',
			'role'    => 'Billigst',
			'reviews' => [],
			'verdict' => 'Kompakt, foldbar pålægsmaskine fra tyske Ritter med 17 cm klinge og skiver op til 14 mm.',
			'why'     => <<<'HTML'
<p>Ritter Markant 01 er den billige og pladsbesparende vej til hjemmeskåret pålæg. Den skærer skinke, ost og brød i helt tynde skiver eller tykkere skiver op til 14 mm, så du selv bestemmer, hvordan pålægget skal være.</p>
<p>Klingen er takket og 17 cm i diameter, og motoren yder 65 watt. Maskinen er i hvid plast og vejer kun 1,93 kg, så den er let at tage frem og sætte væk igen.</p>
<p>Det bedste er, at du kan klappe den sammen. Sammenklappet er den kun 10,5 cm bred og kan stå i et skab eller på en hylde. Den passer til dig, der skærer pålæg en gang imellem og ikke vil have en stor maskine stående fremme.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Små køkkener – den kan klappes sammen', 'Pålæg, ost og brød en gang imellem' ],
			'less'    => [ 'Dig, der vil have en maskine i metal', 'Skiver tykkere end 14 mm' ],
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
