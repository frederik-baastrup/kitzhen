<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-sodavandsmaskine/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-sodavandsmaskine',
	'date'     => '2023-09-13 09:36:37',
	'title'    => 'Sodavandsmaskine: Vores bud på de 5 bedste',
	'excerpt'  => 'En sodavandsmaskine giver danskvand fra hanen – uden at slæbe flasker. Her er vores bud på de 5 bedste sodavandsmaskiner fra de butikker, vi samarbejder med.',
	'more_cat' => 'sodavandsmaskine',
	'intro'    => <<<'HTML'
<p>En sodavandsmaskine tilsætter kulsyre til postevand, så du får danskvand på få sekunder. Du sparer penge, plastflasker og slæb fra supermarkedet. Kulsyren kommer fra en udskiftelig cylinder, der kan byttes, når den er tom.</p>
<p>Herunder er vores bud på de 5 bedste sodavandsmaskiner fra de butikker, vi samarbejder med.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '9355973118797',
			'price'   => 1699,
			'name'    => 'Sage InFizz Fusion',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Bobler i vin, juice og cocktails – FusionCap slipper trykket langsomt ud, så intet skummer over.',
			'why'     => <<<'HTML'
<p>Sage InFizz Fusion er til dig, der vil mere end danskvand. Den kan tilsætte kulsyre til alle drikke – vin, juice, sodavand og cocktails – så du kan eksperimentere med bobler i alt, hvad der står i køleskabet.</p>
<p>Hjertet er FusionCap med trykaflastning i to trin. Med den røde kontakt slipper du trykket langsomt ud, så drikken ikke bruser over. Kulsyrepatronen sættes i med et enkelt drej-og-lås-greb, og til almindeligt vand er der en hurtig funktion.</p>
<p>Designet er stilrent og tager ikke meget plads på bordet. Håndtaget er solidt, og den magnetiske drypbakke i rustfrit stål er nem at tage af og tørre af. Den fås i flere farver, så den kan matche dit køkken.</p>
HTML,
			'good'    => [ 'Juice, vin og cocktails med bobler', 'Dig, der vil eksperimentere', 'Design i flere farver' ],
			'less'    => [ 'Dig, der kun drikker danskvand' ],
		],
		[
			'ean'     => '5905954887200',
			'price'   => 1310,
			'name'    => 'Bubliq sodavandsmaskine, rustfrit stål',
			'role'    => 'Bedst design',
			'reviews' => [],
			'verdict' => 'Rustfrit stål og glasflaske, der tåler opvaskemaskine – en sodavandsmaskine, der må stå fremme.',
			'why'     => <<<'HTML'
<p>Bubliq i rustfrit stål er til dig, der vil have en sodavandsmaskine, der pynter på køkkenbordet i stedet for at gemme sig i skabet. Designet er enkelt og skandinavisk, og den robuste konstruktion i stål er bygget til mange års brug.</p>
<p>Du får en glasflaske på 1 liter med plads til 650 ml vand op til stregen. Flasken tåler opvaskemaskine, så den er nem at holde ren i hverdagen. Med Turnlock-mekanismen sætter du flasken i med én hånd og drejer en kvart omgang – så er du klar.</p>
<p>Et par tryk, og postevandet er blevet til danskvand. Maskinen passer til alle kulsyrepatroner på 425–450 g med skruegevind, så du ikke er låst til ét mærke.</p>
HTML,
			'good'    => [ 'Køkkener, hvor den skal stå fremme', 'Dig, der foretrækker glasflaske', 'Frit valg af kulsyrepatron' ],
			'less'    => [ 'Kun 650 ml vand pr. flaske' ],
		],
		[
			'ean'     => '7290119793778',
			'price'   => 599,
			'name'    => 'SodaStream Fresh',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Ingen strøm, klik-flaske og Quick Connect – den nemmeste vej til danskvand hver dag.',
			'why'     => <<<'HTML'
<p>SodaStream Fresh er til dig, der bare vil have frisk danskvand uden besvær og uden at slæbe flasker hjem. Den er manuel og skal ikke have strøm, så du kan stille den lige dér, hvor den er mest praktisk. Du bestemmer selv, om der skal lette bobler eller masser af kulsyre.</p>
<p>Flasken klikkes på plads uden at skrue, og med Quick Connect skifter du cylinder på et øjeblik. Den medfølgende flaske på 1 liter tåler opvaskemaskine.</p>
<p>Maskinen vejer kun ca. 1,5 kg og fylder lidt på bordet. Bemærk, at kulsyrecylinderen ikke følger med i sættet.</p>
HTML,
			'good'    => [ 'Danskvand hver dag', 'Lavt budget', 'Steder uden stikkontakt' ],
			'less'    => [ 'Kulsyre i juice og vin', 'Kulsyrecylinder medfølger ikke' ],
		],
		[
			'ean'     => '5709846033696',
			'price'   => 999,
			'name'    => 'Stelton Brus vægmonteret sodavandsmaskine',
			'role'    => 'Bedst til væggen',
			'reviews' => [],
			'verdict' => 'Slank sodavandsmaskine, der hænger på væggen – kun 7 cm bred, designet af Søren Refsgaard.',
			'why'     => <<<'HTML'
<p>Stelton Brus er til dig, der vil have danskvand lige ved hånden uden at ofre plads på køkkenbordet. Maskinen hænger på væggen, så bordet forbliver frit til madlavningen. Den er kun 7 cm bred og 42 cm høj.</p>
<p>Designet er af Søren Refsgaard og følger Steltons enkle stil: slanke, cylindriske former og en smal beholder til kulsyrepatronen. Brussen styrer du med et enkelt vred, så du får præcis den mængde bobler, du kan lide.</p>
<p>Med følger en flaske, der matcher maskinen. Den fås i sort og er en oplagt løsning i køkkener, hvor hver centimeter bordplads tæller.</p>
HTML,
			'good'    => [ 'Små køkkener med lidt bordplads', 'Dig, der går op i dansk design', 'Danskvand hver dag' ],
			'less'    => [ 'Dig, der ikke vil bore i væggen', 'Kun én flaske med' ],
		],
		[
			'ean'     => '7350091792289',
			'price'   => 2099,
			'name'    => 'Aarke Carbonator Pro',
			'role'    => 'Bedst premium',
			'reviews' => [],
			'verdict' => 'Sodavandsmaskine i rustfrit stål med glasflaske og Push-to-Lock, så du betjener den med én hånd.',
			'why'     => <<<'HTML'
<p>Aarke Carbonator Pro er sodavandsmaskinen til dig, der vil have noget solidt og smukt på køkkenbordet. Rammen er i rustfrit stål, og foden er beklædt med gummi, så den står fast uden at ridse bordet.</p>
<p>Med Push-to-Lock klarer du det hele med én hånd: Sæt flasken i, sænk låget og tryk på knappen. Når vandet har fået bobler, glider låget op igen. Ét tryk giver lidt brus, flere tryk giver mere. Maskinen kører uden strøm og passer til gasflasker fra kendte mærker.</p>
<p>Flasken er i glas og rummer 0,8 liter. Den tåler opvaskemaskine, men passer kun til Pro-modellen. Kulsyrepatronen skal købes separat, og der er 2 års garanti.</p>
HTML,
			'good'    => [ 'Dig, der vil have glasflaske frem for plast', 'Køkkener, hvor maskinen skal stå fremme', 'Frit valg af gasflaske' ],
			'less'    => [ 'Kulsyrepatron medfølger ikke', 'Glasflasken passer kun til Pro-modellen' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en sodavandsmaskine</h2>
<h3>Cylindere</h3>
<p>Tjek, hvilke kulsyrecylindere maskinen bruger, og hvor du kan bytte dem. Det er den løbende udgift.</p>
<h3>Flasker</h3>
<p>Flasker i glas kan tåle opvaskemaskine; plastflasker skal ofte vaskes i hånden og skiftes efter nogle år.</p>
<h3>Kun vand eller alle drikke?</h3>
<p>De fleste sodavandsmaskiner må kun bruges med vand. Vil du have bobler i juice og vin, skal du vælge en model lavet til det.</p>
<p>Se alle <a href="/kaffe-drikke/sodavandsmaskine/">sodavandsmaskiner</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvor længe holder en kulsyrecylinder?', 'Typisk 60 liter danskvand, afhængigt af hvor meget kulsyre du kan lide.' ],
		[ 'Kan man komme saft i før kulsyren?', 'Kun i maskiner, der er lavet til det. Ellers tilsætter du saften bagefter.' ],
		[ 'Er en sodavandsmaskine billigere end købt danskvand?', 'Ja, på længere sigt, især hvis du drikker meget danskvand.' ],
	],
];
