<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/gasgrill/ og /gasgrill-test/). De gamle tekster er ikke flyttet over.
 * Fakta om produkterne kommer kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-gasgrill',
	'title'    => 'Gasgrill: Vores bud på de 4 bedste',
	'excerpt'  => 'En gasgrill er hurtig at tænde og nem at styre. Her er vores bud på de 4 bedste gasgrills fra danske butikker – fra altangrill til familiegrill – og hvad du skal kigge efter.',
	'more_cat' => 'gasgrill',
	'intro'    => <<<'HTML'
<p>En gasgrill er den nemme vej til grillmad på en hverdag: den er varm på få minutter, du skruer op og ned for varmen med knapperne, og der er ingen kul at slukke bagefter. Til gengæld er der stor forskel på, hvor mange brændere, hvor stor en grillflade og hvor kraftig en sear-zone du får for pengene.</p>
<p>Herunder er vores bud på de 4 bedste gasgrills hos danske butikker lige nu – en allround-grill, en stor familiegrill, et billigere valg med fire brændere og en bærbar grill til altan og tur. Nederst finder du en købsguide til brændere, grillflade, rist og placering.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '0077924893933',
			'slug'    => 'weber-spirit-e-325-gasgrill',
			'name'    => 'Weber Spirit E-325',
			'role'    => 'Bedst samlet',
			'reviews' => [
				[ 'Smoked BBQ Source', 'https://www.smokedbbqsource.com/weber-spirit-review/' ],
			],
			'verdict' => 'Tre brændere og en Sear Zone med ekstra kraft – nok grill til de fleste familier uden at fylde som en stor grillstation.',
			'why'     => <<<'HTML'
<p>Weber Spirit E-325 er den gasgrill, vi ville pege på, hvis du bare vil have en god grill, der kan det hele. Har den tre brændere og en Sear Zone, hvor to Boost-brændere giver 40 % mere effekt, så du kan få flotte grillstriber på kød, fisk og grøntsager. Brænderne tændes hver for sig, så du kan grille direkte over flammen i den ene side og indirekte i den anden.</p>
<p>Smoked BBQ Source har anmeldt netop Spirit E-325 og grillet bøffer, burgere, koteletter og kyllingevinger på den. Anmelderen fremhæver den meget varme Sear Zone, tændingen, der tænder hurtigt og jævnt, en jævn varmefordeling over risten, den udtagelige fedtbakke og det lukkede skab under grillen. Minusserne var hjul i plast, der føles billige – og at Sear Zone er så varm, at du skal holde øje med tiden, så bøfferne ikke bliver stegt for meget. Weber sendte grillen gratis til anmeldelsen, hvilket siden selv oplyser.</p>
<p>Griller du ofte for mange, så se på Genesis nedenfor.</p>
HTML,
			'good'    => [ 'Familier, der griller et par gange om ugen', 'Dig, der vil have stegeskorpe og grillstriber', 'Dig, der vil grille både direkte og indirekte' ],
			'less'    => [ 'Store selskaber, hvor du griller til mange ad gangen', 'Dig, der skal flytte grillen meget over grus eller græs' ],
		],
		[
			'ean'     => '0077924896330',
			'slug'    => 'weber-genesis-e-315-gasgrill-2025',
			'name'    => 'Weber Genesis E-315 (2025)',
			'role'    => 'Bedst til store familier',
			'reviews' => [],
			'verdict' => 'Webers større gasgrill med tre kraftige brændere og en rummelig grillflade – til familiemiddage og grillfester.',
			'why'     => <<<'HTML'
<p>Genesis er trinnet over Spirit i Webers sortiment. Genesis E-315 er en grill med tre kraftfulde brændere og en rummelig grilloverflade, der er lavet til alt fra familiemiddage til større grillfester.</p>
<p>Prisen er markant højere end Spirit, så den giver mest mening, hvis du jævnligt griller for mange, eller hvis grillen skal bruges hele sæsonen igennem.</p>
HTML,
			'good'    => [ 'Store familier og dig, der ofte har gæster', 'Dig, der vil have plads til mad i flere zoner på én gang' ],
			'less'    => [ 'Små terrasser og altaner', 'Dig, der griller et par gange om måneden' ],
		],
		[
			'ean'     => '6410416236377',
			'slug'    => 'mustang-greenville-4-gasgrill',
			'name'    => 'Mustang Greenville 4',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Fire brændere i støbejern, 14 kW og en grillflade, der er halvt rist og halvt plade – meget grill for pengene.',
			'why'     => <<<'HTML'
<p>Mustang Greenville 4 giver flere brændere for pengene end de to Weber-grills. Den har fire brændere i støbejern med indbygget piezo-tænding, en samlet effekt på 14 kW og et grillareal på 77 x 41 cm. Halvdelen af grillfladen er en rist, og den anden halvdel er en plade – praktisk, hvis du også vil stege æg, bacon eller grøntsager, der ellers falder ned mellem stængerne.</p>
<p>Mustang er et budgetmærke, så forvent ikke samme finish, garanti og reservedelsudvalg som hos Weber.</p>
HTML,
			'good'    => [ 'Dig, der vil have en stor grillflade til en lav pris', 'Dig, der vil have både rist og stegeplade' ],
			'less'    => [ 'Dig, der vil have en grill, der holder i mange år med reservedele' ],
		],
		[
			'ean'     => '0077924909979',
			'slug'    => 'weber-traveler-gasgrill',
			'name'    => 'Weber Traveler',
			'role'    => 'Bedst til altan og tur',
			'reviews' => [
				[ 'OutdoorGearLab', 'https://www.outdoorgearlab.com/reviews/camping-and-hiking/portable-grill/weber-traveler' ],
				[ 'Livingetc', 'https://www.livingetc.com/reviews/weber-traveler-review' ],
				[ 'AmazingRibs', 'https://amazingribs.com/ratings-reviews/grills/weber-traveler' ],
			],
			'verdict' => 'Bærbar gasgrill, der klapper sammen – til altanen, sommerhuset og campingturen.',
			'why'     => <<<'HTML'
<p>Weber Traveler er lavet til dig, der ikke har plads til en stor grill, eller som vil have grillen med. Den er en bærbar og alsidig gasgrill, der er udviklet til et effektivt gasforbrug og nem transport – oplagt på udflugt, men også som grill på terrassen eller altanen.</p>
<p>Modellen er anmeldt af flere udenlandske testsider, blandt andet OutdoorGearLab, Livingetc og AmazingRibs, som du finder links til ovenfor. Bemærk, at udenlandske anmeldelser kan omtale en anden gasflaske og regulator end den, der bruges i Danmark – tjek hos butikken, hvad der følger med.</p>
HTML,
			'good'    => [ 'Altaner og små terrasser', 'Sommerhus, camping og udflugter' ],
			'less'    => [ 'Dig, der griller for mange på én gang' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige gasgrill</h2>
<p>Gasgrills sammenlignes ofte på antal brændere og kW, men det er kun en del af historien. Her er det, der betyder mest i hverdagen.</p>
<h3>Antal brændere</h3>
<p>To brændere er nok til en lille husstand. Med tre eller flere kan du lave en varm og en kold zone, så du kan stege direkte over flammen og samtidig lade større stykker kød gare færdigt med indirekte varme under låget. Det er den største forskel på en god og en middelmådig gasgrill.</p>
<h3>Effekt og sear-zone</h3>
<p>Et højt kW-tal betyder ikke automatisk en bedre grill – en godt isoleret grill med et tæt låg kan bruge varmen bedre end en kraftigere grill, der lukker den ud. En sear-zone eller sidebrænder med ekstra kraft er derimod nyttig, hvis du vil have en sprød skorpe på bøffer.</p>
<h3>Grillflade og rist</h3>
<p>Regn med, hvor mange du typisk griller til. Riste i støbejern holder godt på varmen og giver tydelige grillstriber, men skal plejes med lidt olie. Riste i rustfrit stål er nemmere at holde. En stegeplade som supplement er praktisk til grøntsager, fisk og morgenmad.</p>
<h3>Rengøring</h3>
<p>Kig efter en udtagelig fedtbakke, der er nem at komme til. Det er den, der afgør, om du gør grillen ren efter hver gang – eller lader være.</p>
<h3>Placering, gasflaske og regler</h3>
<p>Tjek, om regulator og slange følger med, og hvilken gasflaske grillen passer til. Bor du i lejlighed, så tjek reglerne i din bolig- eller ejerforening, før du køber en gasgrill til altanen – mange har regler for grill og gasflasker. Stil altid grillen på et stabilt underlag med god afstand til husmur og ting, der kan brænde.</p>
<h3>Gas, kul eller pellets?</h3>
<p>Gas er hurtigst og nemmest. Kul giver mere røgsmag, og en kamado eller pelletgrill er bedre til lang og langsom grilning. Se alle <a href="/grill/gasgrill/">gasgrills</a> med aktuelle priser, eller hele udvalget af <a href="/grill/">grill og grilltilbehør</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvor mange brændere skal en gasgrill have?', 'Til de fleste familier er tre brændere et godt valg, fordi du kan lave både en varm og en kold zone. To brændere er nok til en eller to personer.' ],
		[ 'Er en dyr gasgrill pengene værd?', 'Ofte ja, hvis du griller meget: dyrere grills har typisk bedre isolering, mere holdbare materialer, længere garanti og reservedele i mange år. Griller du sjældent, kan en billigere model sagtens gøre det.' ],
		[ 'Må man have gasgrill på altanen?', 'Det afhænger af din bolig- eller ejerforenings regler. Tjek dem, før du køber, og placér altid grillen stabilt og med god afstand til brændbare ting.' ],
		[ 'Hvordan holder man en gasgrill ren?', 'Brænd risten af på høj varme efter brug, og børst den ren. Tøm fedtbakken jævnligt, og giv grillen en grundig rengøring før og efter sæsonen.' ],
		[ 'Skal gasgrillen have et overtræk?', 'Står grillen udenfor hele året, forlænger et overtræk dens levetid, fordi det holder regn og snavs væk fra brændere og knapper.' ],
	],
];
