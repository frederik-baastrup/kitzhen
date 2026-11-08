<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-steakknive/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-steakknive',
	'date'     => '2023-07-06 11:30:38',
	'title'    => 'Steakknive: Vores bud på de 5 bedste',
	'excerpt'  => 'Gode steakknive skærer bøffen rent uden at flænse kødet. Her er vores bud på de 5 bedste steakknive fra de butikker, vi samarbejder med – fra Morakniv til Global.',
	'more_cat' => 'steakknive',
	'intro'    => <<<'HTML'
<p>En god steakkniv skærer igennem bøffen uden at rive kødet, så saften bliver i stedet for at løbe ud på tallerkenen. Steakknive findes med glat æg og med takker. Glatte knive skærer pænest, men skal slibes; takkede knive holder sig skarpe længere, men flænser kødet lidt mere.</p>
<p>Herunder er vores bud på de 5 bedste sæt steakknive fra de butikker, vi samarbejder med.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7391846024408',
			'price'   => 999,
			'name'    => 'Morakniv Classic steakkniv 4 stk.',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Meget skarpe steakknive i koldvalset rustfrit stål med det klassiske tøndeformede skaft i rødt birketræ.',
			'why'     => <<<'HTML'
<p>Morakniv Classic er steakkniven til dig, der vil have en god bøf og et bord, der ser indbydende ud. Knivene er meget skarpe, så du skærer mundrette stykker uden at flå i kødet, og det røde skaft i birketræ giver et varmt, klassisk præg på borddækningen.</p>
<p>Bladet er i koldvalset rustfrit stål og varmebehandlet, så det er slidstærkt og holder skarpheden. Det er 10 cm langt og 2 mm tykt, og hele kniven måler 20,5 cm. Det tøndeformede skaft er ergonomisk og ligger godt i hånden.</p>
<p>De fire knive leveres i en flot gaveæske, så sættet også er en oplagt gave til en, der elsker kød.</p>
HTML,
			'good'    => [ 'Bøffer og grillmad', 'Skandinavisk borddækning', 'Gave til madelskeren' ],
			'less'    => [ 'Store selskaber – kun 4 knive' ],
		],
		[
			'ean'     => '7319011076830',
			'price'   => 735,
			'name'    => 'Gense Old Farmer Micarta steakkniv XL 4 dele',
			'role'    => 'Bedst til grillmad',
			'reviews' => [],
			'verdict' => 'Rustikke XL-steakknive i rustfrit stål og micarta, designet af danske Bent Severin.',
			'why'     => <<<'HTML'
<p>Gense Old Farmer er grillbestikket til dig, der vil give bordet et rustikt og robust udtryk, når der står grillmad på menuen. XL-knivene er store og solide og passer godt til tykke bøffer, koteletter og spareribs.</p>
<p>Knivene er lavet af rustfrit stål med skaft i micarta, og de er 23,5 cm lange. Serien er tegnet af den danske arkitekt og designer Bent Severin, som var kendt for at stille store krav til materialerne – her mødes det flotte og det praktiske.</p>
<p>Bag knivene står svenske Gense, der blev grundlagt i Eskilstuna i 1856 og har været kongelig hofleverandør til det svenske hof siden 1982.</p>
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
			'verdict' => 'Fire Zwilling-steakknive med 12 cm glat blad i hårdt rustfrit stål – kvalitet til en lav pris.',
			'why'     => <<<'HTML'
<p>Zwilling Twin er til dig, der vil have steakknive fra et kendt knivmærke uden at bruge mange penge. Sættet har fire knive, så der er til hele familien ved aftensmaden.</p>
<p>Bladene er af rustfrit stål med en høj hårdhed, så de holder længe. De er 12 cm lange og har en glat æg, der skærer rent gennem kødet i stedet for at rive i det. Det ergonomiske skaft er slidstærkt og ligger godt i hånden.</p>
<p>Vask knivene i hånden, så holder de sig skarpe og pæne længst.</p>
HTML,
			'good'    => [ 'Hverdag', 'Lavere budget', 'Dig, der vil have et kendt knivmærke' ],
			'less'    => [ 'Dig, der vil have et særligt design', 'Bør vaskes i hånden' ],
		],
		[
			'ean'     => '7891112325760',
			'price'   => 279,
			'name'    => 'Tramontina steakkniv 4-pak',
			'role'    => 'Billigst',
			'reviews' => [],
			'verdict' => 'Fire robuste steakknive med varmebehandlet blad og polywood-skaft, der kan komme i opvaskemaskinen.',
			'why'     => <<<'HTML'
<p>Tramontina steakknive er det nemme valg til dig, der vil have fire solide knive til bøf og grillmad uden at tænke over plejen. Det brune træskaft giver en hyggelig steakhouse-stemning på bordet.</p>
<p>Knivbladene er i rustfrit stål og varmebehandlet, hvilket gør dem ekstra holdbare. Skafterne er behandlet med polywood, så de tåler både stød og høje temperaturer.</p>
<p>Netop derfor kan knivene komme i opvaskemaskinen – en stor fordel, når der skal ryddes op efter en grillaften med mange gæster.</p>
HTML,
			'good'    => [ 'Steakhouse-stemning', 'Dig, der vil kunne bruge opvaskemaskinen', 'Lavt budget' ],
			'less'    => [ 'Fin borddækning' ],
		],
		[
			'ean'     => '4943691400192',
			'price'   => 999,
			'name'    => 'Global GTF-4001 steakknive 4 stk.',
			'role'    => 'Bedst japansk design',
			'reviews' => [],
			'verdict' => 'Fire smedede steakknive helt i rustfrit stål med Globals karakteristiske prikker på skaftet.',
			'why'     => <<<'HTML'
<p>Global GTF-4001 er til dig, der vil have steakknive med et rent, moderne udtryk. De velkendte prikker på skaftet gør Global-knivene til at genkende med det samme. Designet er lyst og elegant og skiller sig ud fra de klassiske knive med træskaft i guiden.</p>
<p>Knivene er smedede og lavet i holdbart rustfrit stål, så du skærer bøffen, koteletten eller stegen uden besvær. Med fire knive i sættet er der til en almindelig middag for familien.</p>
<p>Fordi der ikke er træ i skaftet, skal du ikke tænke på at olie det eller passe på, at det tørrer ud.</p>
HTML,
			'good'    => [ 'Moderne borddækning', 'Dig, der kan lide Globals design', 'Gave til madelskeren' ],
			'less'    => [ 'Dig, der foretrækker et varmt træskaft', 'Store selskaber – kun 4 knive' ],
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
