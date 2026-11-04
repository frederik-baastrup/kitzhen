<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-svampekniv/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-svampekniv',
	'title'    => 'Svampekniv: Vores bud på de 3 bedste',
	'excerpt'  => 'En svampekniv med børste gør det nemt at plukke, skære og rense svampe på stedet. Her er vores bud på de 3 bedste svampeknive fra danske butikker.',
	'more_cat' => '',
	'intro'    => <<<'HTML'
<p>En svampekniv har et kort, buet blad til at skære svampen af ved roden og en børste i den anden ende til at fjerne jord og nåle med det samme. Så kommer svampene rene hjem i kurven, og du slipper for at skylle dem – svampe suger vand.</p>
<p>Herunder er vores bud på de 3 bedste svampeknive hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '3123840013270',
			'price'   => 309,
			'name'    => 'Opinel No. 8 svampekniv med hylster',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Den klassiske franske foldekniv som svampekniv med børste og hylster.',
			'why'     => <<<'HTML'
<p>Opinel er en klassisk fransk foldekniv. Butikken oplyser, at svampekniven har en børste på enden af skaftet, så du kan rense svampene med det samme, og et skarpt og holdbart blad. Den leveres med hylster til bæltet. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Svampejægere', 'Gaver' ],
			'less'    => [ 'Børn – bladet er spidst' ],
		],
		[
			'ean'     => '7391846014508',
			'price'   => 217,
			'name'    => 'Morakniv Karl-Johan svampekniv',
			'role'    => 'Bedst sikkerhed',
			'reviews' => [],
			'verdict' => 'Svampekniv uden spids med børste af ægte hestehår og klinge af genbrugt stål.',
			'why'     => <<<'HTML'
<p>Moraknivs Karl-Johan-kniv har ifølge butikken en speciel form uden spids og en børste af ægte hestehår, så du kan plukke, skære og rense svampene på stedet. Den er lille nok til lommen. Uden spids er den mere sikker at have med. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Familieture i skoven', 'Lommen' ],
			'less'    => [ 'Andet arbejde end svampe' ],
		],
		[
			'ean'     => '6412456818001',
			'price'   => 129,
			'name'    => 'Muurikka svampekniv med etui',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Foldbar svampekniv fra finske Muurikka med træskaft og børste.',
			'why'     => <<<'HTML'
<p>Muurikkas svampekniv er ifølge butikken foldbar, har en børste af svinebørster til at rense svampene, et blad i rustfrit stål og et greb i træ, og den leveres med etui. Valget er vores vurdering ud fra pris.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Ekstra kniv i kurven' ],
			'less'    => [ 'Dig, der vil have et kendt mærke' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en svampekniv</h2>
<h3>Blad og børste</h3>
<p>Et kort, buet blad gør det nemt at skære svampen ved foden. Børsten fjerner jord og nåle, så svampene kommer rene hjem.</p>
<h3>Foldbar eller fast?</h3>
<p>En foldekniv er sikker i lommen. En fast kniv med hylster er robust og hurtig at tage frem.</p>
<h3>Plukkeråd</h3>
<p>Pluk kun svampe, du er helt sikker på. Er du i tvivl, så få dem kontrolleret af en svampekontrollant.</p>
<p>Se alle <a href="/knive-redskaber/">knive og redskaber</a>, og find en god <a href="/bedste-kokkekniv/">kokkekniv</a> til køkkenet.</p>
HTML,
	'faq'      => [
		[ 'Skal man skylle svampe?', 'Helst ikke. Svampe suger vand. Rens dem med en børste og en fugtig klud.' ],
		[ 'Skal man skære eller vride svampe af?', 'Begge dele bruges. Skærer du ved foden, kommer der mindre jord med i kurven.' ],
		[ 'Hvorfor har svampeknive en børste?', 'Så du kan børste jord og nåle af svampen, lige når du har plukket den.' ],
	],
];
