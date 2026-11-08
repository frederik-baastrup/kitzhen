<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-isterningmaskine/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-isterningmaskine',
	'title'    => 'Isterningmaskine: Vores bud på de 5 bedste',
	'excerpt'  => 'En isterningmaskine laver isterninger på få minutter – uden plads i fryseren. Her er vores bud på de 5 bedste isterningmaskiner fra de butikker, vi samarbejder med.',
	'more_cat' => 'isterningmaskine',
	'intro'    => <<<'HTML'
<p>En isterningmaskine laver isterninger på få minutter, så du aldrig løber tør til fest, sommerdag eller cocktails. Den skal ikke kobles til vand – du fylder bare tanken op – og den fylder ikke i fryseren.</p>
<p>Herunder er vores bud på de 5 bedste isterningmaskiner fra de butikker, vi samarbejder med – fra klassiske isterninger til klar is og bløde nugget-is.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7044876033642',
			'price'   => 1490,
			'name'    => 'Wilfa ICM1-600 Glacier',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Kompakt isterningmaskine i matsort, der laver 12 kg is på 24 timer – med rensefunktion og 5 års garanti.',
			'why'     => <<<'HTML'
<p>Wilfa ICM1-600 Glacier giver dig frisk is lige ved hånden hver dag – til drinks, juice eller et glas iskoldt vand. Den måler kun 20,6 × 26,8 × 28,2 cm, så den kan stå fremme på køkkenbordet eller gemmes i et skab, og det matsorte design er diskret.</p>
<p>Den laver op til 12 kg is på et døgn, og på panelet vælger du store eller små isterninger: 56 store eller 48 små i timen. Maskinen siger til, når isbeholderen er fuld, eller vandtanken skal fyldes, og gennem det gennemsigtige låg kan du følge med uden at åbne.</p>
<p>Isbeholderen kan tages ud, vandtanken er let at tømme og fylde, og den indbyggede rensefunktion starter du fra panelet. Der er 5 års garanti.</p>
HTML,
			'good'    => [ 'Drinks og isvand hver dag', 'Køkkenbordet – den fylder lidt', 'Dig, der vil have nem rengøring' ],
			'less'    => [ 'Store fester, hvor den skal klare isen alene' ],
		],
		[
			'ean'     => '4038437033014',
			'price'   => 969,
			'name'    => 'Caso IceMaster PRO',
			'role'    => 'Hurtigst',
			'reviews' => [],
			'verdict' => 'Isterningmaskine i rustfrit stål med 2,2 liter vandtank – nye isterninger på 6–13 minutter.',
			'why'     => <<<'HTML'
<p>Caso IceMaster PRO er til dig, der ofte har gæster og ikke vil løbe tør for is. Den laver 500 gram isterninger i timen, og en ny portion er klar på 6–13 minutter. Vandtanken rummer 2,2 liter, så du ikke skal fylde efter hele tiden.</p>
<p>Du vælger mellem to størrelser isterninger på touch-panelet. Kabinettet er i rustfrit stål, og det sorte låg har et vindue, så du kan se, hvor langt den er. Når kurven er fuld, eller tanken er tom, slukker den selv.</p>
<p>Isterningkurven kan tages ud, så du kan bære isen direkte hen til gæsterne. Den bruger kun 90 W.</p>
HTML,
			'good'    => [ 'Fester og sommer', 'Dig, der vil have isterninger hurtigt', 'Køkkener i rustfrit stål' ],
			'less'    => [ 'Små køkkener – den er knap 36 cm dyb og vejer 9,4 kg' ],
		],
		[
			'ean'     => '7350101118047',
			'price'   => 599,
			'name'    => 'NOD isterningmaskine',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Kompakt isterningmaskine med op til 12 kg is i døgnet og 8 isterninger på 6–8 minutter – også til campingvognen.',
			'why'     => <<<'HTML'
<p>NOD isterningmaskine er til dig, der vil have is til drinks uden at bruge mange penge – derhjemme, i sommerhuset, i campingvognen eller på båden. Den måler 27,5 × 20,6 × 26,6 cm, så den finder plads, også hvor der er trangt.</p>
<p>Den laver op til 12 kg is på et døgn, og de første 8 isterninger er klar på 6–8 minutter. På panelet vælger du små eller store kugleformede isterninger, og maskinen siger til, når isen skal tages ud, eller vandtanken skal fyldes. Det gennemsigtige låg lader dig følge med.</p>
<p>Til rengøring kører du rensefunktionen med vand og eddike, og afløbshullet i bunden gør det hurtigt at tømme den.</p>
HTML,
			'good'    => [ 'Sommerhus, campingvogn og båd', 'Lavt budget', 'Spontane fester' ],
			'less'    => [ 'Dig, der vil have et kabinet i stål' ],
		],
		[
			'ean'     => '4038437034035',
			'price'   => 1299,
			'name'    => 'Caso Clear Ice Advanced',
			'role'    => 'Klare isterninger',
			'reviews' => [],
			'verdict' => 'Vælg mellem klare og matte isterninger – ny portion på 8–12 minutter og op til 8,8 kg is i døgnet.',
			'why'     => <<<'HTML'
<p>Caso Clear Ice Advanced er til dig, der vil have is, der ser lige så godt ud, som den smager. Du vælger selv mellem klare og klassiske matte isterninger. Den klare is smelter langsommere og påvirker smagen i glasset mindre – oplagt til drinks og gode spiritusser. Den matte is køler hurtigt og er god til hverdagens sodavand.</p>
<p>En ny portion er klar på cirka 8–12 minutter, og maskinen laver op til 8,8 kg is i døgnet. Kompressoren arbejder støjsvagt, så den ikke larmer, når gæsterne er kommet, og den kompakte størrelse gør den nem at give plads.</p>
<p>Vandtanken rummer 1,5 liter, og den indbyggede selvrensning gør vedligeholdelsen nem.</p>
HTML,
			'good'    => [ 'Cocktails og drinks', 'Dig, der vil vælge mellem klar og mat is', 'Støjsvag drift' ],
			'less'    => [ 'Dig, der skal bruge mest is – den laver 8,8 kg i døgnet' ],
		],
		[
			'ean'     => '7044876033703',
			'price'   => 2799,
			'name'    => 'Wilfa Frost Nugget ICM2B-N500',
			'role'    => 'Bløde nugget-is',
			'reviews' => [],
			'verdict' => 'Laver bløde, porøse nugget-is i stedet for isterninger – første is på cirka 8 minutter og op til 12 kg i døgnet.',
			'why'     => <<<'HTML'
<p>Wilfa Frost Nugget laver ikke almindelige isterninger. Den laver nugget-is: små, bløde og luftige stykker på cirka 5–7 mm i diameter og 11 mm i længden. Den porøse is køler drikken effektivt, smelter jævnt og er rar at tygge på. Den er oplagt til iskaffe, smoothies, cocktails og et koldt glas vand.</p>
<p>De første is er klar efter cirka 8 minutter. Derefter laver den omkring 500 g i timen og op til 12 kg i døgnet. Du starter den med én knap, lamper viser, når der skal fyldes vand på, eller beholderen skal tømmes, og gennem det gennemsigtige låg kan du følge med.</p>
<p>Kabinettet er i børstet rustfrit stål og måler 23 × 31 × 31 cm. Selvrensningen klares med et tryk, vandtanken på 1,5 liter tømmes via en aftapningsprop, og en isske følger med.</p>
HTML,
			'good'    => [ 'Dig, der elsker blød nugget-is', 'Iskaffe, smoothies og cocktails', 'Hjemmebaren' ],
			'less'    => [ 'Dig, der vil have klassiske, faste isterninger' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en isterningmaskine</h2>
<h3>Kapacitet og hastighed</h3>
<p>Se på, hvor mange kilo is maskinen laver på et døgn, og hvor hurtigt den første portion er klar. 10–12 kg pr. døgn er rigeligt til de fleste.</p>
<h3>Istype</h3>
<p>De fleste maskiner laver klassiske, matte isterninger. Nogle kan også lave klar is, der smelter langsommere. Nugget-is er noget helt andet: små, bløde og porøse stykker, der er rare at tygge på og passer godt til iskaffe, smoothies og cocktails.</p>
<h3>Isen smelter igen</h3>
<p>De fleste isterningmaskiner fryser ikke isen, de laver den. Isen i kurven smelter langsomt og bliver til vand, der bruges igen. Kom isen i fryseren, hvis du vil gemme den.</p>
<h3>Rengøring</h3>
<p>Tøm vandtanken, når maskinen ikke bruges, og rengør den jævnligt, så der ikke kommer kalk og bakterier.</p>
<p>Se alle <a href="/kaffe-drikke/isterningmaskine/">isterningmaskiner</a>, og hold drikkene kolde med et <a href="/bedste-koeleskab-til-drikkevarer/">køleskab til drikkevarer</a>.</p>
HTML,
	'faq'      => [
		[ 'Skal en isterningmaskine kobles til vand?', 'Nej, de fleste til hjemmet har en vandtank, du fylder selv.' ],
		[ 'Hvorfor smelter isen i isterningmaskinen?', 'Fordi den ikke er en fryser. Smeltevandet løber tilbage og bliver brugt til nye isterninger.' ],
		[ 'Hvor hurtigt laver en isterningmaskine is?', 'Typisk 6–13 minutter for den første portion.' ],
	],
];
