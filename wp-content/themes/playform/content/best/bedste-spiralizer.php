<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-spiralizer-test/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-spiralizer',
	'title'    => 'Spiralizer: Vores bud på de 4 bedste',
	'excerpt'  => 'En spiralizer laver squash, gulerødder og kartofler til spaghetti og bånd. Her er vores bud på de 4 bedste spiralizere fra danske butikker – håndholdte og til køkkenmaskinen.',
	'more_cat' => 'spiralizer',
	'intro'    => <<<'HTML'
<p>En spiralizer skærer grøntsager i lange spiraler og bånd – squash til "zoodles", gulerødder og rødbeder til salater og søde kartofler til ovnbagte curly fries. Det er en nem måde at få flere grøntsager på tallerkenen og skifte pastaen ud med noget lettere.</p>
<p>Herunder er vores bud på de 4 bedste spiralizere hos danske butikker lige nu – fra en lille håndholdt model til tilbehør til køkkenmaskinen. Nederst finder du en guide til typer og grøntsager.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4004094971365',
			'price'   => 450,
			'name'    => 'Westmark Spiro plus',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Bordspiralizer med 4 indstillinger for spiralstørrelse – laver én lang spiral.',
			'why'     => <<<'HTML'
<p>Westmark Spiro plus står på bordet, og du drejer grøntsagen igennem med et håndsving. Den har 4 indstillinger for spiralstørrelse, og resultatet er én lang spiral.</p>
<p>En bordmodel er hurtigere og mere stabil end en håndholdt, når du laver til flere personer.</p>
HTML,
			'good'    => [ 'Familier', 'Squash, gulerødder og kartofler' ],
			'less'    => [ 'Meget små køkkener' ],
		],
		[
			'ean'     => '0719812049434',
			'price'   => 265,
			'name'    => 'OXO spiralizer med 3 blade',
			'role'    => 'Bedst håndholdt',
			'reviews' => [],
			'verdict' => 'Håndholdt spiralizer med tre udskiftelige blade til spaghetti, fettuccine og bånd.',
			'why'     => <<<'HTML'
<p>OXOs håndholdte spiralizer har tre blade, der kan udskiftes, så du kan lave grøntsagspasta, fettuccine eller bred båndspaghetti – fx fettuccine af søde kartofler eller æblechips med knivbladet.</p>
<p>Den fylder næsten ingenting i skuffen og er et godt valg, hvis du laver små portioner.</p>
HTML,
			'good'    => [ 'Små portioner', 'Små køkkener' ],
			'less'    => [ 'Store mængder' ],
		],
		[
			'ean'     => '5413184913854',
			'price'   => 1299,
			'name'    => 'KitchenAid Spiralizer til røremaskine',
			'role'    => 'Bedst til KitchenAid',
			'reviews' => [],
			'verdict' => 'Spiralizer til KitchenAid-røremaskinen – skræller, udkerner og snitter håndfrit.',
			'why'     => <<<'HTML'
<p>Har du en KitchenAid-røremaskine, kan du sætte denne spiralizer på. Den kan skrælle, udkerne og snitte håndfrit, at hoveddelen er helt i metal, og den skal rengøres med en blød klud, da den ikke tåler opvaskemaskine.</p>
<p>Den er den hurtigste løsning til store mængder – og den kan også skrælle og udkerne æbler.</p>
HTML,
			'good'    => [ 'Dig med en KitchenAid-røremaskine', 'Store mængder' ],
			'less'    => [ 'Dig uden KitchenAid' ],
		],
		[
			'ean'     => '5011423196527',
			'price'   => 699,
			'name'    => 'Kenwood KAX700PL Spiralizer',
			'role'    => 'Bedst til Kenwood',
			'reviews' => [],
			'verdict' => 'Spiralizer-tilbehør til Kenwood-køkkenmaskiner, der monteres nemt og hurtigt.',
			'why'     => <<<'HTML'
<p>Kenwood KAX700PL er tilbehør til Kenwoods køkkenmaskiner. Den monteres nemt og hurtigt på maskinen og gør det let at skifte pastaen ud med grøntsager i hverdagen.</p>
<p>Tjek, at den passer til din Kenwood-model, før du køber.</p>
HTML,
			'good'    => [ 'Dig med en Kenwood-køkkenmaskine' ],
			'less'    => [ 'Dig uden Kenwood' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en spiralizer</h2>
<h3>Håndholdt, bordmodel eller tilbehør?</h3>
<p>En håndholdt spiralizer er billig og fylder lidt, men er langsom til store mængder. En bordmodel med håndsving er hurtigere og mere stabil. Tilbehør til køkkenmaskinen er hurtigst, hvis du allerede har en røremaskine, der passer.</p>
<h3>Blade og tykkelse</h3>
<p>Kig efter flere blade, så du kan lave både tynd spaghetti, tykkere nudler og brede bånd.</p>
<h3>Hvilke grøntsager kan man bruge?</h3>
<p>Faste grøntsager er bedst: squash, gulerødder, rødbeder, pastinak, søde kartofler, kartofler, agurk og æbler. Bløde eller hule grøntsager som tomater og peberfrugt fungerer ikke.</p>
<h3>Sikkerhed og rengøring</h3>
<p>Bladene er skarpe. Brug holderen til grøntsagen, så fingrene ikke kommer for tæt på, og rens bladene med en børste.</p>
<p>Se alle <a href="/koekkenmaskiner/spiralizer/">spiralizere</a>, eller se vores guides til <a href="/bedste-groentsagshakker/">grøntsagshakkere</a> og <a href="/bedste-mini-foodprocessor/">mini-foodprocessorer</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er en spiralizer?', 'Et redskab, der skærer grøntsager i lange spiraler og bånd, fx squash til grøntsagspasta.' ],
		[ 'Hvordan tilbereder man squashspaghetti?', 'Steg den kort på panden i et par minutter, eller vend den med varm sovs. Den skal ikke koges som pasta, så bliver den vandet.' ],
		[ 'Hvilke grøntsager kan man spiralisere?', 'Faste grøntsager som squash, gulerødder, rødbeder, søde kartofler, agurk og æbler.' ],
	],
];
