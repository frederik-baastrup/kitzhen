<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/pizzaovn-til-grill/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-pizzaovn-til-grill',
	'title'    => 'Pizzaovn til grill: Vores bud på de 3 bedste',
	'excerpt'  => 'Med en pizzaovn, pizzasten eller pizzastål til grillen kan du bage sprøde pizzaer på den grill, du allerede har. Her er vores bud på de 3 bedste fra danske butikker.',
	'more_cat' => 'pizzasten',
	'intro'    => <<<'HTML'
<p>Du behøver ikke købe en separat pizzaovn for at bage gode pizzaer udenfor. Grillen kan blive meget varmere end en almindelig ovn, og med en pizzasten, et pizzastål eller en pizzaovnsindsats bliver bunden sprød, mens fyldet bliver bagt fra oven under låget.</p>
<p>Herunder er vores bud på de 3 bedste måder at gøre grillen til pizzaovn med udstyr fra danske butikker. Nederst finder du en guide til sten, stål og varme.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7350100570037',
			'price'   => 699,
			'name'    => 'Gourmetstål Norrland pizzastål',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Pizzastål i stedet for sten – mindre risiko for, at det knækker, og det kan bruges på grillen og i ovnen.',
			'why'     => <<<'HTML'
<p>Norrland er Gourmetståls premium-model. Et pizzastål fungerer som en klassisk pizzasten, bare i stål –, og der derfor er mindre risiko for, at det flækker.</p>
<p>Stål leder varmen hurtigere end sten, så bunden bliver hurtigt sprød. Pladen kan bruges både på grillen og i køkkenets ovn, så den bliver ikke kun brugt om sommeren.</p>
HTML,
			'good'    => [ 'Gas- og kulgrill', 'Dig, der også vil bage pizza i ovnen' ],
			'less'    => [ 'Dig, der vil have en komplet pizzaovn' ],
		],
		[
			'ean'     => '7350097262861',
			'price'   => 1790,
			'name'    => 'Kamado Sumo Rotisserie & Pizzaovn Midi',
			'role'    => 'Bedst til kamado',
			'reviews' => [],
			'verdict' => 'Pizzaovn og grillspyd i ét sæt, der sættes direkte på grillen.',
			'why'     => <<<'HTML'
<p>Kamado Sumos sæt gør grillen til både pizzaovn og rotisserie. Du kan grille spyd og bage pizza direkte på grillen, at rotisseriet roterer ved lav hastighed for et saftigt resultat, og spyddet har justerbare gafler.</p>
<p>Det er lavet til kamado-grills, så tjek, at størrelsen passer til din grill, før du køber.</p>
HTML,
			'good'    => [ 'Kamado-grills', 'Dig, der også vil lave grillspyd og hel kylling' ],
			'less'    => [ 'Almindelige gasgrills' ],
		],
		[
			'ean'     => '10077924174381',
			'price'   => 799,
			'name'    => 'Weber Crafted pizzasten',
			'role'    => 'Bedst til Weber',
			'reviews' => [],
			'verdict' => 'Pizzasten til Webers Crafted-system, der sættes i grillen i stedet for den ene grillrist.',
			'why'     => <<<'HTML'
<p>Weber Crafted er et system af tilbehør, der passer ind i grillristen på Webers nyere grills. Du udskifter den højre grillrist med tilbehøret – her en pizzasten.</p>
<p>Har du en Weber-grill med Crafted-ramme, er det den nemmeste løsning, fordi stenen sidder fast og plant. Tjek, at din grill passer til Crafted, før du køber.</p>
HTML,
			'good'    => [ 'Weber-grills med Crafted-system' ],
			'less'    => [ 'Andre grillmærker' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan bager du pizza på grillen</h2>
<h3>Pizzasten, pizzastål eller pizzaovnsindsats?</h3>
<p>En pizzasten suger fugt fra dejen og giver en sprød bund, men den kan flække, hvis den bliver varmet for hurtigt op eller får koldt vand på. Et pizzastål leder varmen hurtigere og kan ikke knække. En pizzaovnsindsats lukker varmen inde omkring pizzaen, så toppen bliver bagt hurtigere – tættere på en rigtig pizzaovn.</p>
<h3>Varm grillen godt op</h3>
<p>Læg stenen eller stålet på grillen, mens den varmer op, så det får samme temperatur som grillen. Sæt aldrig en kold sten på en meget varm grill.</p>
<h3>Indirekte varme</h3>
<p>På en gasgrill kan du skrue ned for brænderen lige under stenen, så bunden ikke brænder, mens toppen bages. På en kulgrill eller kamado skal du bruge en varmeplade eller convEGGtor under stenen.</p>
<h3>Tynde pizzaer bages bedst</h3>
<p>Tynd dej og ikke for meget fyld giver det bedste resultat på grillen. Brug en pizzaspade, så pizzaen glider nemt på og af.</p>
<p>Vil du have en rigtig pizzaovn, så se vores guide til den <a href="/bedste-pizzaovn/">bedste pizzaovn</a> – eller se alle <a href="/pizza-bagning/pizzasten/">pizzasten og pizzastål</a>.</p>
HTML,
	'faq'      => [
		[ 'Kan man bage pizza på en gasgrill?', 'Ja. Med en pizzasten eller et pizzastål og låget lukket kan en gasgrill blive varm nok til en sprød pizza.' ],
		[ 'Hvad er bedst: pizzasten eller pizzastål?', 'Pizzastål kan ikke knække og bliver hurtigt varmt. Pizzasten suger fugt fra dejen. Begge giver en sprød bund.' ],
		[ 'Hvor varm skal grillen være til pizza?', 'Så varm som muligt – gerne over 300 °C. Tjek producentens anvisning for den maksimale temperatur for sten og grill.' ],
	],
];
