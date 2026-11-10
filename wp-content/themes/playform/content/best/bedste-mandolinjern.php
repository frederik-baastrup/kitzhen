<?php
/**
 * Ny købsguide (10. nov. 2026) ud fra søgeordet "mandolinjern" (også "japansk mandolinjern"). Kun mandolinjern –
 * spiralizere har deres egen guide. Fakta kun fra butikkernes produktdata og producenternes egne sider.
 * Anmeldelser: America's Test Kitchen (Equipment Review: Mandolines), læst 10. nov. 2026. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-mandolinjern',
	'date'     => '2026-11-10 10:00:00',
	'keyword'  => 'mandolinjern',
	'title'    => 'Mandolinjern: Vores bud på de 5 bedste mandolinjern',
	'excerpt'  => 'Med et mandolinjern skærer du kartofler, agurk og rodfrugter i helt ens skiver på få sekunder. Her er vores bud på de 5 bedste mandolinjern fra de butikker, vi samarbejder med – fra det japanske klassiske jern til modellen, der også laver terninger.',
	'more_cat' => 'mandolinjern',
	'intro'    => <<<'HTML'
<p>Flødekartofler, hjemmelavede chips, sprød agurkesalat, tynde skiver fennikel til salaten. Med en kniv tager det tid, og skiverne bliver aldrig helt ens. Med et mandolinjern går det på sekunder, og hver skive får samme tykkelse – så de også bliver færdige på samme tid i ovnen.</p>
<p>Herunder er vores bud på de 5 bedste mandolinjern lige nu: et stabilt allround-jern, et japansk mandolinjern med et meget skarpt blad, et jern med V-blad, et lille jern med keramisk blad og et jern i stål, der også skærer terninger. Nederst finder du en købsguide til blade, sikkerhed og rengøring.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '719812687995',
			'price'   => 699,
			'name'    => 'OXO Good Grips Chef\'s Mandoline 2.0',
			'role'    => 'Bedst samlet',
			'reviews' => [
				[ 'America\'s Test Kitchen', 'https://www.americastestkitchen.com/equipment_reviews/1511-mandolines' ],
			],
			'verdict' => 'Stabilt mandolinjern på ben med op til 21 snit og en tydelig drejeknap til tykkelsen.',
			'why'     => <<<'HTML'
<p>OXO Chef's Mandoline 2.0 er til dig, der vil have et mandolinjern, der kan det hele og er nemt at gå til. Du stiller tykkelsen i trin på en halv millimeter, og med lige og bølgede klinger samt indbyggede klinger til julienne og pommes frites kan jernet lave op til 21 forskellige snit.</p>
<p>America's Test Kitchen har haft netop denne model med i en sammenligning af mandolinjern. Her fik den topkarakteren "highly recommended" og blev kaldt den mest brugervenlige: drejeknappen er tydelig, og jernet står stabilt på sine ben. Til gengæld var bladet ikke helt så skarpt som Benriners, fibrøse grøntsager kunne drille, og jernet fylder i skuffen.</p>
HTML,
			'good'    => [ 'Dig, der vil have mange snit i ét jern', 'Begyndere, der vil have styr på tykkelsen' ],
			'less'    => [ 'Små køkkener med lidt skuffeplads' ],
		],
		[
			'ean'     => '4976654641110',
			'price'   => 360,
			'name'    => 'Benriner mandolinjern 6,4 cm',
			'role'    => 'Bedste japanske',
			'reviews' => [
				
			],
			'verdict' => 'Det klassiske japanske mandolinjern med håndslebet blad, trinløs tykkelse og tre ekstra blade til strimler.',
			'why'     => <<<'HTML'
<p>Benriner er et klassisk japansk mandolinjern i en enkel og let udførelse. Bladet er håndslebet og meget skarpt, og du stiller tykkelsen trinløst fra 0,5 til 10 mm. Med i æsken er tre ekstra blade, så du også kan skære strimler.</p>
<p>Fladen er cirka 6,4 cm bred, så jernet er let at styre og fylder ikke meget i skuffen. Den smalle flade passer bedst til agurk, gulerod, radiser og andre mindre grøntsager – skal du skære store kartofler eller kålhoveder, er et bredere jern mere behageligt at arbejde med.</p>
HTML,
			'good'    => [ 'Dig, der vil have helt tynde skiver', 'Dig, der vil have et japansk mandolinjern' ],
			'less'    => [ 'Store grøntsager', 'Dig, der vil have en god håndbeskytter med' ],
		],
		[
			'ean'     => '719812025575',
			'price'   => 343,
			'name'    => 'OXO Good Grips V-Blade mandolinjern',
			'role'    => 'Bedst med V-blad',
			'reviews' => [],
			'verdict' => 'Mandolinjern med V-formet blad og fire klinger til skiver, bølgesnit, pommes frites og julienne.',
			'why'     => <<<'HTML'
<p>Et V-formet blad skærer fra to sider på én gang, så selv bløde tomater og modne frugter glider gennem uden at blive mast. OXO Good Grips V-Blade har fire klinger: lige skiver, bølgesnit, pommes frites og julienne. Tykkelsen stiller du med et greb på siden, så du hurtigt skifter mellem tynde og tykke skiver.</p>
<p>Overfladen er riflet, så råvarerne ikke klæber fast, og madholderen holder fingrene væk fra bladet. Benene foldes ind, og jernet låses, når du lægger det væk, med klingerne opbevaret på selve jernet. Selve jernet og madholderen tåler opvaskemaskine – klingerne vaskes i hånden.</p>
HTML,
			'good'    => [ 'Tomater og bløde råvarer', 'Hjemmelavede pommes frites' ],
			'less'    => [ 'Dig, der vil have det skarpeste japanske blad' ],
		],
		[
			'ean'     => '4960664452965',
			'price'   => 229,
			'name'    => 'Kyocera mandolinjern med keramisk blad',
			'role'    => 'Bedste kompakte',
			'reviews' => [],
			'verdict' => 'Lille, let mandolinjern med keramisk blad, fire tykkelser og håndbeskytter – nemt at have i skuffen.',
			'why'     => <<<'HTML'
<p>Kyoceras mandolinjern er det enkle valg til dig, der mest skal lave tynde skiver. Bladet er keramisk – lavet af zirkonia – og ruster ikke. Med drejeknappen vælger du mellem fire tykkelser fra 0,5 til 3 mm, og det er nok til agurkesalat, kartoffelchips, radiser og tynde skiver løg.</p>
<p>Jernet er lille og let, så det ligger fint i skuffen og er hurtigt fundet frem. Med følger en håndbeskytter, der holder råvaren fast, og jernet tåler opvaskemaskine. Skal du lave strimler eller tykke skiver til gratin, er et af de større jern bedre. Til hverdagens salater er det svært at gøre det enklere.</p>
HTML,
			'good'    => [ 'Små køkkener', 'Tynde skiver til salater' ],
			'less'    => [ 'Julienne og pommes frites', 'Tykke skiver' ],
		],
		[
			'ean'     => '3011242012017',
			'price'   => 1299,
			'name'    => 'De Buyer La Mandoline Revolution',
			'role'    => 'Bedst til terninger',
			'reviews' => [
				[ 'America\'s Test Kitchen', 'https://www.americastestkitchen.com/equipment_reviews/1511-mandolines' ],
			],
			'verdict' => 'Robust mandolinjern i rustfrit stål, der skærer skiver, strimler i tre størrelser og terninger.',
			'why'     => <<<'HTML'
<p>De Buyer Revolution er til dig, der laver meget mad og vil have et jern, der kan mere end skiver. Du skærer glatte eller riflede skiver op til 10 mm, strimler på 2, 4 og 10 mm – og terninger i de samme størrelser. Jernet er i rustfrit stål og har en madholder, der beskytter hånden, og skridsikre ben, der foldes ind.</p>
<p>America's Test Kitchen gav det "recommended" og roste det solide, næsten helt metalliske jern, de jævne skiver og strimler og den gode håndbeskytter. Til gengæld efterlod den riflede side af bladet synlige streger på skiverne, og jernet kunne ikke skære papirtynde skiver.</p>
HTML,
			'good'    => [ 'Dig, der laver meget mad', 'Terninger og strimler', 'Dig, der vil have et jern i stål' ],
			'less'    => [ 'Papirtynde skiver', 'Små budgetter' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du det rigtige mandolinjern</h2>
<p>Et mandolinjern er et skarpt blad sat i en plade, som du fører grøntsagen hen over. Det lyder enkelt, men bladet, tykkelsesindstillingen og håndbeskytteren gør stor forskel.</p>
<h3>Lige blad eller V-blad</h3>
<p>Det lige blad er det klassiske. Det sidder ofte på skrå og giver rene, glatte skiver. Et V-blad skærer fra to sider og er godt til bløde råvarer som tomater. Nogle jern har også et bølget blad til riflede skiver og bølgechips.</p>
<h3>Japansk mandolinjern</h3>
<p>Et japansk mandolinjern er typisk let, enkelt og har et meget skarpt blad. Det er populært hos kokke, fordi det giver helt tynde skiver. Til gengæld er det ofte smallere, og håndbeskytteren er sjældent det stærke punkt.</p>
<h3>Tykkelse og ekstra blade</h3>
<p>Kig efter, hvordan du stiller tykkelsen. En drejeknap med markeringer er nem at ramme igen, mens en trinløs skrue giver fin kontrol. Ekstra blade til julienne, pommes frites og terninger gør jernet mere alsidigt – men det fylder også mere. Skal du lave lange grøntsagsspaghetti, er en <a href="/bedste-spiralizer/">spiralizer</a> det rigtige redskab.</p>
<h3>Sikkerhed først</h3>
<p>Bladet er meget skarpt, og de fleste uheld sker, når der kun er en lille ende af grøntsagen tilbage. Brug altid madholderen, eller tag en skærefast handske på, og stop, før fingrene kommer for tæt på bladet. Rengør jernet med en børste i stedet for en klud, og opbevar det, så bladet er dækket.</p>
<p>Se alle <a href="/knive-redskaber/mandolinjern/">mandolinjern</a> med aktuelle priser. Vil du hellere hakke end skære skiver, så se vores guide til <a href="/bedste-groentsagshakker/">grøntsagshakker</a>, og find den rigtige <a href="/bedste-kokkekniv/">kokkekniv</a> til resten af grøntsagerne.</p>
HTML,
	'faq'      => [
		[ 'Hvad er et mandolinjern?', 'Et køkkenredskab med et skarpt blad sat i en plade. Du fører grøntsagen hen over bladet og får skiver eller strimler, der alle har samme tykkelse.' ],
		[ 'Hvad er forskellen på et japansk mandolinjern og andre?', 'Et japansk mandolinjern er som regel let og enkelt med et meget skarpt blad til tynde skiver. Større jern har ofte flere blade, ben og tydelige tykkelsesindstillinger.' ],
		[ 'Er et mandolinjern farligt?', 'Bladet er meget skarpt, så brug altid madholderen eller en skærefast handske, og stop, når der kun er en lille ende tilbage.' ],
		[ 'Hvordan rengør jeg et mandolinjern?', 'Skyl det lige efter brug, og rengør bladet med en børste i stedet for en klud. Tjek producentens anvisning, før du kommer det i opvaskemaskinen.' ],
	],
];
