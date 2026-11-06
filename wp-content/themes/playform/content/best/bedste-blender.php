<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-blender/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-blender',
	'title'    => 'Blender: Vores bud på de 4 bedste',
	'excerpt'  => 'En god blender laver smoothies, supper og saucer og knuser is og nødder. Her er vores bud på de 4 bedste blendere fra danske butikker – fra personlig blender til kraftig højhastighedsblender.',
	'more_cat' => 'blender',
	'intro'    => <<<'HTML'
<p>En blender bruges til smoothies, milkshakes, supper, saucer, pesto, nøddesmør og knust is. Der er stor forskel på en lille personlig blender, hvor du blender direkte i drikkeflasken, og en kraftig højhastighedsblender, der kan lave alt fra varm suppe til mandelmel.</p>
<p>Herunder er vores bud på de 4 bedste blendere hos danske butikker lige nu. Nederst finder du en købsguide til effekt, kande og typer.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '0849369016211',
			'price'   => 4450,
			'name'    => 'Blendtec BLB-575',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Højhastighedsblender på 1560 W med firkantet kande på 2,66 liter og programmer, der kører færdig af sig selv.',
			'why'     => <<<'HTML'
<p>Blendtec BLB-575 er blenderen til dig, der bruger den hver dag – til morgenens smoothie, til suppe og til hummus. Motoren på 1560 W (3 hestekræfter) får knivene til at rotere så hurtigt, at ingredienserne bliver pulveriseret i stedet for bare hakket. Resultatet er en glat og cremet konsistens helt uden klumper.</p>
<p>Kanden på 2,66 liter er firkantet, så indholdet hvirvler rundt og trækkes ned mod knivene af sig selv – du skal ikke stå og skubbe med en ske. Vælg smoothieprogrammet eller et interval på 60 eller 90 sekunder, og gør resten af morgenmaden klar imens. Displayet tæller ned, så du kan se, hvornår den er færdig. Vil du styre selv, har du 5 hastigheder og puls.</p>
<p>Knivene er ekstra tykke og slet ikke skarpe, så du ikke skærer dig, når du gør dem rene. Et rengøringsprogram klarer det meste, og touchpanelet tørres af med en klud. Kanden er i BPA-fri plast.</p>
HTML,
			'good'    => [ 'Smoothies og suppe hver dag', 'Hummus og cremede dips', 'Dig, der vil starte den og gå fra den' ],
			'less'    => [ 'Små budgetter', 'Nøddesmør – her anbefaler Blendtec en særlig kande' ],
		],
		[
			'ean'     => '5413184906979',
			'price'   => 2999,
			'name'    => 'KitchenAid Artisan K400',
			'role'    => 'Mest solid',
			'reviews' => [],
			'verdict' => 'Solid blender i formstøbt metal med 1,4 liter glaskande, smarte programmer og 5 års garanti.',
			'why'     => <<<'HTML'
<p>KitchenAid Artisan K400 er bygget til at blive brugt hver dag i mange år. Foden er i formstøbt metal, og der følger 5 års garanti med. Den er til dig, der vil have en blender, der både klarer hårde ingredienser og ser godt ud på køkkenbordet – den fås i en lang række farver.</p>
<p>Motoren på 1,5 hk registrerer, hvad der er i kanden, og holder selv den rette hastighed. De asymmetriske knive i rustfrit stål giver en jævn konsistens. Du vælger mellem 5 hastigheder eller programmerne til knust is, isdrikke og smoothies – lige fra drejeknappen.</p>
<p>Kanden er i glas og rummer 1,4 liter, så der er plads til suppe og drinks til hele familien. Bagefter klarer selvrensningen det meste af opvasken.</p>
HTML,
			'good'    => [ 'Dig, der vil have en blender, der holder', 'Smoothies, supper og drinks til familien', 'Design i mange farver' ],
			'less'    => [ 'Små køkkener – den vejer 4 kg og er knap 39 cm høj' ],
		],
		[
			'ean'     => '7044876099235',
			'price'   => 2200,
			'name'    => 'Wilfa PowerFuel PB2B-1200',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => '1200 W højhastighedsblender, der kan køre 10 minutter på fuld kraft og varme suppe op – med 10 års motorgaranti.',
			'why'     => <<<'HTML'
<p>Wilfa PowerFuel PB2B-1200 er en kraftig højhastighedsblender til dig, der vil lave mere end smoothies. Den knuser is, nødder, frø og bønner, så du også kan lave nøddesmør og nøddemælk, supper, saucer og hjemmelavet babymad.</p>
<p>Motoren på 1200 W driver fire knive i rustfrit stål op til 22.000 omdrejninger i minuttet. Den kan køre i 10 minutter ved højeste hastighed, og friktionen varmer indholdet op – på cirka 7–8 minutter når det 100 °C. Den medfølgende stamper har et indbygget termometer, så du kan holde øje med temperaturen. Tre programmer klarer varm suppe, iskold smoothie og grøntsagsdrik.</p>
<p>Kanden er i tritan og meget lettere end glas, og gummihåndtaget giver et godt greb. M3 gav den fem ud af fem point i 2021, og der er 10 års garanti på motoren.</p>
HTML,
			'good'    => [ 'Smoothies, nøddemælk og varm suppe', 'Babymad med styr på temperaturen', 'Dig, der vil have meget kraft for pengene' ],
			'less'    => [ 'Den fylder og vejer en del på bordet' ],
		],
		[
			'ean'     => '8006447003002',
			'price'   => 499,
			'name'    => 'Nutribullet Personal Blender 900 W',
			'role'    => 'Bedst personlig blender',
			'reviews' => [],
			'verdict' => 'Kompakt personlig blender med 900 W motor – de fleste smoothies er klar på under et minut.',
			'why'     => <<<'HTML'
<p>Nutribullet Personal Blender er til dig, der vil have en sund smoothie hurtigt om morgenen uden at slæbe en stor blender frem. Du fylder bægeret, blender og drikker direkte fra det – læberingen gør det behageligt.</p>
<p>Motoren på 900 W er kraftig nok til krævende ingredienser, og ekstraktionsbladene får det meste ud af frugt og grønt. Bægeret rummer 900 ml, så der er plads til en ordentlig portion, og de fleste smoothies er klar på under 60 sekunder. Bægeret er i BPA-fri tritan.</p>
<p>Rengøringen tager et øjeblik: Skru knivdelen af og skyl den, og sæt bægrene på øverste hylde i opvaskemaskinen. Den fylder lidt og fås i flere farver.</p>
HTML,
			'good'    => [ 'Morgensmoothies på farten', 'Små køkkener', 'Dig, der vil have nem rengøring' ],
			'less'    => [ 'Supper og store portioner til hele familien' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en blender</h2>
<h3>Personlig blender eller kandeblender?</h3>
<p>En personlig blender er lille og billig og perfekt til én smoothie ad gangen. En kandeblender kan lave større portioner, supper og saucer.</p>
<h3>Effekt og hastighed</h3>
<p>Til grønne smoothies, nødder og is skal du have en kraftig blender. Højhastighedsblendere giver de glatteste resultater og kan ofte lave varm suppe ved friktion.</p>
<h3>Kande og rengøring</h3>
<p>Kander i tritan er lette og knuser ikke; glas er tungere, men ridses ikke. Mange blendere kan rengøres ved at blende lunt vand med en dråbe opvaskemiddel.</p>
<p>Se alle <a href="/koekkenmaskiner/blender/">blendere</a>, eller se vores guides til <a href="/bedste-stavblender/">stavblendere</a> og <a href="/bedste-slow-juicer/">slow juicere</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på en blender og en juicer?', 'En blender blender hele frugten med fibre. En juicer presser saften ud og fjerner frugtkødet.' ],
		[ 'Kan en blender knuse is?', 'De fleste kraftige blendere kan. Tjek producentens anvisning – især for personlige blendere.' ],
		[ 'Hvor mange watt skal en blender have?', 'Til smoothies er 600–900 W nok. Til nødder, is og grønne smoothies er en kraftigere højhastighedsblender bedre.' ],
	],
];
