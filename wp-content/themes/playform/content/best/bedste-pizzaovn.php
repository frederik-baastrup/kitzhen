<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-pizzaovn/, /cozze-pizzaovn-test/ og /pizzaovn-til-kokkenet/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-pizzaovn',
	'date'     => '2023-06-26 07:44:40',
	'title'    => 'Pizzaovn: Vores bud på de 5 bedste',
	'excerpt'  => 'En pizzaovn bliver langt varmere end en almindelig ovn og bager en pizza på få minutter. Her er vores bud på de 5 bedste pizzaovne fra danske butikker – til gas, træ og strøm.',
	'more_cat' => 'pizzaovn',
	'intro'    => <<<'HTML'
<p>En rigtig napolitansk pizza bages ved 400–500 °C på et par minutter – langt varmere, end en almindelig ovn kan klare. En pizzaovn til haven eller køkkenet når de temperaturer, og resultatet er en sprød, luftig bund med sorte pletter i kanten, som du ikke kan få i en almindelig ovn.</p>
<p>Herunder er vores bud på de 5 bedste pizzaovne hos danske butikker lige nu – på gas, træpiller og strøm, til udendørs og indendørs brug. Nederst finder du en købsguide til brændsel, størrelse og hvor du må have den.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5060967395194',
			'price'   => 2990,
			'name'    => 'Ooni Koda 2',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Gasdrevet pizzaovn fra Ooni med et bageareal på 39,5 cm – plads til store pizzaer.',
			'why'     => <<<'HTML'
<p>Ooni er det mærke, der gjorde pizzaovne til haven populære, og Koda 2 er deres gasdrevne model. Den er kraftfuld og fleksibel, bagearealet på 39,5 cm giver plads til store pizzaer, og den kan også bruges til andre retter.</p>
<p>Gas er den nemmeste vej til pizza: du tænder, venter på, at stenen er varm, og så er du i gang – ingen træ, ingen aske.</p>
HTML,
			'good'    => [ 'Dig, der vil have det nemt', 'Store pizzaer' ],
			'less'    => [ 'Dig, der drømmer om træfyret smag' ],
		],
		[
			'ean'     => '5060967394821',
			'price'   => 2790,
			'name'    => 'Ooni Karu 2',
			'role'    => 'Bedst med træ',
			'reviews' => [],
			'verdict' => 'Kompakt og robust pizzaovn fra Ooni, der bager en pizza på 60 sekunder.',
			'why'     => <<<'HTML'
<p>Ooni Karu 2 er resultatet af ti års erfaring med pizzaovne. Den er kompakt og robust, og du kan lave autentiske pizzaer på bare 60 sekunder.</p>
<p>Karu-serien er Oonis ovne til fast brændsel som træ, der giver den klassiske røgsmag, men kræver, at du holder ilden ved lige. Tjek hos butikken, hvilket brændsel netop denne model kan bruge.</p>
HTML,
			'good'    => [ 'Dig, der vil have smagen fra træ', 'Sommerhus og camping' ],
			'less'    => [ 'Dig, der vil have det helt nemt' ],
		],
		[
			'ean'     => '5707582040862',
			'price'   => 3439,
			'name'    => 'Witt Piccolo Rotante 16"',
			'role'    => 'Bedst med roterende sten',
			'reviews' => [],
			'verdict' => 'Dansk-designet pizzaovn med roterende sten og en opvarmningstid på 15 minutter.',
			'why'     => <<<'HTML'
<p>Witt er et dansk mærke, og Piccolo Rotante har en roterende sten. Den er en kompakt og effektiv løsning til haven eller terrassen med en opvarmningstid på kun 15 minutter, hvorefter du kan bage sprøde napolitanske pizzaer.</p>
<p>Den roterende sten betyder, at du ikke selv skal dreje pizzaen for at få den jævnt bagt – det er den sværeste del for begyndere.</p>
HTML,
			'good'    => [ 'Begyndere', 'Jævnt bagte pizzaer uden at dreje' ],
			'less'    => [ 'Dig, der vil holde prisen nede' ],
		],
		[
			'ean'     => '0622356320559',
			'price'   => 2358,
			'name'    => 'Ninja Artisan elektrisk pizzaovn og airfryer',
			'role'    => 'Bedst elektrisk',
			'reviews' => [],
			'verdict' => 'Elektrisk udendørs pizzaovn op til 370 °C – uden brænde, aske eller røg.',
			'why'     => <<<'HTML'
<p>Ninja Artisan kører på strøm. Den er en elektrisk udendørsovn med præcis temperaturkontrol op til 370 °C, der giver sprøde pizzaer helt uden brænde, aske eller røg på terrassen – og den kan også bruges som airfryer.</p>
<p>370 °C er ikke helt så varmt som de gasdrevne ovne, men nok til en rigtig god pizza, og du slipper for gasflasken.</p>
HTML,
			'good'    => [ 'Altaner, hvor gas ikke er tilladt', 'Dig, der også vil bruge den til andet end pizza' ],
			'less'    => [ 'Dig, der vil have de højeste temperaturer' ],
		],
		[
			'ean'     => '9312432030861',
			'price'   => 5990,
			'name'    => 'Sage The Smart Oven Pizzaiolo',
			'role'    => 'Bedst indendørs',
			'reviews' => [],
			'verdict' => 'Elektrisk pizzaovn til køkkenbordet, der bringer stenovnens høje temperatur indendørs.',
			'why'     => <<<'HTML'
<p>Sage Pizzaiolo er lavet til at stå i køkkenet. Den klassiske napolitanske pizza bages i stenovn ved temperaturer, der ikke er mulige i en almindelig ovn – og Pizzaiolo er Sages bud på at bringe den varme indendørs.</p>
<p>Den er dyr, men den eneste af vores valg, du kan bruge hele året i køkkenet.</p>
HTML,
			'good'    => [ 'Lejligheder uden have', 'Pizza hele året' ],
			'less'    => [ 'Små køkkener og små budgetter' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige pizzaovn</h2>
<h3>Gas, træ eller strøm?</h3>
<p>Gas er nemmest: hurtig opvarmning og nem styring. Træ og træpiller giver røgsmag og den klassiske oplevelse, men kræver mere opmærksomhed. Elektriske pizzaovne kan bruges, hvor gas og åben ild ikke er tilladt, og nogle kan stå indendørs.</p>
<h3>Størrelse</h3>
<p>Pizzaovne angives ofte i tommer: 12" giver pizzaer på omkring 30 cm, 16" på omkring 40 cm. En større ovn er nemmere at arbejde med, fordi der er mere plads til at dreje pizzaen.</p>
<h3>Roterende sten</h3>
<p>I en pizzaovn er varmen kraftigst bagest. Uden roterende sten skal du dreje pizzaen et par gange undervejs. En roterende sten gør det for dig.</p>
<h3>Tilbehør</h3>
<p>Du skal bruge en pizzaspade, et infrarødt termometer til at måle stenens temperatur og et dæksel til ovnen. Tjek, hvad der følger med.</p>
<h3>Hvor må du have den?</h3>
<p>Udendørs pizzaovne skal stå på et stabilt, brandsikkert underlag med god afstand til husmuren. Bor du i lejlighed, så tjek reglerne i din forening, før du stiller en gas- eller træfyret ovn på altanen.</p>
<p>Se alle <a href="/pizza-bagning/pizzaovn/">pizzaovne</a>, eller bag pizza på den grill, du har, med en sten eller et stål fra vores guide til <a href="/bedste-pizzaovn-til-grill/">pizzaovn til grill</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvor varm skal en pizzaovn være?', 'En napolitansk pizza bages ved 400–500 °C på 60–90 sekunder. Andre pizzaer bages fint ved lavere temperatur i lidt længere tid.' ],
		[ 'Kan man bruge en pizzaovn indendørs?', 'Kun hvis den er lavet til det – typisk elektriske modeller. Gas- og træfyrede pizzaovne er til udendørs brug.' ],
		[ 'Hvilken mel skal man bruge til pizza?', 'Italiensk tipo 00-mel giver den klassiske, luftige napolitanske bund.' ],
		[ 'Hvorfor brænder bunden på?', 'Stenen er for varm i forhold til luften i ovnen. Skru ned for varmen et øjeblik, før pizzaen kommer ind, eller lad stenen køle lidt af.' ],
	],
];
