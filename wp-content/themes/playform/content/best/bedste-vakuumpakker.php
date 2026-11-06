<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-vakuumpakker/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-vakuumpakker',
	'title'    => 'Vakuumpakker: Vores bud på de 3 bedste',
	'excerpt'  => 'En vakuumpakker får maden til at holde længere og beskytter mod frostskader – og er nødvendig til sous vide. Her er vores bud på de 3 bedste.',
	'more_cat' => 'vakuumpakker',
	'intro'    => <<<'HTML'
<p>En vakuumpakker suger luften ud af posen og svejser den til. Uden luft holder maden længere i køleskabet og fryseren, og du undgår frostskader. Vakuumpakning er også nødvendig til sous vide og praktisk til at marinere kød.</p>
<p>Herunder er vores bud på de 3 bedste vakuumpakkere hos danske butikker lige nu.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5708642079389',
			'price'   => 690,
			'name'    => 'OBH Nordica Complete Seal',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Får maden til at holde op til fem gange så længe – med pulsfunktion til de skrøbelige råvarer.',
			'why'     => <<<'HTML'
<p>OBH Nordica Complete Seal er til dig, der vil spare penge og smide mindre mad ud. Vakuumpakket mad kan holde op til fem gange så længe, og smag, næring og konsistens bliver bevaret. Så kan du købe stort ind, når der er tilbud, lave store portioner til fryseren eller gemme svampe og bær fra skoven og haven.</p>
<p>Den er nem at bruge med en fleksibel sidelås, og pulsfunktionen lader dig styre suget, så bløde og skrøbelige råvarer ikke bliver mast. Poserne tåler mikroovn og kan bruges til sous vide.</p>
<p>Du kommer hurtigt i gang med startsættet på 5 poser og 1 rulle. Kabinettet i rustfrit stål er så pænt, at maskinen godt kan stå fremme på bordet, og der er 2 års garanti.</p>
HTML,
			'good'    => [ 'Fryseren og madspild', 'Sous vide', 'Skrøbelige råvarer som bær og fisk' ],
			'less'    => [ 'Væsker og supper' ],
		],
		[
			'ean'     => '4038437014167',
			'price'   => 3399,
			'name'    => 'Caso VacuChef 50',
			'role'    => 'Bedst kammermaskine',
			'reviews' => [],
			'verdict' => 'Kammermaskine med pumpe på 70 liter i minuttet, dobbelt svejsning og 30 poser med i kassen.',
			'why'     => <<<'HTML'
<p>Caso VacuChef 50 er kammermaskinen til dig, der vakuumpakker meget – fx efter storindkøb, jagt eller til sous vide. Hele posen ligger inde i kammeret, og modellen er dybere end de andre i serien, så der er plads til større stykker. Kammeret måler 31 × 9 × 22 cm indvendigt.</p>
<p>Pumpen på 70 liter i minuttet og et vakuumtryk på 0,95 bar pakker en pose på få sekunder. Du kan selv indstille vakuumtiden fra 5 til 60 sekunder og svejsningen fra 3 til 9 sekunder. Dobbelte svejsetråde på 2 mm lukker poser op til 30 cm brede. Med slangen kan du også vakuumpakke beholdere og glas.</p>
<p>Du styrer den på et touchpanel, der viser vakuummet i kammeret. Den er bygget i rustfrit stål med et låg af hærdet glas, der lukker blødt. Forseglingslisten kan tages af, så rengøringen er let. Der følger 30 poser på 28 × 25 cm med.</p>
HTML,
			'good'    => [ 'Væsker og marinader', 'Jægere og storindkøb', 'Beholdere og glas' ],
			'less'    => [ 'Små køkkener – den vejer 10 kg' ],
		],
		[
			'ean'     => '4038437013801',
			'price'   => 549,
			'name'    => 'Caso VC100',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Prisvenlig vakuumpakker, der beskytter mod frostskader og svejser poser op til 30 cm brede.',
			'why'     => <<<'HTML'
<p>Caso VC100 er en enkel og prisvenlig vakuumpakker til dig, der vil have mere ud af dine madvarer. Den holder maden frisk længere og beskytter den mod frostskader i fryseren. Den er også god til marinering: I den lufttætte pose trækker kødet mere smag til sig.</p>
<p>Pumpen suger 12 liter i minuttet, og svejsesømmen er op til 30 cm bred, uanset hvor lang posen er. Den elektroniske temperaturkontrol sørger for, at maden ikke tager skade, når posen lukkes.</p>
<p>Med 9 cm i højden og 2,4 kg er den let at stille væk i et skab. I kassen følger 10 poser og en slange, så du også kan vakuumpakke i eksterne beholdere.</p>
HTML,
			'good'    => [ 'Lavt budget', 'Fryseren', 'Marinering af kød' ],
			'less'    => [ 'Dig, der pakker meget hver uge – en kammermaskine er stærkere' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en vakuumpakker</h2>
<h3>Ekstern vakuumpakker eller kammermaskine?</h3>
<p>En ekstern vakuumpakker er billig og lille, men kan ikke pakke væsker. En kammermaskine kan pakke alt og bruger billigere glatte poser, men er stor og dyr.</p>
<h3>Poser og ruller</h3>
<p>Eksterne vakuumpakkere kræver riflede poser. Ruller, du selv skærer til, er billigere end færdige poser.</p>
<h3>Sous vide</h3>
<p>Til sous vide er en vakuumpakker næsten nødvendig. Se vores guide til <a href="/bedste-sous-vide-stav/">sous vide-stave</a>.</p>
<p>Se alle <a href="/ovne-apparater/vakuumpakker/">vakuumpakkere</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvor længe holder vakuumpakket mad?', 'Typisk flere gange så længe som almindeligt pakket mad – både i køleskab og fryser.' ],
		[ 'Kan man vakuumpakke væske?', 'Kun i en kammermaskine. Med en ekstern maskine kan du fryse væsken først.' ],
		[ 'Skal man bruge særlige poser?', 'Ja, eksterne vakuumpakkere kræver riflede poser eller ruller.' ],
	],
];
