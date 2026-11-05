<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-steakknive/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-steakknive',
	'title'    => 'Steakknive: Vores bud på de 4 bedste',
	'excerpt'  => 'Gode steakknive skærer bøffen rent uden at flænse kødet. Her er vores bud på de 4 bedste steakknive fra danske butikker – fra Morakniv til Zwilling.',
	'more_cat' => 'steakknive',
	'intro'    => <<<'HTML'
<p>En god steakkniv skærer igennem bøffen uden at rive kødet, så saften bliver i stedet for at løbe ud på tallerkenen. Steakknive findes med glat æg og med takker. Glatte knive skærer pænest, men skal slibes; takkede knive holder sig skarpe længere, men flænser kødet lidt mere.</p>
<p>Herunder er vores bud på de 4 bedste sæt steakknive hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7391846024408',
			'price'   => 999,
			'name'    => 'Morakniv Classic steakkniv 4 stk.',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Steakknive fra svenske Morakniv, der gør det nemt at skære mundrette stykker.',
			'why'     => <<<'HTML'
<p>Morakniv er en svensk knivproducent med mange års erfaring. Classic-steakkniven er en kniv, der gør det nemt at skære mundrette stykker af kødet. Sættet har fire knive.</p>
HTML,
			'good'    => [ 'Bøffer og grillmad', 'Skandinavisk borddækning' ],
			'less'    => [ 'Store selskaber – kun 4 knive' ],
		],
		[
			'ean'     => '7319011076830',
			'price'   => 735,
			'name'    => 'Gense Old Farmer Micarta steakkniv XL 4 dele',
			'role'    => 'Bedst til grillmad',
			'reviews' => [],
			'verdict' => 'Rustikt grillbestik fra Gense med skaft i micarta.',
			'why'     => <<<'HTML'
<p>Old Farmer er en serie grillbestik fra Gense, der giver et autentisk og rustikt look til bordet. XL-steakknivene har skaft i micarta og passer godt til grillaftener og store bøffer.</p>
HTML,
			'good'    => [ 'Grillaftener', 'Store bøffer' ],
			'less'    => [ 'En klassisk, fin borddækning' ],
		],
		[
			'ean'     => '4009839375767',
			'price'   => 314,
			'name'    => 'Zwilling Twin steakknive 4 stk.',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Steakknive i rustfrit stål fra tyske Zwilling til en lav pris.',
			'why'     => <<<'HTML'
<p>Zwilling er en af verdens kendte knivproducenter. Twin-steakknivene er fremstillet af rustfrit stål og er til dig, der ikke vil gå ned på kvalitet. Til prisen er det et godt sæt til hverdag.</p>
HTML,
			'good'    => [ 'Hverdag', 'Lavt budget' ],
			'less'    => [ 'Dig, der vil have et særligt design' ],
		],
		[
			'ean'     => '7891112325760',
			'price'   => 279,
			'name'    => 'Tramontina steakkniv 4-pak',
			'role'    => 'Billigst',
			'reviews' => [],
			'verdict' => 'Steakknive med varmebehandlet blad og polywood-skaft til en meget lav pris.',
			'why'     => <<<'HTML'
<p>Tramontina er et brasiliansk mærke. Knivbladet er ekstra holdbart takket være varmebehandling, og skafterne er polywood-behandlede.</p>
HTML,
			'good'    => [ 'Steakhouse-stemning', 'Mange knive til lav pris' ],
			'less'    => [ 'Fin borddækning' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du steakknive</h2>
<h3>Glat æg eller takker?</h3>
<p>Glatte knive skærer pænest og skåner kødet, men skal slibes. Takkede knive holder sig skarpe længere og er gode til grillmad med sprød skorpe.</p>
<h3>Skaft og balance</h3>
<p>Et tungt skaft i træ eller micarta ligger godt i hånden. Skafter i træ skal vaskes i hånden.</p>
<h3>Pleje</h3>
<p>Vask steakknivene i hånden, og opbevar dem i en æske eller knivholder, så æggen ikke bliver sløv mod andet bestik.</p>
<p>Se alle <a href="/knive-redskaber/steakknive/">steakknive</a>, og find bøffens bedste ven i guiderne til <a href="/bedste-stegepande/">stegepander</a> og <a href="/bedste-gasgrill/">gasgrills</a>.</p>
HTML,
	'faq'      => [
		[ 'Skal steakknive have takker?', 'Det er en smagssag. Takker holder sig skarpe længere; glatte knive skærer pænere.' ],
		[ 'Kan steakknive komme i opvaskemaskinen?', 'Det bør de helst ikke. Opvaskemaskinen gør æggen sløv og kan skade skafter i træ.' ],
		[ 'Hvor mange steakknive skal man have?', 'Lige så mange som du normalt dækker op til. De fleste sæt har 4 eller 6 knive.' ],
	],
];
