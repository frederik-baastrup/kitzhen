<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-mikroovn/ og /rengoering-af-mikroovn/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-mikroovn',
	'title'    => 'Mikroovn: Vores bud på de 5 bedste',
	'excerpt'  => 'En mikroovn varmer rester, optør og laver hurtig mad. Her er vores bud på de 5 bedste mikroovne fra danske butikker – fra enkle modeller til mikroovne med airfryer og varmluft.',
	'more_cat' => 'mikroovn',
	'intro'    => <<<'HTML'
<p>Mikroovnen er et af de mest brugte apparater i køkkenet – til at varme rester, optø, smelte smør og chokolade og lave popcorn. Mange mikroovne kan i dag også grille, bage med varmluft og airfrye, så de kan erstatte både en miniovn og en airfryer.</p>
<p>Herunder er vores bud på de 5 bedste mikroovne hos danske butikker lige nu. Nederst finder du en købsguide til størrelse, funktioner og rengøring.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '9355973001235',
			'price'   => 3440,
			'name'    => 'Sage Combi Wave 3 i 1',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Mikroovn, airfryer og varmluftsovn i én maskine med 10 automatiske indstillinger.',
			'why'     => <<<'HTML'
<p>Sage Combi Wave er tre apparater i ét. Den er både mikroovn, airfryer og varmluftsovn, og den har 10 automatiske indstillinger – fx til at genopvarme lasagne, så den bliver varm hele vejen igennem.</p>
<p>Har du lidt plads på køkkenbordet, kan den spare dig for både en airfryer og en miniovn.</p>
HTML,
			'good'    => [ 'Små køkkener', 'Dig, der vil have mikroovn og airfryer i én' ],
			'less'    => [ 'Dig, der kun skal varme kaffe og rester' ],
		],
		[
			'ean'     => '9355973001198',
			'price'   => 2299,
			'name'    => 'Sage The Compact Wave',
			'role'    => 'Nemmest at bruge',
			'reviews' => [],
			'verdict' => 'Brugervenlig mikroovn på 25 liter med one-touch knapper og 12 forudindstillede programmer.',
			'why'     => <<<'HTML'
<p>Sage Compact Wave er lavet til at være nem. Den kan opvarme, optø og smelte, har one-touch knapper, en låge, der er nem at lukke, 12 forudindstillede programmer og en kapacitet på 25 liter.</p>
HTML,
			'good'    => [ 'Dig, der vil have en enkel mikroovn med gode programmer' ],
			'less'    => [ 'Dig, der vil have grill og varmluft' ],
		],
		[
			'ean'     => '4038437033601',
			'price'   => 1700,
			'name'    => 'Caso MCG25 Chef',
			'role'    => 'Mest for pengene',
			'reviews' => [],
			'verdict' => 'Mikroovn på 25 liter med 10 effektniveauer og 9 automatiske programmer, blandt andet pizza og popcorn.',
			'why'     => <<<'HTML'
<p>Caso MCG25 Chef har en kapacitet på 25 liter, 10 mikrobølgeniveauer og 9 automatiske programmer, herunder pizza, optøning, pasta og popcorn.</p>
<p>Den ligger i midten prismæssigt og giver mange funktioner for pengene.</p>
HTML,
			'good'    => [ 'Familier', 'Mange programmer' ],
			'less'    => [ 'Indbygning' ],
		],
		[
			'ean'     => '8017709356484',
			'price'   => 3190,
			'name'    => 'Smeg MOC01 mikrobølgeovn',
			'role'    => 'Bedst design',
			'reviews' => [],
			'verdict' => 'Mikroovn i Smegs design med grill, optøning, varmholdning og soft close-dør.',
			'why'     => <<<'HTML'
<p>Smeg MOC01 kombinerer mikrobølge, grill, optøning og varmholdning i én model med det karakteristiske Smeg-design og en soft close-dør. Inverterteknologi og roterende tallerken sørger for jævn tilberedning.</p>
<p>Den er et oplagt valg, hvis mikroovnen skal passe til andre Smeg-apparater.</p>
HTML,
			'good'    => [ 'Dig, der lægger vægt på design', 'Grill og varmholdning' ],
			'less'    => [ 'Dig, der vil have mest maskine for pengene' ],
		],
		[
			'ean'     => '4008146037603',
			'price'   => 1099,
			'name'    => 'Severin mikrobølgeovn med keramisk bundplade 800 W',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Mikroovn på 20 liter med grill og keramisk bundplade i stedet for drejetallerken.',
			'why'     => <<<'HTML'
<p>Severins mikroovn har en keramisk bundplade i stedet for den klassiske roterende tallerken, så du slipper for en tallerken, der skal tages ud og vaskes. Den har grillfunktion, 20 liter og drejeknapper til effekt og tid.</p>
<p>En flad bund gør også mikroovnen nemmere at gøre ren og giver plads til større, firkantede fade.</p>
HTML,
			'good'    => [ 'Dig, der vil have en enkel og billig mikroovn', 'Nem rengøring' ],
			'less'    => [ 'Store familier' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en mikroovn</h2>
<h3>Størrelse og effekt</h3>
<p>20 liter er nok til én–to personer. 25–30 liter giver plads til større tallerkener og fade. En højere effekt varmer hurtigere; 800–900 W er standard.</p>
<h3>Grill, varmluft og airfryer</h3>
<p>En kombimikroovn med grill og varmluft kan bage, stege og give sprøde overflader – næsten som en miniovn. Nogle har også en airfryer-funktion. Skal mikroovnen erstatte en ovn, så kig efter varmluft.</p>
<h3>Drejetallerken eller flad bund?</h3>
<p>En drejetallerken giver jævn opvarmning. En flad bund er nemmere at gøre ren og giver plads til firkantede fade.</p>
<h3>Fritstående eller indbygget?</h3>
<p>Fritstående mikroovne står på køkkenbordet. Indbygningsmodeller bygges ind i et skab og kræver en indbygningsramme eller passer til en bestemt skabsstørrelse.</p>
<h3>Sådan gør du mikroovnen ren</h3>
<p>Varm en skål vand med citronsaft eller eddike i et par minutter, og lad lågen være lukket et øjeblik. Dampen løsner snavset, så det kan tørres af med en klud. Brug aldrig skuresvamp på indersiden.</p>
<p>Se alle <a href="/ovne-apparater/mikroovn/">mikroovne</a>, eller sammenlign med en <a href="/bedste-airfryer/">airfryer</a> eller en <a href="/bedste-miniovn-med-varmluft/">miniovn med varmluft</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvor stor skal en mikroovn være?', '20 liter er nok til én–to personer. 25–30 liter er bedre til familier og større fade.' ],
		[ 'Hvad er en kombimikroovn?', 'En mikroovn, der også har grill og ofte varmluft, så den kan bage og stege som en lille ovn.' ],
		[ 'Hvordan rengør man en mikroovn?', 'Varm en skål vand med citron eller eddike, lad dampen virke, og tør indersiden af med en blød klud.' ],
		[ 'Må man komme metal i en mikroovn?', 'Nej, ikke i almindelig mikrobølgetilstand. Metal kan give gnister. Følg producentens anvisning for grill- og varmluftfunktioner.' ],
	],
];
