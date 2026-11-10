<?php
/**
 * Ny købsguide (10. nov. 2026) ud fra søgeordet "elkedel". Kun elkedler – kedler til komfuret har deres egen guide.
 * Fakta kun fra butikkernes produktdata og producenternes egne sider. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-elkedel',
	'date'     => '2026-11-10 10:00:00',
	'keyword'  => 'elkedel',
	'title'    => 'Elkedel: Vores bud på de 5 bedste elkedler',
	'excerpt'  => 'Den rigtige elkedel giver dig kogende vand på få minutter – eller præcis 80 grader til den grønne te. Her er vores bud på de 5 bedste elkedler fra de butikker, vi samarbejder med, fra det billige hverdagsvalg til elkedlen med temperatur.',
	'more_cat' => 'elkedel',
	'intro'    => <<<'HTML'
<p>Elkedlen er nok det apparat, du bruger flest gange om dagen. Morgenkaffen, teen, havregrøden, vandet til pastaen. Derfor kan det godt betale sig at vælge en, der passer til dine vaner – og ikke bare den første og bedste på hylden.</p>
<p>Drikker du mest pulverkaffe og sort te, er en enkel elkedel nok. Holder du af grøn te eller filterkaffe, bliver du glad for en elkedel med temperatur, så vandet ikke er for varmt. Herunder får du vores bud på de 5 bedste elkedler lige nu: et stærkt allround-valg, et billigt valg, en elkedel til teentusiasten, en svanehals til filterkaffe og en dansk designklassiker. Nederst finder du en købsguide til størrelse, temperatur og afkalkning.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4242002824598',
			'price'   => 799,
			'name'    => 'Bosch Styline TWK8613P elkedel',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Elkedel med temperatur på 1,5 liter: vælg 70, 80, 90 eller 100 grader, og lad den holde vandet varmt bagefter.',
			'why'     => <<<'HTML'
<p>Bosch Styline rammer det, de fleste har brug for i en moderne elkedel. Du vælger selv temperaturen – 70, 80, 90 eller 100 grader – så den grønne te ikke bliver bitter, og kaffen til stempelkanden får vand lige under kogepunktet. Med hold varm-funktionen holder kedlen den valgte temperatur i op til en halv time, mens du gør resten klar.</p>
<p>Kedlen tager 1,5 liter og står på en sokkel, du kan sætte den på fra alle sider. Varmelegemet er skjult under en bund i rustfrit stål, så kalken er nemmere at fjerne, og kalkfilteret kan tages ud og skylles. Kabinettet er dobbeltvægget.</p>
HTML,
			'good'    => [ 'Dig, der drikker både te og kaffe', 'Dig, der vil have temperaturvalg uden at betale for et luksusmærke' ],
			'less'    => [ 'Dig, der bare skal koge vand og vil spare' ],
		],
		[
			'ean'     => '8710103940999',
			'price'   => 214,
			'name'    => 'Philips Series 3000 HD9318/00 elkedel',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Enkel elkedel på 1,7 liter med kopmarkering, skjult varmelegeme og automatisk sluk – til en lav pris.',
			'why'     => <<<'HTML'
<p>Skal du bare have en elkedel, der koger vand hurtigt og ikke driller, er Philips Series 3000 et godt sted at starte. Den rummer 1,7 liter, så der er nok til hele familiens te eller en stor gryde pasta.</p>
<p>Markeringerne for liter og kopper gør det nemt kun at koge den mængde, du skal bruge – det sparer både tid og strøm. Varmelegemet er et skjult, fladt element i rustfrit stål, og låget springer op, når du trykker på knappen i håndtaget. Kedlen slukker af sig selv, når vandet koger, og har sikring mod at koge tør.</p>
HTML,
			'good'    => [ 'Første bolig og sommerhuset', 'Dig, der vil have en elkedel uden dikkedarer' ],
			'less'    => [ 'Dig, der vil vælge temperaturen' ],
		],
		[
			'ean'     => '9312432030212',
			'price'   => 1396,
			'name'    => 'Sage The Smart Kettle SKE825',
			'role'    => 'Bedst til te',
			'reviews' => [],
			'verdict' => 'Elkedel med fem faste programmer til sort, grøn, hvid og oolong te samt stempelkaffe – og 20 minutters hold varm.',
			'why'     => <<<'HTML'
<p>Sage The Smart Kettle er til dig, der tager teen alvorligt. I stedet for at gætte på grader trykker du på den type te, du vil lave – sort, grøn, hvid eller oolong – eller på programmet til stempelkaffe. Så varmer kedlen vandet til den temperatur, der passer.</p>
<p>Hold varm-funktionen holder vandet ved temperaturen i 20 minutter, så du kan nå en kop mere. Kedlen tager 1,7 liter og er lavet i børstet rustfrit stål. Låget åbner blødt og lader dampen slippe ud uden sprøjt, og soklen har plads til at rulle ledningen op.</p>
HTML,
			'good'    => [ 'Teentusiaster', 'Dig, der vil have et program frem for et tal', 'Store husstande' ],
			'less'    => [ 'Dig med et stramt budget' ],
		],
		[
			'ean'     => '4977642021150',
			'price'   => 598,
			'name'    => 'Hario V60 Buono elkedel 0,8 liter',
			'role'    => 'Bedst til filterkaffe',
			'reviews' => [],
			'verdict' => 'Elkedel med lang, tynd svanehals, så du kan hælde vandet langsomt og præcist over kaffen.',
			'why'     => <<<'HTML'
<p>Brygger du filterkaffe i hånden – i en V60 eller en anden dripper – er hældningen halvdelen af resultatet. Hario V60 Buono har den lange, smalle tud, der giver en tynd og rolig stråle, så du styrer, hvor vandet rammer kaffen. Det er en elkedel med svanehals, bygget netop til den slags brygning.</p>
<p>Kedlen er i rustfrit stål, tager 0,8 liter og er nem at betjene med én knap. Den slukker af sig selv, når vandet koger, og hvis den bliver tændt uden vand. Den står på en sokkel, du kan sætte den på fra alle sider, og ledningen kan gemmes under bunden.</p>
<p>Bemærk, at denne model ikke har temperaturvalg. Vil du styre graderne, skal du lade vandet stå et øjeblik efter kog.</p>
HTML,
			'good'    => [ 'Filterkaffe i hånden', 'Små husstande' ],
			'less'    => [ 'Dig, der skal koge meget vand ad gangen', 'Dig, der vil vælge temperaturen' ],
		],
		[
			'ean'     => '5709846023680',
			'price'   => 499,
			'name'    => 'Stelton EM77 elkedel 1,5 liter',
			'role'    => 'Bedste designklassiker',
			'reviews' => [],
			'verdict' => 'Erik Magnussens elkedel i samme formsprog som den kendte EM77-termokande – til dig, der vil have kedlen stående fremme.',
			'why'     => <<<'HTML'
<p>Stelton EM77 er elkedlen til dig, der ikke vil gemme den væk. Den er tegnet af Erik Magnussen i samme stil som Steltons kendte termokande, og den hvide udgave gør sig godt på et lyst køkkenbord. Den er så pæn, at du sagtens kan tage den med ind på bordet.</p>
<p>Kedlen tager 1,5 liter og er lavet af plast og rustfrit stål. Den slukker automatisk, når vandet koger, og har sikring mod at koge tør. Filteret i tuden holder kalkflager ude af koppen – Stelton anbefaler at afkalke kedel og filter cirka en gang om måneden.</p>
HTML,
			'good'    => [ 'Dig, der går op i design', 'Dig, der allerede har en EM77-termokande' ],
			'less'    => [ 'Dig, der vil vælge temperaturen' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige elkedel</h2>
<p>De fleste elkedler koger vand på få minutter. Forskellen ligger i, hvor meget de rummer, om du kan vælge temperaturen, og hvor nemme de er at holde fri for kalk.</p>
<h3>Elkedel med temperatur – eller uden?</h3>
<p>En elkedel med temperatur lader dig vælge, hvor varmt vandet skal være. Det gør en stor forskel for grøn og hvid te, som bliver bitter i kogende vand, og for filter- og stempelkaffe, der smager bedst med vand lige under kogepunktet. Mange modeller kan også holde vandet varmt et stykke tid. Drikker du mest sort te, pulverkaffe eller bruger kedlen til madlavning, kan du roligt vælge en enkel elkedel uden temperaturvalg.</p>
<h3>Størrelse</h3>
<p>De fleste elkedler rummer 1–1,7 liter. Er I flere i husstanden, eller koger du vand til pasta og kartofler, så vælg en stor. Bor du alene eller brygger kaffe kop for kop, er en mindre kedel lettere at håndtere. Uanset størrelse: kog kun det vand, du skal bruge. Det går hurtigere og bruger mindre strøm.</p>
<h3>Svanehals til filterkaffe</h3>
<p>En elkedel med svanehals har en lang, tynd tud, der giver en rolig stråle. Den er lavet til at hælde vand over kaffe i en dripper, hvor du gerne vil styre hastigheden. Til te og madlavning er en almindelig tud hurtigere.</p>
<h3>Materiale og varmelegeme</h3>
<p>Elkedler fås i plast, rustfrit stål og glas. Stål holder længe og ser pænt ud, glas lader dig se vandet koge, og plast er let og ofte billigt. Kig efter et skjult varmelegeme – en flad bund i stedet for en synlig spiral. Det er langt nemmere at holde rent.</p>
<h3>Afkalkning</h3>
<p>Det hårde danske vand sætter hurtigt kalk. Kog en blanding af vand og eddike eller citronsyre, lad den stå, og skyl grundigt bagefter. Et aftageligt kalkfilter i tuden holder flager ude af koppen.</p>
<p>Se alle <a href="/kaffe-drikke/elkedel/">elkedler</a> med aktuelle priser. Har du induktion og vil hellere koge vand på komfuret, så se vores guide til <a href="/bedste-kedel-til-induktion/">kedel til induktion</a>. Og vil du løfte kaffen et trin mere, kan du kigge på vores guides til <a href="/bedste-stempelkande/">stempelkande</a> og <a href="/bedste-kaffekvaern/">kaffekværn</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er en elkedel med temperatur?', 'Det er en elkedel, hvor du selv vælger, hvor varmt vandet skal være, fx 70, 80 eller 90 grader. Den er især god til grøn og hvid te og til filter- og stempelkaffe.' ],
		[ 'Hvor stor skal min elkedel være?', 'Til de fleste husstande er 1,5–1,7 liter et godt valg. Bor du alene eller brygger du kaffe kop for kop, kan en mindre kedel være nok.' ],
		[ 'Hvor tit skal jeg afkalke elkedlen?', 'Når du kan se hvide belægninger i bunden. Med hårdt vand kan det være en gang om måneden. Brug eddike eller citronsyre, og skyl godt efter.' ],
		[ 'Er det billigere at koge vand i en elkedel end på komfuret?', 'En elkedel er som regel en energieffektiv måde at koge vand på, fordi varmen sidder direkte i bunden. Kog kun den mængde, du skal bruge.' ],
		[ 'Hvad er en svanehalskedel?', 'En kedel med en lang, tynd tud, der giver en rolig og præcis stråle. Den er lavet til at hælde vand over filterkaffe.' ],
	],
];
