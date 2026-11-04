<?php
/**
 * Introtekster til Kitzhens kategorier og underkategorier (landingssiderne).
 * Kun generel købsrådgivning – ingen påstande om konkrete produkter (projektregel 2).
 * Seedes af playform_seed_category_texts() og kan derefter rettes under Produkter › Kategorier.
 * SEO-tekst ('seo') og FAQ ('faq') skrives ud fra søgeordsanalysen og tilføjes her; tomme felter
 * udfyldes ved næste udrulning, felter med tekst røres aldrig (redaktørens rettelser vinder).
 *
 * @return array<string,array{intro?:string,seo?:string,faq?:array<int,array{0:string,1:string}>}>
 */

defined( 'ABSPATH' ) || exit;

return [

	// Hovedkategorier.
	'kaffe-drikke'    => [ 'intro' => 'Espressomaskiner, kaffekværne, mokkakander, kedler, sodavandsmaskiner og køleskabe til drikkevarer fra flere danske webshops samlet ét sted.' ],
	'ovne-apparater'  => [ 'intro' => 'Mikroovne, miniovne, airfryere, brødristere, paninigrills og andre apparater til køkkenet fra flere danske webshops samlet ét sted.' ],
	'grill'           => [ 'intro' => 'Gasgrill, kulgrill, kamado, røgeovn og andet til udekøkkenet fra flere danske webshops samlet ét sted.' ],
	'gryder-pander'   => [ 'intro' => 'Gryder, grydesæt, stegepander, wokpander og specialpander til induktion og gas fra flere danske webshops samlet ét sted.' ],
	'knive-redskaber' => [ 'intro' => 'Kokkeknive, japanske knive, steakknive, knivslibere, rivejern og andre køkkenredskaber fra flere danske webshops samlet ét sted.' ],
	'koekkenmaskiner' => [ 'intro' => 'Stavblendere, blendere, røremaskiner, foodprocessorer, slow juicere og pålægsmaskiner fra flere danske webshops samlet ét sted.' ],
	'servering'       => [ 'intro' => 'Vinglas, tallerkener, spisestel, ostesæt og karafler til borddækningen fra flere danske webshops samlet ét sted.' ],
	'pizza-bagning'   => [ 'intro' => 'Pizzaovne, pizzasten, bagestål, brødmaskiner og pastamaskiner fra flere danske webshops samlet ét sted.' ],

	// Kaffe & drikke.
	'espressomaskine'     => [ 'intro' => 'Espressomaskiner med portafilter og fuldautomatiske maskiner, der maler bønnerne selv. Sammenlign modeller fra flere danske webshops.' ],
	'kaffekvaern'         => [ 'intro' => 'Kaffekværne til espresso, filterkaffe og stempelkande. Se kværne med koniske og flade skiver fra flere danske webshops.' ],
	'mokkakande'          => [ 'intro' => 'Mokkakander til komfur og induktion i flere størrelser. Se udvalget fra flere danske webshops samlet ét sted.' ],
	'stempelkande'        => [ 'intro' => 'Stempelkander i glas og stål til kaffe og te. Se udvalget fra flere danske webshops samlet ét sted.' ],
	'kedel'               => [ 'intro' => 'Elkedler og kedler til komfur og induktion. Se modeller fra flere danske webshops samlet ét sted.' ],
	'sodavandsmaskine'    => [ 'intro' => 'Sodavandsmaskiner, der laver kulsyrevand derhjemme. Se modeller fra flere danske webshops samlet ét sted.' ],
	'isterningmaskine'    => [ 'intro' => 'Isterningmaskiner, der laver isterninger på få minutter – til fester, bar og sommer. Se modeller fra flere danske webshops.' ],
	'drikkevarekoeleskab' => [ 'intro' => 'Køleskabe til drikkevarer, vinkøleskabe og ølkølere. Se modeller fra flere danske webshops samlet ét sted.' ],
	'toendekoeler'        => [ 'intro' => 'Tøndekølere og party coolers, der holder drikkevarerne kolde til fester. Se udvalget fra flere danske webshops.' ],

	// Ovne & apparater.
	'mikroovn'     => [ 'intro' => 'Mikroovne til opvarmning, optøning og madlavning – fristående og med grill eller varmluft. Se modeller fra flere danske webshops.' ],
	'miniovn'      => [ 'intro' => 'Miniovne med varmluft til små køkkener, sommerhuset eller som ekstra ovn. Se modeller fra flere danske webshops.' ],
	'airfryer'     => [ 'intro' => 'Airfryere med én eller to skuffer. Se modeller fra flere danske webshops samlet ét sted.' ],
	'broedrister'  => [ 'intro' => 'Brødristere – også flade modeller til boller og toast. Se udvalget fra flere danske webshops samlet ét sted.' ],
	'paninigrill'  => [ 'intro' => 'Paninigrills og sandwichtoastere til sprøde paninier og toast. Se modeller fra flere danske webshops.' ],
	'riskoger'     => [ 'intro' => 'Riskogere, der koger risene og holder dem varme. Se modeller fra flere danske webshops samlet ét sted.' ],
	'slow-cooker'  => [ 'intro' => 'Slow cookers og multicookers til gryderetter, der simrer i mange timer. Se modeller fra flere danske webshops.' ],
	'sous-vide'    => [ 'intro' => 'Sous vide-stave til præcis tilberedning i vandbad. Se modeller fra flere danske webshops samlet ét sted.' ],
	'dehydrator'   => [ 'intro' => 'Dehydratorer til tørret frugt, grøntsager og jerky. Se modeller fra flere danske webshops samlet ét sted.' ],
	'vakuumpakker' => [ 'intro' => 'Vakuumpakkere, der holder maden frisk længere og bruges til sous vide. Se modeller fra flere danske webshops.' ],
	'ismaskine'    => [ 'intro' => 'Ismaskiner til hjemmelavet is og sorbet. Se modeller med og uden kompressor fra flere danske webshops.' ],
	'gaskomfur'    => [ 'intro' => 'Gaskomfurer og gaskogeplader. Se modeller fra flere danske webshops samlet ét sted.' ],

	// Grill & udekøkken.
	'gasgrill'     => [ 'intro' => 'Gasgrill i alle størrelser – fra kompakte modeller til altanen til store grill med sidebrænder. Se udvalget fra flere danske webshops.' ],
	'kulgrill'     => [ 'intro' => 'Kulgrill og kuglegrill til den klassiske grillsmag. Se modeller fra flere danske webshops samlet ét sted.' ],
	'kamado-grill' => [ 'intro' => 'Kamado grill i keramik, der kan grille, bage og ryge. Se modeller fra flere danske webshops samlet ét sted.' ],
	'roegeovn'     => [ 'intro' => 'Røgeovne og smokers – også elektriske modeller. Se udvalget fra flere danske webshops samlet ét sted.' ],
	'bordgrill'    => [ 'intro' => 'Elektriske bordgrill og raclettegrill til bordet og altanen. Se modeller fra flere danske webshops.' ],
	'gasbraender'  => [ 'intro' => 'Gasbrændere til paella, wok og store gryder udendørs. Se udvalget fra flere danske webshops samlet ét sted.' ],
	'paellapande'  => [ 'intro' => 'Paellapander i flere størrelser til gasbrænder og grill. Se udvalget fra flere danske webshops samlet ét sted.' ],

	// Gryder & pander.
	'gryde'           => [ 'intro' => 'Gryder i støbejern, stål og med slip-let – også tykbundede gryder til induktion. Se udvalget fra flere danske webshops.' ],
	'grydesaet'       => [ 'intro' => 'Grydesæt til induktion, gas og el. Se sæt fra flere danske webshops samlet ét sted.' ],
	'stegepande'      => [ 'intro' => 'Stegepander i stål, støbejern, kulstofstål og med slip-let-belægning. Se udvalget fra flere danske webshops.' ],
	'wokpande'        => [ 'intro' => 'Wokpander til gas og induktion. Se udvalget fra flere danske webshops samlet ét sted.' ],
	'grillpande'      => [ 'intro' => 'Grillpander i støbejern og aluminium – også til induktion. Se udvalget fra flere danske webshops.' ],
	'blinispande'     => [ 'intro' => 'Blinispander og pandekagepander til induktion og gas. Se udvalget fra flere danske webshops samlet ét sted.' ],
	'aebleskivepande' => [ 'intro' => 'Æbleskivepander i støbejern og aluminium – også til induktion. Se udvalget fra flere danske webshops.' ],

	// Knive & redskaber.
	'kokkekniv'        => [ 'intro' => 'Kokkeknive i stål og damaskus fra europæiske og japanske producenter. Se udvalget fra flere danske webshops.' ],
	'japansk-kniv'     => [ 'intro' => 'Japanske knive – santoku, gyuto, nakiri og petty. Se udvalget fra flere danske webshops samlet ét sted.' ],
	'steakknive'       => [ 'intro' => 'Steakknive i sæt og enkeltvis. Se udvalget fra flere danske webshops samlet ét sted.' ],
	'knivsliber'       => [ 'intro' => 'Knivslibere, slibesten og strygestål – manuelle og elektriske. Se udvalget fra flere danske webshops.' ],
	'rivejern'         => [ 'intro' => 'Rivejern til parmesan, citrus og grøntsager. Se udvalget fra flere danske webshops samlet ét sted.' ],
	'groentsagshakker' => [ 'intro' => 'Grøntsagshakkere og mandoliner til hurtig og ensartet snitning. Se udvalget fra flere danske webshops.' ],
	'skaerebraet'      => [ 'intro' => 'Skærebrætter i bambus, træ og plast. Se udvalget fra flere danske webshops samlet ét sted.' ],

	// Køkkenmaskiner.
	'stavblender'       => [ 'intro' => 'Stavblendere til supper, saucer og smoothies – også med hakker og piskeris. Se modeller fra flere danske webshops.' ],
	'blender'           => [ 'intro' => 'Blendere til smoothies, knust is og supper. Se modeller fra flere danske webshops samlet ét sted.' ],
	'roeremaskine'      => [ 'intro' => 'Røremaskiner og køkkenmaskiner til dej, flødeskum og kager. Se modeller fra flere danske webshops.' ],
	'foodprocessor'     => [ 'intro' => 'Foodprocessorer og minihakkere, der snitter, river og hakker. Se modeller fra flere danske webshops.' ],
	'slow-juicer'       => [ 'intro' => 'Slow juicere, der presser saften langsomt ud af frugt og grønt. Se modeller fra flere danske webshops.' ],
	'juicemaskine'      => [ 'intro' => 'Juicemaskiner og citruspressere. Se modeller fra flere danske webshops samlet ét sted.' ],
	'spiralizer'        => [ 'intro' => 'Spiralizere til grøntsagsspaghetti og pynt. Se udvalget fra flere danske webshops samlet ét sted.' ],
	'palaegsmaskine'    => [ 'intro' => 'Pålægsmaskiner til brød, pålæg og ost. Se modeller fra flere danske webshops samlet ét sted.' ],
	'rullepoelsepresse' => [ 'intro' => 'Rullepølsepresser til hjemmelavet rullepølse. Se udvalget fra flere danske webshops samlet ét sted.' ],

	// Servering & borddækning.
	'vinglas'     => [ 'intro' => 'Rødvinsglas, hvidvinsglas og champagneglas. Se udvalget fra flere danske webshops samlet ét sted.' ],
	'tallerkener' => [ 'intro' => 'Tallerkener og pastatallerkener til hverdag og fest. Se udvalget fra flere danske webshops samlet ét sted.' ],
	'spisestel'   => [ 'intro' => 'Spisestel og julestel. Se udvalget fra flere danske webshops samlet ét sted.' ],
	'ostesaet'    => [ 'intro' => 'Ostesæt med bræt og knive. Se udvalget fra flere danske webshops samlet ét sted.' ],
	'karafler'    => [ 'intro' => 'Karafler og dekantere til vin og vand. Se udvalget fra flere danske webshops samlet ét sted.' ],

	// Pizza & bagning.
	'pizzaovn'     => [ 'intro' => 'Pizzaovne til gas, træ og el – også pizzaovne til grillen. Se modeller fra flere danske webshops.' ],
	'pizzasten'    => [ 'intro' => 'Pizzasten og bagestål til sprød bund i ovn og grill. Se udvalget fra flere danske webshops samlet ét sted.' ],
	'broedmaskine' => [ 'intro' => 'Brødmaskiner, der ælter, hæver og bager. Se modeller fra flere danske webshops samlet ét sted.' ],
	'pastamaskine' => [ 'intro' => 'Pastamaskiner – manuelle og elektriske. Se udvalget fra flere danske webshops samlet ét sted.' ],
	'bageforme'    => [ 'intro' => 'Bageforme, springforme og brødforme. Se udvalget fra flere danske webshops samlet ét sted.' ],
];
