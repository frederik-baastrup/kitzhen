<?php
/**
 * Ny købsguide (15. nov. 2026) ud fra søgeordet "springform". Kun springforme til kager – ikke bagefolie eller andet tilbehør.
 * Fakta kun fra butikkernes produktdata. Ingen påstand om, at vi selv har prøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-springform',
	'date'     => '2026-11-15 12:00:00',
	'keyword'  => 'springform',
	'title'    => 'Springform: Vores bud på de 5 bedste',
	'excerpt'  => 'Med en god springform slipper du for at vende kagen ud og håbe på det bedste. Her er vores bud på de 5 bedste springforme fra de butikker, vi samarbejder med – fra den billige hverdagsform til den høje lagkageform og et sæt i tre størrelser.',
	'more_cat' => 'springform',
	'intro'    => <<<'HTML'
<p>En springform er den runde kageform med en kant, der lukkes med en lille lås, og en løs bund. Når kagen er bagt, åbner du låsen, løfter kanten af, og kagen står urørt tilbage på bunden. Det er derfor, en springform er førstevalget til cheesecake, chokoladekage, lagkagebunde og alle de bløde, saftige kager, der ikke tåler at blive vendt på hovedet.</p>
<p>Herunder får du vores bud på de 5 bedste springforme lige nu: en solid allround-form i aluminium, et billigt valg til hverdagsbagningen, en ekstra høj form til lagkager, en springform med keramikbund, du kan servere direkte fra, og et sæt med tre størrelser. Nederst finder du en købsguide til størrelse, belægning og pleje, så formen holder i mange år.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '6419287311244',
			'price'   => 209,
			'name'    => 'Heirol PRO springform 24 cm',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Springform i kvalitetsaluminium med non-stick belægning, der kan bruges ved op til 240 grader.',
			'why'     => <<<'HTML'
<p>Heirol PRO er bygget til at blive brugt igen og igen. Formen er lavet af aluminium, som leder varmen godt og hurtigt, så kagen får en jævn bagning helt ud i kanten. Den non-stick belagte overflade gør det lettere at få kagen fri, når kanten skal af.</p>
<p>Med 24 cm i diameter rammer den den størrelse, de fleste opskrifter på chokoladekage, cheesecake og drømmekage er skrevet til. Den kan klare op til 240 grader, så du har god margin, også når opskriften kalder på en varm ovn.</p>
HTML,
			'good'    => [ 'Dig, der bager ofte og vil have en form, der holder', 'Klassiske opskrifter til en 24 cm form' ],
			'less'    => [ 'Dig, der bare skal bage en enkelt kage om året' ],
		],
		[
			'ean'     => '3800139264208',
			'price'   => 69,
			'name'    => 'Müller rund springform Ø24 cm',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Kraftig springform på 24 cm med non-stick belægning og en kant på 6,8 cm – til en meget lav pris.',
			'why'     => <<<'HTML'
<p>Skal du bare have en springform, der gør arbejdet, er Müller et oplagt valg. Den er lavet i en kraftig kvalitet med non-stick belægning, måler 24 cm i diameter og har en kant på 6,8 cm, så der er plads til både en høj chokoladekage og en cremet cheesecake.</p>
<p>Formen tåler op til 240 grader. Vask den i hånden, og brug ikke knive eller andre skarpe redskaber i den – så bevarer belægningen sin slipevne meget længere.</p>
HTML,
			'good'    => [ 'Første køkken og sommerhuset', 'Dig, der vil have en springform uden at bruge mange penge' ],
			'less'    => [ 'Dig, der vil smide formen i opvaskemaskinen' ],
		],
		[
			'ean'     => '6419287312265',
			'price'   => 199,
			'name'    => 'Heirol Ekstra høj springform 26 cm',
			'role'    => 'Bedst til lagkager',
			'reviews' => [],
			'verdict' => 'Springform med ekstra høj kant, så du kan bage høje kager og bunde, der skal skæres i flere lag.',
			'why'     => <<<'HTML'
<p>Den ekstra høje kant er hele pointen med denne form fra Heirol. Du kan bage én høj kage og skære den over til en lagkage i flere etager, i stedet for at bage tre tynde bunde efter hinanden. Den høje kant er også rar ved cheesecake og moussekager, hvor fyldet gerne må stå højt.</p>
<p>Med 26 cm i diameter er den en tand større end standarden, så den passer godt til fødselsdage og selskaber. Formen har non-stick belægning, men smør den alligevel inden bagning for det pæneste resultat, og hold skarpe redskaber væk fra overfladen.</p>
HTML,
			'good'    => [ 'Lagkager til fødselsdage', 'Høje cheesecakes og moussekager' ],
			'less'    => [ 'Små, flade kager til to' ],
		],
		[
			'ean'     => '8710755888366',
			'price'   => 249,
			'name'    => 'Lékué springform med tallerken 24 cm',
			'role'    => 'Bedst til servering',
			'reviews' => [],
			'verdict' => 'Springform med en solid bund i keramik, der fordeler varmen jævnt og kan bæres direkte på bordet.',
			'why'     => <<<'HTML'
<p>Lékué har skiftet den sædvanlige metalbund ud med en solid bund i keramik. Keramikken fordeler varmen jævnt, så dejen bliver bagt godt igennem, og når kanten er taget af, står kagen allerede på et pænt fad. Du slipper altså for at flytte en skrøbelig kage over på en anden tallerken.</p>
<p>Formen er lige så god til formbrød som til kager, og med 24 cm i diameter passer den til de fleste almindelige opskrifter. Den røde farve gør den nem at få øje på i skabet – og den ser godt ud på kaffebordet.</p>
HTML,
			'good'    => [ 'Dig, der vil bage og servere i én og samme form', 'Bløde kager, der ikke tåler at blive flyttet' ],
			'less'    => [ 'Dig, der vil have den billigste løsning' ],
		],
		[
			'ean'     => '5722002240110',
			'price'   => 170,
			'name'    => 'Funktion springformsæt, 3 dele, Ø20, 24 og 26 cm',
			'role'    => 'Bedste sæt',
			'reviews' => [],
			'verdict' => 'Tre springforme på 20, 24 og 26 cm med non-stick, så du har den rette størrelse til enhver opskrift.',
			'why'     => <<<'HTML'
<p>Bager du meget og efter mange forskellige opskrifter, er et sæt den nemme vej. Funktion samler tre springforme i én pakke: en lille på 20 cm til kager til få personer, en mellem på 24 cm til de klassiske opskrifter og en stor på 26 cm, når der kommer gæster.</p>
<p>Alle tre er belagt med non-stick, som gør det lettere at få kagen fri og formen ren bagefter. Så har du altid den rigtige form klar, uanset om opskriften er til fire eller tolv personer.</p>
HTML,
			'good'    => [ 'Dig, der bager efter mange forskellige opskrifter', 'Nyt køkken eller gave til en, der flytter hjemmefra' ],
			'less'    => [ 'Dig, der kun bruger én størrelse' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige springform</h2>
<p>De fleste springforme ligner hinanden ved første øjekast. Forskellen ligger i størrelsen, højden på kanten, materialet og bunden – og det er netop de ting, der afgør, om kagen kommer pænt ud.</p>
<h3>Størrelse: 24 cm er standarden</h3>
<p>Langt de fleste kageopskrifter er skrevet til en springform på 24 cm. Vælger du en anden størrelse, ændrer du både højden på kagen og bagetiden. En form på 20 cm giver en højere kage, der skal have længere tid i ovnen, mens en på 26–28 cm giver en fladere kage, der er hurtigere færdig. Har du kun plads til én springform, så vælg 24 cm.</p>
<h3>Høj eller almindelig kant</h3>
<p>En almindelig springform har en kant på omkring 6–7 cm, hvilket rækker til de fleste kager. Bager du lagkager, høje cheesecakes eller moussekager, er en ekstra høj springform værd at overveje. Så kan du bage én høj bund og skære den over i stedet for at bage flere tynde.</p>
<h3>Materiale og belægning</h3>
<p>Springforme fås typisk i stål eller aluminium med non-stick belægning. Aluminium leder varmen hurtigt og jævnt, mens stål er stærkt og ofte billigt. Nogle forme har en bund i glas eller keramik, så du kan servere kagen direkte fra bunden. Uanset materiale er det en god idé at smøre formen og drysse den med mel eller lægge bagepapir i bunden – så slipper kagen nemmest.</p>
<h3>Undgå at formen lækker</h3>
<p>En springform er ikke helt tæt i samlingen mellem bund og kant. Til tynde dejsorter og cheesecake i vandbad kan du lægge bagepapir i klemme mellem bund og kant eller pakke formen ind i alufolie udenpå. Sørg også for, at bunden sidder rigtigt i rillen, før du lukker låsen.</p>
<h3>Pleje af din springform</h3>
<p>Non-stick belægning holder længst, når du vasker formen i hånden med en blød svamp. Skær aldrig kagen ud med kniv direkte på bunden – løft den over på et fad først, eller brug en springform med en bund, der er beregnet til servering. Tør formen godt af, så låsen ikke ruster.</p>
<p>Står du også og mangler en maskine til dejen, så se vores guide til <a href="/bedste-roeremaskine/">røremaskine</a>. Og bager du brød, er vores guides til <a href="/bedste-haevekurv/">hævekurv</a> og <a href="/bedste-bagestaal/">bagestål</a> et godt sted at starte.</p>
HTML,
	'faq'      => [
		[ 'Hvilken størrelse springform skal jeg vælge?', 'En springform på 24 cm passer til de fleste opskrifter. Bager du ofte til få personer, kan en på 20 cm være praktisk, og til selskaber er 26 cm et godt valg.' ],
		[ 'Hvordan undgår jeg, at min springform lækker?', 'Læg bagepapir i klemme mellem bund og kant, eller pak formen ind i alufolie udenpå, hvis du bager i vandbad. Tjek også, at bunden sidder rigtigt i rillen.' ],
		[ 'Kan en springform komme i opvaskemaskinen?', 'Det afhænger af formen, men non-stick belægning holder generelt længst, når formen vaskes i hånden med en blød svamp.' ],
		[ 'Skal jeg smøre en springform med non-stick?', 'Det er en god idé. Lidt smør og mel eller bagepapir i bunden gør det endnu lettere at få kagen ud uden at den hænger fast.' ],
		[ 'Hvad er forskellen på en springform og en almindelig kageform?', 'En springform har en løs bund og en kant, der kan åbnes, så du kan tage kagen ud uden at vende den. Det er især vigtigt ved bløde kager som cheesecake.' ],
	],
];
