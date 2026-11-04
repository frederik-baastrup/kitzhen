<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/mokkakande/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-mokkakande',
	'title'    => 'Mokkakande: Vores bud på de 3 bedste',
	'excerpt'  => 'En mokkakande brygger stærk, italiensk kaffe på komfuret uden strøm og kapsler. Her er vores bud på de 3 bedste mokkakander fra danske butikker – og hvordan du bruger dem.',
	'more_cat' => 'mokkakande',
	'intro'    => <<<'HTML'
<p>Mokkakanden – eller moka-kanden – er den klassiske italienske kaffekande, der står på komfuret. Vandet i bunden koger, damptrykket presser vandet op gennem den malede kaffe, og den færdige kaffe samler sig i toppen. Resultatet er en stærk, fyldig kaffe, der minder om espresso og er god at drikke ren eller med varm mælk.</p>
<p>Herunder er vores bud på de 3 bedste mokkakander hos danske butikker lige nu – fra den klassiske Bialetti til designkander fra Alessi. Nederst finder du en guide til størrelse, materiale og induktion.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8006363018944',
			'price'   => 862,
			'name'    => 'Bialetti Kaffebrygger Italy 6 kopper',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Mokkakanden fra mærket, der opfandt den – her som limited edition i de italienske farver til 6 kopper.',
			'why'     => <<<'HTML'
<p>Bialetti er det mærke, der gjorde mokkakanden kendt over hele verden. Denne kaffebrygger til 6 kopper er ifølge butikken en limited edition i de italienske farver grøn og rød, og den beskrives som nem at bruge.</p>
<p>6 kopper betyder 6 små espressokopper – det rækker til to–tre almindelige kopper kaffe med mælk. Valget er vores vurdering ud fra butikkens oplysninger og mærkets historie.</p>
HTML,
			'good'    => [ 'Dig, der vil have den klassiske mokkakande', 'Kaffe til to–tre personer' ],
			'less'    => [ 'Induktion – tjek modellen hos butikken først' ],
		],
		[
			'ean'     => '8003299403561',
			'price'   => 555,
			'name'    => 'Alessi Ossidiana espressobrygger 3 kopper',
			'role'    => 'Bedst design',
			'reviews' => [],
			'verdict' => 'Skulpturel espressokande designet af Mario Trimarchi – inspireret af Alessis klassiske 8-kantede kande.',
			'why'     => <<<'HTML'
<p>Alessi Ossidiana er designet af den prisbelønnede arkitekt Mario Trimarchi. Butikken fortæller, at kanden er inspireret af Alessis klassiske 8-kantede espressokande og af vulkanstenen obsidian, som den har sit navn efter.</p>
<p>Med 3 kopper passer den til én–to personer. Den er et godt valg, hvis kanden også skal se godt ud på komfuret. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Én–to personer', 'Dig, der vil have en designklassiker' ],
			'less'    => [ 'Kaffe til mange' ],
		],
		[
			'ean'     => '5057982086541',
			'price'   => 719,
			'name'    => 'La Cafetière espressobrygger',
			'role'    => 'Se kaffen brygge',
			'reviews' => [],
			'verdict' => 'Mokkakande med topkammer i borosilikatglas, så du kan se kaffen stige op.',
			'why'     => <<<'HTML'
<p>La Cafetières espressobrygger kombinerer den klassiske mokkakande med et moderne twist. Butikken oplyser, at topkammeret er lavet af borosilikatglas, der er både slag- og varmebestandigt, så du kan se brygningen ske.</p>
<p>Glasset gør det også nemmere at se, hvornår kanden er færdig, så du kan tage den af varmen i tide. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Dig, der vil kunne se kaffen', 'Pynt på komfuret' ],
			'less'    => [ 'Dig, der vil have en kande, der kan tåle hårdhændet brug' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger og bruger du en mokkakande</h2>
<h3>Størrelse</h3>
<p>Mokkakander angives i antal kopper – små espressokopper. En kande til 3 kopper er god til én person, 6 kopper til to–tre personer. En mokkakande skal altid fyldes helt med kaffe, så du kan ikke lave halve portioner i en stor kande.</p>
<h3>Aluminium eller stål – og induktion</h3>
<p>Den klassiske mokkakande er i aluminium, som leder varmen godt, men ikke virker på induktion. Kander i rustfrit stål er tungere og kan ofte bruges på induktion. Står der ikke induktion i beskrivelsen, så gå ud fra, at den ikke virker – eller brug en induktionsadapter.</p>
<h3>Sådan laver du kaffe i en mokkakande</h3>
<p>Fyld bunden med vand op til ventilen. Fyld filteret med kaffe, der er malet lidt grovere end espresso, uden at presse den. Skru kanden sammen, og sæt den på middel varme med låget åbent. Når kaffen begynder at sprutte, tager du den af varmen.</p>
<h3>Rengøring</h3>
<p>Skyl kanden i varmt vand uden sæbe, og lad den tørre adskilt. Aluminium tåler ikke opvaskemaskine. Skift gummiringen, når den bliver hård.</p>
<p>Se alle <a href="/kaffe-drikke/mokkakande/">mokkakander</a> og <a href="/kaffe-drikke/kaffekvaern/">kaffekværne</a>, eller tag skridtet videre med en <a href="/bedste-espressomaskine/">espressomaskine</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på en mokkakande og en espressomaskine?', 'En espressomaskine brygger ved et meget højere tryk og giver crema. En mokkakande brygger ved lavere tryk på komfuret og giver en stærk, fyldig kaffe uden rigtig crema.' ],
		[ 'Kan en mokkakande bruges på induktion?', 'Kun hvis den er lavet til det – typisk i rustfrit stål med magnetisk bund. Klassiske aluminiumskander virker ikke på induktion.' ],
		[ 'Hvilken kaffe skal man bruge i en mokkakande?', 'Kaffe malet lidt grovere end espresso. Fint malet espressokaffe kan stoppe filteret til.' ],
	],
];
