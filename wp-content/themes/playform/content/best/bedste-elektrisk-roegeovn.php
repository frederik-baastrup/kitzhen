<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/elektrisk-roegeovn/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-elektrisk-roegeovn',
	'title'    => 'Elektrisk røgeovn: Vores bud på de 3 bedste',
	'excerpt'  => 'En elektrisk røgeovn gør det nemt at røge fisk, kød og ost uden kul og gas. Her er vores bud på de 3 bedste fra danske butikker – og hvad du skal kigge efter.',
	'more_cat' => 'roegeovn',
	'intro'    => <<<'HTML'
<p>En elektrisk røgeovn er den nemmeste måde at komme i gang med at røge mad på. Et varmelegeme varmer en bakke med træspåner op, så de ulmer og giver røg, mens maden ligger på ristene ovenover. Du skal ikke holde øje med kul eller gas – du sætter strømmen til, og ovnen holder varmen.</p>
<p>Herunder er vores bud på de 3 bedste elektriske røgeovne hos danske butikker lige nu – fra en kompakt model til køkkenet til et stort røgeskab til haven. Nederst finder du en købsguide til størrelse, effekt og varm- og koldrøgning.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7350101117613',
			'price'   => 2990,
			'name'    => 'Mareld Elektrisk Røgeovn',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Kraftig elektrisk røgeovn på 1650 W – nem at gå til for både nybegyndere og øvede.',
			'why'     => <<<'HTML'
<p>Mareld Elrøg er den kraftigste af vores tre valg. Butikken oplyser, at den har en effekt på 1650 W og fremhæver, at du hverken skal bruge en masse kul eller flere timers forberedelse for at få røget mad.</p>
<p>Mareld sælger også reservedele som varmeelement, termostat, termometer, riste og bakker til ovnen, så den kan holdes kørende i mange år. Valget er vores vurdering ud fra butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Dig, der vil røge ofte og meget', 'Dig, der vil kunne skifte reservedele' ],
			'less'    => [ 'Dig, der kun røger et par fisk om året' ],
		],
		[
			'ean'     => '6410412404299',
			'price'   => 2523,
			'name'    => 'Mustang Elektrisk rygeovn',
			'role'    => 'Mest plads',
			'reviews' => [],
			'verdict' => 'Røgeskab med fire stålriste på 37 x 33 cm og fedtopsamling – til store portioner.',
			'why'     => <<<'HTML'
<p>Mustangs elektriske rygeovn er et røgeskab med god plads. Butikken oplyser, at den leveres med fire stålriste, der måler 37 x 33 centimeter, og en praktisk fedtopsamling, og at den kan bruges til grøntsager, fisk, kød og andre råvarer.</p>
<p>Fire riste giver plads til at røge en hel fangst eller pålæg til en fest på én gang. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Store mængder fisk og kød', 'Haven og terrassen' ],
			'less'    => [ 'Små altaner' ],
		],
		[
			'ean'     => '6414676025368',
			'price'   => 1290,
			'name'    => 'Muurikka Elektrisk røgeovn 1100W Pro',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Elektrisk røgeovn i rustfrit stål på 1100 W fra finske Muurikka.',
			'why'     => <<<'HTML'
<p>Muurikka er et finsk mærke med fokus på udendørs madlavning. Butikken beskriver 1100W Pro som en elektrisk røgeovn i rustfrit stål, der passer til både nybegyndere og erfarne.</p>
<p>Den er et godt sted at starte, hvis du vil prøve at røge uden at give mere end nødvendigt. Valget er vores vurdering ud fra pris og butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Begyndere', 'Fisk og mindre portioner' ],
			'less'    => [ 'Store mængder ad gangen' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en elektrisk røgeovn</h2>
<h3>Varmrøgning eller koldrøgning?</h3>
<p>De fleste elektriske røgeovne er lavet til varmrøgning, hvor maden både røges og tilberedes ved typisk 60–120 °C – fx makrel, laks, kylling og spareribs. Koldrøgning sker ved lav temperatur over mange timer og kræver ofte en særlig røggenerator. Tjek, hvad ovnen er lavet til.</p>
<h3>Størrelse og riste</h3>
<p>Antallet og størrelsen af ristene afgør, hvor meget du kan røge ad gangen. Skal du røge til mange, så kig efter et røgeskab med flere riste.</p>
<h3>Effekt og termostat</h3>
<p>Højere effekt giver hurtigere opvarmning og bedre evne til at holde varmen, når det er koldt udenfor. En termostat og et termometer gør det nemmere at ramme den rigtige temperatur.</p>
<h3>Træspåner og placering</h3>
<p>Brug træspåner til rygning, fx el, bøg eller frugttræ. Røgeovnen skal stå udendørs eller i et godt ventileret rum, på et stabilt underlag og væk fra brændbare ting.</p>
<p>Se alle <a href="/grill/roegeovn/">røgeovne</a>, eller kig på en <a href="/grill/kamado-grill/">kamado-grill</a>, der også kan bruges til langsom røgning.</p>
HTML,
	'faq'      => [
		[ 'Hvordan virker en elektrisk røgeovn?', 'Et varmelegeme varmer træspåner op, så de ulmer og giver røg. Varmen og røgen tilbereder og røger maden på ristene.' ],
		[ 'Kan man bruge en elektrisk røgeovn indendørs?', 'Kun hvis producenten skriver det, og kun med god udluftning. De fleste er lavet til udendørs brug.' ],
		[ 'Hvor lang tid tager det at røge fisk?', 'Det afhænger af fisken og temperaturen, men mindre fisk som makrel er ofte færdige på under en time ved varmrøgning.' ],
		[ 'Hvilke træspåner skal man bruge?', 'El og bøg er klassiske til fisk. Frugttræ som æble og kirsebær giver en mildere smag, der passer godt til kylling og svinekød.' ],
	],
];
