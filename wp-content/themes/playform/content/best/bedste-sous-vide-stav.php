<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-sous-vide-stav/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-sous-vide-stav',
	'title'    => 'Sous vide-stav: Vores bud på de 3 bedste',
	'excerpt'  => 'Med en sous vide-stav tilbereder du kød og fisk præcist i vandbad – perfekt hver gang. Her er vores bud på de 3 bedste sous vide-stave fra danske butikker.',
	'more_cat' => 'sous-vide',
	'intro'    => <<<'HTML'
<p>Sous vide betyder "under vakuum". Maden vakuumpakkes og tilberedes i et vandbad ved præcis den temperatur, den skal have – fx 56 °C til en medium bøf. Den kan ikke blive overkogt, og bagefter giver du den en hurtig tur på panden for stegeskorpe. En sous vide-stav sættes i en gryde med vand og holder temperaturen.</p>
<p>Herunder er vores bud på de 3 bedste sous vide-stave hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4011833303769',
			'price'   => 1099,
			'name'    => 'Steba SV120',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Vandtæt sous vide-stav (IPX7), der cirkulerer 7,5 liter vand i minuttet.',
			'why'     => <<<'HTML'
<p>Steba er et tysk mærke med mange sous vide-produkter. Butikken oplyser, at SV120 er IPX7-godkendt og dermed helt vandtæt, og at den cirkulerer 7,5 liter vand i minuttet, så temperaturen er jævn i hele vandbadet. Valget er vores vurdering ud fra butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Bøffer, fisk og kylling', 'Dig, der vil have en robust stav' ],
			'less'    => [ 'Dig, der også mangler en vakuumpakker' ],
		],
		[
			'ean'     => '5712162100102',
			'price'   => 999,
			'name'    => 'Steba sous vide-sæt med vakuumpakker',
			'role'    => 'Bedst startsæt',
			'reviews' => [],
			'verdict' => 'Sæt med sous vide-cirkulator og vakuumpakker – alt, hvad du skal bruge for at komme i gang.',
			'why'     => <<<'HTML'
<p>Dette sæt indeholder ifølge butikken alt, hvad du skal bruge for at mestre sous vide derhjemme: en cirkulator og en vakuumpakker. Butikken forklarer, at metoden sikrer en jævn tilberedning, der bevarer saft og smag. Valget er vores vurdering ud fra pris og indhold.</p>
HTML,
			'good'    => [ 'Begyndere', 'Dig uden vakuumpakker' ],
			'less'    => [ 'Dig, der allerede har en vakuumpakker' ],
		],
		[
			'ean'     => '4011833303165',
			'price'   => 868,
			'name'    => 'Steba SV 75',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Vandtæt sous vide-stav fra Steba til mørt og smagfuldt kød.',
			'why'     => <<<'HTML'
<p>Steba SV 75 er ifølge butikken vandtæt og lavet til mørt og smagfuldt kød. Butikken fremhæver, at sous vide bevarer råvarernes smag. Valget er vores vurdering ud fra pris.</p>
HTML,
			'good'    => [ 'Lavt budget' ],
			'less'    => [ 'Store vandbade' ],
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
