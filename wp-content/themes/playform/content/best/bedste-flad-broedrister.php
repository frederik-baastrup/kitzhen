<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/flad-broedrister/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-flad-broedrister',
	'title'    => 'Flad brødrister: Vores bud på de 2 bedste',
	'excerpt'  => 'En flad brødrister rister boller, rugbrød og croissanter, der ikke passer i en almindelig toaster. Her er de 2 flade brødristere, vi kan anbefale fra danske butikker lige nu.',
	'more_cat' => 'broedrister',
	'intro'    => <<<'HTML'
<p>En flad brødrister ligger ned i stedet for at stå op. Brødet ligger på en rist under et varmelegeme, så du kan riste alt det, der ikke passer i en almindelig toaster: boller, rundstykker, croissanter, tykke skiver rugbrød, bagels og pitabrød. Mange bruger den også til at lune wienerbrød eller smelte ost på en toast.</p>
<p>Der findes ikke ret mange flade brødristere i danske webshops. Lige nu har vi fundet to, vi kan anbefale – og de minder meget om hinanden. Nederst finder du en købsguide til ristefladen, varme og rengøring.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5708642026390',
			'price'   => 329,
			'name'    => 'OBH Nordica Inox Horizon',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Flad brødrister i rustfrit stål med to quartz-varmelegemer og en risteflade på 20 x 25 cm.',
			'why'     => <<<'HTML'
<p>OBH Nordica Inox Horizon er en flad brødrister i rustfrit stål. Butikken oplyser, at den har to quartz-varmelegemer, en ekstra stor risteflade på 20 x 25 cm og trinløs indstilling af ristningsgraden, så du kan undgå, at brødet bliver for mørkt.</p>
<p>Ristefladen er stor nok til flere boller eller skiver på én gang, og stålet gør, at den ser pænere ud på køkkenbordet end mange plastikmodeller. Valget er vores vurdering ud fra butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Boller, rundstykker og croissanter', 'Familier, der rister meget på én gang' ],
			'less'    => [ 'Dig, der kun rister almindeligt toastbrød' ],
		],
		[
			'ean'     => '5707582995780',
			'price'   => 349,
			'name'    => 'Witt Classic flad brødrister',
			'role'    => 'Godt alternativ',
			'reviews' => [],
			'verdict' => 'Flad brødrister med en risteflade på 25 x 20 cm – til flere slags brød på én gang.',
			'why'     => <<<'HTML'
<p>Witt Classic er bygget efter samme princip. Butikken skriver, at den har et fladt design, så du nemt kan riste flere typer brød og flere ad gangen, og at ristearealet måler 25 x 20 cm – samme størrelse som OBH Nordica.</p>
<p>De to modeller ligger tæt i pris, så det kan godt ende med at handle om, hvilken du synes ser bedst ud – og hvilken der er på tilbud. Valget er vores vurdering ud fra butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Rugbrød, boller og bagels', 'Brunch og weekendmorgenmad' ],
			'less'    => [ 'Meget små køkkener' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en flad brødrister</h2>
<h3>Hvorfor en flad brødrister?</h3>
<p>En almindelig toaster med lodrette slidser er hurtig og nem, men kun til brød, der passer ned i slidsen. En flad brødrister er mere fleksibel: alt, der kan ligge på risten, kan ristes. Til gengæld rister den kun fra én side ad gangen, så du skal vende brødet, hvis begge sider skal være sprøde.</p>
<h3>Ristefladens størrelse</h3>
<p>Tjek ristefladens mål. En flade på omkring 20 x 25 cm giver plads til to-fire boller eller to skiver rugbrød ad gangen. Står du for morgenmaden til hele familien, er en stor flade vigtigere end et flot design.</p>
<h3>Varmelegeme og indstilling</h3>
<p>Quartz-varmelegemer bliver hurtigt varme. Kig efter en trinløs indstilling eller en timer, så du kan styre ristningen præcist – især til boller og croissanter, der hurtigt bliver brændte.</p>
<h3>Rengøring og sikkerhed</h3>
<p>Krummer samler sig under risten, så en udtagelig krummebakke er en stor fordel. Overfladen bliver varm, så sæt brødristeren et sted, hvor børn ikke kan nå den, og hold afstand til skabe og hylder over den.</p>
<h3>Alternativer</h3>
<p>Vil du hellere have en klassisk toaster, kan du se alle <a href="/ovne-apparater/broedrister/">brødristere</a>. Skal du også kunne bage og lave små retter, så se vores guide til <a href="/bedste-miniovn-med-varmluft/">miniovne med varmluft</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er en flad brødrister?', 'En brødrister, hvor brødet ligger på en vandret rist under et varmelegeme i stedet for at stå i lodrette slidser. Den kan riste boller, croissanter og tykke skiver brød.' ],
		[ 'Skal man vende brødet i en flad brødrister?', 'Ja, typisk. Varmen kommer fra oven, så brødet bliver ristet fra én side ad gangen.' ],
		[ 'Kan man lave toast i en flad brødrister?', 'Ja. Du kan riste brødet og bagefter lægge ost på og lade det smelte under varmelegemet.' ],
	],
];
