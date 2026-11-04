<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-parmesan-rivejern/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-parmesan-rivejern',
	'title'    => 'Parmesan rivejern: Vores bud på de 3 bedste',
	'excerpt'  => 'Et godt parmesan rivejern giver fin, luftig ost over pastaen. Her er vores bud på de 3 bedste rivejern og ostekværne til parmesan fra danske butikker.',
	'more_cat' => 'rivejern',
	'intro'    => <<<'HTML'
<p>Parmesan og andre hårde oste smager bedst friskrevet lige over retten. Du kan bruge et fladt rivejern med barberbladsskarpe huller, der giver fin og luftig ost, eller en ostekværn, hvor du drejer osten igennem en tromle – praktisk ved bordet, hvor alle river selv.</p>
<p>Herunder er vores bud på de 3 bedste parmesan rivejern hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '0098399450025',
			'price'   => 249,
			'name'    => 'Microplane Gourmet medium rivejern',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Barberbladsskarpt rivejern i rustfrit stål, der river begge veje.',
			'why'     => <<<'HTML'
<p>Microplane er kendt for rivejern med fotoætsede skær. Butikken oplyser, at Gourmet-rivejernet har tovejsskær, så du kan rive begge veje, og at de barberbladsskarpe skær i rustfrit stål skærer råvarerne frem for at flå dem. Valget er vores vurdering ud fra butikkens oplysninger og mærkets ry.</p>
HTML,
			'good'    => [ 'Parmesan, pecorino og chokolade', 'Hurtig rivning i køkkenet' ],
			'less'    => [ 'Rivning ved bordet' ],
		],
		[
			'ean'     => '4004293166845',
			'price'   => 450,
			'name'    => 'Rösle parmesankværn',
			'role'    => 'Bedst ved bordet',
			'reviews' => [],
			'verdict' => 'Parmesankværn i 18/10 rustfrit stål til ost ved bordet og chokolade over desserten.',
			'why'     => <<<'HTML'
<p>Rösles parmesankværn er ifølge butikken lavet af 18/10 rustfrit stål og klarer forskellige madvarer, fra parmesan over pastaen til chokolade over isdesserten. En kværn er rar ved bordet, fordi du ikke rører osten med fingrene. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Pastaaften med gæster', 'Rustfrit stål, der holder' ],
			'less'    => [ 'Store mængder ost' ],
		],
		[
			'ean'     => '5011268812286',
			'price'   => 190,
			'name'    => 'Zyliss Classic Beluga ostekværn',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Klassisk ostekværn fra Zyliss, der gør rivning af ost nem.',
			'why'     => <<<'HTML'
<p>Zyliss Beluga er en klassisk ostekværn. Butikken skriver, at den er designet til at gøre rivning af ost nem og effektiv, og at den er i solid kvalitet. Valget er vores vurdering ud fra pris.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Rivning ved bordet' ],
			'less'    => [ 'Meget fin ost' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du et parmesan rivejern</h2>
<h3>Fladt rivejern eller kværn?</h3>
<p>Et fladt rivejern med fine, skarpe huller giver den fineste og mest luftige ost. En kværn er renere at bruge og bedst ved bordet.</p>
<h3>Skarphed</h3>
<p>Fotoætsede rivejern skærer osten i stedet for at rive den, så du får finere ost og bruger mindre kraft.</p>
<p>Se alle <a href="/knive-redskaber/rivejern/">rivejern</a>, og find pastaen i guiderne til <a href="/bedste-pastamaskine/">pastamaskiner</a> og <a href="/bedste-italiensk-pastatallerken/">pastatallerkener</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvilket rivejern er bedst til parmesan?', 'Et fint, fotoætset rivejern som Microplane giver den fineste ost. En kværn er bedst ved bordet.' ],
		[ 'Kan rivejern komme i opvaskemaskinen?', 'Mange i rustfrit stål kan, men skyl dem lige efter brug, så osten ikke tørrer fast.' ],
		[ 'Skal parmesan være kold, når den rives?', 'Ja, kold ost er fastere og nemmere at rive.' ],
	],
];
