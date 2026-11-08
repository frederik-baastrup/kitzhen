<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-slow-juicer/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-slow-juicer',
	'date'     => '2023-09-06 07:14:36',
	'title'    => 'Slow juicer: Vores bud på de 5 bedste',
	'excerpt'  => 'En slow juicer presser saften langsomt ud og giver mere juice af grønt end en centrifuge. Her er vores bud på de 5 bedste slow juicere fra de butikker, vi samarbejder med.',
	'more_cat' => 'slow-juicer',
	'intro'    => <<<'HTML'
<p>En slow juicer – også kaldet en koldpresser – presser frugt og grønt med en langsomt roterende snegl i stedet for at rive det i stykker ved høj hastighed. Det giver mere juice af bladgrønt som spinat og grønkål, mindre skum og mindre larm. Til gengæld tager det lidt længere tid.</p>
<p>Herunder er vores bud på de 5 bedste slow juicere fra de butikker, vi samarbejder med.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4038437035117',
			'price'   => 1599,
			'name'    => 'Caso SJW 600 XL',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Stor 130 mm åbning til hele frugter og kun 40 omdrejninger i minuttet for mere saft.',
			'why'     => <<<'HTML'
<p>Caso SJW 600 XL er slow juiceren til dig, der vil have frisk juice hver dag uden en masse forarbejde. Påfyldningsåbningen er hele 130 mm, så du kan komme hele æbler og store grøntsager i uden at hakke dem først. Det sparer tid hver eneste morgen.</p>
<p>Sneglen drejer kun 40 gange i minuttet. Den rolige presning giver op til 30 % mere saft end en traditionel saftpresser, og næringsstofferne bevares bedre. Den støjsvage motor på 250 W klarer både bløde bær og hårde rødbeder, og to beholdere på hver 1 liter – én til juice og én til frugtkød – gør det let at lave til hele familien.</p>
<p>Den har få dele, så den er hurtig at samle og skille ad, og der følger en rengøringsbørste med. Skridsikre fødder og et automatisk stop, når låget åbnes, giver ekstra sikkerhed. Der er 24 måneders garanti.</p>
HTML,
			'good'    => [ 'Juice hver dag', 'Dig, der ikke vil hakke frugten først', 'Store portioner' ],
			'less'    => [ 'Små køkkener – den er 44 cm høj' ],
		],
		[
			'ean'     => '5413184000745',
			'price'   => 2199,
			'name'    => 'KitchenAid SM1JA Slow Juicer',
			'role'    => 'Bedst til KitchenAid',
			'reviews' => [],
			'verdict' => 'Gør din KitchenAid-røremaskine til en slow juicer – med tre sier fra klar juice til sauce.',
			'why'     => <<<'HTML'
<p>Har du allerede en KitchenAid-røremaskine, er SM1JA den smarte vej til frisk juice. Du sætter tilbehøret på maskinen og bruger dens kraftige motor, så du slipper for endnu et apparat på køkkenbordet. Den klarer æbler, citrusfrugter, gulerødder og meget mere.</p>
<p>Råvarerne skæres først af en roterende snitteplade, hvorefter sneglen presser saften ud. Det ekstra brede påfyldningsrør tager store stykker og hele frugter. Med tre forskellige sier bestemmer du selv, hvor meget frugtkød der skal med – fra klar juice til tyk sauce og marmelade – og røremaskinens hastighedsknap styrer tempoet.</p>
<p>I kassen er tre sier, to kander, en opbevaringskasse og en rengøringsbørste. Alle dele undtagen drivenheden kan komme i opvaskemaskinen.</p>
HTML,
			'good'    => [ 'Dig med en KitchenAid-røremaskine', 'Juice, sauce og marmelade', 'Dig, der vil spare plads' ],
			'less'    => [ 'Dig uden KitchenAid – den kræver røremaskinen' ],
		],
		[
			'ean'     => '4008146026034',
			'price'   => 739,
			'name'    => 'Severin 3571 Slowjuicer',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Slank slow juicer med stille motor, 45 omdrejninger i minuttet og dele, der tåler opvaskemaskine.',
			'why'     => <<<'HTML'
<p>Severin 3571 er en nem og billig vej ind i koldpresset juice. Den er slank – kun 14 cm bred – så den finder plads selv i et lille køkken, og den stille motor gør, at du kan lave morgenjuice uden at vække hele huset.</p>
<p>Sneglen drejer med 45 omdrejninger i minuttet og presser saften ud af frugt og grønt, så vitaminer, mineraler og enzymer bevares. Den kan mere end juice: Lav sorbet af frosne bær, syltetøj eller din egen pizzasauce. Juicebeholderen rummer 1 liter og beholderen til frugtkød 1,3 liter.</p>
<p>Alle aftagelige dele tåler opvaskemaskine, så oprydningen går hurtigt. Skridsikre gummifødder holder den på plads på bordet.</p>
HTML,
			'good'    => [ 'Begyndere', 'Små køkkener', 'Sorbet og syltetøj' ],
			'less'    => [ 'Store mængder ad gangen' ],
		],
		[
			'ean'     => '8021098004499',
			'price'   => 849,
			'name'    => 'Braun SJ7000 MultiJuice 7 slowjuicer',
			'role'    => 'Bedst mellemklasse',
			'reviews' => [],
			'verdict' => 'Støjsvag slowjuicer på 2 liter, der klarer både sarte bær og hårde rodfrugter.',
			'why'     => <<<'HTML'
<p>Braun SJ7000 MultiJuice 7 er til dig, der vil gøre frisk juice til en fast del af hverdagen uden at betale for topmodellen. Den har en kapacitet på 2 liter og presser alt fra appelsiner og æbler til bær og grønne grøntsager.</p>
<p>Den robuste motor og udvindingssystemet er bygget til at få mest muligt saft ud af råvarerne, så der går mindre til spilde. Både bløde bær og faste rodfrugter kan komme i, så du frit kan skifte mellem søde frugtjuicer og grøntsagsjuice. Motoren er støjsvag, så morgenjuicen ikke vækker resten af huset.</p>
<p>Bagefter skilles den nemt ad, og de aftagelige dele gør opvasken hurtig. Den fylder 26 × 23,5 cm på bordet.</p>
HTML,
			'good'    => [ 'Juice hver morgen', 'Både frugt og grønt', 'Dig, der vil have en stille maskine' ],
			'less'    => [ 'Dig, der vil komme hele frugter i uden at skære dem' ],
		],
		[
			'ean'     => '8710103795629',
			'price'   => 1599,
			'name'    => 'Philips Viva Collection slowjuicer HR1889/70',
			'role'    => 'Hurtigst at gøre ren',
			'reviews' => [],
			'verdict' => 'Bred 70 mm påfyldning til hele frugter og QuickClean, så maskinen er ren på cirka 90 sekunder.',
			'why'     => <<<'HTML'
<p>Philips Viva Collection er til dig, der vil have frisk juice uden lang forberedelse og lang oprydning. Påfyldningsrøret er 70 mm bredt, så de fleste frugter og store stykker grønt kan komme i hele. Den 150 W motor presser langsomt og under højt tryk, og den klarer alt fra bløde bær til rødbeder og grønkål. Udbyttet er op til 80 % af råvarernes indhold.</p>
<p>Rengøringen er tænkt ind fra starten. Med QuickClean og en lille, glat si kan du skylle den ren på omkring 90 sekunder, og alle aftagelige dele tåler opvaskemaskine. Et indbygget drypstop holder bordet rent mellem glassene.</p>
<p>Den er kun 13,65 cm bred, og beholderen til frugtkød kan stå inde i juicetragten, når den skal stilles væk. HomeID-appen giver idéer til nye opskrifter.</p>
HTML,
			'good'    => [ 'Dig, der hader opvask', 'Hele frugter uden at skære', 'Små køkkener' ],
			'less'    => [ 'Dig, der vil holde prisen nede' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en slow juicer</h2>
<h3>Lodret eller vandret?</h3>
<p>Lodrette slow juicere fylder mindre og er hurtigere. Vandrette er ofte bedre til bladgrønt og hvedegræs.</p>
<h3>Påfyldningsåbning</h3>
<p>En stor åbning sparer dig for at skære frugten i små stykker.</p>
<h3>Rengøring</h3>
<p>Skyl sigten lige efter brug med den medfølgende børste, før frugtkødet tørrer fast.</p>
<p>Se alle <a href="/koekkenmaskiner/slow-juicer/">slow juicere og saftpressere</a>, eller sammenlign med andre <a href="/bedste-juicemaskine/">juicemaskiner</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er en slow juicer?', 'En juicemaskine, der presser saften ud med en langsomt roterende snegl i stedet for at rive frugten ved høj hastighed.' ],
		[ 'Er en slow juicer bedre end en centrifuge?', 'Den giver typisk mere juice af bladgrønt, mindre skum og larmer mindre, men er langsommere.' ],
		[ 'Kan man komme hele æbler i en slow juicer?', 'Kun hvis åbningen er stor nok. Ellers skal de skæres i stykker.' ],
	],
];
