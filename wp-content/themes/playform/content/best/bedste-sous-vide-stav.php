<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-sous-vide-stav/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-sous-vide-stav',
	'title'    => 'Sous vide-stav: Vores bud på de 5 bedste',
	'excerpt'  => 'Med en sous vide-stav tilbereder du kød og fisk præcist i vandbad – perfekt hver gang. Her er vores bud på de 5 bedste sous vide-stave fra de butikker, vi samarbejder med.',
	'more_cat' => 'sous-vide',
	'intro'    => <<<'HTML'
<p>Sous vide betyder "under vakuum". Maden vakuumpakkes og tilberedes i et vandbad ved præcis den temperatur, den skal have – fx 56 °C til en medium bøf. Den kan ikke blive overkogt, og bagefter giver du den en hurtig tur på panden for stegeskorpe. En sous vide-stav sættes i en gryde med vand og holder temperaturen.</p>
<p>Herunder er vores bud på de 5 bedste sous vide-stave fra de butikker, vi samarbejder med.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4011833303769',
			'price'   => 1099,
			'name'    => 'Steba SV120',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => '2000 W og helt vandtæt (IPX7) – varmer 30 liter vand op og holder temperaturen inden for 0,1 °C.',
			'why'     => <<<'HTML'
<p>Steba SV120 er sous vide-staven til dig, der laver mad til mange eller vil have kræfter i reserve. Med 2000 W varmer den 30 liter vand op til 56 °C på cirka 45 minutter, så der er plads til en hel steg eller mange bøffer i samme vandbad.</p>
<p>Temperaturen holdes præcist med en afvigelse på højst 0,1 °C, og du kan stille den helt op til 90 °C. Staven pumper 7,5 liter vand rundt i minuttet, så varmen er jævn overalt. Det oplyste LCD-display viser både temperatur og tid, og timeren går op til 99 timer – nok til selv de groveste udskæringer.</p>
<p>Den er IPX7-godkendt og dermed helt vandtæt, så damp og stænk ikke skader elektronikken. Du kan sætte den i enhver beholder med mindst 15 cm vand, og det kompakte format er nemt at gøre rent og gemme væk.</p>
HTML,
			'good'    => [ 'Store vandbade og mange gæster', 'Lange tilberedninger op til 99 timer', 'Dig, der vil have en robust stav' ],
			'less'    => [ 'Dig, der også mangler en vakuumpakker' ],
		],
		[
			'ean'     => '5712162100102',
			'price'   => 999,
			'name'    => 'Steba sous vide-sæt med vakuumpakker',
			'role'    => 'Bedst startsæt',
			'reviews' => [],
			'verdict' => 'Stebas SV60-stav, Caso VC10-vakuumpakker og 10 poser i én kasse – du kan gå i gang samme dag.',
			'why'     => <<<'HTML'
<p>Dette sæt er den nemme vej ind i sous vide. Du får både en Steba SV60-cirkulator og en Caso VC10-vakuumpakker, så du ikke skal finde ud af, hvad der passer sammen. Det er oplagt til dig, der er ny i sous vide, men også erfarne madglade får et solidt udstyr.</p>
<p>Cirkulatoren viser med farvet lys, hvor langt du er: blåt, mens vandet varmes op, grønt, mens maden tilberedes, og rødt, når den er klar. Den sættes nemt fast på en gryde eller pande og fordeler varmen jævnt, så kødet bliver ens hele vejen igennem.</p>
<p>Vakuumpakkeren suger luften ud af posen, så smagen bliver i maden under den lange tilberedning – og madvarer i vakuum holder sig længere i køleskabet. Der følger 10 vakuumposer på 20 × 30 cm med. Delene tåler ikke opvaskemaskine.</p>
HTML,
			'good'    => [ 'Begyndere', 'Dig uden vakuumpakker', 'Dig, der vil se status med et blik' ],
			'less'    => [ 'Dig, der allerede har en vakuumpakker' ],
		],
		[
			'ean'     => '4011833303165',
			'price'   => 868,
			'name'    => 'Steba SV 75',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Vandtæt (IPX7) og let stav, der pumper 12 liter i minuttet og rammer temperaturen inden for 0,1 °C.',
			'why'     => <<<'HTML'
<p>Steba SV 75 er en slank og overkommelig sous vide-stav til dig, der vil have mørt og saftigt kød, fisk og grøntsager i hverdagen. Du sætter den fast på kanten af gryden, indstiller tid og temperatur – og så passer maden sig selv, mens du laver noget andet.</p>
<p>Staven varmer 20 liter vand op til 56 °C på cirka 45 minutter og holder temperaturen med en afvigelse på højst 0,1 °C, op til 90 °C. Den pumper 12 liter vand rundt i minuttet, så varmen fordeles jævnt. LCD-displayet viser temperatur og tid, og timeren kan stilles op til 99 timer.</p>
<p>Den er IPX7-vandtæt og passer i enhver gryde med en dybde på mindst 15 cm. Med 7,5 cm i bredden og 1,6 kg fylder den næsten intet i skuffen.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Små køkkener med lidt plads', 'Hverdagsmad til familien' ],
			'less'    => [ 'Meget store vandbade – den er lavet til omkring 20 liter' ],
		],
		[
			'ean'     => '0850043914068',
			'price'   => 1149,
			'name'    => 'Anova Precision Cooker 3.0',
			'role'    => 'Bedst alternativ',
			'reviews' => [],
			'verdict' => 'Let sous vide-cirkulator på under 1 kg, der giver saftige stege og jævnt tilberedt fisk i din egen gryde.',
			'why'     => <<<'HTML'
<p>Anova Precision Cooker 3.0 er et godt alternativ til Steba-stavene, hvis du vil have et andet mærke på køkkenbordet. Du sætter cirkulatoren i din egen gryde med vand, indstiller den, og så tilberedes maden præcist og jævnt, mens du laver noget andet.</p>
<p>Den er oplagt til de retter, hvor sous vide gør den store forskel: en saftig steg, der har samme stegegrad hele vejen igennem, eller fisk, der bliver jævnt tilberedt uden at tørre ud. Det er udstyret til middagen, hvor du vil imponere gæsterne.</p>
<p>Cirkulatoren er lavet i plast og rustfrit stål og vejer kun 0,99 kg, så den er nem at tage frem og gemme væk i en skuffe.</p>
HTML,
			'good'    => [ 'Steg og fisk', 'Dig, der vil bruge din egen gryde', 'Let at gemme væk' ],
			'less'    => [ 'Dig, der også mangler en vakuumpakker' ],
		],
		[
			'ean'     => '7391091851347',
			'price'   => 599,
			'name'    => 'Champion Sous Vide Precision Circulator',
			'role'    => 'Billigst',
			'reviews' => [],
			'verdict' => 'Den billige vej ind i sous vide: 800 W, timer, display og temperaturen holdt inden for 0,1 °C.',
			'why'     => <<<'HTML'
<p>Champion Sous Vide Precision Circulator er til dig, der vil prøve sous vide uden at bruge mange penge. Du sætter den i din egen gryde, lægger de vakuumpakkede råvarer i vandet og indstiller temperatur og tid. Resten klarer den selv.</p>
<p>Vandet cirkulerer hele tiden, så temperaturen holdes inden for ±0,1 °C. Det betyder mørt kød med præcis den stegegrad, du har valgt. Den har 800 W, kan stilles fra 0 til 92 °C og klarer op til 15 liter vand. Displayet viser temperaturen, og timeren holder styr på tiden.</p>
<p>Den er nem at gøre ren, og ledningen er 1,2 m lang. Giv bøffen 30 sekunder på hver side på en varm pande til sidst, så får du også stegeskorpen.</p>
HTML,
			'good'    => [ 'Begyndere og lavt budget', 'Hverdagsmad til familien', 'Bøffer med præcis stegegrad' ],
			'less'    => [ 'Store vandbade over 15 liter' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan kommer du i gang med sous vide</h2>
<h3>Hvad skal du bruge?</h3>
<p>En sous vide-stav, en stor gryde eller beholder, og poser. En vakuumpakker er bedst, men lynlåsposer kan bruges, hvis du presser luften ud ved at sænke posen ned i vand. Se vores guide til <a href="/bedste-vakuumpakker/">vakuumpakkere</a>.</p>
<h3>Temperatur og tid</h3>
<p>Temperaturen bestemmer, hvor stegt kødet bliver; tiden bestemmer, hvor mørt det bliver. En bøf er klar efter 1–2 timer, mens grove udskæringer kan tage et døgn.</p>
<h3>Stegeskorpe</h3>
<p>Tør kødet godt, og giv det en hurtig tur på en meget varm pande eller grill bagefter.</p>
<p>Se alle <a href="/ovne-apparater/sous-vide/">sous vide-produkter</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er sous vide?', 'En tilberedningsmetode, hvor maden vakuumpakkes og tilberedes i vandbad ved en præcis temperatur.' ],
		[ 'Skal man have en vakuumpakker til sous vide?', 'Det er bedst, men lynlåsposer kan bruges, hvis du får luften ud.' ],
		[ 'Kan maden blive overkogt i sous vide?', 'Ikke i forhold til stegegrad, men kød kan blive for mørt, hvis det ligger alt for længe.' ],
	],
];
