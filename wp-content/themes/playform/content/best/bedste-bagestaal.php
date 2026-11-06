<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-bagestaal/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-bagestaal',
	'title'    => 'Bagestål: Vores bud på de 3 bedste',
	'excerpt'  => 'Et bagestål giver sprøde pizzaer og brød med skorpe i en almindelig ovn – og knækker ikke som en pizzasten. Her er vores bud på de 3 bedste.',
	'more_cat' => 'pizzasten',
	'intro'    => <<<'HTML'
<p>Et bagestål – eller pizzastål – er en tyk stålplade, du lægger i ovnen. Stål leder varmen hurtigere end sten, så pizzabunden bliver sprød, og brødet får en flot skorpe, selvom en almindelig ovn ikke bliver lige så varm som en pizzaovn. Og i modsætning til en pizzasten kan stålet ikke knække.</p>
<p>Herunder er vores bud på de 3 bedste bagestål hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7350100570020',
			'price'   => 629,
			'name'    => 'Gourmetstål Classic pizzastål',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Et solidt 1 cm tykt stål på 33 × 37 cm, der giver sprød bund i både ovn og grill – med 20 års funktionsgaranti.',
			'why'     => <<<'HTML'
<p>Gourmetstål Classic er det oplagte valg, hvis du vil bage pizza som i en rigtig pizzeria hjemme i din egen ovn. Pladen gør det samme som en pizzasten, men er lavet af varmvalset stål, så den tåler store temperaturudsving uden at knække. Du kan bruge den både i ovnen og på grillen.</p>
<p>Med en tykkelse på 1 cm og en vægt på 9 kg rummer stålet masser af varme. Det betyder, at bunden bliver sprød, og at du kan bage den ene pizza efter den anden uden lang ventetid. Fladen på 33 × 37 cm giver plads til en god familiepizza eller et stort brød.</p>
<p>I kassen ligger et opskriftshæfte og en plejevejledning, så du kommer godt fra start. Stålet skal vaskes i hånden, og Gourmetstål giver 20 års funktionsgaranti.</p>
HTML,
			'good'    => [ 'Dig, der bager mange pizzaer i træk', 'Pizza og brød i ovnen og på grillen', 'Dig, der vil have noget, der holder' ],
			'less'    => [ 'Dig, der skal løfte den ofte (9 kg)', 'Skal vaskes i hånden' ],
		],
		[
			'ean'     => '7350101311721',
			'price'   => 439,
			'name'    => 'Kockums Jernverk bage-/pizzastål 35 cm',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Svensk bagestål i 6 mm kulstofstål, der kan bruges i ovnen, på induktion, på grillen og over bål.',
			'why'     => <<<'HTML'
<p>Kockums Jernverk bage-/pizzastål er til dig, der vil have sprøde pizzaer og brød med en flot skorpe og en luftig krumme. Det runde stål måler 35 cm i diameter og er lavet i Sverige af 6 mm kulstofstål fra SSAB.</p>
<p>Kulstofstålet holder godt på varmen, og det er netop den varme, der giver bunden sprødhed. Samtidig er det meget alsidigt: Du kan lægge det i ovnen, sætte det på induktionskomfuret, på grillen eller over åben ild. Brug det til pizza den ene dag og til burgerbøffer den næste.</p>
<p>Med 4,71 kg er det til at løfte ind og ud af ovnen. Det skal vaskes i hånden, og der følger 10 års garanti med.</p>
HTML,
			'good'    => [ 'Dig, der vil bruge stålet til mere end pizza', 'Brød med skorpe og luftig krumme', 'Lavere budget' ],
			'less'    => [ 'Store pizzaer over 35 cm' ],
		],
		[
			'ean'     => '7350100570150',
			'price'   => 450,
			'name'    => 'Gourmetstål rundt pizzastål 30 cm',
			'role'    => 'Bedst til grill og små ovne',
			'reviews' => [],
			'verdict' => 'Kompakt rundt pizzastål på 30 cm i varmvalset stål – med stofpose og 20 års funktionsgaranti.',
			'why'     => <<<'HTML'
<p>Gourmetståls runde pizzastål giver dig pizzaovnsfølelsen i et kompakt format. Det er tænkt som en klassisk pizzasten, men i robust stål, så du ikke skal være nervøs for, at det knækker. Med 30 cm i diameter passer det godt til mindre ovne og runde pizzaer til en eller to personer.</p>
<p>Stålet er varmvalset og 6 mm tykt, så det tager varmen godt og giver bunden et sprødt resultat. Har du brug for mere plads, findes samme model også i 39 cm.</p>
<p>Med i kassen er et opskriftshæfte, en plejevejledning og en stofpose, som stålet kan ligge i, når det ikke er i brug. Det skal vaskes i hånden, og Gourmetstål giver 20 års funktionsgaranti.</p>
HTML,
			'good'    => [ 'Små ovne og runde pizzaer', 'Dig, der vil have et stål, der er nemt at gemme væk' ],
			'less'    => [ 'Brød og store familiepizzaer' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan bruger du et bagestål</h2>
<h3>Varm det godt op</h3>
<p>Læg stålet på den øverste eller næstøverste rille, og varm ovnen op på maks. i mindst 45 minutter. Stålet skal være helt gennemvarmt.</p>
<h3>Tykkelse</h3>
<p>Et tykkere stål holder mere varme, så du kan bage flere pizzaer i træk. 6–10 mm er almindeligt til hjemmet.</p>
<h3>Pleje</h3>
<p>Kulstofstål kan ruste. Tør det efter brug og giv det et tyndt lag olie.</p>
<p>Se alle <a href="/pizza-bagning/pizzasten/">pizzasten og bagestål</a>, eller se guiderne til <a href="/bedste-pizzaovn/">pizzaovne</a> og <a href="/bedste-pizzaovn-til-grill/">pizza på grillen</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på et bagestål og en pizzasten?', 'Stål leder varmen hurtigere og kan ikke knække. En pizzasten suger fugt fra dejen.' ],
		[ 'Hvor længe skal et bagestål varmes op?', 'Mindst 45 minutter ved ovnens højeste temperatur.' ],
		[ 'Kan man bage brød på et bagestål?', 'Ja, det giver en flot skorpe på både brød og boller.' ],
	],
];
