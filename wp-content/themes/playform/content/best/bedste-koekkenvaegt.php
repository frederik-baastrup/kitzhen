<?php
/**
 * Ny købsguide (15. nov. 2026) ud fra søgeordet "køkkenvægt". Kun køkkenvægte – ikke kaffevægte eller personvægte.
 * Fakta kun fra butikkernes produktdata. Ingen påstand om, at vi selv har prøvet produkterne.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-koekkenvaegt',
	'date'     => '2026-11-15 12:00:00',
	'keyword'  => 'køkkenvægt',
	'title'    => 'Køkkenvægt: Vores bud på de 5 bedste',
	'excerpt'  => 'Med en god køkkenvægt rammer du opskriften på grammet – til brød, kager og hverdagsmad. Her er vores bud på de 5 bedste køkkenvægte fra de butikker, vi samarbejder med, fra den flade allrounder til vægten med to vejeflader og designvægten med skål.',
	'more_cat' => 'koekkenvaegt',
	'intro'    => <<<'HTML'
<p>Et målebæger kan snyde dig. Mel kan pakkes løst eller fast, og så er en deciliter pludselig noget helt andet, end opskriften regnede med. En køkkenvægt fjerner gætteriet: du vejer mel, sukker, smør og væske direkte i skålen og får samme resultat hver gang. Bager du surdejsbrød, laver du marmelade, eller følger du udenlandske opskrifter i gram, bliver den hurtigt et af de redskaber, du rækker ud efter dagligt.</p>
<p>Herunder har vi samlet vores bud på de 5 bedste køkkenvægte lige nu: en flad allrounder, der klarer store mængder, et billigt hverdagsvalg, en vægt med en ekstra fin vejeflade til gær og krydderier, en vægt med udtrækkeligt display til store skåle og en designvægt med skål. Nederst får du en købsguide til kapacitet, præcision, vejeflade og rengøring, så du kan vælge den køkkenvægt, der passer til dit køkken.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4006501615091',
			'price'   => 375,
			'name'    => 'Soehnle Page Profi 200 køkkenvægt, 15 kg',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Flad køkkenvægt i rustfrit stål, der vejer helt op til 15 kg i spring på 1 gram – stor vejeflade, lille plads i skuffen.',
			'why'     => <<<'HTML'
<p>Soehnle Page Profi 200 er den køkkenvægt, vi ville give de fleste husstande. Den kan tage op til 15 kg, så du roligt kan stille en tung gryde eller røreskålen fra køkkenmaskinen på den og veje ingredienserne direkte deri. Samtidig viser den hvert enkelt gram, så den også følger med, når opskriften beder om små mængder.</p>
<p>Vejefladen er ekstra stor og lavet i rustfrit stål, og med mål på 24 x 17,5 x 1,6 cm er vægten så tynd, at den glider ind i en skuffe eller står lodret mellem skærebrætterne. Det gør det nemt at have den lige ved hånden – og en vægt, der er let at finde frem, bliver brugt.</p>
HTML,
			'good'    => [ 'Dig, der bager store portioner eller vejer i tunge skåle', 'Dig, der vil have én vægt til alt i køkkenet' ],
			'less'    => [ 'Dig, der skal veje gær og krydderier ned til tiendedele af et gram' ],
		],
		[
			'ean'     => '5708642098373',
			'price'   => 225,
			'name'    => 'OBH Nordica Balance 5000 køkkenvægt, 5 kg',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Kun 14 mm tynd køkkenvægt med stålflade mod fingeraftryk, tarafunktion og automatisk sluk – til en venlig pris.',
			'why'     => <<<'HTML'
<p>Skal du bare have en pålidelig køkkenvægt til hverdagen uden at bruge mange penge, er OBH Nordica Balance 5000 et oplagt valg. Den vejer op til 5 kg i spring på 1 gram, hvilket dækker langt de fleste opskrifter – fra en kagedej til dagens kartofler.</p>
<p>Med sine 14 millimeter er den slank nok til at forsvinde i en skuffe. Overfladen er i rustfrit stål med en belægning, der holder fingeraftryk væk, så den er hurtig at tørre af. Tarafunktionen nulstiller vægten, når skålen står på, displayet er stort og let at læse, og vægten slukker selv efter 60 sekunder, så batteriet ikke løber tør, hvis du glemmer den.</p>
HTML,
			'good'    => [ 'Første bolig og studiekøkkenet', 'Dig, der vil have det basale i orden for få penge' ],
			'less'    => [ 'Dig, der jævnligt vejer mere end 5 kg' ],
		],
		[
			'ean'     => '7350101117996',
			'price'   => 249,
			'name'    => 'Nod Dual køkkenvægt med to vejeflader',
			'role'    => 'Bedst til bagning',
			'reviews' => [],
			'verdict' => 'To vægte i én: en stor flade til mel og væske og en lille flade, der vejer med 0,1 grams præcision.',
			'why'     => <<<'HTML'
<p>Nod Dual løser et klassisk problem for bagere: den almindelige køkkenvægt er god til et kilo mel, men knap så god til 3 gram tørgær eller en knivspids kardemomme. Her har du to separate vejeflader. Den store tager de store mængder, mens den lille måler helt ned til 0,1 gram, så du også rammer gær, salt og krydderier præcist.</p>
<p>Begge flader har en finish i rustfrit stål, der ser pæn ud på køkkenbordet og er nem at holde ren. Det er et smart valg til dig, der bager brød og kager efter opskrifter i gram – eller som bare vil slippe for at gætte på de små mængder.</p>
HTML,
			'good'    => [ 'Brødbagere og surdejsfolket', 'Dig, der vejer små mængder krydderier og gær' ],
			'less'    => [ 'Dig, der vil have den enkleste vægt med kun én flade' ],
		],
		[
			'ean'     => '0719812683034',
			'price'   => 750,
			'name'    => 'OXO Good Grips køkkenvægt, 5 kg',
			'role'    => 'Bedst til store skåle',
			'reviews' => [],
			'verdict' => 'Køkkenvægt i rustfrit stål med udtrækkeligt display, så tallene ikke forsvinder under en bred skål.',
			'why'     => <<<'HTML'
<p>Kender du det, at en stor røreskål eller et bradefad dækker hele displayet, så du må bøje dig ned og kigge ind under kanten? OXO Good Grips har et display, du kan trække ud fra selve vægten. Så kan du altid se tallet, uanset hvor bred skålen er.</p>
<p>Vægten er lavet i rustfrit stål og vejer op til 5 kg, hvilket er rigeligt til de fleste bage- og madopskrifter. Den er et godt bud til dig, der ofte arbejder med store skåle, og som foretrækker en vægt i stål frem for plast.</p>
HTML,
			'good'    => [ 'Dig, der vejer i store, brede skåle', 'Dig, der vil have et robust redskab i stål' ],
			'less'    => [ 'Dig, der leder efter den billigste løsning' ],
		],
		[
			'ean'     => '8017709338190',
			'price'   => 1095,
			'name'    => 'Smeg køkkenvægt med skål, hvid',
			'role'    => 'Bedst design',
			'reviews' => [],
			'verdict' => 'Kompakt designvægt fra Smeg med en aftagelig skål i rustfrit stål og plads til op til 5 kg.',
			'why'     => <<<'HTML'
<p>Smeg er kendt for sine køleskabe og køkkenapparater i markant italiensk design, og køkkenvægten er tegnet i samme ånd. Det er en vægt, du gerne lader stå fremme ved siden af elkedlen og røremaskinen, i stedet for at gemme den væk.</p>
<p>Med følger en aftagelig skål i rustfrit stål, så du har noget at veje i fra første dag, og skålen kan tages af, når den skal vaskes. Vægten kan tage op til 5 kg og er bygget kompakt, så den ikke fylder meget på køkkenbordet. Den findes i flere farver, så den kan matche resten af dit køkken.</p>
HTML,
			'good'    => [ 'Dig, der går op i design', 'Dig, der allerede har andre Smeg-apparater' ],
			'less'    => [ 'Dig, der vil have den mest prisvenlige køkkenvægt' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Hvor meget skal din køkkenvægt kunne veje?</h2>
<p>De fleste køkkenvægte tager mellem 3 og 5 kg, og det rækker til langt de fleste opskrifter. Husk dog, at skålen også tæller med. Vejer du direkte i en tung røreskål, en støbejernsgryde eller skålen fra køkkenmaskinen, kan du hurtigt nærme dig grænsen. Bager du store portioner eller laver mad i store gryder, er en køkkenvægt, der klarer 10 kg eller mere, en god idé.</p>
<h2>Præcision: 1 gram eller 0,1 gram?</h2>
<p>En køkkenvægt, der vejer i spring på 1 gram, er fin til mel, sukker, smør og væske. Skal du veje meget små mængder – tørgær, salt til et brød eller krydderier – giver en vægt med 0,1 grams præcision et mere sikkert resultat. Nogle køkkenvægte har to vejeflader, så du får begge dele i ét redskab.</p>
<h2>Vejeflade, display og tara</h2>
<p>En stor vejeflade gør det nemt at stille brede skåle og fade sikkert. Tjek også, hvor displayet sidder: hvis skålen dækker tallene, bliver vægten irriterende at bruge. Et stort display eller et display, der kan trækkes ud, løser det. Tarafunktionen – som nulstiller vægten – er stort set standard og gør det muligt at veje flere ingredienser efter hinanden i samme skål. Kan vægten også måle væske i milliliter, slipper du for målebægeret.</p>
<h2>Materiale og rengøring</h2>
<p>Rustfrit stål og glas er de mest udbredte overflader på en køkkenvægt. Begge er nemme at tørre af, men stål kan vise fingeraftryk, medmindre det har en belægning. En glat, flad overflade uden kanter og knapper i vejen er nemmest at holde ren. En digital køkkenvægt må aldrig komme i opvaskemaskinen eller under vandhanen, medmindre den er lavet til det – tør den af med en fugtig klud.</p>
<h2>Plads i køkkenet</h2>
<p>En tynd køkkenvægt kan ligge i en skuffe eller stå lodret i et skab, mens en vægt med skål fylder mere, men ofte får lov at stå fremme. Tænk over, hvor du vil have den: står den lige ved hånden, bruger du den oftere. Husk, at de fleste digitale vægte kører på batterier, og en automatisk sluk sparer på dem.</p>
<p>Se alle <a href="/knive-redskaber/koekkenvaegt/">køkkenvægte</a> med aktuelle priser. Bager du meget, kan du også kigge på vores guides til <a href="/bedste-roeremaskine/">røremaskine</a>, <a href="/bedste-haevekurv/">hævekurv</a> og <a href="/bedste-bagestaal/">bagestål</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad skal man kigge efter i en køkkenvægt?', 'Kig på kapacitet, præcision, vejefladens størrelse og om displayet er let at aflæse. Til de fleste køkkener er en køkkenvægt på 5 kg med 1 grams spring og tarafunktion et godt udgangspunkt.' ],
		[ 'Hvad betyder tara på en køkkenvægt?', 'Tara nulstiller vægten, mens skålen står på. Så kan du veje flere ingredienser efter hinanden i samme skål uden at regne.' ],
		[ 'Har jeg brug for en køkkenvægt med 0,1 grams præcision?', 'Kun hvis du ofte vejer meget små mængder, fx gær, salt eller krydderier. Til almindelig bagning og madlavning er 1 gram rigeligt.' ],
		[ 'Hvor meget skal en køkkenvægt kunne veje?', '3–5 kg er nok for de fleste. Vejer du i tunge skåle eller gryder, eller laver du store portioner, så vælg en køkkenvægt, der klarer 10 kg eller mere.' ],
		[ 'Hvordan rengør jeg en digital køkkenvægt?', 'Tør den af med en hårdt opvredet klud og lidt opvaskemiddel. Undgå at skylle den under vandhanen, medmindre den er vandtæt. En aftagelig skål kan som regel vaskes for sig.' ],
	],
];
