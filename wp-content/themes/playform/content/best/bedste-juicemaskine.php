<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-juicemaskine/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-juicemaskine',
	'date'     => '2023-06-27 19:32:08',
	'title'    => 'Juicemaskine: Vores bud på de 5 bedste',
	'excerpt'  => 'En juicemaskine presser frisk juice af frugt og grønt. Her er vores bud på de 5 bedste juicemaskiner – koldpressere og saftcentrifuger.',
	'more_cat' => 'juicemaskine',
	'intro'    => <<<'HTML'
<p>Der findes to typer juicemaskiner: en råsaftcentrifuge, der river frugten og slynger saften ud med høj hastighed, og en slow juicer (koldpresser), der presser saften langsomt ud. Centrifugen er hurtigst og billigst, mens slow juiceren giver mest saft af grønt og bevarer mere af smagen.</p>
<p>Herunder er vores bud på de 5 bedste juicemaskiner fra de butikker, vi samarbejder med. Leder du specifikt efter en slow juicer, så se vores guide til <a href="/bedste-slow-juicer/">slow juicere</a>.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '9312432032476',
			'price'   => 2341,
			'name'    => 'Sage The Nutri Juicer Cold Plus SJE530',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Hurtig saftcentrifuge med 88 mm påfyldning, to hastigheder og en lukket kande på 2 liter – og den fylder mindre end de fleste.',
			'why'     => <<<'HTML'
<p>Sage The Nutri Juicer Cold Plus er til dig, der vil have frisk juice om morgenen uden at stå og skære frugt i små stykker. Påfyldningsrøret er hele 88 mm bredt, så æbler og gulerødder kan komme i, som de er. Med to hastigheder skifter du nemt mellem bløde frugter og hårde rødder.</p>
<p>Sages Cold Spin-teknik er lavet til at holde juicen kølig, mens den presses. Saften løber ned i en lukket kande på 2 liter, så du kan lave til hele familien og stille resten i køleskabet. Vil du bare have ét glas, kan du sætte en ekstra tud på og presse direkte ned i glasset.</p>
<p>Designet er kompakt, så den tager mindre plads på køkkenbordet end mange andre centrifuger i samme klasse.</p>
HTML,
			'good'    => [ 'Juice hver dag', 'Hele frugter uden forarbejde', 'Juice til flere dage ad gangen' ],
			'less'    => [ 'Dig, der mest laver juice af bladgrønt – her er en slow juicer bedre' ],
		],
		[
			'ean'     => '0622356308694',
			'price'   => 1199,
			'name'    => 'Ninja koldpresset juicemaskine',
			'role'    => 'Bedst koldpresser til prisen',
			'reviews' => [],
			'verdict' => 'Koldpresser med to filtre, så du selv vælger klar juice eller juice med frugtkød.',
			'why'     => <<<'HTML'
<p>Ninjas koldpressede juicemaskine er til dig, der vil lave ingefærshots og grønne juicer fra bunden og selv bestemme, hvad der kommer i glasset. I stedet for hurtige knive presser en snegl med ni spiralformede sektioner saften langsomt ud. Det giver klarere farver, langt mindre skum og mere saft pr. glas end en centrifuge.</p>
<p>Med to filtre styrer du selv konsistensen: Det sorte giver helt klar og glat juice, det orange en fyldigere juice med mere frugtkød. Et system mod blokering og en baglænsfunktion løsner skræl og seje fibre, hvis de sætter sig fast.</p>
<p>Frugtkødet samles i en beholder på 1,1 liter. De aftagelige dele tåler opvaskemaskine, og motordelen tørres bare af med en fugtig klud. Med en bredde på 18,2 cm tager den ikke meget bordplads.</p>
HTML,
			'good'    => [ 'Grønne juicer og ingefærshots', 'Dig, der vil vælge konsistensen', 'Små køkkener' ],
			'less'    => [ 'Dig, der vil have juice på få sekunder' ],
		],
		[
			'ean'     => '8710103718383',
			'price'   => 900,
			'name'    => 'Philips Viva Collection HR1856',
			'role'    => 'Bedst centrifuge',
			'reviews' => [],
			'verdict' => 'Hurtig centrifuge med 7,5 cm påfyldningsrør, drypstop og rengøring på under et minut.',
			'why'     => <<<'HTML'
<p>Philips Viva Collection HR1856 er til dig, der vil have frisk juice hver morgen uden at bruge tid på det. Påfyldningsrøret er 7,5 cm bredt, så æbler, gulerødder og rødbeder kan komme i hele. Motoren på 800 W klarer både hårde frugter og grøntsager.</p>
<p>Du kan lave op til 2 liter juice i træk, før den indbyggede frugtkødsbeholder skal tømmes. Med drypstoppet kan du presse direkte ned i glasset og flytte det uden at spilde, og den medfølgende kande rummer 800 ml.</p>
<p>Rengøringen er tænkt godt igennem: De glatte QuickClean-overflader tørres af med en almindelig svamp på under et minut, og de aftagelige dele tåler opvaskemaskine. Det kompakte design og ledningsopruller gør den nem at stille væk.</p>
HTML,
			'good'    => [ 'Æbler, gulerødder og rødbeder', 'Hurtig morgenjuice', 'Dig, der hader opvask' ],
			'less'    => [ 'Bladgrønt som spinat og grønkål' ],
		],
		[
			'ean'     => '4242002770062',
			'price'   => 1399,
			'name'    => 'Bosch MES4010 saftcentrifuge',
			'role'    => 'Bedst til hårde grøntsager',
			'reviews' => [],
			'verdict' => 'Saftcentrifuge med 1200 W, tre hastigheder og XL-påfyldningsrør på 84 mm – hurtig juice af gulerødder og æbler.',
			'why'     => <<<'HTML'
<p>Bosch MES4010 er saftcentrifugen til dig, der vil have juice hurtigt – også af hårde frugter og grøntsager som gulerødder, rødbeder og æbler. Motoren på 1200 W og de tre hastigheder gør arbejdet let, og påfyldningsrøret på 84 mm tager hele æbler, så du skal skære mindre ud på forhånd.</p>
<p>Kniven er keramisk, og sien er i højglanspoleret rustfrit stål. Saften løber ned i en kande på 1,5 liter, og tuden har drypstop, så der ikke løber saft ud på bordet, når du tager kanden væk. Beholderen til frugtkød rummer 3 liter.</p>
<p>Sikkerheden er tænkt ind: Maskinen starter først, når alle dele sidder korrekt, og stopper, hvis den åbnes under brug. Delene tåler opvaskemaskine.</p>
HTML,
			'good'    => [ 'Gulerødder, rødbeder og æbler', 'Hurtig juice til hele familien', 'Nem rengøring' ],
			'less'    => [ 'Bladgrønt som spinat og grønkål' ],
		],
		[
			'ean'     => '8021098004499',
			'price'   => 849,
			'name'    => 'Braun SJ7000 MultiJuice 7 slowjuicer',
			'role'    => 'Billigste slowjuicer',
			'reviews' => [],
			'verdict' => 'Støjsvag slowjuicer med plads til 2 liter, der klarer både bløde bær og hårde rodfrugter.',
			'why'     => <<<'HTML'
<p>Braun SJ7000 er til dig, der vil i gang med koldpresset juice uden at bruge mange penge. Den presser saften langsomt ud og klarer både bløde, sarte bær og faste rodfrugter. Start dagen med appelsinjuice, bland æble og bær, eller lav en grøn juice af bladgrønt og grøntsager.</p>
<p>Den kraftige motor og udvindingssystemet er bygget til at få mest muligt saft ud af råvarerne, så der går mindre til spilde. Med en kapacitet på 2 liter kan du lave juice til flere på én gang. Motoren er støjsvag, så du kan lave morgenjuice uden at vække resten af huset.</p>
<p>Bagefter skiller du den let ad, og de løse dele gør opvasken hurtig. Den måler 26 × 23,5 cm og er 40,2 cm høj og vejer 4 kg.</p>
HTML,
			'good'    => [ 'Dig, der vil prøve en slowjuicer', 'Tidlige morgener – den er støjsvag', 'Både frugt, bær og rodfrugter' ],
			'less'    => [ 'Dig, der vil have juice på få sekunder' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en juicemaskine</h2>
<h3>Centrifuge eller slow juicer?</h3>
<p>En centrifuge er hurtig og billig, men larmer og giver mindre saft af bladgrønt. En slow juicer presser langsomt, larmer mindre og giver mere saft – særligt af grønt. Vil du kun lave appelsinjuice, er en citruspresser nok – det er ikke en juicemaskine.</p>
<h3>Påfyldningsåbning</h3>
<p>En stor åbning betyder, at du kan komme hele æbler i uden at skære dem ud først.</p>
<h3>Rengøring</h3>
<p>Juicemaskiner har mange dele. Skyl dem lige efter brug, før frugtkødet tørrer fast, og kig efter dele, der tåler opvaskemaskine.</p>
<p>Se alle <a href="/koekkenmaskiner/juicemaskine/">juicemaskiner</a> og <a href="/koekkenmaskiner/slow-juicer/">slow juicere</a>, eller se guiden til den bedste <a href="/bedste-blender/">blender</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er forskellen på en juicer og en blender?', 'En juicer skiller saften fra frugtkødet. En blender blender hele frugten med fibre.' ],
		[ 'Er en slow juicer bedre end en centrifuge?', 'Til bladgrønt og maksimalt udbytte, ja. Til hurtig juice af æbler og gulerødder er en centrifuge fin.' ],
		[ 'Hvor længe holder frisk juice?', 'Bedst drikkes den med det samme. I køleskabet holder den et døgn eller to.' ],
	],
];
