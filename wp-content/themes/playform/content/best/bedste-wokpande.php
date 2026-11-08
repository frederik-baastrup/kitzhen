<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-wokpande/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-wokpande',
	'title'    => 'Wokpande: Vores bud på de 5 bedste',
	'excerpt'  => 'En wokpande er dyb med buede sider – perfekt til lynstegning ved høj varme. Her er vores bud på de 5 bedste wokpander fra de butikker, vi samarbejder med.',
	'more_cat' => 'wokpande',
	'intro'    => <<<'HTML'
<p>En wok er dyb med skrå, buede sider, så du kan stege ved meget høj varme og vende maden hurtigt uden at den ryger ud af panden. Grøntsagerne forbliver sprøde, og kødet får stegeskorpe på få minutter. Wokken kan også bruges til at sautere, dampe og fritere.</p>
<p>Herunder er vores bud på de 5 bedste wokpander fra de butikker, vi samarbejder med – i slip-let, støbejern, rustfrit stål og kulstål.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '0083421653208',
			'price'   => 1199,
			'name'    => 'Scanpan CTX wok 32 cm',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Dansk CTX-wok på 32 cm, der tåler metalredskaber, induktion og 260 °C i ovnen – med 5 års garanti.',
			'why'     => <<<'HTML'
<p>Scanpan CTX-wokken er til dig, der vil wokke, uden at maden sætter sig fast – og uden at skulle passe på belægningen hele tiden. Med 32 cm i diameter er der god plads til nudler, grøntsager og kød til hele familien.</p>
<p>CTX står for Ceramic Titanium Extreme: en robust slip-let-overflade af keramisk titanium kombineret med rustfrit stål. Den tåler køkkenredskaber i metal, og varmen fordeles jævnt, så grøntsagerne steger ensartet. Wokken virker på alle kogeplader, også induktion, og kan gå med i ovnen op til 260 °C, hvis retten skal gøres færdig derinde.</p>
<p>Scanpan producerer sine gryder og pander uden for Aarhus. Wokken tåler opvaskemaskine, men har bedst af en tur i hånden. Du får 5 års garanti mod fabrikationsfejl ved normal brug og pleje.</p>
HTML,
			'good'    => [ 'Induktion', 'Dig, der bruger metalredskaber', 'Retter, der skal i ovnen bagefter' ],
			'less'    => [ 'Håndopvask anbefales frem for maskine' ],
		],
		[
			'ean'     => '6970629990171',
			'price'   => 599,
			'name'    => 'Satake wok i støbejern',
			'role'    => 'Bedst til høj varme',
			'reviews' => [],
			'verdict' => 'Stor støbejernswok på 36 cm og 6 liter – med glaslåg, trælåg og bordskåner i kassen.',
			'why'     => <<<'HTML'
<p>Satakes wok i støbejern er til dig, der vil have en wok, der holder på varmen og kan bruges i mange år. Med 36 cm i diameter og plads til 6 liter er den stor nok til wokretter, gryderetter og dampning til hele familien.</p>
<p>Støbejernet holder temperaturen længe og fordeler varmen jævnt, så varmen ikke falder, når du kommer kød og grøntsager i. Wokken virker på alle varmekilder, også induktion. Bunden måler 15,5 cm.</p>
<p>Med følger både et glaslåg, et trælåg og en bordskåner. De to håndtag gør det nemt at bære wokken direkte hen på spisebordet og servere fra den. Husk, at den vejer 7,1 kg.</p>
HTML,
			'good'    => [ 'Høj varme og stegeskorpe', 'Store portioner', 'Servering direkte fra wokken' ],
			'less'    => [ 'Dig, der vil ryste panden – den vejer 7,1 kg' ],
		],
		[
			'ean'     => '5706631258067',
			'price'   => 819,
			'name'    => 'Eva Trio wok 5 liter, rustfrit stål',
			'role'    => 'Bedst i stål',
			'reviews' => [],
			'verdict' => 'Klassisk 5-liters wok i 90 % genanvendt rustfrit stål – til alle varmekilder og opvaskemaskinen.',
			'why'     => <<<'HTML'
<p>Eva Trio-wokken har den klassiske asiatiske form med en stor stegeflade og dybe, buede sider. Det gør den oplagt til lynstegning af kød og grøntsager, og maden bliver i wokken, selv når du rører kraftigt rundt.</p>
<p>Med 32 cm i diameter og plads til 5 liter er der rigeligt plads til en familieportion. Formen fordeler varmen hurtigt og jævnt, og wokken virker på alle varmekilder, også induktion. Den er lavet af 90 % genanvendt rustfrit stål, som er meget holdbart, og den vejer kun 1,27 kg, så den er let at løfte og ryste.</p>
<p>Der er ingen belægning, der kan slides, og når maden er spist, kan wokken komme direkte i opvaskemaskinen.</p>
HTML,
			'good'    => [ 'Familier', 'Dig, der vil have en wok uden belægning', 'Nem opvask' ],
			'less'    => [ 'Æg og ris, der klistrer' ],
		],
		[
			'ean'     => '4895156639053',
			'price'   => 479,
			'name'    => 'GreenPan Barcelona wokpande',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Let wokpande på 28 cm med non-stick, induktionsbund og håndtag i rustfrit stål.',
			'why'     => <<<'HTML'
<p>GreenPan Barcelona er wokpanden til hverdagens hurtige retter – nudler, wokgrøntsager og stegt ris på en travl hverdag. Med 28 cm i diameter passer den til en portion til et par personer eller en lille familie.</p>
<p>Non-stick-belægningen gør, at maden slipper let, og at rengøringen går hurtigt. Pandens bund virker på alle varmekilder, også induktion. Håndtaget er i rustfrit stål og ligger godt i hånden.</p>
<p>Panden er lavet af aluminium og vejer 1,3 kg, så den er let at løfte og ryste, mens du steger.</p>
HTML,
			'good'    => [ 'Hverdagsmad', 'Lavt budget', 'Mindre husstande' ],
			'less'    => [ 'Meget høj varme' ],
		],
		[
			'ean'     => '0048002220606',
			'price'   => 579,
			'name'    => 'Joyce Chen Professional wokpande 30 cm, kulstål',
			'role'    => 'Bedst i kulstål',
			'reviews' => [],
			'verdict' => 'Traditionel wok i 1,8 mm kulstål på 30 cm, der bliver naturligt slip-let, jo mere du bruger den.',
			'why'     => <<<'HTML'
<p>Joyce Chen Professional er wokken til dig, der vil lave mad som i det kinesiske køkken. Joyce Chen var en pioner inden for asiatisk madlavning og gjorde Peking-wokken kendt blandt hjemmekokke. Med 30 cm i diameter passer den til de fleste husstande.</p>
<p>Wokken er lavet af 1,8 mm kulstål, der bliver hurtigt varmt og fordeler varmen jævnt. Du har fuld kontrol over temperaturen og kan lynstege grøntsager, kød og skaldyr. Håndtagene i fenolplast tåler ovnen op til 175 °C, så du kan gøre retten færdig derinde.</p>
<p>Før første brug vasker du vokslaget af og brænder wokken ind med neutral olie. Så får den en naturlig slip-let-overflade, der bliver bedre med tiden. Skyl den i varmt vand uden sæbe, tør den grundigt, og giv den lidt olie.</p>
HTML,
			'good'    => [ 'Ægte wokstegning ved høj varme', 'Dig, der vil have en wok uden belægning', 'Dig, der gider passe den' ],
			'less'    => [ 'Skal brændes ind før brug', 'Tåler ikke opvaskemaskine' ],
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
