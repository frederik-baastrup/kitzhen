<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-sodavandsmaskine/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-sodavandsmaskine',
	'title'    => 'Sodavandsmaskine: Vores bud på de 3 bedste',
	'excerpt'  => 'En sodavandsmaskine giver danskvand fra hanen – uden at slæbe flasker. Her er vores bud på de 3 bedste sodavandsmaskiner fra danske butikker.',
	'more_cat' => 'sodavandsmaskine',
	'intro'    => <<<'HTML'
<p>En sodavandsmaskine tilsætter kulsyre til postevand, så du får danskvand på få sekunder. Du sparer penge, plastflasker og slæb fra supermarkedet. Kulsyren kommer fra en udskiftelig cylinder, der kan byttes, når den er tom.</p>
<p>Herunder er vores bud på de 3 bedste sodavandsmaskiner hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '9355973118797',
			'price'   => 1699,
			'name'    => 'Sage InFizz Fusion',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Sodavandsmaskine, der kan tilsætte kulsyre til alle drikke – ikke kun vand.',
			'why'     => <<<'HTML'
<p>Sage InFizz Fusion kan ifølge butikken tilsætte kulsyre til alle drikkevarer, ikke kun vand. Med FusionCap-teknologien styrer du, hvor hurtigt kulsyren tilsættes, så juice og vin ikke skummer over. Valget er vores vurdering ud fra butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Juice, saft og cocktails med bobler', 'Design' ],
			'less'    => [ 'Dig, der kun drikker danskvand' ],
		],
		[
			'ean'     => '5905954887200',
			'price'   => 1310,
			'name'    => 'Bubliq sodavandsmaskine, rustfrit stål',
			'role'    => 'Bedst design',
			'reviews' => [],
			'verdict' => 'Sodavandsmaskine i rustfrit stål inspireret af skandinavisk minimalisme.',
			'why'     => <<<'HTML'
<p>Bubliq kombinerer ifølge butikken tidløst design, holdbarhed og brugervenlighed. Den er i rustfrit stål og inspireret af skandinavisk minimalisme. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Køkkener, hvor den skal stå fremme', 'Holdbarhed' ],
			'less'    => [ 'Lavt budget' ],
		],
		[
			'ean'     => '7290119793778',
			'price'   => 599,
			'name'    => 'SodaStream Fresh',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Manuel sodavandsmaskine fra SodaStream, der ikke skal bruge strøm.',
			'why'     => <<<'HTML'
<p>SodaStream Fresh er ifølge butikken designet til at fylde minimalt på køkkenbordet. Den er manuel, så den ikke skal have strøm og kan stå, hvor du vil. SodaStream-cylindere kan byttes i mange butikker. Valget er vores vurdering ud fra pris.</p>
HTML,
			'good'    => [ 'Danskvand hver dag', 'Lavt budget' ],
			'less'    => [ 'Kulsyre i juice og vin' ],
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
