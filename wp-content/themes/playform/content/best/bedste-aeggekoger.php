<?php
/**
 * Ny købsguide (søgeordsanalyse 10. nov. 2026: "æggekoger" ca. 2.900/md., "æggekoger til 3 æg" 210).
 * Kun elektriske æggekogere. Fakta kun fra butikkernes og producenternes produktdata. Ingen påstand om egen afprøvning.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-aeggekoger',
	'date'     => '2026-11-10 10:00:00',
	'keyword'  => 'æggekoger',
	'title'    => 'Æggekoger: Vores bud på de 5 bedste',
	'excerpt'  => 'En æggekoger giver dig blødkogte, smilende eller hårdkogte æg uden at holde øje med en gryde. Her er vores bud på de 5 bedste æggekogere fra de butikker, vi samarbejder med – fra den lille til 3 æg til den store til 12.',
	'more_cat' => 'aeggekoger',
	'intro'    => <<<'HTML'
<p>Kender du det? Vandet koger over, du glemmer uret, og æggene bliver enten flydende eller grå i kanten. En elektrisk æggekoger fjerner gætteriet. Du hælder vand i, sætter æggene på holderen og trykker på knappen. Resten klarer maskinen, og den siger til, når æggene er klar.</p>
<p>Herunder er vores bud på de 5 bedste æggekogere fra de butikker, vi samarbejder med lige nu. Der er en kompakt model til 3 æg, et par allround-modeller til 6–7 æg, en æggekoger, der taler, og en stor model til hele familien. Nederst finder du en købsguide til størrelse, styring og rengøring.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4211129116299',
			'name'    => 'WMF Stelio Æggekoger',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Stilren æggekoger i børstet Cromargan-stål til op til 7 æg, hvor du vælger blød, medium eller hård med et tryk.',
			'why'     => <<<'HTML'
<p>WMF Stelio er æggekogeren til dig, der vil have styr på resultatet og samtidig have et apparat, der pynter på køkkenbordet. Låget er i WMF's børstede Cromargan-stål, og der er plads til op til 7 æg på den aftagelige holder.</p>
<p>Du vælger mellem blødkogt, medium og hårdkogt, og den elektroniske styring tager sig af tiden. Når æggene er færdige, lyder et signal, så du kan gå fra og smøre brød imens. Målebægeret har indbygget æggeprikker, og ledningen kan vikles op i bunden, så den ikke flyder på bordet.</p>
HTML,
			'good'    => [ 'Dig, der vil vælge hårdhed uden at måle tid', 'Familier, der spiser æg flere ad gangen', 'Dig, der vil have stål frem for plast' ],
			'less'    => [ 'Dig, der vil kunne vaske den i opvaskemaskinen' ],
		],
		[
			'ean'     => '4004631006826',
			'name'    => 'Cloer Æggekoger 3 æg',
			'role'    => 'Bedst til 3 æg',
			'reviews' => [],
			'verdict' => 'Lille, enkel æggekoger til 1–3 æg, der fylder minimalt og er klar på et øjeblik.',
			'why'     => <<<'HTML'
<p>Er I én eller to i husstanden, er en stor æggekoger spild af plads. Cloers lille model har plads til 3 æg og er bygget enkelt: Du fylder vand i med målebægeret, sætter æggene på holderen og tænder. Mængden af vand afgør, hvor hårde æggene bliver, og et lydsignal fortæller, når de er klar.</p>
<p>Varmepladen har non-stick-belægning, så kalk og pletter er lette at tørre af. Låget kan bruges til at bære æggene til bordet, holderen har et greb til tommelfingeren, og ledningen kan rulles op. Den kompakte størrelse gør den let at have stående fremme eller i et skab.</p>
HTML,
			'good'    => [ 'Singler og par', 'Små køkkener og sommerhuse', 'Dig, der vil have en enkel model uden menuer' ],
			'less'    => [ 'Familier, der koger mange æg ad gangen' ],
		],
		[
			'ean'     => '4008146036736',
			'name'    => 'Severin Æggekoger 1-6 æg',
			'role'    => 'Bedst elektronisk styring',
			'reviews' => [],
			'verdict' => 'Sort æggekoger til op til 6 æg med elektronisk styring og LED-lys, hvor du selv vælger, hvor hårde æggene skal være.',
			'why'     => <<<'HTML'
<p>Severins æggekoger til 1–6 æg er et godt valg til familien, der vil kunne skrue på resultatet. Den elektroniske styring lader dig vælge, hvor hårdkogte æggene skal være, og du måler bare vandet op i det medfølgende glas.</p>
<p>Designet er sort med LED-belysning, så den ser moderne ud på køkkenbordet. Med plads til seks æg klarer den morgenmaden til hele familien eller en portion æg til frokosten i én omgang. Er I færre, findes den også i en mindre udgave til 1–3 æg.</p>
HTML,
			'good'    => [ 'Familier med op til seks personer', 'Dig, der vil vælge hårdhed elektronisk' ],
			'less'    => [ 'Dig, der vil have stål i stedet for plast' ],
		],
		[
			'ean'     => '5712087100508',
			'name'    => 'Hâws Årø talende æggekoger til 6 æg',
			'role'    => 'Siger til med stemme',
			'reviews' => [],
			'verdict' => 'Æggekogeren, der siger højt, når æggene er blødkogte, smilende og hårdkogte – også på dansk.',
			'why'     => <<<'HTML'
<p>Hâws Årø gør det sjovt at koge æg. I stedet for at vælge hårdhed på forhånd koger den bare videre og fortæller med stemme, når æggene er blødkogte, når de er smilende, og når de er hårdkogte. Samtidig tænder små lamper, så du også kan se, hvor langt den er. Kort efter det sidste trin slukker den af sig selv.</p>
<p>Det smarte er, at alle får deres æg, som de vil have dem: Tag de bløde op først og lad resten koge videre. Stemmen taler blandt andet dansk, svensk og norsk. Der er plads til seks æg, og målebæger, æggeprikker og aftagelig holder følger med.</p>
HTML,
			'good'    => [ 'Familier, hvor alle vil have deres æg forskelligt', 'Børn, der selv vil koge æg', 'Dig, der ofte går fra æggekogeren' ],
			'less'    => [ 'Dig, der vil have et stille apparat tidligt om morgenen' ],
		],
		[
			'ean'     => '7333282018955',
			'name'    => 'Emerio Æggekoger til 12 æg',
			'role'    => 'Til flest æg',
			'reviews' => [],
			'verdict' => 'Stor æggekoger i rustfrit stål med to hylder og plads til op til 12 æg på én gang.',
			'why'     => <<<'HTML'
<p>Skal du koge æg til brunch, påskefrokost eller madpakker til hele ugen, er Emerios store æggekoger svær at komme udenom. Den har to separate hylder og plads til op til 12 æg ad gangen, så du slipper for at koge i flere omgange.</p>
<p>Du vælger konsistens med en drejeknap på fronten, og så passer den sig selv, mens du dækker bord. Kabinettet i rustfrit stål er nemt at tørre af. Den er samtidig det billigste af vores fem valg, så du får meget kapacitet for pengene.</p>
HTML,
			'good'    => [ 'Store familier og brunch', 'Dig, der koger æg til flere dage ad gangen', 'Mest kapacitet for pengene' ],
			'less'    => [ 'Små husstande med lidt plads på køkkenbordet' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en æggekoger</h2>
<p>En elektrisk æggekoger damper æggene i en lille mængde vand, der koger op under låget. Den bruger langt mindre vand end en gryde og skal ikke passes. Her er det, du skal kigge efter.</p>
<h3>Hvor mange æg?</h3>
<p>Antallet af pladser er det vigtigste valg. En æggekoger til 3 æg passer til en eller to personer og fylder meget lidt. Modeller til 6–7 æg dækker de fleste familier, og har I ofte gæster eller laver madpakker til hele ugen, kan en stor model med to etager klare 12 æg ad gangen.</p>
<h3>Vand eller elektronik styrer hårdheden</h3>
<p>Der findes to slags styring. På de enkle modeller er det vandmængden, der bestemmer, hvor hårde æggene bliver: Målebægeret har streger for blød, medium og hård, og kogeren slukker, når vandet er kogt væk. På de elektroniske modeller vælger du hårdheden på en knap, og maskinen styrer tiden. Det er nemmere at ramme det samme resultat hver gang, især når du koger få æg.</p>
<h3>Signal og sluk</h3>
<p>Næsten alle æggekogere giver et lydsignal, når æggene er klar. Nogle slukker også selv, og enkelte siger med stemme, hvilket stadie æggene er nået til. Vil du kunne gå fra den, så kig efter automatisk sluk.</p>
<h3>Rengøring og kalk</h3>
<p>Varmepladen i bunden samler kalk, især hvis du bor et sted med hårdt vand. Tør den af efter brug, og afkalk den ind imellem med eddike eller citronsyre opløst i vand. Holderen og låget kan som regel skylles under hanen, men selve apparatet må aldrig i vand.</p>
<h3>Brug den til mere end æg</h3>
<p>Med en lille skål til pocherede æg, som følger med nogle modeller, kan du også lave pocherede æg uden eddikevand og hvirvel i gryden. Se flere apparater til morgenbordet under <a href="/koekkenmaskiner/">køkkenmaskiner</a>, find en <a href="/ovne-apparater/broedrister/">brødrister</a> til de ristede skiver, eller se vores guide til den <a href="/bedste-flad-broedrister/">bedste flade brødrister</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvordan virker en æggekoger?', 'Du hælder en afmålt mængde vand på varmepladen, sætter æggene i holderen og tænder. Vandet koger og damper æggene. Når tiden er gået, eller vandet er kogt væk, lyder et signal.' ],
		[ 'Skal man prikke hul i æggene?', 'Ja, de fleste æggekogere har en æggeprikker i målebægeret. Et lille hul i den runde ende mindsker risikoen for, at skallen revner under kogningen.' ],
		[ 'Hvorfor skal der mere vand i til få æg?', 'Når der er færre æg, går der mindre varme til hvert æg, så vandet skal koge længere. Derfor viser målebægeret ofte en større vandmængde ved få æg end ved mange. Følg altid stregerne på dit eget målebæger.' ],
		[ 'Hvilken æggekoger skal jeg vælge til 3 æg?', 'Er I én eller to, er en kompakt æggekoger til 3 æg nok. Den fylder mindre, og du skal ikke varme en stor model op til et enkelt æg.' ],
		[ 'Hvordan afkalker man en æggekoger?', 'Hæld lidt eddike eller citronsyre opløst i vand på varmepladen, lad det virke et stykke tid, og tør efter med en fugtig klud. Skyl godt efter, så smagen ikke sidder i.' ],
	],
];
