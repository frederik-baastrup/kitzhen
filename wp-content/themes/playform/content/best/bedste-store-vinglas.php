<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/store-vinglas/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-store-vinglas',
	'title'    => 'Store vinglas: Vores bud på de 4 bedste',
	'excerpt'  => 'Store vinglas giver vinen plads til at ånde og ser imponerende ud på bordet. Her er vores bud på de 4 bedste store vinglas fra danske butikker – fra 65 cl til over en liter.',
	'more_cat' => 'vinglas',
	'intro'    => <<<'HTML'
<p>Store vinglas – også kaldet magnumglas eller ballonglas – har en skål på 65 cl eller mere. Den store overflade giver vinen masser af luft, så aromaerne træder frem, og tanninerne i kraftige rødvine bliver blødere. De passer især til bourgogne, pinot noir og fyldige, fadlagrede hvidvine – og så ser de flotte ud på bordet.</p>
<p>Herunder er vores bud på de 4 bedste store vinglas hos danske butikker lige nu. Nederst finder du en guide til størrelse, skab og opvask.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4001836090841',
			'price'   => 739,
			'name'    => 'Zwiesel Enoteca Burgundy 75 cl, 2 stk.',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Bourgogneglas på 75 cl med generøs kuppel og konisk top, der samler aromaerne.',
			'why'     => <<<'HTML'
<p>Zwiesel er en tysk producent af krystalglas til både restauranter og hjem. Enoteca Burgundy er det perfekte glas til røde bourgognevine af høj kvalitet: den generøse kuppel giver vinen masser af luft, mens den koniske top fremhæver aromaerne.</p>
HTML,
			'good'    => [ 'Bourgogne og pinot noir', 'Særlige flasker' ],
			'less'    => [ 'Store selskaber – kun 2 glas pr. pakke' ],
		],
		[
			'ean'     => '5706631232227',
			'price'   => 399,
			'name'    => 'Eva Trio Legio Nova Magnum 90 cl, 6 stk.',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Seks magnumglas på 90 cl fra danske Eva Trio til en meget lav pris pr. glas.',
			'why'     => <<<'HTML'
<p>Eva Trio Legio Nova Magnum er store glas på 90 cl. Glassene har glans og klang og et design, der fremhæver vinens farve.</p>
<p>Seks glas til denne pris gør det muligt at dække op til en hel middag med store glas uden at være bange for at tabe et.</p>
HTML,
			'good'    => [ 'Middage og fester', 'Dig, der vil have store glas uden at give meget' ],
			'less'    => [ 'Dig, der vil have tynd krystal' ],
		],
		[
			'ean'     => '0883314101898',
			'price'   => 348,
			'name'    => 'Chef & Sommelier Mylla 65 cl, 6 stk.',
			'role'    => 'Bedst til kraftig rødvin',
			'reviews' => [],
			'verdict' => 'Rødvinsglas på 65 cl, der giver kraftige rødvine plads til at folde sig ud.',
			'why'     => <<<'HTML'
<p>Chef &amp; Sommelier Mylla har en skål på 65 cl. En kraftfuld rødvin kræver god plads til iltning, og den store glasskål giver vinen stor kontaktflade til luften, så stramme tanniner blødes op, og buketten træder frem.</p>
HTML,
			'good'    => [ 'Kraftige rødvine', 'Hverdag og fest' ],
			'less'    => [ 'Hvidvin' ],
		],
		[
			'ean'     => '9006206911677',
			'price'   => 674,
			'name'    => 'Riedel Sommelier Burgundy Grand Cru 105 cl',
			'role'    => 'Bedst luksus',
			'reviews' => [],
			'verdict' => 'Håndlavet krystalglas fra Riedel på 105 cl – til de helt store bourgogner.',
			'why'     => <<<'HTML'
<p>Riedel Sommelier er glasproducentens klassiske topserie. Glassene er håndlavet i krystal, så hvert glas er unikt, og den store skål lader bourgognevinen udvikle sin smag fuldt ud.</p>
<p>Prisen er pr. glas, så det er et glas til de særlige flasker – eller en gave til en vinelsker.</p>
HTML,
			'good'    => [ 'Gaver til vinelskere', 'De helt store vine' ],
			'less'    => [ 'Hverdag og opvaskemaskinen' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du store vinglas</h2>
<h3>Hvor stort er stort?</h3>
<p>Et almindeligt vinglas rummer 35–50 cl. Store vinglas starter omkring 65 cl, og de største ballonglas rummer over en liter. Du skænker stadig kun en lille mængde – resten er luft til vinen.</p>
<h3>Hvilken vin passer i store glas?</h3>
<p>Store glas passer bedst til aromatiske rødvine som pinot noir og bourgogne, kraftige rødvine, der har brug for luft, og fyldige, fadlagrede hvidvine. Lette hvidvine og rosé har det bedre i mindre glas, så de holder sig kølige.</p>
<h3>Skab og opvaskemaskine</h3>
<p>Mål højden i dit skab og din opvaskemaskine. Store glas kan være for høje til de øverste kurve.</p>
<h3>Tyndt glas eller robust?</h3>
<p>Tynde krystalglas er lette og elegante, men skrøbelige. Er glassene til hverdag og fest med mange gæster, kan et mere robust glas være det bedste valg.</p>
<p>Se alle <a href="/servering/vinglas/">vinglas</a>, og find flere bud i vores guide til <a href="/bedste-roedvinsglas/">rødvinsglas</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvorfor er nogle vinglas så store?', 'Den store skål giver vinen luft, så aromaerne træder frem og tanninerne bliver blødere.' ],
		[ 'Hvor meget skal man skænke i et stort vinglas?', 'Ikke mere end i et almindeligt glas – typisk 12–15 cl. Resten af glasset er luft til vinen.' ],
		[ 'Kan store vinglas komme i opvaskemaskinen?', 'Mange kan, hvis de kan stå sikkert. Tjek producentens anvisning og højden i maskinen.' ],
	],
];
