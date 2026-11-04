<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-stavblender/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-stavblender',
	'title'    => 'Stavblender: Vores bud på de 4 bedste',
	'excerpt'  => 'En stavblender blender suppe direkte i gryden og laver mayonnaise, pesto og smoothies. Her er vores bud på de 4 bedste stavblendere fra danske butikker.',
	'more_cat' => 'stavblender',
	'intro'    => <<<'HTML'
<p>Stavblenderen er et af de mest alsidige apparater i køkkenet. Du blender suppen direkte i gryden, laver mayonnaise på et minut, pisker flødeskum og blender smoothies – og den fylder næsten intet i skuffen. Mange leveres med en hakkeskål og et piskeris, så den også kan erstatte en minihakker og en håndmixer.</p>
<p>Herunder er vores bud på de 4 bedste stavblendere hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8021098775184',
			'price'   => 1699,
			'name'    => 'Braun MQ9195XLI',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Braun-stavblender med ActiveBlade-teknologi, der ifølge butikken giver op til 60 % hurtigere ydeevne.',
			'why'     => <<<'HTML'
<p>Braun er et af de største mærker inden for stavblendere. Butikken oplyser, at MQ9195XLI har ActiveBlade-teknologi, der giver op til 60 % hurtigere ydeevne og et finere resultat, og at du kan vælge mellem forskellige hastigheder. Valget er vores vurdering ud fra butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Suppe, smoothies og mos', 'Dig, der bruger stavblenderen hver dag' ],
			'less'    => [ 'Små budgetter' ],
		],
		[
			'ean'     => '7610497620020',
			'price'   => 1199,
			'name'    => 'Bamix Classic 140 W',
			'role'    => 'Bedst til holdbarhed',
			'reviews' => [],
			'verdict' => 'Den schweiziske klassiker med AC-motor – til alt fra suppe til luftig flødeskum.',
			'why'     => <<<'HTML'
<p>Bamix er en schweizisk klassiker, der bruges i mange professionelle køkkener. Butikken beskriver Classic som en pålidelig og kraftfuld stavblender med en 140 W AC-motor, der klarer alt fra supper til luftig flødeskum. Watt-tallet ser lavt ud, men Bamix er kendt for at holde i mange år. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Dig, der vil have en stavblender for livet', 'Flødeskum og saucer' ],
			'less'    => [ 'Dig, der vil have mange tilbehørsdele' ],
		],
		[
			'ean'     => '4009839678356',
			'price'   => 730,
			'name'    => 'Zwilling XTEND trådløs',
			'role'    => 'Bedst trådløs',
			'reviews' => [],
			'verdict' => 'Trådløs stavblender med kraftig og støjsvag BLDC-motor – uden ledning i vejen.',
			'why'     => <<<'HTML'
<p>Zwilling XTEND kører på batteri. Butikken oplyser, at den kraftige BLDC-motor giver høj ydeevne med jævn hastighed og støjsvag drift, og at den er ideel til smoothies, supper og puréer. Uden ledning kan du blende ved komfuret uden at lede efter en stikkontakt. Batteriet sælges i en startpakke – tjek, hvad der følger med. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Køkkener med få stikkontakter', 'Dig, der har andre XTEND-produkter' ],
			'less'    => [ 'Lange opgaver som store mængder mos' ],
		],
		[
			'ean'     => '8021098003980',
			'price'   => 599,
			'name'    => 'Braun MQ55',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Stavblender på 1000 W med to hastigheder og turbofunktion.',
			'why'     => <<<'HTML'
<p>Braun MQ55 har ifølge butikken en motor på 1000 watt og to hastighedsindstillinger, herunder en turbofunktion, og klarer alt fra bløde puréer til hårdere ingredienser. Den er et godt valg til en hverdagsstavblender til en lav pris. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Suppe og mos', 'Lavt budget' ],
			'less'    => [ 'Dig, der vil have mange hastigheder' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en stavblender</h2>
<h3>Effekt og hastigheder</h3>
<p>Mere effekt blender hurtigere og klarer hårdere ting. Flere hastigheder eller en trinløs regulering gør det nemmere at styre, så det ikke sprøjter.</p>
<h3>Fod i metal eller plast</h3>
<p>En fod i metal kan bruges direkte i den varme gryde og holder længere. Plast kan blive misfarvet og tåler ikke altid høje temperaturer.</p>
<h3>Tilbehør</h3>
<p>Hakkeskål, piskeris og blenderbæger gør stavblenderen mere alsidig. Har du ikke brug for det, kan du spare penge ved at vælge en model uden.</p>
<p>Se alle <a href="/koekkenmaskiner/stavblender/">stavblendere</a>, eller se vores guides til <a href="/bedste-blender/">blendere</a> og <a href="/bedste-mini-foodprocessor/">mini-foodprocessorer</a>.</p>
HTML,
	'faq'      => [
		[ 'Kan man blende varm suppe med en stavblender?', 'Ja, det er en af de største fordele. Tag gryden af varmen, og hold foden helt nede i suppen, så det ikke sprøjter.' ],
		[ 'Kan en stavblender lave flødeskum?', 'Ja, med et piskeris eller en særlig piskeskive. Mange stavblendere leveres med et.' ],
		[ 'Hvor mange watt skal en stavblender have?', 'Til suppe og mos er 600–1000 W rigeligt. Watt-tallet afhænger dog også af motortypen.' ],
	],
];
