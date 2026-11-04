<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-raclette-grill/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-raclette-grill',
	'title'    => 'Raclette grill: Vores bud på de 3 bedste',
	'excerpt'  => 'En raclette grill står midt på bordet, så alle kan smelte ost og grille kød og grøntsager selv. Her er vores bud på de 3 bedste fra danske butikker.',
	'more_cat' => 'bordgrill',
	'intro'    => <<<'HTML'
<p>Raclette er en hyggelig middag, hvor grillen står midt på bordet. Øverst er en grillplade til kød og grøntsager, og nedenunder smelter hver gæst ost i sin egen lille pande og hælder den over kartofler, pølser og syltede grøntsager. Den er perfekt til nytårsaften, vinteraftener og børnefamilier.</p>
<p>Herunder er vores bud på de 3 bedste raclette grills hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '3168430298941',
			'price'   => 1059,
			'name'    => 'Tefal Gourmet Nordic Spirit raclette 8 personer',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Raclette til otte personer – et naturligt samlingspunkt for familie og venner.',
			'why'     => <<<'HTML'
<p>Tefal Gourmet Nordic Spirit har ifølge butikken kapacitet til otte personer og skaber rammerne for hyggelige stunder, hvor alle tilbereder deres egen mad i eget tempo. Valget er vores vurdering ud fra butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Store familier og gæster' ],
			'less'    => [ 'To personer' ],
		],
		[
			'ean'     => '4211129116497',
			'price'   => 1149,
			'name'    => 'WMF Lono Raclette',
			'role'    => 'Nemmest at gøre ren',
			'reviews' => [],
			'verdict' => 'Raclette med aftagelig, ridsefast non-stick grillplade, der tåler opvaskemaskine.',
			'why'     => <<<'HTML'
<p>WMF Lono har ifølge butikken en aftagelig grillplade med non-stick-belægning, der både er ridsefast og tåler opvaskemaskine. Det er en stor fordel efter en lang raclette-aften. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Nem oprydning', 'Hele året' ],
			'less'    => [ 'Meget store selskaber' ],
		],
		[
			'ean'     => '8711658519906',
			'price'   => 855,
			'name'    => 'Princess Raclette & Fondue',
			'role'    => 'Flest funktioner',
			'reviews' => [],
			'verdict' => 'Fem funktioner i ét: raclette, grill, ostefondue, chokoladefondue og oliefondue.',
			'why'     => <<<'HTML'
<p>Princess Raclette &amp; Fondue kombinerer ifølge butikken fem funktioner: raclette, grill, ostefondue, chokoladefondue og oliefondue. Den er perfekt, hvis du både vil have raclette og fondue uden to apparater. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Fondue og raclette', 'Hyggeaftener' ],
			'less'    => [ 'Dig, der kun vil have raclette' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en raclette grill</h2>
<h3>Antal personer</h3>
<p>Raclette angives efter antal pander. 6–8 pander passer til de fleste familier og vennegrupper.</p>
<h3>Grillplade</h3>
<p>En grillplade i sten giver en jævn varme og sprøde grøntsager. Non-stick er nemmest at gøre ren.</p>
<h3>Ost til raclette</h3>
<p>Brug en ost, der smelter godt – klassisk raclette-ost, men også gruyère og andre faste oste.</p>
<p>Se alle <a href="/grill/bordgrill/">bordgrills og raclette</a>, eller se guiden til <a href="/bedste-elektrisk-bordgrill/">elektriske bordgrills</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad spiser man til raclette?', 'Kogte kartofler, pølser, skinke, syltede agurker og løg og grøntsager – med smeltet ost over.' ],
		[ 'Hvilken ost bruger man til raclette?', 'Klassisk raclette-ost, men andre faste oste, der smelter godt, kan også bruges.' ],
		[ 'Kan man bruge en raclette som bordgrill?', 'Ja, grillpladen ovenpå bruges til kød og grøntsager.' ],
	],
];
