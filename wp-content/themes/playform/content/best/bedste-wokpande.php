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
			'verdict' => 'Slip-let-wok på 32 cm med keramisk titanium, der tåler alle redskaber og 260 °C i ovnen.',
			'why'     => <<<'HTML'
<p>Scanpan CTX-wokken er til dig, der vil have en wok, hvor maden slipper let, og som du ikke behøver at pakke ind i vat. Med 32 cm i diameter er der god plads til wokretter til hele familien.</p>
<p>Overfladen er en robust keramisk titanium-belægning med non-stick, som tåler alle slags køkkenredskaber – også dem i metal. Bunden virker på alle varmekilder, så den passer til både gas, keramisk kogeplade og induktion. Du kan endda sætte wokken i ovnen op til 260 °C, hvis en ret skal gøres færdig derinde.</p>
HTML,
			'good'    => [ 'Induktion', 'Dig, der vil have slip-let', 'Fra kogeplade til ovn' ],
			'less'    => [ 'Meget høj varme på gas' ],
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
