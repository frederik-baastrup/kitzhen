<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-wokpande/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-wokpande',
	'title'    => 'Wokpande: Vores bud på de 4 bedste',
	'excerpt'  => 'En wokpande er dyb med buede sider – perfekt til lynstegning ved høj varme. Her er vores bud på de 4 bedste wokpander fra danske butikker.',
	'more_cat' => 'wokpande',
	'intro'    => <<<'HTML'
<p>En wok er dyb med skrå, buede sider, så du kan stege ved meget høj varme og vende maden hurtigt uden at den ryger ud af panden. Grøntsagerne forbliver sprøde, og kødet får stegeskorpe på få minutter. Wokken kan også bruges til at sautere, dampe og fritere.</p>
<p>Herunder er vores bud på de 4 bedste wokpander hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '0083421653208',
			'price'   => 1199,
			'name'    => 'Scanpan CTX wok 32 cm',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Wok med keramisk titanium-belægning, der passer til alle varmekilder og tåler 260 °C i ovnen.',
			'why'     => <<<'HTML'
<p>Scanpan CTX-wokken har en diameter på 32 cm, passer til alle varmekilder og tåler op til 260 °C i ovnen. Overfladen er en robust keramisk titanium-belægning med non-stick, der tåler alle slags køkkenredskaber.</p>
HTML,
			'good'    => [ 'Induktion', 'Dig, der vil have slip-let' ],
			'less'    => [ 'Meget høj varme på gas' ],
		],
		[
			'ean'     => '6970629990171',
			'price'   => 599,
			'name'    => 'Satake wok i støbejern',
			'role'    => 'Bedst til høj varme',
			'reviews' => [],
			'verdict' => 'Wok i støbejern, der holder varmen længe og kan bruges på alle varmekilder.',
			'why'     => <<<'HTML'
<p>Satakes wok er i støbejern. Den holder den varme temperatur i lang tid, giver en jævn varmefordeling, kan bruges på alle varmekilder og har lang levetid. Den er tung, men varmen falder ikke, når du kommer koldt kød i.</p>
HTML,
			'good'    => [ 'Høj varme og stegeskorpe', 'Induktion' ],
			'less'    => [ 'Dig, der vil ryste panden' ],
		],
		[
			'ean'     => '5706631258067',
			'price'   => 819,
			'name'    => 'Eva Trio wok 5 liter, rustfrit stål',
			'role'    => 'Bedst i stål',
			'reviews' => [],
			'verdict' => 'Wok i rustfrit stål med klassisk form og store, dybe sider.',
			'why'     => <<<'HTML'
<p>Eva Trio-wokken har en klassisk form med stor overflade og dybe, buede sider, der gør den ideel til lynstegning af grøntsager og kød, og formen hjælper med at fordele varmen hurtigt og jævnt.</p>
HTML,
			'good'    => [ 'Familier', 'Dig, der vil have en wok uden belægning' ],
			'less'    => [ 'Æg og ris, der klistrer' ],
		],
		[
			'ean'     => '4895156639053',
			'price'   => 479,
			'name'    => 'GreenPan Barcelona wokpande',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Wokpande med non-stick-belægning fra GreenPan.',
			'why'     => <<<'HTML'
<p>GreenPan Barcelona-wokpanden har en non-stick-belægning, der gør det nemt at tilberede dine yndlingsretter. Den er et godt valg til hverdagens wokretter.</p>
HTML,
			'good'    => [ 'Hverdagsmad', 'Lavt budget' ],
			'less'    => [ 'Meget høj varme' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en wokpande</h2>
<h3>Kulstål, støbejern, stål eller slip-let?</h3>
<p>Kulstål er den traditionelle wok: let, hurtig og bliver naturligt slip-let. Støbejern holder varmen bedst. Rustfrit stål er robust. Slip-let er nemmest, men tåler ikke så høj varme.</p>
<h3>Rund eller flad bund?</h3>
<p>En rund bund er traditionel og bedst på gas med en wokring. På induktion og keramisk kogeplade skal du bruge en wok med flad bund.</p>
<h3>Størrelse</h3>
<p>30–32 cm passer til de fleste husstande.</p>
<p>Se alle <a href="/gryder-pander/wokpande/">wokpander</a>, eller find en kraftig <a href="/bedste-gasbraender-til-madlavning/">gasbrænder</a> til wok udendørs.</p>
HTML,
	'faq'      => [
		[ 'Kan man bruge en wok på induktion?', 'Ja, hvis den har flad, magnetisk bund.' ],
		[ 'Hvordan indbrænder man en wok i kulstål?', 'Varm wokken op, gnid den med et tyndt lag olie, og gentag nogle gange, til overfladen bliver mørk og blank.' ],
		[ 'Hvor stor skal en wok være?', '30–32 cm passer til de fleste husstande.' ],
	],
];
