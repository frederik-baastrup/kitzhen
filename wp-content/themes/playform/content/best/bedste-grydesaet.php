<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-grydesaet/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-grydesaet',
	'title'    => 'Grydesæt: Vores bud på de 4 bedste',
	'excerpt'  => 'Et grydesæt giver dig de gryder, du bruger mest, til en lavere pris end enkeltvis. Her er vores bud på de 4 bedste grydesæt fra danske butikker.',
	'more_cat' => 'grydesaet',
	'intro'    => <<<'HTML'
<p>Et grydesæt er den nemme måde at få et komplet sæt gryder på – til ny bolig, ny induktionsplade eller som afløser for gamle gryder. Du får typisk en kasserolle, et par gryder i forskellige størrelser og låg, ofte til en lavere pris end hvis du købte dem enkeltvis.</p>
<p>Herunder er vores bud på de 4 bedste grydesæt hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4009839676024',
			'price'   => 2799,
			'name'    => 'Zwilling Pure grydesæt 5 dele',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Grydesæt i rustfrit stål med tre gryder, en suppegryde og en kasserolle – med låg.',
			'why'     => <<<'HTML'
<p>Zwilling Pure er et klassisk grydesæt i rustfrit stål. Butikken oplyser, at sættet består af tre gryder med låg, en rummelig suppegryde med låg og en mindre kasserolle, og at det giver gode muligheder for både daglig madlavning og mere krævende retter. Valget er vores vurdering ud fra butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Komplet sæt til familien', 'Rustfrit stål, der holder' ],
			'less'    => [ 'Små budgetter' ],
		],
		[
			'ean'     => '4895156672043',
			'price'   => 1599,
			'name'    => 'KitchenAid grydesæt 3 dele, rustfrit stål',
			'role'    => 'Bedst mindre sæt',
			'reviews' => [],
			'verdict' => 'Kasserolle og to gryder med låg i rustfrit stål med aluminiumsbund for jævn varme.',
			'why'     => <<<'HTML'
<p>KitchenAids sæt består af en kasserolle og to gryder med låg. Butikken oplyser, at gryderne er lavet af rustfrit stål med en aluminiumsbund, der giver en hurtig og jævn varmefordeling. Tre dele er nok til de fleste små husstande. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Små husstande', 'Hverdagsmad' ],
			'less'    => [ 'Store familier' ],
		],
		[
			'ean'     => '5722000306122',
			'price'   => 2219,
			'name'    => 'Pillivuyt Travo grydesæt 6 dele',
			'role'    => 'Bedst med keramisk belægning',
			'reviews' => [],
			'verdict' => 'Grydesæt med slidstærk keramisk belægning og glaslåg – gryder på 2,1 og 3,8 liter og kasserolle på 1,3 liter.',
			'why'     => <<<'HTML'
<p>Pillivuyt Travo indeholder ifølge butikken to gryder med glaslåg på 2,1 og 3,8 liter og en kasserolle med glaslåg på 1,3 liter. Serien har en slidstærk keramisk belægning, som butikken beskriver som meget robust og langtidsholdbar. Glaslågene gør det nemt at holde øje med maden. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Dig, der vil have let rengøring', 'Ris, sovs og grød' ],
			'less'    => [ 'Meget høj varme og metalredskaber' ],
		],
		[
			'ean'     => '3168430383456',
			'price'   => 1299,
			'name'    => 'Tefal Ingenio Excellence Ceramic 4 dele',
			'role'    => 'Bedst til små køkkener',
			'reviews' => [],
			'verdict' => 'Grydesæt med aftageligt håndtag – fra komfur til ovn og bord, og kan stables i skabet.',
			'why'     => <<<'HTML'
<p>Tefal Ingenio har et patenteret, aftageligt håndtag. Butikken forklarer, at et let klik gør det muligt at tage håndtaget af og flytte gryderne direkte fra komfuret ind i ovnen eller stille dem på bordet. Uden håndtag kan de stables og fylder mindre i skabet. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Små køkkener', 'Fra komfur til ovn og bord' ],
			'less'    => [ 'Dig, der ikke vil have et løst håndtag' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du et grydesæt</h2>
<h3>Materiale</h3>
<p>Rustfrit stål er robust og holder i årtier. Gryder med keramisk eller anden slip-let-belægning er nemmere at holde rene, men belægningen slides med tiden. Kig efter en tyk bund, der fordeler varmen – se også guiden til <a href="/bedste-tykbundet-gryde/">tykbundede gryder</a>.</p>
<h3>Induktion</h3>
<p>Har du induktion, så tjek, at alle dele i sættet virker på induktion.</p>
<h3>De rigtige størrelser</h3>
<p>Tænk over, hvad du laver mest. Et godt sæt har en lille kasserolle til sovs, en mellemstor gryde til kartofler og ris og en stor gryde til suppe og pasta.</p>
<p>Se alle <a href="/gryder-pander/grydesaet/">grydesæt</a>, eller find den rigtige <a href="/bedste-stegepande/">stegepande</a> til sættet.</p>
HTML,
	'faq'      => [
		[ 'Hvad skal et grydesæt indeholde?', 'Typisk en kasserolle, en eller to gryder i forskellige størrelser og en stor gryde, alle med låg.' ],
		[ 'Er et grydesæt billigere end enkelte gryder?', 'Ofte ja, men kun hvis du faktisk bruger alle delene.' ],
		[ 'Kan grydesæt bruges på induktion?', 'De fleste nye sæt kan, men tjek altid beskrivelsen.' ],
	],
];
