<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-blender/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-blender',
	'title'    => 'Blender: Vores bud på de 4 bedste',
	'excerpt'  => 'En god blender laver smoothies, supper og saucer og knuser is og nødder. Her er vores bud på de 4 bedste blendere fra danske butikker – fra personlig blender til kraftig højhastighedsblender.',
	'more_cat' => 'blender',
	'intro'    => <<<'HTML'
<p>En blender bruges til smoothies, milkshakes, supper, saucer, pesto, nøddesmør og knust is. Der er stor forskel på en lille personlig blender, hvor du blender direkte i drikkeflasken, og en kraftig højhastighedsblender, der kan lave alt fra varm suppe til mandelmel.</p>
<p>Herunder er vores bud på de 4 bedste blendere hos danske butikker lige nu. Nederst finder du en købsguide til effekt, kande og typer.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '0849369016211',
			'price'   => 4450,
			'name'    => 'Blendtec BLB-575',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Kraftig højhastighedsblender med forudindstillede programmer – fra smoothies til de hårdeste ingredienser.',
			'why'     => <<<'HTML'
<p>Blendtec er kendt for meget kraftige blendere. Blenderen blev et hit på YouTube, fordi den kunne kværne alt fra hele kokosnødder til en iPhone, og den laver smoothies lige så bløde som på en café og kan blende på egen hånd med forudindstillede programmer.</p>
HTML,
			'good'    => [ 'Smoothies hver dag', 'Nøddesmør og hårde ingredienser' ],
			'less'    => [ 'Små budgetter' ],
		],
		[
			'ean'     => '5413184906979',
			'price'   => 2999,
			'name'    => 'KitchenAid Artisan K400',
			'role'    => 'Mest solid',
			'reviews' => [],
			'verdict' => 'Blender i formstøbt metal med 5 års garanti, der blender selv de hårdeste ingredienser.',
			'why'     => <<<'HTML'
<p>KitchenAid Artisan K400 er bygget i formstøbt metal. Den blender selv de hårdeste ingredienser med et ensartet resultat, og den kommer med 5 års garanti. Den passer i stil til KitchenAid-røremaskinen.</p>
HTML,
			'good'    => [ 'Dig, der vil have en blender, der holder', 'Design' ],
			'less'    => [ 'Små køkkener' ],
		],
		[
			'ean'     => '7044876099235',
			'price'   => 2200,
			'name'    => 'Wilfa PowerFuel PB2B-1200',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Højhastighedsblender, der knuser is, nødder og frø – til smoothies, supper og babymad.',
			'why'     => <<<'HTML'
<p>Wilfa PowerFuel er en kraftig højhastighedsblender. Den knuser let is, laver smoothies, blender supper og saucer og hjemmelavet babymad, og den knuser nemt nødder og frø. Den er et godt valg, hvis du vil have en højhastighedsblender til en mere overkommelig pris.</p>
HTML,
			'good'    => [ 'Smoothies og supper', 'Is og nødder' ],
			'less'    => [ 'Dig, der vil have programmer' ],
		],
		[
			'ean'     => '8006447003002',
			'price'   => 499,
			'name'    => 'Nutribullet Personal Blender 900 W',
			'role'    => 'Bedst personlig blender',
			'reviews' => [],
			'verdict' => 'Kompakt personlig blender på 900 W til hurtige smoothies direkte i flasken.',
			'why'     => <<<'HTML'
<p>Nutribullet er en af de mest kendte personlige blendere. Denne model har en motor på 900 W, der er kraftig nok til krævende ingredienser, og ekstraktionsblade lavet til smoothies. Du blender direkte i bægeret og tager det med.</p>
HTML,
			'good'    => [ 'Morgensmoothies', 'Små køkkener' ],
			'less'    => [ 'Supper og store portioner' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en blender</h2>
<h3>Personlig blender eller kandeblender?</h3>
<p>En personlig blender er lille og billig og perfekt til én smoothie ad gangen. En kandeblender kan lave større portioner, supper og saucer.</p>
<h3>Effekt og hastighed</h3>
<p>Til grønne smoothies, nødder og is skal du have en kraftig blender. Højhastighedsblendere giver de glatteste resultater og kan ofte lave varm suppe ved friktion.</p>
<h3>Kande og rengøring</h3>
<p>Kander i tritan er lette og knuser ikke; glas er tungere, men ridses ikke. Mange blendere kan rengøres ved at blende lunt vand med en dråbe opvaskemiddel.</p>
<p>Se alle <a href="/koekkenmaskiner/blender/">blendere</a>, eller se vores guides til <a href="/bedste-stavblender/">stavblendere</a> og <a href="/bedste-slow-juicer/">slow juicere</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på en blender og en juicer?', 'En blender blender hele frugten med fibre. En juicer presser saften ud og fjerner frugtkødet.' ],
		[ 'Kan en blender knuse is?', 'De fleste kraftige blendere kan. Tjek producentens anvisning – især for personlige blendere.' ],
		[ 'Hvor mange watt skal en blender have?', 'Til smoothies er 600–900 W nok. Til nødder, is og grønne smoothies er en kraftigere højhastighedsblender bedre.' ],
	],
];
