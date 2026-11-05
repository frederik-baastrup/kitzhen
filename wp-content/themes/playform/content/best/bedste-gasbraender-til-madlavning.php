<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-gasbraender-til-madlavning/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-gasbraender-til-madlavning',
	'title'    => 'Gasbrænder til madlavning: Vores bud på de 4 bedste',
	'excerpt'  => 'En gasbrænder karamelliserer crème brûlée og giver sprød skorpe – og en stor gasbrænder laver paella og wok udendørs. Her er vores bud på de 4 bedste.',
	'more_cat' => 'gasbraender',
	'intro'    => <<<'HTML'
<p>"Gasbrænder" dækker over to ting i køkkenet. En lille håndbrænder bruges til at karamellisere crème brûlée, smelte ost, give stegeskorpe på sous vide-kød og flambere. En stor gasbrænder med ringe står på jorden og bruges til paella, wok og store gryder udendørs.</p>
<p>Herunder er vores bud på de 4 bedste gasbrændere hos danske butikker lige nu – tre håndbrændere og én til paella og wok.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7314522282022',
			'price'   => 399,
			'name'    => 'Sievert Handyjet med gasflaske',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Håndbrænder fra svenske Sievert, leveret med gasflaske.',
			'why'     => <<<'HTML'
<p>Sievert er en svensk producent af gasbrændere. Handyjet blev udnævnt til "Bedste valg" i kategorien gasbrændere i svenske Testat.nu's årlige undersøgelse i 2023, og den leveres med gasflaske.</p>
HTML,
			'good'    => [ 'Crème brûlée og sous vide', 'Dig, der vil have alt med' ],
			'less'    => [ 'Store udendørs gryder' ],
		],
		[
			'ean'     => '4713431004979',
			'price'   => 479,
			'name'    => 'Satake professionel gasbrænder med grillfunktion',
			'role'    => 'Bedst til stegeskorpe',
			'reviews' => [],
			'verdict' => 'Håndbrænder med et mundstykke, der giver en bred grillflamme.',
			'why'     => <<<'HTML'
<p>Satakes gasbrænder har et innovativt mundstykke og en grillfunktion, der gør, at den kan mere end en almindelig gasbrænder. En bred flamme er rar, når du skal give et stykke sous vide-kød stegeskorpe.</p>
HTML,
			'good'    => [ 'Sous vide-kød', 'Grøntsager og ost' ],
			'less'    => [ 'Meget præcis karamellisering' ],
		],
		[
			'ean'     => '7350101118023',
			'price'   => 259,
			'name'    => 'NOD gasbrænder',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Kraftig og robust håndbrænder til crème brûlée, ost, bål og grill.',
			'why'     => <<<'HTML'
<p>NODs gasbrænder er kraftig og robust og designet til små og store opgaver i køkkenet og udendørs – fra at karamellisere crème brûlée og smelte ost til at tænde op i bålet eller grillen.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Ude og inde' ],
			'less'    => [ 'Daglig professionel brug' ],
		],
		[
			'ean'     => '7350101113561',
			'price'   => 949,
			'name'    => 'Mareld gasbrænder med 3 ringe',
			'role'    => 'Bedst til paella og wok',
			'reviews' => [],
			'verdict' => 'Gasbrænder med 3 ringe til store paellapander og gryder udendørs.',
			'why'     => <<<'HTML'
<p>Marelds gasbrænder findes i to versioner, med 2 og 3 ringe. Flere ringe fordeler varmen ud over en stor pande, så paellaen koger jævnt helt ud til kanten.</p>
HTML,
			'good'    => [ 'Store paellapander', 'Udendørs madlavning' ],
			'less'    => [ 'Indendørs brug' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en gasbrænder</h2>
<h3>Håndbrænder eller brænder med ringe?</h3>
<p>Til crème brûlée, ost og stegeskorpe skal du bruge en håndbrænder. Til paella og wok udendørs skal du bruge en brænder med ringe, der tilsluttes en gasflaske.</p>
<h3>Sikkerhed</h3>
<p>Brug kun gasbrænderen med den gas, producenten anbefaler. Store brændere skal bruges udendørs, på et stabilt underlag og væk fra brændbare ting.</p>
<p>Se alle <a href="/grill/gasbraender/">gasbrændere</a>, og find panden i guiderne til <a href="/bedste-paellapande/">paellapander</a> og <a href="/bedste-wokpande/">wokpander</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad bruger man en gasbrænder til i køkkenet?', 'Til at karamellisere crème brûlée, smelte ost, give stegeskorpe på sous vide-kød og flambere.' ],
		[ 'Hvilken gas skal man bruge?', 'Typisk butan eller en butan/propan-blanding. Følg producentens anvisning.' ],
		[ 'Kan man lave paella på en gasbrænder?', 'Ja, en brænder med flere ringe er den bedste måde at varme en stor paellapande jævnt op.' ],
	],
];
