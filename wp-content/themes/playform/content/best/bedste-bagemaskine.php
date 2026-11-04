<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-bagemaskine/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-bagemaskine',
	'title'    => 'Bagemaskine: Vores bud på de 3 bedste',
	'excerpt'  => 'En bagemaskine ælter, hæver og bager brødet for dig – du vågner op til friskbagt brød. Her er vores bud på de 3 bedste bagemaskiner fra danske butikker.',
	'more_cat' => 'broedmaskine',
	'intro'    => <<<'HTML'
<p>En bagemaskine – eller brødmaskine – klarer hele arbejdet: du kommer ingredienserne i, vælger et program, og maskinen ælter, hæver og bager brødet. Med en timer kan du vågne op til friskbagt brød. Mange kan også lave dej til boller og pizza, kage og marmelade.</p>
<p>Herunder er vores bud på de 3 bedste bagemaskiner hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5708642065443',
			'price'   => 793,
			'name'    => 'OBH Nordica bagemaskine, stål',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Fuldautomatisk bagemaskine, der ælter, hæver og bager – med udtagelig nonstick-bageform.',
			'why'     => <<<'HTML'
<p>OBH Nordicas bagemaskine er ifølge butikken fuldautomatisk: den ælter, hæver og bager brødet, mens du laver noget andet, og den har en udtagelig nonstick-bageform med håndtag, der er nem at rengøre. Valget er vores vurdering ud fra butikkens oplysninger og prisen.</p>
HTML,
			'good'    => [ 'Morgenbrød med timer', 'Nem rengøring' ],
			'less'    => [ 'Store brød' ],
		],
		[
			'ean'     => '4016432428233',
			'price'   => 1299,
			'name'    => 'Gastroback Design brødmaskine Advanced',
			'role'    => 'Flest muligheder',
			'reviews' => [],
			'verdict' => 'Bagemaskine fra Gastroback, der ifølge butikken kan mere end en almindelig bagemaskine.',
			'why'     => <<<'HTML'
<p>Gastrobacks Design Advanced beskrives af butikken som mere end bare en almindelig bagemaskine, der gør det nemt at bage frisk brød derhjemme. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Dig, der vil eksperimentere', 'Design' ],
			'less'    => [ 'Lavt budget' ],
		],
		[
			'ean'     => '4011833001283',
			'price'   => 899,
			'name'    => 'Steba BM3',
			'role'    => 'Godt alternativ',
			'reviews' => [],
			'verdict' => 'Bagemaskine, der laver brød, kager og marmelade.',
			'why'     => <<<'HTML'
<p>Steba BM3 kan ifølge butikken lave brød, kager, marmelade og mere – du tilføjer ingredienserne, og maskinen klarer arbejdet. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Brød og marmelade' ],
			'less'    => [ 'Dig, der vil forme brødet selv' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en bagemaskine</h2>
<h3>Brødstørrelse</h3>
<p>Bagemaskiner angives i gram. 750–1000 g passer til de fleste familier. Mange kan bage flere størrelser.</p>
<h3>Programmer</h3>
<p>Kig efter programmer til fuldkorn, glutenfri, dej og hurtigbagning – og en timer, så brødet er klar om morgenen.</p>
<h3>Ingrediensdispenser</h3>
<p>En automatisk dispenser tilsætter nødder og frø på det rigtige tidspunkt, så de ikke bliver knust.</p>
<p>Se alle <a href="/pizza-bagning/broedmaskine/">bagemaskiner</a>, eller ælt dejen i en <a href="/bedste-roeremaskine/">røremaskine</a> og bag den på et <a href="/bedste-bagestaal/">bagestål</a>.</p>
HTML,
	'faq'      => [
		[ 'Kan man bage rugbrød i en bagemaskine?', 'Nogle maskiner har et program til det, men rugbrød bliver ofte bedst i ovnen.' ],
		[ 'Hvorfor har brødet et hul i bunden?', 'Det er fra æltekrogen. Nogle maskiner har en krog, der folder sig ind før bagning.' ],
		[ 'Kan man lave pizzadej i en bagemaskine?', 'Ja, de fleste har et dejprogram, der ælter og hæver dejen.' ],
	],
];
