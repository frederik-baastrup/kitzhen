<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-airfryer-test/ og /dobbelt-airfryer/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-airfryer',
	'date'     => '2023-08-28 07:08:22',
	'title'    => 'Airfryer: Vores bud på de 5 bedste',
	'excerpt'  => 'En airfryer giver sprøde pommes frites, kylling og grøntsager med lidt eller ingen olie. Her er vores bud på de 5 bedste airfryere fra danske butikker – også med dobbelt kurv.',
	'more_cat' => 'airfryer',
	'intro'    => <<<'HTML'
<p>En airfryer er en lille varmluftsovn med en kraftig blæser, der blæser varm luft rundt om maden. Det giver en sprød overflade på pommes frites, kyllingevinger, grøntsager og frikadeller – med lidt eller ingen olie. Den er hurtigt varm og bruger ofte mindre strøm end ovnen til små portioner, og derfor er den blevet et af de mest populære køkkenapparater.</p>
<p>Herunder er vores bud på de 5 bedste airfryere hos danske butikker lige nu – fra en billig model til en stor airfryer med to kurve. Nederst finder du en købsguide til størrelse, én eller to kurve, og hvad du skal kigge efter.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '0622356322676',
			'price'   => 1439,
			'name'    => 'Ninja Foodi Max Dual Zone',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Stor airfryer med to uafhængige zoner – lav hele måltidet til op til otte personer på én gang.',
			'why'     => <<<'HTML'
<p>Ninja Foodi Max Dual Zone er en af de mest populære airfryere med to kurve. Du kan lave et komplet måltid til op til otte personer på én gang, og de to uafhængige zoner betyder, at du kan lave to forskellige ting samtidig.</p>
<p>To kurve er den største fordel ved en airfryer til en familie: kartofler i den ene og kylling i den anden, og begge bliver færdige på samme tid.</p>
HTML,
			'good'    => [ 'Familier', 'Hele måltider på én gang' ],
			'less'    => [ 'Små køkkener – den fylder i bredden' ],
		],
		[
			'ean'     => '8720389034565',
			'price'   => 1499,
			'name'    => 'Philips 3000-serien 6,2 liter',
			'role'    => 'Bedst med én kurv',
			'reviews' => [],
			'verdict' => 'Philips’ airfryer på 6,2 liter – fra det mærke, der gjorde airfryeren kendt.',
			'why'     => <<<'HTML'
<p>Philips var et af de første mærker med en airfryer til hjemmet. 3000-serien er en airfryer, der kombinerer avanceret teknologi med høj brugervenlighed, til både hobbykokke og familier, der har brug for hurtige løsninger.</p>
<p>6,2 liter i én kurv er en god størrelse til to–fire personer, og en stor kurv er bedre end to små, hvis du laver hele kyllinger eller store stykker kød.</p>
HTML,
			'good'    => [ 'To–fire personer', 'Store stykker kød' ],
			'less'    => [ 'Dig, der vil lave to ting på én gang' ],
		],
		[
			'ean'     => '0810028586383',
			'price'   => 1699,
			'name'    => 'Instant Vortex Plus ClearCook 5,7 liter',
			'role'    => 'Bedst med vindue',
			'reviews' => [],
			'verdict' => 'Airfryer med ClearCook-vindue, så du kan se maden uden at åbne skuffen.',
			'why'     => <<<'HTML'
<p>Instant Vortex Plus ClearCook har et vindue i skuffen, så du kan følge med i maden uden at trække den ud og lukke varmen ud. Den er pladsbesparende og effektiv til sprød og smagfuld mad med et minimum af olie.</p>
<p>Vinduet lyder som en detalje, men det gør det meget nemmere at ramme det rigtige tidspunkt.</p>
HTML,
			'good'    => [ 'Dig, der vil kunne se maden', 'To–tre personer' ],
			'less'    => [ 'Store familier' ],
		],
		[
			'ean'     => '0622356280822',
			'price'   => 2399,
			'name'    => 'Ninja Double Stack XL 9,5 liter',
			'role'    => 'Bedst til lidt bordplads',
			'reviews' => [],
			'verdict' => 'To kurve stablet oven på hinanden – stor kapacitet uden at fylde i bredden.',
			'why'     => <<<'HTML'
<p>Ninja Double Stack XL løser det største problem ved airfryere med to kurve: de fylder meget i bredden. Her er de to kurve stablet lodret. Du kan lave flere retter på én gang i en rummelig, men pladsbesparende airfryer.</p>
<p>Den er dyrere end Dual Zone, men et godt valg, hvis du har lidt bordplads og stadig vil lave mad til hele familien.</p>
HTML,
			'good'    => [ 'Smalle køkkenborde', 'Familier' ],
			'less'    => [ 'Dig med lavt hængende overskabe – tjek højden' ],
		],
		[
			'ean'     => '7044876023209',
			'price'   => 699,
			'name'    => 'Wilfa Dual Heating 6 liter',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Airfryer på 6 liter med varmelegeme både foroven og forneden – så du ikke behøver vende maden så ofte.',
			'why'     => <<<'HTML'
<p>Wilfa Dual Heating har to varmelegemer. Den har en samlet effekt på 1600 watt plus 500 watt i det nederste element, og du derfor ikke behøver vende maden så ofte.</p>
<p>Til under 1.000 kr. får du en stor kurv og varme fra to sider. Det er et godt sted at starte, hvis du ikke har haft en airfryer før.</p>
HTML,
			'good'    => [ 'Dig, der vil prøve en airfryer uden at give meget', 'To–fire personer' ],
			'less'    => [ 'Dig, der vil lave to ting på én gang' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige airfryer</h2>
<h3>Størrelse</h3>
<p>Kapaciteten angives i liter. 3–4 liter passer til én–to personer, 5–7 liter til to–fire personer, og over 8 liter – ofte fordelt på to kurve – til familier. En stor airfryer fylder meget, så mål pladsen på køkkenbordet og højden op til overskabene.</p>
<h3>Én eller to kurve?</h3>
<p>Med to kurve kan du lave to ting på samme tid ved hver sin temperatur, og mange modeller kan få begge kurve til at blive færdige samtidig. En stor enkelt kurv er bedre til en hel kylling og store stykker kød.</p>
<h3>Kurv eller ovn?</h3>
<p>De fleste airfryere har en skuffe med en kurv. Airfryer-ovne har en låge og flere riste, så du kan bage og lave mere på én gang. Har du brug for en ekstra ovn, så se vores guide til <a href="/bedste-miniovn-med-varmluft/">miniovne med varmluft</a>.</p>
<h3>Rengøring</h3>
<p>Kig efter en kurv og skuffe med slip-let, der kan tåle opvaskemaskine. Et vindue i skuffen gør det nemt at følge med uden at åbne.</p>
<h3>Strøm</h3>
<p>En airfryer bliver hurtigt varm, fordi den er lille, og derfor bruger den typisk mindre strøm end en stor ovn til små portioner.</p>
<p>Se alle <a href="/ovne-apparater/airfryer/">airfryere</a> med aktuelle priser og tilbud.</p>
HTML,
	'faq'      => [
		[ 'Er en airfryer sundere end en frituregryde?', 'Ja, i den forstand at du bruger meget mindre olie – ofte kun en skefuld eller ingen.' ],
		[ 'Hvor stor en airfryer skal jeg have?', '3–4 liter til én–to personer, 5–7 liter til to–fire personer og over 8 liter til familier.' ],
		[ 'Kan man bage i en airfryer?', 'Ja, små kager, boller og muffins kan bages i en airfryer med en bageform, der passer i kurven.' ],
		[ 'Bruger en airfryer meget strøm?', 'Den har høj effekt, men er hurtigt varm og har kort tilberedningstid. Til små portioner bruger den typisk mindre strøm end en almindelig ovn.' ],
		[ 'Hvad er en dobbelt airfryer?', 'En airfryer med to kurve, så du kan lave to retter på én gang ved hver sin temperatur og tid.' ],
	],
];
