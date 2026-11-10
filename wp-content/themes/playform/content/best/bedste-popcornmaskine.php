<?php
/**
 * Ny købsguide (søgeordsanalyse 10. nov. 2026: "popcornmaskine" ca. 3.600 søgninger/md.).
 * Kun popcornmaskiner – ikke majskerner, popcornskåle eller mikroovnsskåle. Fakta kun fra butikkernes produktdata. Ingen påstand om egen afprøvning.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-popcornmaskine',
	'date'     => '2026-11-10 10:00:00',
	'keyword'  => 'popcornmaskine',
	'title'    => 'Popcornmaskine: Vores bud på de 5 bedste til filmaftenen',
	'excerpt'  => 'Med en popcornmaskine laver du friske popcorn på få minutter og bestemmer selv fedtstof og salt. Her er vores bud på de 5 bedste popcornmaskiner fra de butikker, vi samarbejder med – fra lille og billig til retro i biografstil.',
	'more_cat' => 'koekkenmaskiner',
	'intro'    => <<<'HTML'
<p>Popcorn fra mikroovnsposen er nemme, men du har ingen kontrol over, hvad der er i dem. Med en popcornmaskine laver du dem fra bunden: du hælder majskerner i, og få minutter senere står der en skål varme, sprøde popcorn klar. Du bestemmer selv, om der skal smør, olie, salt eller sukker på – eller ingenting.</p>
<p>Herunder er vores bud på de 5 bedste popcornmaskiner hos de butikker, vi samarbejder med, lige nu. Vi har valgt maskiner til forskellige behov: en lille og billig til fredagshygge, en hurtig, en til hele familien, en kompakt designmodel og en retromaskine, der giver biografstemning i stuen. Nederst finder du en købsguide.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8713016076229',
			'price'   => 169,
			'name'    => 'Princess popcornmaskine',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Lille og billig popcornmaskine, hvor du selv vælger, om kernerne skal poppes i kokosolie eller smeltet smør.',
			'why'     => <<<'HTML'
<p>Princess er den nemme vej til hjemmelavede popcorn. Maskinen fylder ikke meget, koster ikke meget, og den gør præcis det, den skal: popper kernerne, så de er klar til skålen.</p>
<p>Den store fordel frem for mikroovnsposer er, at du styrer ingredienserne helt selv. Kan du bedst lide popcorn poppet i kokosolie, bruger du det. Er du til smørsmag, smelter du smør i stedet. Salt og krydderier kommer på bagefter, i den mængde du har lyst til.</p>
<p>Et godt valg til fredagshygge for to, til børneværelset eller som gave til en, der elsker film.</p>
HTML,
			'good'    => [ 'Fredagshygge for to', 'Lavt budget' ],
			'less'    => [ 'Store selskaber' ],
		],
		[
			'ean'     => '8003705119291',
			'price'   => 318,
			'name'    => 'Ariete Party Time popcornmaskine XL',
			'role'    => 'Hurtigst klar',
			'reviews' => [],
			'verdict' => 'Popcorn på under to minutter: fyld kerner i, tryk på knappen, og skålen er fuld.',
			'why'     => <<<'HTML'
<p>Ariete Party Time XL er til dig, der vil have popcorn med det samme. Du hælder majskerner i maskinen, trykker på knappen, og på under to minutter har du en fuld skål.</p>
<p>XL-udgaven tager 60 gram kerner ad gangen, så der er nok til en hel familie foran fjernsynet. Fordi den er så hurtig, kan du lave en portion mere midt i filmen uden at gå glip af noget.</p>
<p>Den røde farve gør maskinen til et lille festinslag på bordet, når vennerne kommer forbi til spilaften eller fødselsdag.</p>
HTML,
			'good'    => [ 'Filmaften med familien', 'Dig, der ikke gider vente' ],
			'less'    => [ 'Dig, der vil se popcornene poppe i en glasmontre' ],
		],
		[
			'ean'     => '5708642063982',
			'price'   => 363,
			'name'    => 'OBH Nordica Big Popper popcornmaskine',
			'role'    => 'Bedst til familien',
			'reviews' => [],
			'verdict' => 'Rummelig popcornmaskine med roterende omrører, der laver op til 4,5 liter popcorn, og et låg, der bliver til serveringsskål.',
			'why'     => <<<'HTML'
<p>OBH Nordica Big Popper laver op til 4,5 liter færdige popcorn ad gangen, så den er bygget til store skåle og mange hænder. En roterende omrører holder kernerne i bevægelse, mens de popper, så de ikke brænder på.</p>
<p>Når popcornene er klar, vender du maskinen, og låget bliver til serveringsskålen. Det betyder én ting mindre at vaske op.</p>
<p>Bunden har slip-let belægning, så den er nem at gøre ren, og en afbryder med kontrollampe viser, når maskinen er tændt. En gennemtænkt maskine til familier, der holder filmaften hver uge.</p>
HTML,
			'good'    => [ 'Familier', 'Nem rengøring' ],
			'less'    => [ 'Små køkkenskabe' ],
		],
		[
			'ean'     => '4211129140461',
			'price'   => 745,
			'name'    => 'WMF Kitchen Minis popcornmaskine',
			'role'    => 'Bedst i kompakt design',
			'reviews' => [],
			'verdict' => 'Kompakt designmaskine fra WMF med plads til 2,2 liter popcorn og et låg, der fungerer som skål.',
			'why'     => <<<'HTML'
<p>Som navnet antyder, er WMF Kitchen Minis små apparater til køkkener, hvor pladsen er trang. Popcornmaskinen er ingen undtagelse, men laver stadig op til 2,2 liter popcorn ad gangen.</p>
<p>Plastlåget kan bruges som serveringsskål, så du går direkte fra maskine til sofa. Det er praktisk, når der skal ske så lidt som muligt i køkkenet.</p>
<p>Vælg den, hvis du vil have et apparat fra et kendt køkkenmærke, der ser pænt ud på køkkenbordet og forvandler stuen til en lille hjemmebiograf.</p>
HTML,
			'good'    => [ 'Små husstande', 'Dig, der vil have et pænt apparat fremme' ],
			'less'    => [ 'Store selskaber' ],
		],
		[
			'ean'     => '7391091863166',
			'price'   => 629,
			'name'    => 'Champion Retro popcornmaskine XL',
			'role'    => 'Bedst i biografstil',
			'reviews' => [],
			'verdict' => 'Retro popcornmaskine med en rummelig gryde, der giver biografpopcorn til det store selskab.',
			'why'     => <<<'HTML'
<p>Champion Retro XL er popcornmaskinen, der skaber stemning. Retrolooket leder tankerne hen på biografen, og det er en del af oplevelsen at have den stående på bordet, mens popcornene popper.</p>
<p>Gryden er rummelig og tager 1,3 deciliter upoppede kerner ad gangen, så maskinen kan følge med, når hele vennegruppen eller børnefødselsdagen er samlet. Det er popcorn med biograffornemmelse – lavet i din egen stue.</p>
<p>Den røde metallic-farve gør den til et blikfang. Vælg den, hvis popcornmaskinen også skal være en del af festen.</p>
HTML,
			'good'    => [ 'Fester og børnefødselsdage', 'Biografstemning' ],
			'less'    => [ 'Dig med lidt plads' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige popcornmaskine</h2>
<h3>Typer af popcornmaskiner</h3>
<p><strong>Varmluft:</strong> Kernerne poppes af varm luft uden fedtstof. Det giver lette popcorn, og du kan selv tilføje smør eller olie bagefter.</p>
<p><strong>Med varmeplade og omrører:</strong> Kernerne poppes i lidt olie eller smør på en varm bund, mens en arm rører rundt. Det giver mere smag, og låget bliver ofte til skål.</p>
<p><strong>Retro i biografstil:</strong> En gryde øverst i en montre, hvor popcornene vælter ud. Den giver stemning og kan lave store portioner, men fylder mere.</p>
<h3>Hvor meget skal den kunne lave?</h3>
<p>Til to personer er en lille maskine nok. Til familien eller vennegruppen skal du vælge en maskine, der kan lave flere liter ad gangen – ellers står du og laver portioner hele aftenen.</p>
<h3>Rengøring</h3>
<p>Slip-let belægning og et låg, der kan tages af, gør det nemmere at holde maskinen ren. Lad den køle helt af, før du tørrer den af, og kom aldrig vand i selve apparatet.</p>
<h3>Tips til bedre popcorn</h3>
<p>Brug friske kerner, og følg maskinens mængdeangivelse – for mange kerner giver uåbnede kerner i bunden. Smelt smørret for sig, og vend det i popcornene lige før servering, så de holder sig sprøde.</p>
<p>Se alle <a href="/koekkenmaskiner/">køkkenmaskiner</a> og <a href="/servering/">skåle og servering</a> til filmaftenen, eller find en <a href="/bedste-sodavandsmaskine/">sodavandsmaskine</a>, så drikkevarerne også er hjemmelavede.</p>
HTML,
	'faq'      => [
		[ 'Er en popcornmaskine bedre end mikroovnspopcorn?', 'Med en popcornmaskine bestemmer du selv kerner, fedtstof og salt. Mikroovnsposer er hurtige, men smag og indhold er bestemt på forhånd.' ],
		[ 'Skal der olie i en popcornmaskine?', 'Det afhænger af typen. En varmluftsmaskine popper uden fedtstof, mens maskiner med varmeplade bruger lidt olie eller smør. Se vejledningen til din maskine.' ],
		[ 'Hvorfor popper alle kernerne ikke?', 'Kernerne kan være gamle og tørre, eller der er for mange i maskinen ad gangen. Brug friske kerner, og hold dig til den anbefalede mængde.' ],
		[ 'Hvilke majskerner skal jeg bruge?', 'Brug almindelige popcornmajs. Opbevar dem lufttæt, så de ikke tørrer ud.' ],
	],
];
