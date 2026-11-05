<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-vakuumpakker/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-vakuumpakker',
	'title'    => 'Vakuumpakker: Vores bud på de 3 bedste',
	'excerpt'  => 'En vakuumpakker får maden til at holde længere og beskytter mod frostskader – og er nødvendig til sous vide. Her er vores bud på de 3 bedste.',
	'more_cat' => 'vakuumpakker',
	'intro'    => <<<'HTML'
<p>En vakuumpakker suger luften ud af posen og svejser den til. Uden luft holder maden længere i køleskabet og fryseren, og du undgår frostskader. Vakuumpakning er også nødvendig til sous vide og praktisk til at marinere kød.</p>
<p>Herunder er vores bud på de 3 bedste vakuumpakkere hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5708642079389',
			'price'   => 690,
			'name'    => 'OBH Nordica Complete Seal',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Vakuumpakker, der kan få maden til at holde op til fem gange så længe.',
			'why'     => <<<'HTML'
<p>OBH Nordica Complete Seal er et godt valg, hvis du vil spare tid og penge og undgå madspild, og vakuumpakket mad kan holde op til fem gange så længe.</p>
HTML,
			'good'    => [ 'Fryseren og madspild', 'Sous vide' ],
			'less'    => [ 'Væsker og supper' ],
		],
		[
			'ean'     => '4038437014167',
			'price'   => 3399,
			'name'    => 'Caso VacuChef 50',
			'role'    => 'Bedst kammermaskine',
			'reviews' => [],
			'verdict' => 'Kammervakuummaskine fra tyske Caso – kan også pakke væsker.',
			'why'     => <<<'HTML'
<p>Caso VacuChef 50 er en kammervakuummaskine af høj kvalitet. I en kammermaskine ligger hele posen inde i maskinen, så du kan vakuumpakke supper, saucer og marinader. Den er dyr, men til dig, der pakker meget.</p>
HTML,
			'good'    => [ 'Væsker og marinader', 'Jægere og storindkøb' ],
			'less'    => [ 'Små køkkener' ],
		],
		[
			'ean'     => '4038437013801',
			'price'   => 549,
			'name'    => 'Caso VC100',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Vakuumpakker med elektronisk temperaturkontrol, der holder maden frisk og beskytter mod frostskader.',
			'why'     => <<<'HTML'
<p>Caso VC100 holder maden frisk længere og beskytter mod frostskader, og den elektroniske temperaturkontrol sikrer, at maden ikke tager skade under svejsningen.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Fryseren' ],
			'less'    => [ 'Mange poser i træk' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en vakuumpakker</h2>
<h3>Ekstern vakuumpakker eller kammermaskine?</h3>
<p>En ekstern vakuumpakker er billig og lille, men kan ikke pakke væsker. En kammermaskine kan pakke alt og bruger billigere glatte poser, men er stor og dyr.</p>
<h3>Poser og ruller</h3>
<p>Eksterne vakuumpakkere kræver riflede poser. Ruller, du selv skærer til, er billigere end færdige poser.</p>
<h3>Sous vide</h3>
<p>Til sous vide er en vakuumpakker næsten nødvendig. Se vores guide til <a href="/bedste-sous-vide-stav/">sous vide-stave</a>.</p>
<p>Se alle <a href="/ovne-apparater/vakuumpakker/">vakuumpakkere</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvor længe holder vakuumpakket mad?', 'Typisk flere gange så længe som almindeligt pakket mad – både i køleskab og fryser.' ],
		[ 'Kan man vakuumpakke væske?', 'Kun i en kammermaskine. Med en ekstern maskine kan du fryse væsken først.' ],
		[ 'Skal man bruge særlige poser?', 'Ja, eksterne vakuumpakkere kræver riflede poser eller ruller.' ],
	],
];
