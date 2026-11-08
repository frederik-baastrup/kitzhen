<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-grydesaet/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-grydesaet',
	'date'     => '2023-07-19 10:39:11',
	'title'    => 'Grydesæt: Vores bud på de 5 bedste',
	'excerpt'  => 'Et grydesæt giver dig de gryder, du bruger mest, til en lavere pris end enkeltvis. Her er vores bud på de 5 bedste grydesæt fra de butikker, vi samarbejder med.',
	'more_cat' => 'grydesaet',
	'intro'    => <<<'HTML'
<p>Et grydesæt er den nemme måde at få et komplet sæt gryder på – til ny bolig, ny induktionsplade eller som afløser for gamle gryder. Du får typisk en kasserolle, et par gryder i forskellige størrelser og låg, ofte til en lavere pris end hvis du købte dem enkeltvis.</p>
<p>Herunder er vores bud på de 5 bedste grydesæt fra de butikker, vi samarbejder med, lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4009839676024',
			'price'   => 2799,
			'name'    => 'Zwilling Pure grydesæt 5 dele',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Fem dele i 18/10 rustfrit stål fra 1,5 til 6 liter – klar til induktion, ovn og opvaskemaskine.',
			'why'     => <<<'HTML'
<p>Zwilling Pure er sættet, der dækker hele køkkenet på én gang. Du får gryder på 2, 3 og 3,5 liter med låg, en stor suppegryde på 6 liter med låg og en lille kasserolle på 1,5 liter. Det er nok til alt fra hverdagens kartofler og ris til en stor portion suppe eller pasta til hele familien.</p>
<p>Alle dele er lavet af slidstærkt 18/10 rustfrit stål med en tredelt bund, der fordeler varmen hurtigt og jævnt på alle kogeplader – også induktion. Stållågene holder godt på varmen, og håndtagene bliver ved med at være kølige at tage fat i.</p>
<p>Når maden er lavet, kan alle dele komme i opvaskemaskinen. Gryderne tåler også ovnen op til 180 °C, så du kan holde maden varm eller gøre en ret færdig derinde.</p>
HTML,
			'good'    => [ 'Første køkken eller en komplet udskiftning', 'Familier, der laver store portioner', 'Dig, der vil have rustfrit stål, der holder' ],
			'less'    => [ 'Ingen låg til den lille kasserolle', 'Mindre budgetter' ],
		],
		[
			'ean'     => '4895156672043',
			'price'   => 1599,
			'name'    => 'KitchenAid grydesæt 3 dele, rustfrit stål',
			'role'    => 'Bedst mindre sæt',
			'reviews' => [],
			'verdict' => 'Tre gryder i rustfrit stål med aluminiumsbund og glaslåg – tåler ovnen op til 220 °C.',
			'why'     => <<<'HTML'
<p>KitchenAids grydesæt er til dig, der vil have de tre gryder, du bruger mest, i god kvalitet. Du får en kasserolle på 16 cm og gryder med låg på 20 og 24 cm – nok til alt fra sovs og risotto til supper, gryderetter og pasta.</p>
<p>Gryderne er i rustfrit stål med en aluminiumsbund, der varmer hurtigt og jævnt op, og de virker på induktion. Den børstede overflade gør det sværere for madrester at sætte sig fast. De tætsluttende låg i hærdet glas lader dig følge med i maden uden at slippe varme og damp ud, og silikonegrebene på håndtagene giver et sikkert og køligt greb.</p>
<p>Gryderne tåler ovnen op til 220 °C og kan komme i opvaskemaskinen, men vasker du dem i hånden, holder de længere.</p>
HTML,
			'good'    => [ 'Små husstande', 'Dig, der vil kunne se maden gennem låget', 'Fra komfur til ovn' ],
			'less'    => [ 'Store familier, der har brug for flere dele' ],
		],
		[
			'ean'     => '5722000306122',
			'price'   => 2219,
			'name'    => 'Pillivuyt Travo grydesæt 6 dele',
			'role'    => 'Bedst med keramisk belægning',
			'reviews' => [],
			'verdict' => 'Keramisk belægning, der tåler metalredskaber, og gryder i 98 % genbrugsaluminium med glaslåg.',
			'why'     => <<<'HTML'
<p>Pillivuyt Travo er til dig, der vil have gryder, hvor maden slipper let, uden at du skal passe på med redskaberne. Sættet består af to gryder på 2,1 og 3,8 liter og en kasserolle på 1,3 liter – alle med glaslåg, så du kan holde øje med maden.</p>
<p>Den keramiske belægning er slidstærk og kan bruges med redskaber i både plastik, silikone, træ og metal. Kroppen er lavet af 98 % genbrugsaluminium, mens håndtag og bund er i rustfrit stål. Bunden er 3,3 mm tyk og varmer hurtigt og jævnt op på alle varmekilder, også induktion. Det matsorte ydre ser stilrent ud på komfuret.</p>
<p>Gryderne tåler ovnen op til 240 °C, men det gør lågene ikke. Vask dem i hånden, så holder belægningen længst. Pillivuyt giver 2 års garanti.</p>
HTML,
			'good'    => [ 'Dig, der vil have let rengøring', 'Ris, sovs og grød, der ikke må brænde på', 'Dig, der bruger metalredskaber' ],
			'less'    => [ 'Skal vaskes i hånden', 'Lågene tåler ikke ovnen' ],
		],
		[
			'ean'     => '3168430383456',
			'price'   => 1299,
			'name'    => 'Tefal Ingenio Excellence Ceramic 4 dele',
			'role'    => 'Bedst til små køkkener',
			'reviews' => [],
			'verdict' => 'Aftageligt håndtag, så kasserollerne går fra komfur til ovn og bord – og fylder op til 50 % mindre i skabet.',
			'why'     => <<<'HTML'
<p>Tefal Ingenio Excellence er løsningen, hvis skabspladsen er trang. Med et klik tager du håndtaget af, og så kan kasserollerne på 16, 18 og 20 cm stables i hinanden. Det giver op til 50 % mere plads end almindelige kasseroller. Uden håndtag kan de også gå direkte fra komfuret ind i ovnen eller på bordet som serveringsfade.</p>
<p>Håndtaget sidder fast med et stabilt trepunktssystem, kan bære op til 10 kilo og har 10 års garanti. Thermo-Signal viser, når gryden er varm nok til ingredienserne, og Thermo-Fusion Plus-bunden fordeler varmen hurtigt og jævnt – også på induktion.</p>
<p>Den keramiske belægning er uden tilsat PFAS, og den glatte overflade gør, at maden ikke brænder fast. Kasserollerne tåler ovnen op til 250 °C uden håndtag. Vask dem helst i hånden, så holder belægningen længst.</p>
HTML,
			'good'    => [ 'Små køkkener med lidt skabsplads', 'Fra komfur til ovn og bord', 'Dig, der vil undgå tilsat PFAS' ],
			'less'    => [ 'Dig, der ikke vil have et løst håndtag', 'Bør vaskes i hånden' ],
		],
		[
			'ean'     => '3168430323121',
			'price'   => 919,
			'name'    => 'Jamie Oliver by Tefal Quick & Easy grydesæt 6 dele',
			'role'    => 'Bedst til første bolig',
			'reviews' => [],
			'verdict' => 'Tre gryder fra 1,5 til 5,2 liter med låg, titanforstærket non-stick og Thermo-Signal – klar til induktion.',
			'why'     => <<<'HTML'
<p>Jamie Olivers Quick &amp; Easy-sæt fra Tefal er oplagt, hvis du lige er flyttet hjemmefra eller trænger til nye gryder uden at skulle tænke for meget over det. Du får en kasserolle på 1,5 liter (16 cm), en gryde på 3 liter (20 cm) og en gryde på 5,2 liter (24 cm) – og et låg til hver.</p>
<p>Gryderne er i hårdanodiseret aluminium med bund i rustfrit stål, så de fordeler varmen godt og virker på alle komfurer, også induktion. Non-stick-belægningen er forstærket med titanpartikler, så den er ridsefast, og maden slipper let. Thermo-Signal viser dig, når gryden har den rette temperatur.</p>
<p>Håndtagene er i silikone, og alle dele tåler ovnen op til 175 °C med låg. De kan komme i opvaskemaskinen, men håndvask anbefales.</p>
HTML,
			'good'    => [ 'Første bolig og nye køkkener', 'Dig, der vil have non-stick i gryderne', 'Induktion' ],
			'less'    => [ 'Dig, der vil have rustfrit stål hele vejen igennem' ],
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
