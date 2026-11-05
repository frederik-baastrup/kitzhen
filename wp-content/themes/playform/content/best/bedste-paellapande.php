<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-paellapande/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-paellapande',
	'title'    => 'Paellapande: Vores bud på de 4 bedste',
	'excerpt'  => 'En paellapande er bred og lav, så risene ligger i et tyndt lag og får den sprøde bund. Her er vores bud på de 4 bedste paellapander fra danske butikker.',
	'more_cat' => 'paellapande',
	'intro'    => <<<'HTML'
<p>Paella laves i en bred, lav pande, så risene ligger i et tyndt lag og koger jævnt. Det giver den sprøde, karamelliserede bund, spanierne kalder socarrat. Små paellapander kan bruges på komfuret; de store laves over gasbrænder, grill eller bål til mange gæster.</p>
<p>Herunder er vores bud på de 4 bedste paellapander hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '3272343134231',
			'price'   => 1337,
			'name'    => 'Staub paellapande 34 cm',
			'role'    => 'Bedst til komfuret',
			'reviews' => [],
			'verdict' => 'Paellapande fra Staubs Pan Series på 34 cm – en god størrelse til komfuret.',
			'why'     => <<<'HTML'
<p>Staubs paellapande er 34 cm i diameter – stor nok til en paella til fire, men lille nok til komfuret. Den er en pande til den klassiske spanske risret med kylling eller skaldyr. Tjek materiale og induktion hos butikken.</p>
HTML,
			'good'    => [ 'Paella på komfuret', 'Fire personer' ],
			'less'    => [ 'Store selskaber' ],
		],
		[
			'ean'     => '8412595100409',
			'price'   => 299,
			'name'    => 'Garcima paellapande 40 cm',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Klassisk spansk paellapande fra Garcima i 40 cm.',
			'why'     => <<<'HTML'
<p>Garcima er en spansk producent af paellapander. Kød, kylling, skaldyr og snegle er de klassiske ingredienser. Med 40 cm er der plads til 6–8 personer. Den traditionelle stålpande skal tørres og smøres med olie efter brug.</p>
HTML,
			'good'    => [ 'Den klassiske spanske pande', 'Lavt budget' ],
			'less'    => [ 'Almindelige kogeplader' ],
		],
		[
			'ean'     => '6416571001607',
			'price'   => 484,
			'name'    => 'Muurikka paellapande 60 cm',
			'role'    => 'Bedst til store selskaber',
			'reviews' => [],
			'verdict' => 'Stor paellapande i koldvalset stål til åben ild eller gasblus.',
			'why'     => <<<'HTML'
<p>Muurikkas 60 cm paellapande er lavet til åben ild eller gasblus. Den er i koldvalset stål, der ikke er rustfrit, så den skal vedligeholdes. Med 60 cm er der paella til en hel havefest.</p>
HTML,
			'good'    => [ 'Havefester', 'Gasbrænder og bål' ],
			'less'    => [ 'Køkkenet' ],
		],
		[
			'ean'     => '7350101113530',
			'price'   => 249,
			'name'    => 'Mareld paellapande 40 cm, rustfrit stål',
			'role'    => 'Nemmest at passe',
			'reviews' => [],
			'verdict' => 'Paellapande på 40 cm i rustfrit stål – ruster ikke.',
			'why'
=> <<<'HTML'
<p>Marelds paellapande er i rustfrit stål og 40 cm i diameter. Rustfrit stål kræver ikke den samme pleje som klassiske stålpander.</p>
HTML,
			'good'    => [ 'Dig, der ikke vil passe en stålpande' ],
			'less'    => [ 'Den helt traditionelle socarrat' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en paellapande</h2>
<h3>Størrelse</h3>
<p>En tommelfingerregel: 30–34 cm til 2–4 personer, 40 cm til 6–8 personer og 50–60 cm til store selskaber. Store pander kræver en gasbrænder, så varmen fordeles over hele bunden.</p>
<h3>Materiale</h3>
<p>Klassisk polereret stål giver den bedste socarrat, men ruster, hvis den ikke plejes. Emaljeret stål og rustfrit stål er nemmere. Støbejern er tungt, men godt på komfuret.</p>
<h3>Varmekilde</h3>
<p>Til store pander er en paellabrænder med flere ringe det bedste. Se vores guide til <a href="/bedste-gasbraender-til-madlavning/">gasbrændere</a>.</p>
<p>Se alle <a href="/grill/paellapande/">paellapander</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvor stor skal en paellapande være?', 'Ca. 30–34 cm til 2–4 personer, 40 cm til 6–8 personer og 50 cm eller mere til store selskaber.' ],
		[ 'Kan man lave paella på induktion?', 'Ja, med en pande, der er magnetisk og passer til kogezonen. Store pander bliver ikke varme nok i kanten.' ],
		[ 'Hvordan plejer man en paellapande i stål?', 'Tør den grundigt efter vask, og smør den med et tyndt lag olie, så den ikke ruster.' ],
	],
];
