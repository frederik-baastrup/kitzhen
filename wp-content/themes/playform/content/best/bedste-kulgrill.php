<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-kulgrill/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-kulgrill',
	'title'    => 'Kulgrill: Vores bud på de 3 bedste',
	'excerpt'  => 'En kulgrill giver den klassiske grillsmag. Her er vores bud på de 3 bedste kulgrills fra danske butikker – fra kuglegrill til transportabel grill.',
	'more_cat' => 'kulgrill',
	'intro'    => <<<'HTML'
<p>Kul giver højere varme og mere røgsmag end gas, og for mange er det at tænde op en del af hyggen. En kulgrill med låg kan både grille direkte over gløderne og indirekte med låget lukket, så du kan lave alt fra bøffer til hel kylling.</p>
<p>Herunder er vores bud på de 3 bedste kulgrills hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '6410413247352',
			'price'   => 1279,
			'name'    => 'Mustang Gourmet 57',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Kuglegrill i emaljeret stål med grillrist på 54 cm og plads til tilbehør i midten af risten.',
			'why'     => <<<'HTML'
<p>Mustang Gourmet 57 er en kulgrill i emaljeret stål med porcelænsemaljeret låg og grillskål. Den har en rustfri multi-grillrist på 54 cm, hvor midten kan udskiftes med tilbehør.</p>
HTML,
			'good'    => [ 'Familier', 'Direkte og indirekte grill' ],
			'less'    => [ 'Lang rygning' ],
		],
		[
			'ean'     => '0062703114705',
			'price'   => 7499,
			'name'    => 'Broil King KEG 5000',
			'role'    => 'Bedst til rygning',
			'reviews' => [],
			'verdict' => 'Isoleret kulgrill på 47 cm med Accu-Temp termometer og sideborde.',
			'why'     => <<<'HTML'
<p>Broil King KEG 5000 har blandt andet et Deluxe Accu-Temp termometer og flytbare sidehylder. KEG-grillen er isoleret, så den holder varmen godt og egner sig til både grill og lang rygning.</p>
HTML,
			'good'    => [ 'Rygning og lang tilberedning', 'Grill hele året' ],
			'less'    => [ 'Lavt budget' ],
		],
		[
			'ean'     => '5710441424598',
			'price'   => 904,
			'name'    => 'HAY Outdoor Market transportabel kulgrill',
			'role'    => 'Bedst til tur',
			'reviews' => [],
			'verdict' => 'Kompakt kulgrill i rustfrit stål designet af Jasper Morrison – til picnic og stranden.',
			'why'     => <<<'HTML'
<p>HAYs transportable kulgrill er designet af Jasper Morrison, lavet af slidstærkt rustfrit stål og har praktiske sidehåndtag, så den er oplagt til spontane ture.</p>
HTML,
			'good'    => [ 'Picnic og strand', 'Design' ],
			'less'    => [ 'Store familier' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en kulgrill</h2>
<h3>Med eller uden låg?</h3>
<p>Med låg kan du grille indirekte og lave større stykker kød og hel kylling. Uden låg er grillen bedst til pølser og bøffer.</p>
<h3>Størrelse</h3>
<p>En rist på 47 cm passer til 4–6 personer, 57 cm til større familier.</p>
<h3>Optænding</h3>
<p>Brug en grillstarter i stedet for tændvæske – det giver bedre smag og er nemmere.</p>
<p>Se alle <a href="/grill/kulgrill/">kulgrills</a>, eller se guiderne til <a href="/bedste-kamado-grill/">kamado grills</a> og <a href="/bedste-gasgrill/">gasgrills</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er bedst: kul eller gas?', 'Kul giver mere røgsmag og højere varme. Gas er hurtigere og nemmere at styre.' ],
		[ 'Hvor lang tid tager det at tænde en kulgrill?', 'Med en grillstarter er kullene klar efter 15–20 minutter.' ],
		[ 'Kan man ryge på en kulgrill?', 'Ja, med låg og indirekte varme. En isoleret grill holder temperaturen bedre.' ],
	],
];
