<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-raclette-grill/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-raclette-grill',
	'title'    => 'Raclette grill: Vores bud på de 3 bedste',
	'excerpt'  => 'En raclette grill står midt på bordet, så alle kan smelte ost og grille kød og grøntsager selv. Her er vores bud på de 3 bedste fra danske butikker.',
	'more_cat' => 'bordgrill',
	'intro'    => <<<'HTML'
<p>Raclette er en hyggelig middag, hvor grillen står midt på bordet. Øverst er en grillplade til kød og grøntsager, og nedenunder smelter hver gæst ost i sin egen lille pande og hælder den over kartofler, pølser og syltede grøntsager. Den er perfekt til nytårsaften, vinteraftener og børnefamilier.</p>
<p>Herunder er vores bud på de 3 bedste raclette grills hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '3168430298941',
			'price'   => 1059,
			'name'    => 'Tefal Gourmet Nordic Spirit raclette 8 personer',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Raclette, grill og plancha i én – med Thermo-Spot, der viser, når pladen er varm nok.',
			'why'     => <<<'HTML'
<p>Tefal Gourmet Nordic Spirit er tre apparater i ét: raclette, grill og plancha. Mens osten smelter i de ekstra dybe pander, griller I kød, fisk og grøntsager på pladen ovenpå. Med otte pander har alle ved bordet deres egen, og ingen skal vente på tur.</p>
<p>Tefals Thermo-Spot viser, når stegefladen har den rette temperatur, så de første stykker bliver lige så gode som de sidste. Den titanforstærkede non-stick-belægning gør, at maden slipper let, og de 1350 W varmer hurtigt op og holder varmen hele aftenen.</p>
<p>Oprydningen er også tænkt ind: Ledningen kan tages af, og de løse dele tåler opvaskemaskine. Træbenene giver et nordisk look, der passer fint på middagsbordet.</p>
HTML,
			'good'    => [ 'Familier og gæster op til 8 personer', 'Dig, der også vil grille og bruge plancha', 'Nem oprydning' ],
			'less'    => [ 'Mindre husstande, der sjældent er mere end to' ],
		],
		[
			'ean'     => '4211129116497',
			'price'   => 1149,
			'name'    => 'WMF Lono Raclette',
			'role'    => 'Nemmest at gøre ren',
			'reviews' => [],
			'verdict' => 'Raclette i rustfrit Cromargan-stål med justerbar varme og dele, der kan komme i opvaskemaskinen.',
			'why'     => <<<'HTML'
<p>WMF Lono er racletten til dig, der vil have kvalitet, der holder. Kabinettet er i WMF's rustfrie Cromargan-stål, og den aftagelige grillplade har en ridsefast non-stick-belægning. Pladen kan bruges til alt fra saftige bøffer til pandekager.</p>
<p>Du styrer selv varmen med flere temperaturindstillinger, så du kan skrue ned, når snakken går, og op, når der skal grilles. De 1500 W giver kræfter nok til en hel aftens raclette.</p>
<p>Med følger 8 non-stick-pander og 8 spatler. De tåler opvaskemaskine ligesom grillpladen, så oprydningen efter festen tager få minutter.</p>
HTML,
			'good'    => [ 'Nem oprydning', 'Dig, der vil styre varmen', 'Raclette hele året' ],
			'less'    => [ 'Dig, der vil have den letteste model (6,5 kg)' ],
		],
		[
			'ean'     => '8711658519906',
			'price'   => 855,
			'name'    => 'Princess Raclette & Fondue',
			'role'    => 'Flest funktioner',
			'reviews' => [],
			'verdict' => 'Fem funktioner i ét: raclette, grill, ostefondue, chokoladefondue og oliefondue.',
			'why'     => <<<'HTML'
<p>Princess Raclette &amp; Fondue er det oplagte valg, hvis I vil have både raclette og fondue uden at fylde skabet med to apparater. Den klarer raclette, grill, ostefondue, chokoladefondue og oliefondue, så én aften kan starte med grillmad og slutte med frugt dyppet i chokolade.</p>
<p>Grillpladen på 31 × 31 cm har en ridsefast keramisk belægning, der fordeler varmen jævnt og er nem at gøre ren. Den dobbelte termostat lader dig styre raclette og fondue hver for sig, og de 1800 W giver masser af kraft.</p>
<p>Alt er med i kassen: fonduegryde på 1,3 liter, 8 raclettepander, 8 spatler og 8 fonduegafler. De skridsikre fødder og ledningen på 2 meter gør den nem at placere midt på bordet.</p>
HTML,
			'good'    => [ 'Fondue og raclette i ét', 'Op til 8 personer', 'Dig, der vil have mest for pengene' ],
			'less'    => [ 'Dig, der kun vil have raclette' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en raclette grill</h2>
<h3>Antal personer</h3>
<p>Raclette angives efter antal pander. 6–8 pander passer til de fleste familier og vennegrupper.</p>
<h3>Grillplade</h3>
<p>En grillplade i sten giver en jævn varme og sprøde grøntsager. Non-stick er nemmest at gøre ren.</p>
<h3>Ost til raclette</h3>
<p>Brug en ost, der smelter godt – klassisk raclette-ost, men også gruyère og andre faste oste.</p>
<p>Se alle <a href="/grill/bordgrill/">bordgrills og raclette</a>, eller se guiden til <a href="/bedste-elektrisk-bordgrill/">elektriske bordgrills</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad spiser man til raclette?', 'Kogte kartofler, pølser, skinke, syltede agurker og løg og grøntsager – med smeltet ost over.' ],
		[ 'Hvilken ost bruger man til raclette?', 'Klassisk raclette-ost, men andre faste oste, der smelter godt, kan også bruges.' ],
		[ 'Kan man bruge en raclette som bordgrill?', 'Ja, grillpladen ovenpå bruges til kød og grøntsager.' ],
	],
];
