<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/pizzaovn-til-grill/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-pizzaovn-til-grill',
	'date'     => '2023-09-07 12:13:33',
	'title'    => 'Pizzaovn til grill: Vores bud på de 2 bedste',
	'excerpt'  => 'En pizzaovn til grill er en ovnhætte eller et ovnsæt, der sættes oven på grillen, så den bager som en pizzaovn. Her er vores bud på de 2 bedste fra de butikker, vi samarbejder med.',
	'more_cat' => 'pizzaovn-til-grill',
	'intro'    => <<<'HTML'
<p>En pizzaovn til grill er ikke bare en pizzasten. Det er en ovnhætte eller et ovnsæt, der sættes direkte på din gas-, kul- eller kamadogrill og lukker varmen inde omkring pizzaen. Grillen leverer kraften nedefra, ovnen holder på varmen ovenfra – og så får du en sprød bund og et færdigbagt fyld på få minutter, uden at købe en separat pizzaovn.</p>
<p>Herunder er vores bud på de 2 bedste pizzaovne til grill fra de butikker, vi samarbejder med: én til kamadogrillen og én til Muurikkas stegepladesæt.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7350097262861',
			'price'   => 2190,
			'name'    => 'Kamado Sumo Rotisserie & Pizzaovn Midi',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Pizzaovn og rotisserie i ét til kamadogrill – pizza ved over 400 °C og saftige spyd.',
			'why'     => <<<'HTML'
<p>Har du en kamado, er det her vores bedste valg, fordi sættet udnytter den høje varme. Det forvandler din Kamado Sumo-grill til en pizzaovn: Du skubber pizzaen ind gennem lågen, holder temperaturen over 400 °C og får sprøde, friskbagte pizzaer direkte fra grillen. Ovnens åbning er 38 cm bred og 8 cm høj.</p>
<p>Samme sæt er også rotisseri. Motoren drejer spyddet langsomt og jævnt, og de justerbare gafler holder kødet i balance, så det bliver saftigt og tilberedt hele vejen rundt.</p>
<p>Sættet passer til Kamado Sumo Midi og lignende modeller med en grillrist på 47 cm i bredden. Det vejer 10 kg og er lavet i metal.</p>
HTML,
			'good'    => [ 'Kamado med 47 cm grillrist', 'Dig, der vil have pizza ved over 400 °C', 'Grillspyd og hel kylling' ],
			'less'    => [ 'Almindelige gas- og kulgrill' ],
		],
		[
			'ean'     => '6414676023272',
			'price'   => 775,
			'name'    => 'Muurikka Pizzaovn til stegepladesæt 58 cm',
			'role'    => 'Bedst til Muurikka-stegepladen',
			'reviews' => [],
			'verdict' => 'Pizzasæt med ovndel, rist i rustfrit stål og 8 mm cordierit-sten, der gør dit Muurikka-stegepladesæt på 58 cm til en pizzaovn.',
			'why'     => <<<'HTML'
<p>Står der allerede et Muurikka-stegepladesæt på 58 cm i haven, er det her den nemme vej til hjemmebagt pizza. Du sætter ovndelen på i stedet for at købe en selvstændig pizzaovn, og så bruger du den varmekilde, du allerede har.</p>
<p>Sættet er komplet: en ovndel, en rist i rustfrit stål og en 8 mm tyk pizzasten i cordierit. Stenen ligger på risten og giver den sprøde bund, og ovndelen giver dig fornemmelsen af en stenovn – lige ved siden af terrassebordet.</p>
<p>Fordi sættet bygger videre på udstyr, du har i forvejen, fylder det ikke meget, når sæsonen er slut. Har du ikke en Muurikka, er kamado-sættet det rigtige valg, hvis du har en kamadogrill.</p>
HTML,
			'good'    => [ 'Dig, der har et Muurikka-stegepladesæt på 58 cm', 'Pizza i haven uden en ovn mere', 'Sprød bund på cordierit-sten' ],
			'less'    => [ 'Almindelige gas-, kul- og kamadogrill' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan bager du pizza på grillen</h2>
<h3>Pizzaovn til grill eller bare en pizzasten?</h3>
<p>En pizzasten eller et pizzastål på grillristen giver en sprød bund, men varmen forsvinder op under låget, så toppen bager langsommere. En pizzaovn til grill lukker varmen inde omkring pizzaen, så fyld og ost bager med – det er langt tættere på en rigtig pizzaovn. Vil du bare prøve det af, er en sten den billige start; vil du have pizzaovnsresultatet, er en ovn til grillen vejen.</p>
<h3>Tjek, at den passer til din grill</h3>
<p>Mål fladen på din grill, før du køber. En ovnhætte skal kunne stå stabilt på ristene, og låget på grillen behøver ikke kunne lukkes over den. Kamado-sæt er lavet til bestemte ristestørrelser, og Muurikkas sæt passer kun til deres egne stegepladesæt.</p>
<h3>Varm grillen godt op</h3>
<p>Sæt ovnen på grillen, mens den varmer op, så stenen får samme temperatur som grillen. Sæt aldrig en kold sten på en meget varm grill – den kan flække.</p>
<h3>Indirekte varme</h3>
<p>På en gasgrill kan du skrue ned for brænderen lige under stenen, så bunden ikke brænder, mens toppen bages. På en kulgrill eller kamado skal du bruge en varmeplade eller convEGGtor under stenen.</p>
<h3>Tynde pizzaer bages bedst</h3>
<p>Tynd dej og ikke for meget fyld giver det bedste resultat på grillen. Brug en pizzaspade, så pizzaen glider nemt på og af.</p>
<p>Vil du hellere have en selvstændig pizzaovn, så se vores guide til den <a href="/bedste-pizzaovn/">bedste pizzaovn</a>. Vil du bare starte med en sten på grillen, så se alle <a href="/pizza-bagning/pizzasten/">pizzasten og pizzastål</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er en pizzaovn til grill?', 'Det er en ovnhætte eller et ovnsæt, der sættes på en gas-, kul- eller kamadogrill. Grillen giver varmen nedefra, og ovnen holder varmen inde omkring pizzaen, så den bager som i en pizzaovn.' ],
		[ 'Kan man bage pizza på en gasgrill?', 'Ja. Med en pizzaovn til grill – eller en pizzasten og låget lukket – kan en gasgrill blive varm nok til en sprød pizza.' ],
		[ 'Hvad er bedst: pizzasten eller pizzastål?', 'Pizzastål kan ikke knække og bliver hurtigt varmt. Pizzasten suger fugt fra dejen. Begge giver en sprød bund.' ],
		[ 'Hvor varm skal grillen være til pizza?', 'Så varm som muligt – gerne over 300 °C. Tjek producentens anvisning for den maksimale temperatur for sten og grill.' ],
	],
];
