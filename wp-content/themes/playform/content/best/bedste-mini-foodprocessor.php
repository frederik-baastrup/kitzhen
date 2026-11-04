<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/mini-foodprocessor/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-mini-foodprocessor',
	'title'    => 'Mini-foodprocessor: Vores bud på de 3 bedste',
	'excerpt'  => 'En mini-foodprocessor hakker løg, krydderurter og nødder og laver pesto og dressing – uden at du skal finde den store maskine frem. Her er vores bud på de 3 bedste.',
	'more_cat' => 'foodprocessor',
	'intro'    => <<<'HTML'
<p>En mini-foodprocessor – eller minihakker – er en lille elektrisk hakker med en skål på typisk under en liter. Den er perfekt til de små opgaver, hvor en stor foodprocessor er for meget: et løg, et bundt krydderurter, en håndfuld nødder, pesto, dressing, hummus eller babymad. Den fylder lidt, er hurtig at tage frem og nem at gøre ren.</p>
<p>Herunder er vores bud på de 3 bedste mini-foodprocessorer hos danske butikker lige nu. Nederst finder du en købsguide til størrelse, effekt og rengøring.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5413184912970',
			'price'   => 549,
			'name'    => 'KitchenAid Mini foodprocessor 0,83 liter',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Populær mini-foodprocessor på 0,83 liter med one-touch betjening og to hastigheder.',
			'why'     => <<<'HTML'
<p>KitchenAids mini-foodprocessor er en af de mest kendte på markedet. Butikken beskriver den som den perfekte størrelse til hverdagsbrug til at hakke frugt og grøntsager og lave dressing og sovs, og fremhæver one-touch betjeningen og de to hastigheder.</p>
<p>Med 0,83 liter er skålen stor nok til en portion pesto eller hakkede løg til en gryderet. Den findes i flere farver, så den kan matche en KitchenAid-røremaskine. Valget er vores vurdering ud fra butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Pesto, dressing og hakkede grøntsager', 'Dig, der har andre KitchenAid-maskiner' ],
			'less'    => [ 'Store mængder dej' ],
		],
		[
			'ean'     => '3519280023854',
			'price'   => 650,
			'name'    => 'Magimix Minihakker 0,83 liter',
			'role'    => 'Bedst til stille køkkener',
			'reviews' => [],
			'verdict' => 'Mini-foodprocessor fra franske Magimix – kraftfuld og støjsvag ifølge butikken.',
			'why'     => <<<'HTML'
<p>Magimix er kendt for deres store foodprocessorer, og minihakkeren har samme størrelse skål som KitchenAid. Butikken beskriver den som både kraftfuld og støjsvag og fremhæver det minimalistiske design, der ikke optager unødig plads på køkkenbordet.</p>
<p>Valget er vores vurdering ud fra butikkens oplysninger og mærkets ry.</p>
HTML,
			'good'    => [ 'Dig, der lægger vægt på design og lav støj' ],
			'less'    => [ 'Dig, der vil holde prisen nede' ],
		],
		[
			'ean'     => '0622356219730',
			'price'   => 349,
			'name'    => 'Ninja Express Chop',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Kompakt minihakker, der hakker, mixer og purerer – til en lav pris.',
			'why'     => <<<'HTML'
<p>Ninja Express Chop er den billigste af vores tre valg. Butikken beskriver den som en løsning til køkkener med begrænset bordplads, hvor du kan hakke, mixe og purere ingredienserne til aftensmaden uden at finde den store foodprocessor frem.</p>
<p>Til prisen er den et godt sted at starte, hvis du ikke har haft en minihakker før. Valget er vores vurdering ud fra pris og butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Dig, der vil prøve en minihakker', 'Små køkkener' ],
			'less'    => [ 'Daglig brug til store mængder' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en mini-foodprocessor</h2>
<h3>Størrelse</h3>
<p>De fleste mini-foodprocessorer har en skål på 0,3–1 liter. Omkring 0,8 liter er en god størrelse til de fleste: nok til en portion pesto eller hakkede løg til en gryderet, men lille nok til at være hurtig at gøre ren.</p>
<h3>Effekt og hastigheder</h3>
<p>Mere effekt hakker hurtigere og klarer hårde ting som nødder bedre. To hastigheder eller en pulsfunktion gør det nemmere at styre, om du vil have groft hakket eller en glat puré.</p>
<h3>Rengøring</h3>
<p>Kig efter en skål og kniv, der kan tåle opvaskemaskine, og en model, hvor kniven er nem at tage af. Skyl den lige efter brug – især efter løg og hvidløg.</p>
<h3>Ledning eller batteri?</h3>
<p>Ledningsfrie minihakkere kan bruges overalt i køkkenet, men skal lades op. Modeller med ledning er ofte billigere og altid klar.</p>
<h3>Mini-foodprocessor, stavblender eller grøntsagshakker?</h3>
<p>Mange stavblendere leveres med en lille hakkeskål, der kan det samme. Vil du have ensartede tern, er en manuel <a href="/bedste-groentsagshakker/">grøntsagshakker</a> bedre. Se alle <a href="/koekkenmaskiner/foodprocessor/">foodprocessorer og minihakkere</a> eller <a href="/koekkenmaskiner/stavblender/">stavblendere</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad kan man bruge en mini-foodprocessor til?', 'Hakke løg, hvidløg, krydderurter og nødder og lave pesto, dressing, hummus, dips og babymad.' ],
		[ 'Kan en mini-foodprocessor ælte dej?', 'Som regel ikke. Til dej skal du bruge en stor foodprocessor eller en røremaskine.' ],
		[ 'Kan man knuse is i en mini-foodprocessor?', 'Det kan de fleste ikke. Tjek producentens anvisning – ellers kan kniven blive sløv eller skålen gå i stykker.' ],
	],
];
