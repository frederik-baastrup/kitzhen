<?php
/**
 * Ny købsguide (15. nov. 2026) ud fra søgeordet "ølglas". Kun ølglas – ikke ølkrus med reklame eller gaveartikler.
 * Fakta kun fra butikkernes produktdata. Ingen påstand om egne afprøvninger.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-oelglas',
	'date'     => '2026-11-15 12:00:00',
	'keyword'  => 'ølglas',
	'title'    => 'Ølglas: Vores bud på de 5 bedste',
	'excerpt'  => 'Det rigtige ølglas løfter både duft, skum og smag – uanset om du skænker en kold pilsner eller en mørk ale. Her er vores bud på de 5 bedste ølglas fra de butikker, vi samarbejder med, fra allround-sættet til glasset til hvedeøl.',
	'more_cat' => 'servering',
	'intro'    => <<<'HTML'
<p>Øl smager faktisk forskelligt alt efter, hvad du drikker den af. Et godt ølglas samler duften, giver skummet plads og lader dig se farven, så den kolde pilsner føles friskere og den mørke ale mere fyldig. Derfor er det en lille investering, der gør en stor forskel, hver gang du åbner en flaske.</p>
<p>Herunder får du vores bud på de 5 bedste ølglas lige nu: et alsidigt sæt til hele familien, et højt glas til pilsner, et tulipanglas til specialøl, et rummeligt glas til hvedeøl og et prisvenligt sæt med stilk. Nederst finder du en købsguide til form, størrelse og opvask.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '5709513253587',
			'price'   => 269,
			'name'    => 'Rosendahl Grand Cru ølglas 50 cl, 6 stk.',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Seks høje tulipanglas på 50 cl, der klarer alt fra lys pilsner til mørk ale – og kan bruges til dessert.',
			'why'     => <<<'HTML'
<p>Har du kun plads til ét sæt ølglas i skabet, er Rosendahl Grand Cru et stærkt bud. Den høje tulipanform er bred nok forneden til at samle duften og smal nok foroven til at holde på skummet. Det gør glasset lige så velegnet til en lys pilsner som til en mørk ale, så du ikke behøver et glas til hver øltype.</p>
<p>Hvert glas rummer 50 cl, så der er god plads til en hel flaske med skum på toppen. Du får seks glas i pakken – nok til en middag med venner. Designet er enkelt, så glassene passer ind ved siden af resten af Grand Cru-serien, og de kan også tage en lagdelt dessert, når øllen er drukket.</p>
HTML,
			'good'    => [ 'Dig, der vil have ét glas til mange slags øl', 'Familier og middagsselskaber' ],
			'less'    => [ 'Dig, der vil have et specialglas til én bestemt øltype' ],
		],
		[
			'ean'     => '4003322249559',
			'price'   => 270,
			'name'    => 'Spiegelau Beer Classic Tall Pilsner 43 cl, 4 stk.',
			'role'    => 'Bedst til pilsner',
			'reviews' => [],
			'verdict' => 'Højt, slankt krystalglas på 43 cl, formet til den klassiske pilsner.',
			'why'     => <<<'HTML'
<p>Er det den kolde pilsner, du helst åbner, fortjener den et glas, der er lavet til netop den. Spiegelau Beer Classic Tall Pilsner er højt og slankt, så du kan følge boblerne stige op gennem den gyldne øl, mens den smalle form holder kulsyren og skummet længere.</p>
<p>Glassene er i krystal fra den tyske glasproducent Spiegelau, der er kendt for at sætte funktionen først. Hvert glas tager 43 cl, og du får fire i pakken – et godt udgangspunkt til fredagsøllen eller grillaftenen.</p>
HTML,
			'good'    => [ 'Pilsner og lys lager', 'Dig, der vil have et klassisk, højt ølglas' ],
			'less'    => [ 'Mørke og kraftige øl, som har godt af en bredere skål' ],
		],
		[
			'ean'     => '5706422107604',
			'price'   => 209,
			'name'    => 'Holmegaard Mikkeller Universal ølglas 40 cl, 2 stk.',
			'role'    => 'Bedst til specialøl',
			'reviews' => [],
			'verdict' => 'Rundet tulipanglas på fod, skabt sammen med Mikkeller til mørkere og stærkere øl.',
			'why'     => <<<'HTML'
<p>Drikker du gerne mørk og kraftig øl, er det her glasset, der får mest ud af flasken. Holmegaard har lavet det sammen med bryggeriet Mikkeller, og den runde, tulipanlignende skål er formet til at fremhæve aromaerne i mørkere og stærkere øl. Du kan svinge øllen let rundt, og duften bliver samlet ved kanten, lige under næsen.</p>
<p>Glasset står på en stabil fod, så det ligger godt i hånden og giver bordet et mere festligt udtryk. Det rummer 40 cl, hvilket passer til en flaske specialøl med plads til skum. Pakken indeholder to glas, så det er oplagt til dig, der nyder en god øl i ro og mag – eller som gave til ølentusiasten.</p>
HTML,
			'good'    => [ 'Mørk og stærk øl med meget aroma', 'Som gave til en, der holder af specialøl' ],
			'less'    => [ 'Store selskaber – kun 2 glas pr. pakke' ],
		],
		[
			'ean'     => '4003322247234',
			'price'   => 303,
			'name'    => 'Spiegelau Craft American Wheat ølglas 75 cl, 4 stk.',
			'role'    => 'Bedst til hvedeøl',
			'reviews' => [],
			'verdict' => 'Rummeligt glas på 0,75 liter til weissbier og hvedeøl – med plads til det store, luftige skum.',
			'why'     => <<<'HTML'
<p>Hvedeøl skummer mere end de fleste andre øl, og det kræver et glas med god plads. Spiegelau Craft American Wheat rummer 0,75 liter, så en hel flaske weissbier kan komme i glasset med en flot, høj skumkrone ovenpå. Glasset er en del af Spiegelaus Craft-serie, der er formet til bestemte øltyper.</p>
<p>Du får fire glas i pakken, så det er et godt startsæt, hvis du og vennerne holder af en kold hvedeøl om sommeren. Den høje form viser også den uklare, gyldne farve frem, som er en stor del af oplevelsen ved netop denne øltype.</p>
HTML,
			'good'    => [ 'Weissbier og hvedeøl', 'Dig, der vil hælde hele flasken i på én gang' ],
			'less'    => [ 'Små øl på 33 cl, der ser fortabte ud i det store glas' ],
		],
		[
			'ean'     => '5722009161814',
			'price'   => 143,
			'name'    => 'Lyngby Glas Juvel ølglas 49 cl, 4 stk.',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Fire ølglas med høj stilk og næsten pæreformet skål på 49 cl – et prisvenligt valg med ølbarfølelse.',
			'why'     => <<<'HTML'
<p>Du behøver ikke bruge mange penge for at servere øllen i et glas med stil. Lyngby Glas Juvel har en høj stilk og en skål, der næsten er formet som en pære. Formen giver plads til duften, og stilken gør, at hånden ikke varmer øllen op så hurtigt.</p>
<p>Hvert glas rummer 49 cl, og der er fire i pakken. Det tidløse, enkle udtryk passer både til hverdagsbordet og til festen, så glassene sagtens kan stå fremme, når der er gæster. Et oplagt valg, hvis du vil skifte de gamle, umage glas ud uden at sprænge budgettet.</p>
HTML,
			'good'    => [ 'Dig, der vil have pæne ølglas til en lav pris', 'Hverdag og fest' ],
			'less'    => [ 'Dig, der vil have et lige glas uden stilk' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du det rigtige ølglas</h2>
<p>Et ølglas skal kunne tre ting: give øllen plads, holde på skummet og samle duften. Hvor meget vægt du lægger på hver af dem, afhænger af, hvad du helst drikker.</p>
<h3>Form efter øltype</h3>
<p>Lyse og friske øl som pilsner og lager har det bedst i et højt, slankt ølglas, der holder på kulsyren og viser boblerne frem. Mørke og aromatiske øl som IPA, stout og belgisk ale kommer til deres ret i et tulipanglas eller et glas med en bredere skål, hvor duften samles ved kanten. Hvedeøl skal have et højt glas med ekstra volumen til det store skum. Vil du kun have ét sæt, så vælg et tulipanformet allround-glas – det klarer de fleste øltyper fint.</p>
<h3>Størrelse</h3>
<p>De fleste flasker og dåser er på 33 cl, mens mange specialøl og hvedeøl fås i 50 cl. Vælg et ølglas, der kan rumme hele flasken plus et par centimeter skum. Til almindelige øl er 40–50 cl et godt udgangspunkt, mens hvedeøl gerne må have mere.</p>
<h3>Med eller uden stilk?</h3>
<p>Et ølglas på fod eller stilk ser festligt ud og holder hånden lidt væk fra øllen, så den bliver kold længere. Lige glas uden fod er robuste, lette at stable og nemme at have med i hverdagen. Til grillaftener og fester med mange gæster er de ofte det mest praktiske valg.</p>
<h3>Rengøring og skum</h3>
<p>Fedt og rester af opvaskemiddel får skummet til at falde sammen. Skyl derfor ølglassene godt i rent vand efter opvask, og lad dem dryptørre. Kontrollér altid producentens anvisninger, før du sætter tynde krystalglas i opvaskemaskinen. Undgå at tørre glassene med et viskestykke, der har været brugt til andet – det kan efterlade fnug og fedt.</p>
<p>Se alle glas og alt til borddækning i <a href="/servering/">servering</a>. Skal der også vin på bordet, så kig i vores guides til <a href="/bedste-roedvinsglas/">rødvinsglas</a> og <a href="/bedste-store-vinglas/">store vinglas</a>. Og vil du have øllen kold, er der hjælp at hente i guiden til <a href="/bedste-koeleskab-til-drikkevarer/">køleskab til drikkevarer</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvilket ølglas passer til de fleste øl?', 'Et tulipanformet ølglas på 40–50 cl er det mest alsidige. Det samler duften og holder på skummet, så det passer både til lys pilsner og mørkere øl.' ],
		[ 'Hvorfor skummer øllen ikke i mit glas?', 'Som regel skyldes det fedt eller rester af opvaskemiddel i glasset. Skyl ølglasset grundigt i rent vand efter opvask, og lad det lufttørre.' ],
		[ 'Hvor stort skal et ølglas være?', 'Det skal kunne rumme hele flasken plus skum. Til en almindelig flaske på 33 cl er et glas på 40–50 cl passende, mens hvedeøl kræver et større glas.' ],
		[ 'Hvad er forskellen på et ølglas og et ølkrus?', 'Et ølkrus har hank og tykke vægge og er lavet til at holde til meget. Et ølglas er typisk tyndere og formet til at fremhæve øllens duft, farve og skum.' ],
		[ 'Hvilket ølglas skal jeg bruge til hvedeøl?', 'Vælg et højt glas med stort rumfang, gerne over 50 cl, så der er plads til både øllen og det kraftige skum, som hvedeøl giver.' ],
	],
];
