<?php
namespace Playform\Feeds;

/**
 * Al opsætning for nichen ét sted: sitets navn, shops, kategoritræ, sorteringsregler og filtre.
 * Kitzhen (køkkenudstyr). En ny niche er en ny udgave af denne fil; resten af koden er den samme som Fitbase.
 */
final class Config {

	/** Sitets navn og kontaktoplysninger. Bruges af temaet (playform_site()) og importens tekster. */
	public static function site(): array {
		return [
			'name'     => 'Kitzhen',
			'domain'   => 'kitzhen.dk',
			'email'    => 'kontakt@kitzhen.dk',
			'niche'    => 'køkkenudstyr', // "Find køkkenudstyr fra …"
			'tagline'  => 'Køkkenudstyr fra flere danske webshops samlet ét sted',
			'company'  => 'Mondae',
			'cvr'      => '37208329',
			'address'  => 'Rønnevej 19 B, kl., 5270 Odense N',
			'owner'    => 'Frederik Baastrup',
			'accent'   => '#24FF00', // fra logoet
		];
	}

	/**
	 * Partner-ads feeds. Kan overstyres med option 'playform_shops'.
	 * Shops uden 'url' springes over af importen. Feed-linket findes under programmet i Partner-ads
	 * (feed_udlaes.php?partnerid=…&bannerid=…&feedid=…). Kun godkendte programmer.
	 */
	public static function shops(): array {
		$base     = 'https://www.partner-ads.com/dk/feed_udlaes.php?partnerid=14854';
		// Koblet til shop ud fra bannerid i feedets vareurl (4. nov. 2026). Gourmetshoppens feed var tomt den dag.
		$defaults = [
			'gourmetshoppen'      => [ 'name' => 'Gourmetshoppen.com', 'url' => "$base&bannerid=80950&feedid=1925" ],
			'bagestaalet'         => [ 'name' => 'Bagestålet.dk', 'url' => "$base&bannerid=90982&feedid=2362" ],
			'cibumic'             => [ 'name' => 'Cibumic.dk', 'url' => "$base&bannerid=59757&feedid=1113" ],
			'japanske-kokkeknive' => [ 'name' => 'Japanske kokkeknive', 'url' => "$base&bannerid=58102&feedid=1060" ],
			'kitchenone'          => [ 'name' => 'KitchenOne.dk', 'url' => "$base&bannerid=79283&feedid=1862" ],
			'hvidevareshoppen'    => [ 'name' => 'HvidevareShoppen.dk', 'url' => "$base&bannerid=56457&feedid=1000" ],
			'koege-kafferisteri'  => [ 'name' => 'Køge Kafferisteri', 'url' => "$base&bannerid=79640&feedid=1878" ],
			'barlife'             => [ 'name' => 'Barlife.dk', 'url' => "$base&bannerid=46609&feedid=651" ],
			// Tilføjet 5. nov. 2026 (godkendte programmer, testet mod kategorierne).
			'kirlund'             => [ 'name' => 'Kirlund', 'url' => "$base&bannerid=116914&feedid=4306" ],
			'kitchen-gadget'      => [ 'name' => 'Kitchen Gadget', 'url' => "$base&bannerid=107557&feedid=3406" ],
			'kitchentech'         => [ 'name' => 'Kitchentech.dk', 'url' => "$base&bannerid=114562&feedid=4050" ],
			'nordic-roots'        => [ 'name' => 'Nordic-roots.dk', 'url' => "$base&bannerid=115958&feedid=4219" ],
			'riceknife'           => [ 'name' => 'Riceknife', 'url' => "$base&bannerid=104291&feedid=3171" ],
			'sumisu'              => [ 'name' => 'Sumisu', 'url' => "$base&bannerid=112338&feedid=3823" ],
			'ushi'                => [ 'name' => 'Ushi.dk', 'url' => "$base&bannerid=90749&feedid=2345" ],
			// Moreland sælger mest havemøbler, pool og legetøj. Kun grill, grilltilbehør og pizzaovne kommer med
			// (fast kategori-oversættelse; alle andre butikskategorier udelukkes).
			'moreland'            => [
				'name'         => 'Moreland',
				'url'          => "$base&bannerid=16450&feedid=6",
				'category_map' => [ 'grill' => 'grill', 'grill tilbehør' => 'grill', 'pizzaovn' => 'pizza-bagning' ],
			],
		];
		$custom = get_option( 'playform_shops' );
		return is_array( $custom ) && $custom ? $custom : $defaults;
	}

	/**
	 * Kitzhens kategorier. 'match' testes først mod produktnavnet, derefter mod butikkens kategori.
	 * Rækkefølgen betyder noget: den første kategori, der matcher, vinder (fx pizzaovn før ovn,
	 * grillpande før grill, isterningmaskine før ismaskine).
	 * Slugs må aldrig starte med "bedste-" – det er forbeholdt guides på roden (se permalinks.php).
	 */
	public static function categories(): array {
		return [
			'pizza-bagning'   => [ 'name' => 'Pizza & bagning', 'match' => 'pizza|bagest[åa]l|bagesten|brødmaskine|bagemaskine|pastamaskine|pasta ?maker|bageform|springform|kageform|muffinform|bageplade|dejskraber|kagerulle|udstikker|sprøjtepose|hævekurv|surdej' ],
			'kaffe-drikke'    => [ 'name' => 'Kaffe & drikke', 'match' => 'espresso|kaffemaskine|kaffebrygger|kaffekværn|kaffe ?kværn|mokkakande|\bmoka\b|stempelkande|french ?press|filterkaffe|kaffefilter|mælkeskummer|mælkeskumm|elkedel|vandkoger|\bkedel\b|kedel til|tekande|sodavandsmaskine|sodastream|kulsyre|isterningmaskine|drikkevarekøleskab|køleskab til drikke|vinkøleskab|ølkøler|tøndekøler|party ?cooler|cocktail|shaker|barudstyr|isspand' ],
			'ovne-apparater'  => [ 'name' => 'Ovne & apparater', 'match' => 'mikroovn|mikrobølge|miniovn|mini ?ovn|minikøkken|airfryer|air ?fryer|varmluftsfriture|friture|brødrister|toaster|paninigrill|panini|sandwichtoaster|sandwich ?maker|vaffeljern|riskoger|slow ?cooker|langtidskoger|multicooker|trykkoger|sous ?vide|dehydrator|frugttørrer|vakuumpakker|vakuumpakning|\bismaskine|softice|gaskomfur|komfur|kogeplade|induktionsplade|indbygningsovn|\bovn\b' ],
			'koekkenmaskiner' => [ 'name' => 'Køkkenmaskiner', 'match' => 'stavblender|blender|smoothie ?maker|røremaskine|køkkenmaskine|foodprocessor|food ?processor|minihakker|hakkemaskine|kødhakker|slow ?juicer|juicer|juicemaskine|saftpresser|citruspresser|spiralizer|pålægsmaskine|rullepølsepresse|pølsemaskine|elektrisk kartoffelskræller|kartoffelskræller,? elektrisk|håndmixer|elpisker' ],
			'gryder-pander'   => [ 'name' => 'Gryder & pander', 'match' => 'gryde(?!ske|skab|lap|underlag)|kasserolle|sauterpande|(?<!paella)pande\b|stegepande|wok\b|wokpande|grillpande|blinispande|æbleskivepande|støbejern|dutch ?oven|bradepande|ovnfast fad|låg til' ],
			'grill'           => [ 'name' => 'Grill & udekøkken', 'match' => 'gasgrill|kulgrill|kamado|big green egg|grill|røgeovn|smoker|bordgrill|raclette|gasbrænder|paella|grillkul|briketter|plancha|bålpande|udekøkken' ],
			'knive-redskaber' => [ 'name' => 'Knive & redskaber', 'match' => 'kniv|knive|santoku|gyuto|nakiri|petty|knivsliber|slibesten|vandsten|knivblok|knivmagnet|skærebræt|skærebrædt|rivejern|parmesan|grøntsagshakker|mandolin|skræller|hvidløgspresse|køkkensaks|piskeris|grydeske|paletkniv|stegevender|\bøse\b|dørslag|sigte\b|køkkenvægt|stegetermometer|køkkentermometer|æggeur|måleske|målebæger|køkkenredskab' ],
			'servering'       => [ 'name' => 'Servering & borddækning', 'match' => 'vinglas|rødvinsglas|hvidvinsglas|champagneglas|ølglas|drikkeglas|\bglas\b|karaffel|dekanter|tallerken|\bskål\b|skåle|\bkop\b|kopper|krus|bestik|\bstel\b|julestel|spisestel|ostesæt|ostebræt|serveringsbakke|serveringsfad|\bfad\b|kande\b|bordskåner|dækkeserviet|tapasbræt' ],
		];
	}

	/**
	 * Underkategorier = egne landingssider, fx /grill/gasgrill/. Navnene følger søgeordene i guiderne
	 * (/bedste-gasgrill/ linker til /grill/gasgrill/). 'match' testes mod produktnavnet, 'desc' mod
	 * butikkens beskrivelse, 'not' udelukker ud fra navnet. Et produkt kan ligge i flere.
	 * Slugs skal være unikke i hele træet (WooCommerce-krav) og må ikke starte med "bedste-".
	 *
	 * Hver side skal matche søgeintentionen for sit navn (ejerens ønske 10. nov. 2026): 'match' rammer
	 * produkttypens navneord, og 'not' holder andre typer, tilbehør, reservedele og sæt ude. Søgeord med
	 * egen intention (pandekagepande ≠ blinispande, bradepande ≠ stegepande) har deres egen side.
	 * Gennemgået mod feedsne 10. nov. 2026.
	 */
	public static function subcategories(): array {
		// Fælles udelukkelser.
		$pan_not   = 'grill|blini|æbleskive|\bwok|stir ?fry|paella|bradepande|traktør|saut[eéè]r?pande|saut[eé]pande|satuerpande|sauteuse|pandekage|cr[eê]pe|plætte|bål|serverings|præsentations|ovnpande|langpande|fiskepande|snegle|snigel|teppanyaki|fajita|sizzl|braiser|chefpande|pastapande|universalpande|skovpande|el-pande|party|spisepande|æggepande|mini|organizer|spatel|lædergreb|beskytter|stativ|holder|nylonske|\bsæt\b|pandesæt|stegepandesæt|stegepander|\d-pak|\d+ ?dele|\d+ ?\+ ?\d+|gryde|kasserolle|glaslåg til|' . self::acc( 'pande' );
		$pot_not   = 'grydesæt|gryde ?sæt|gryde-? ?(og|&)|gryde og pande|kasserollesæt|\bsæt\b|\d+ ?dele|stove set|stormkøkken|startsæt|stegepande|grydelåg|organizer|fondue|transporttaske|lågløfter|underlag|stentøj|' . self::acc( 'gryde|kasserolle|dutch' );
		$knife_not = 'knivblok|knivmagnet|knivtaske|knivskede|saya|knivbeskytter|bladbeskytter|slibesten|knivsliber|strygestål|reserveblad|blad til|startkit|slibe-kit|knivsæt|knivesæt|\bsæt\b|\d+ dele|\+';
		$af_acc    = 'tilbehør|accessory|silikone|airfryerform|indsats|måtte|kurv til|rack|\brist|æggeform|æggeholder|forme?\b|skuffe|bagesæt|grillplade|\bkit\b|airfryersæt|\blåg\b|spyd|pølseholder';
		$grill_acc = 'rengøring|termometer|understel|varmehylde|kontrolring|stegplade|grillrist|grillplade|drypbakke|drypbeskyttelse|træspåner|røgboks|adapterkit|rotisserisystem|rottiserisystem|vægstativ|teppanyaki-plade';

		return [
			'pizza-bagning' => [
				'pizzaovn-til-grill' => [ 'name' => 'Pizzaovn til grill', 'match' => 'pizzaovn til grill|pizza ?ovn til (gas|kul)?grill|rotisseri(e)? (&|og) pizzaovn', 'not' => 'kamadogrill|kulgrill|signature|icon|midi \\+|maxi kul|grill \\+' ],
				'pizzaovn'    => [ 'name' => 'Pizzaovn', 'match' => 'pizzaovn|pizza ?ovn|pizza oven', 'not' => 'termometer|børste|træpiller|^demo\b|kamadogrill|kulgrill|\bmed\b[^|]*pizzaovn|\\+[^|]*pizzaovn|' . self::acc( 'pizza ?ovn' ) ],
				'pizzasten'   => [ 'name' => 'Pizzasten og bagestål', 'match' => 'pizzasten|pizza ?sten|bagesten|bagest[åa]l|pizzastål', 'not' => 'kulgrill|kamadogrill|\bmed\b[^|]*(bagesten|pizzasten)|' . self::acc( 'pizzasten|bagesten|bagestål' ) ],
				'broedmaskine'=> [ 'name' => 'Brødmaskine', 'match' => 'brødmaskine|bagemaskine' ],
				'pastamaskine'=> [ 'name' => 'Pastamaskine', 'match' => 'pastamaskine|pasta ?maker', 'not' => 'tilbehør til|bordbeslag|' . self::acc( 'pastamaskine' ) ],
				'bageforme'   => [ 'name' => 'Bageforme', 'match' => 'bageform|springform|kageform|muffinform|brødform', 'not' => 'bagefolie|udstikker|tilbehør' ],
				'springform'  => [ 'name' => 'Springform', 'match' => 'springform', 'not' => 'bagefolie|' . self::acc( 'springform' ) ],
				'muffinform'  => [ 'name' => 'Muffinform', 'match' => 'muffinform|muffinsform', 'not' => 'tilbehør|papirform' ],
				'pizzaspade'  => [ 'name' => 'Pizzaspade', 'match' => 'pizzaspade|pizza ?spade|pizzaskovl|pizza ?peel', 'not' => 'pizzasten|bagesten|' . self::acc( 'pizzaspade' ) ],
				'pizzaskaerer'=> [ 'name' => 'Pizzaskærer', 'match' => 'pizzaskærer|pizzahjul|pizzakniv|pizzarulle|pizzasaks|pizza ?cutter', 'not' => self::acc( 'pizzaskærer|pizzahjul' ) ],
				'kagerulle'   => [ 'name' => 'Kagerulle', 'match' => 'kagerulle|dejrulle', 'not' => self::acc( 'kagerulle' ) ],
				'haevekurv'   => [ 'name' => 'Hævekurv', 'match' => 'hævekurv|banneton', 'not' => self::acc( 'hævekurv' ) ],
				'sproejtepose'=> [ 'name' => 'Sprøjtepose', 'match' => 'sprøjtepose|sprøjteposer', 'not' => self::acc( 'sprøjtepose' ) ],
				'bageplade'   => [ 'name' => 'Bageplade', 'match' => 'bageplade', 'not' => '\btil\b|muffin|stativ' ],
			],
			'kaffe-drikke' => [
				// Espressomaskiner med indbygget kværn hører til her (ikke som kaffekværn).
				'espressomaskine'      => [ 'name' => 'Espressomaskine', 'match' => 'espressomaskine|espresso ?maskine|espressomachine|fuldautomatisk', 'not' => 'tamper|\bkande\b|\bkop|rengøring|tilbehørspakke|håndtag til|' . self::acc( 'espresso|kaffemaskine' ) ],
				'kaffekvaern'          => [ 'name' => 'Kaffekværn', 'match' => 'kaffekværn|kaffe ?kværn|grinder', 'not' => 'espressomaskine|kaffemaskine|rengøring|' . self::acc( 'kaffekværn|grinder' ) ],
				'mokkakande'           => [ 'name' => 'Mokkakande', 'match' => 'mokkakande|mokkabrygger|moka ?express|moka induction|\bmoka\b|espressobrygger|espressokande|kaffebrygger italy', 'not' => 'stempelkande|mælkeskum|termo|kaffemaskine|pipamoka|wacaco|minipresso|nanopresso|pakning|' . self::acc( 'mokka|moka|espressokande' ) ],
				'stempelkande'         => [ 'name' => 'Stempelkande', 'match' => 'stempelkande|french ?press', 'not' => 'erstatningsglas|reserveglas|' . self::acc( 'stempelkande|french ?press' ) ],
				'kedel'                => [ 'name' => 'Kedel', 'match' => 'elkedel|el-kedel|vandkoger|\bkedel\b|kedel til|fløjtekedel', 'not' => 'brødrister|kaffemaskine|pakke|\\+|' . self::acc( 'kedel' ) ],
				'elkedel'              => [ 'name' => 'Elkedel', 'match' => 'elkedel|el-kedel|el kedel|vandkoger|vandelkedel', 'not' => 'brødrister|kaffemaskine|pakke|\\+|' . self::acc( 'kedel' ) ],
				'sodavandsmaskine'     => [ 'name' => 'Sodavandsmaskine', 'match' => 'sodavandsmaskine|sodastream|kulsyremaskine|carbonat(o|e)r', 'not' => '^(?:(?!maskine).)*\b(glas)?flask|kulsyreflaske|^(?:(?!maskine).)*cylinder|' . self::acc( 'sodavandsmaskine|kulsyremaskine' ) ],
				'flaske-til-sodavandsmaskine' => [ 'name' => 'Flaske til sodavandsmaskine', 'match' => '(flask[ae]r?|flaska)[^,|]*(sodavand|kulsyre)|(sodastream|brus|infizz|bubliq|mysoda)[^,|]*\b(glas)?flask', 'not' => 'maskine[^,|]*flask' ],
				'isterningmaskine'     => [ 'name' => 'Isterningmaskine', 'match' => 'isterningmaskine|ice ?maker' ],
				'vinkoeleskab'         => [ 'name' => 'Vinkøleskab', 'match' => 'drikkevarekøleskab|køleskab til drikke|vinkøleskab|minikøleskab|barkøleskab' ],
				'toendekoeler'         => [ 'name' => 'Tøndekøler', 'match' => 'tøndekøler|party ?cooler' ],
			],
			'ovne-apparater' => [
				'mikroovn'    => [ 'name' => 'Mikroovn', 'match' => 'mikroovn|mikrobølge', 'not' => 'mikrobølgesikker|rengøring|damper|låg til|beskyttelsesmåtte|omeletform|pastakoger|dampkoger|popcorn|madkasse|' . self::acc( 'mikro' ) ],
				'indbygningsmikroovn' => [ 'name' => 'Indbygningsmikroovn', 'match' => 'indbygningsmikroovn|indbygningsmikrobølgeovn|(indbygget|integreret)[^,]*mikro|mikro[^,]*(til )?indbygning', 'not' => self::acc( 'mikro' ) ],
				'miniovn'     => [ 'name' => 'Miniovn', 'match' => 'miniovn|mini ?ovn\b|bordovn' ],
				'airfryer'    => [ 'name' => 'Airfryer', 'match' => 'airfryer|air ?fryer|varmluftsfriture', 'not' => $af_acc . '|' . self::acc( 'air ?fryer' ) ],
				'airfryer-tilbehoer' => [ 'name' => 'Airfryer tilbehør', 'match' => '(?=.*air ?fryer)(?:' . $af_acc . '|' . self::acc( 'air ?fryer' ) . ')', 'not' => 'mikrobølgeovn|mikroovn|køkkenmaskine' ],
				'broedrister' => [ 'name' => 'Brødrister', 'match' => 'brødrister|toaster', 'not' => 'sandwich|kedel|elfedel|bollevarmer|toastholder|toaster pan|kaffemaskine|' . self::acc( 'brødrister|toaster' ) ],
				'paninigrill' => [ 'name' => 'Paninigrill', 'match' => 'paninigrill|panini|sandwichtoaster|kontaktgrill', 'not' => 'plader|snack collection|paninijern|ufo|' . self::acc( 'panini|sandwich' ) ],
				'riskoger'    => [ 'name' => 'Riskoger', 'match' => 'riskoger|rice ?cooker', 'not' => 'indsats|' . self::acc( 'riskoger' ) ],
				'slow-cooker' => [ 'name' => 'Slow cooker', 'match' => 'slow ?cooker|langtidskoger' ],
				'multicooker' => [ 'name' => 'Multicooker', 'match' => 'multicooker|multi ?cooker|multikoger', 'not' => self::acc( 'multicooker|multi ?cooker' ) ],
				'trykkoger'   => [ 'name' => 'Trykkoger', 'match' => 'trykkoger|pressure ?cooker', 'not' => 'pakning|ventil|' . self::acc( 'trykkoger' ) ],
				'sous-vide'   => [ 'name' => 'Sous vide', 'match' => 'sous ?vide', 'not' => '^sousvidetools®? (?!.*(stav|cirkulator))|kammarvac|isoleringskugler|termometer|opbevaringstaske|\bkar\b|vandbad|beholder|stålkantine|termokasse' ],
				'dehydrator'  => [ 'name' => 'Dehydrator', 'match' => 'dehydrator|frugttørrer|madtørrer', 'not' => 'ekstra lag|tørreark|\d-pa(ck|k)|' . self::acc( 'dehydrator' ) ],
				'vakuumpakker'=> [ 'name' => 'Vakuumpakker', 'match' => 'vakuumpakker|vakuumpakning|vakuummaskine', 'not' => self::acc( 'vakuumpakker|vakuummaskine' ) ],
				'ismaskine'   => [ 'name' => 'Ismaskine', 'match' => '\bismaskine|softice|ice ?cream', 'not' => 'røremaskine|køkkenmaskine|assistent|ismaskinetilbehør|tilbehør|bægre|komfur|fryseskab|blende|' . self::acc( 'ismaskine' ) ],
				'gaskomfur'   => [ 'name' => 'Gaskomfur', 'match' => 'gaskomfur' ],
				'gaskogeplade'=> [ 'name' => 'Gaskogeplade', 'match' => 'gaskogeplade|gas ?kogeplade|gasblus', 'not' => 'portab|' . self::acc( 'gaskogeplade|gasblus' ) ],
				'induktionskogeplade' => [ 'name' => 'Induktionskogeplade', 'match' => 'induktion[^,]*kogeplade|induktionsplade|induktionsblus', 'not' => 'ovn|komfur|hvidevarepakke|bialetti|adapter|' . self::acc( 'kogeplade|induktion' ) ],
				'vaffeljern'  => [ 'name' => 'Vaffeljern', 'match' => 'vaffeljern|vaffel ?maker|vaffelmaskine', 'not' => 'vaffelplader|' . self::acc( 'vaffeljern' ) ],
				'frituregryde'=> [ 'name' => 'Frituregryde', 'match' => 'frituregryde|friturekoger|frituremaskine|\bfriture\b', 'not' => 'kurv|ske\b|airfryer|varmluft|' . self::acc( 'friture' ) ],
			],
			'koekkenmaskiner' => [
				'stavblender'      => [ 'name' => 'Stavblender', 'match' => 'stavblender|stavmixer|hand ?blender', 'not' => 'køkkenmaskine|erstatningsknive|tilbehør til|mixerbæger|' . self::acc( 'stavblender|stavmixer' ) ],
				'blender'          => [ 'name' => 'Blender', 'match' => 'blender|smoothie', 'not' => 'stav|hand ?blender|immersion|blenderkande|blenderbeholder|blendermugg|\bt/|vakuumpumpe|assistent|bægersæt|bæger-sæt|minihakker|' . self::acc( 'blender' ) ],
				'smoothie-blender' => [ 'name' => 'Smoothie blender', 'match' => 'smoothie ?blender|smoothieblender|smoothie ?maker|sportblender|personal blender|personlig blender', 'not' => 'stav|hakker|' . self::acc( 'blender' ) ],
				'roeremaskine'     => [ 'name' => 'Røremaskine', 'match' => 'røremaskine|køkkenmaskine|stand ?mixer', 'not' => 'dejkrog|' . self::acc( 'røremaskine|køkkenmaskine|stand ?mixer|k5' ) ],
				'roeremaskine-tilbehoer' => [ 'name' => 'Tilbehør til røremaskine', 'match' => 'dejkrog|tilbehørspakke til|' . self::acc( 'røremaskine|køkkenmaskine|stand ?mixer|k5\b|kenwood chef|kmix|assistent' ), 'not' => 'køkkenmaskine(,| med| \\+)|røremaskine( med| \\+)|elpisk|håndmixer' ],
				'foodprocessor'    => [ 'name' => 'Foodprocessor', 'match' => 'foodprocessor|food ?processor', 'not' => 'tilbehør|citruspresser|spiral|' . self::acc( 'foodprocessor' ) ],
				'minihakker'       => [ 'name' => 'Minihakker', 'match' => 'minihakker|mini ?chopper|chopper|løghakker', 'not' => 'stavblender|' . self::acc( 'blender|minihakker' ) ],
				'slow-juicer'      => [ 'name' => 'Slow juicer', 'match' => 'slow ?juicer|slowjuicer|koldpresset', 'not' => 'filterpose|klodser|nedstopper|' . self::acc( 'juicer' ) ],
				'juicemaskine'     => [ 'name' => 'Juicemaskine', 'match' => 'juicer|juicemaskine|saftpresser', 'not' => 'slow|koldpresset|citrus|nedstopper|filterpose|klodser|moste|mustpresser|frugt - og saftpresser|ekstra saftpresser|' . self::acc( 'juicer|saftpresser' ) ],
				'citruspresser'    => [ 'name' => 'Citruspresser', 'match' => 'citruspresser|citrussaftpresser|citrus ?juicer|citrus press', 'not' => 'assistent|\\+|tilbehør|' . self::acc( 'foodprocessor|køkkenmaskine' ) ],
				'spiralizer'       => [ 'name' => 'Spiralizer', 'match' => 'spiralizer|spiralskærer' ],
				'palaegsmaskine'   => [ 'name' => 'Pålægsmaskine', 'match' => 'pålægsmaskine|skæremaskine', 'not' => 'restholder|' . self::acc( 'skæremaskine|pålægsmaskine' ) ],
				'rullepoelsepresse'=> [ 'name' => 'Rullepølsepresse', 'match' => 'rullepølsepresse' ],
			],
			'gryder-pander' => [
				'gryde'          => [ 'name' => 'Gryde', 'match' => 'gryde|kasserolle|dutch ?oven', 'not' => $pot_not ],
				'stoebejernsgryde' => [ 'name' => 'Støbejernsgryde', 'match' => 'støbejernsgryde|støbejerns ?gryde|(gryde|cocotte|dutch ?oven)[^,]*støbejern|dutch ?oven', 'not' => $pot_not ],
				'kasserolle'     => [ 'name' => 'Kasserolle', 'match' => 'kasserolle', 'not' => $pot_not ],
				'fonduegryde'    => [ 'name' => 'Fonduegryde', 'match' => 'fondue', 'not' => 'fonduegafl|raclette|' . self::acc( 'fondue' ) ],
				'grydesaet'      => [ 'name' => 'Grydesæt', 'match' => 'grydesæt|gryde ?sæt|grytsæt|grytset|grytesæt|gryde-? ?(og|&) ?(stege)?pandesæt|gryde-? ?(og|&) ?kasserollesæt|kasserollesæt|kasserolle sæt|gryder (&|og) pander|stegepande-? og kasserolle|ingenio.*\d+ dele', 'not' => '^(?![^,]*gryde)[^,]*(pandesæt|stegepande|stegepannesæt)|låg, \d|ingenio låg|grydelåg|glaslåg' ],
				'grydelaag'      => [ 'name' => 'Grydelåg', 'match' => 'grydelåg|glaslåg|universallåg|^[^,|]*\blåg\b[^,|]*\d+ ?cm', 'not' => '(med|m/|m\.|uden|og|\\+|inkl\.?|inklusiv) ?(\d+ )?(glas|støbejerns|stål)?låg|grydesæt|termometer|\bfad\b|lotusgrill|røreskål|madkasse|skål\b|crate|kølebakke|flaske|karaffel|condi|hævekasse|stegeplade|stegebord|ildtønde|bålpande|candyfloss|bæger|rugbrødsform|mikro|stretch|servering|termokande|dåse' ],
				'stegepande'     => [ 'name' => 'Stegepande', 'match' => 'stegepande|stegpande|steg ?pande|frying ?pan|skillet|(?<![a-zæøå-])pande\b|støbejernspande|kulstålspande|jernpande|stålpande', 'not' => $pan_not ],
				'stegepandesaet' => [ 'name' => 'Stegepandesæt', 'match' => 'stegepandesæt|stegepande ?sæt|stegepannesæt|stekpannesæt|pandesæt|stegepander[^,]*\d-pak|stegepande[^,]*\d-pak|stegepande[^,]*\d+ ?\\+ ?\d+', 'not' => 'gryde|kasserolle|\bwok|bradepande|låg|beskytter' ],
				'stoebejernspande' => [ 'name' => 'Støbejernspande', 'match' => 'støbejernspande|støbejerns ?stegepande|støbejernsstegpande|(stegepande|stegpande|(?<![a-zæøå-])pande\b|skillet)[^,|]*støbejern|cast iron (pan|skillet)', 'not' => $pan_not ],
				'kulstaalspande' => [ 'name' => 'Kulstålspande', 'match' => 'kulstålspande|kulstofstålspande|(stegepande|stegpande|(?<![a-zæøå-])pande\b)[^,|]*(kulstål|kulstof|carbon)|(kulstål|carbon ?stål)[^,|]*(stegepande|pande\b)|mineral b|carbone plus', 'not' => $pan_not ],
				'sauterpande'    => [ 'name' => 'Sauterpande', 'match' => 'saut[eéè]r?pande|saut[eé]pande|satuerpande|sauteuse|sautergryde', 'not' => 'stegepande|grydesæt|\d+ dele|glaslåg|' . self::acc( 'pande' ) ],
				'traktoerpande'  => [ 'name' => 'Traktørpande', 'match' => 'traktørpande|traktør ?pande|braiserpande|countrypan', 'not' => 'glaslåg til|' . self::acc( 'pande' ) ],
				'bradepande'     => [ 'name' => 'Bradepande', 'match' => 'bradepande|langpande|ovnpande|roasting ?pan|jelly roll pan|roaster bradepande', 'not' => self::acc( 'bradepande|ovnpande' ) ],
				'wokpande'       => [ 'name' => 'Wokpande', 'match' => 'wok', 'not' => 'woklåg|wokholder|burner|brænder|bordskåner|grillpande|wokske|wokspatel|hot wok|\bsæt\b|' . self::acc( 'wok' ) ],
				'grillpande'     => [ 'name' => 'Grillpande', 'match' => 'grillpande', 'not' => 'skraber|melamin|' . self::acc( 'grillpande' ) ],
				// Blinispande og pandekagepande er to søgeord med hver sin intention (ejeren 10. nov. 2026).
				'blinispande'    => [ 'name' => 'Blinispande', 'match' => 'blinis?(pande)?\b|blini ?pande', 'not' => self::acc( 'blini' ) ],
				'pandekagepande' => [ 'name' => 'Pandekagepande', 'match' => 'pandekage ?pande|pancake ?pan', 'not' => '\bsæt\b|' . self::acc( 'pandekage' ) ],
				'crepepande'     => [ 'name' => 'Crepepande', 'match' => 'cr[eê]pe', 'not' => 'spreder|spatel|' . self::acc( 'cr[eê]pe' ) ],
				'aebleskivepande'=> [ 'name' => 'Æbleskivepande', 'match' => 'æbleskive', 'not' => self::acc( 'æbleskive' ) ],
			],
			'grill' => [
				'gasgrill'     => [ 'name' => 'Gasgrill', 'match' => 'gasgrill|gas ?grill', 'not' => $grill_acc . '|' . self::acc( 'gas ?grill' ) ],
				'kulgrill'     => [ 'name' => 'Kulgrill', 'match' => 'kulgrill|kul ?grill|kuglegrill', 'not' => 'kamado|' . $grill_acc . '|' . self::acc( 'kul ?grill|kuglegrill' ) ],
				'kamado-grill' => [ 'name' => 'Kamado grill', 'match' => 'kamado[- ]?grill|kamadogrill|keramisk kamado|kamado e6|(big green egg|kamado sumo)[^,]*kulgrill|kamado sumo (classic|icon|signature)[^,]*(junior|large|midi|maxi|pro)|kamado sumo (maxi|midi|mini) (grøn|sort)', 'not' => 'signature (midi|pro) tilbehørspakke|tilbehørssæt|hibachi|bordgrill|' . $grill_acc . '|' . self::acc( 'kamado|grill' ) ],
				'roegeovn'     => [ 'name' => 'Røgeovn', 'match' => 'røgeovn|smoker|rygeovn', 'not' => $grill_acc . '|' . self::acc( 'røgeovn|rygeovn|smoker' ) ],
				'bordgrill'    => [ 'name' => 'Bordgrill', 'match' => 'bordgrill|bord-grill|plancha|optigrill', 'not' => 'raclette|grilltænder|grillstænger|vaffelplader|plancha til|^(?!.*bordgrill).*konro|^(?:(?!grill\b).)*(grillspyd|stegeplade|grillhylde|rack|varmerist|fedtopsamling)|' . $grill_acc . '|' . self::acc( 'grill' ) ],
				'raclette-grill' => [ 'name' => 'Raclette grill', 'match' => 'raclette', 'not' => self::acc( 'raclette' ) ],
				'elgrill'      => [ 'name' => 'Elgrill', 'match' => 'elgrill|elektrisk grill\b|e-bbq', 'not' => 'grilltænder|multifunktionssæt|' . $grill_acc . '|' . self::acc( 'grill' ) ],
				// Gasbrænder = håndbrænder til madlavning (guiden /bedste-gasbraender-til-madlavning/). Brændere med ringe og stativ er paellabrændere.
				'gasbraender'  => [ 'name' => 'Gasbrænder', 'match' => 'gasbrænder|køkkenbrænder|bunsenbrænder|brûlée|brulee|flambérbrænder|torch|handyjet|powerjet', 'not' => '\bring|ringe|stativ|paella|stegeplade|gasblus|karu|storm|butangas|eggniter|gj-one|(?:[4-9]\d|1\d\d) ?cm|' . self::acc( 'gasbrænder|powerjet|handyjet' ) ],
				'paellabraender' => [ 'name' => 'Paellabrænder', 'match' => '(?=.*(brænder|gasblus))(?=.*(\bring|ringe|stativ|paella|stegeplade|gasblus|d-600))', 'not' => 'paellapande|butangas|karu|' . self::acc( 'gasbrænder|brænder' ) ],
				'paellapande'  => [ 'name' => 'Paellapande', 'match' => 'paellapande|paella ?pan|paellasæt|paella-pande', 'not' => self::acc( 'paellapande' ) ],
			],
			'knive-redskaber' => [
				'kokkekniv'       => [ 'name' => 'Kokkekniv', 'match' => 'kokkekniv|kokkeknive|chefkniv|chef.?s ?kni(v|fe)|chef knife|gyuto|santoku', 'not' => 'børne|' . $knife_not ],
				'japansk-kniv'    => [ 'name' => 'Japansk kniv', 'match' => 'santoku|gyuto|nakiri|petty|bunka|sujihiki|kiritsuke|\bdeba\b|yanagiba|usuba|takohiki|honesuki|funayuki|japansk[^|,]*kni[vf]|kni[vf][^|,]*japansk|^(global|kai|shun|miyabi|tojiro|yaxell|satake|mac|masahiro|kasumi|suncraft|sakai|moritaka|ryda|hokiyama|suisin|yoshihiro)\b[^|,]*kniv', 'not' => 'knivblok|knivmagnet|knivliste|knivtaske|knivmappe|knivskede|saya|knivbeskytter|slibesten|knivsliber|strygestål|reserveblad|blad til|startkit|paletkniv|ostekniv|hummerkniv|\\+' ],
				'santoku-kniv'    => [ 'name' => 'Santoku kniv', 'match' => 'santoku', 'not' => $knife_not ],
				'nakiri-kniv'     => [ 'name' => 'Nakiri kniv', 'match' => 'nakiri', 'not' => $knife_not ],
				'knivsaet'        => [ 'name' => 'Knivsæt', 'match' => 'knivsæt|knivesæt|kniv ?sæt|knive i (træ)?blok|knivblok med (\d+ |kokke)?kni', 'not' => 'steak|børne|bestik' ],
				'broedkniv'       => [ 'name' => 'Brødkniv', 'match' => 'brødkniv|brødsav|bread ?knife', 'not' => $knife_not ],
				'urtekniv'        => [ 'name' => 'Urtekniv', 'match' => 'urtekniv|skrællekniv|tournerkniv|tournierkniv|paring ?kni', 'not' => $knife_not ],
				'udbenerkniv'     => [ 'name' => 'Udbenerkniv', 'match' => 'udbenerkniv|udbener|honesuki|boning ?kni', 'not' => 'fiskeben|' . $knife_not ],
				'filetkniv'       => [ 'name' => 'Filetkniv', 'match' => 'filetkniv|fileteringskniv|filetering|filet ?kniv', 'not' => $knife_not ],
				'universalkniv'   => [ 'name' => 'Universalkniv', 'match' => 'universalkniv|utility ?kniv|utilitykniv', 'not' => $knife_not ],
				'steakknive'      => [ 'name' => 'Steakknive', 'match' => 'steakkniv|steak ?kniv|bøfkniv', 'not' => 'saya|knivskede|knivbeskytter' ],
				'knivblok'        => [ 'name' => 'Knivblok', 'match' => 'knivblok|knivstativ|knivholder', 'not' => 'knivmagnet|magnetisk knivholder|knivholder[^,|]*magnet|' . self::acc( 'knivblok' ) ],
				'knivmagnet'      => [ 'name' => 'Knivmagnet', 'match' => 'knivmagnet|magnetlist|magnetisk knivholder|knivholder[^,|]*magnet|knivlist', 'not' => 'knivblok' ],
				'knivsliber'      => [ 'name' => 'Knivsliber', 'match' => 'knivsliber|slibesten|vandsten|strygestål', 'not' => 'kokkekniv|knivsæt|santoku|startkit|slibe-kit|' . self::acc( 'knivsliber|slibesten' ) ],
				'slibesten'       => [ 'name' => 'Slibesten', 'match' => 'slibesten|vandsten|vådslibesten|whetstone', 'not' => 'kokkekniv|knivsæt|santoku|startkit|holder|stativ|' . self::acc( 'slibesten' ) ],
				'strygestaal'     => [ 'name' => 'Strygestål', 'match' => 'strygestål|slibestål|honing ?rod', 'not' => 'reservestav|kokkekniv|knivsæt|\\+|kniv og|' . self::acc( 'strygestål' ) ],
				'rivejern'        => [ 'name' => 'Rivejern', 'match' => 'rivejern|parmesan|microplane', 'not' => 'spiralskræller|slicer|mandolin|høvl|julienne|skræller|handske|' . self::acc( 'rivejern' ) ],
				'groentsagshakker'=> [ 'name' => 'Grøntsagshakker', 'match' => 'grøntsagshakker|mandolin|hakker', 'not' => 'mini|elektrisk|kniv|kinesisk|kødhakker' ],
				'mandolinjern'    => [ 'name' => 'Mandolinjern', 'match' => 'mandolin', 'not' => 'handske|' . self::acc( 'mandolin' ) ],
				'skaerebraet'     => [ 'name' => 'Skærebræt', 'match' => 'skærebræt|skærebrædt', 'not' => 'olie|stativ|holder|knivsæt|' . self::acc( 'skærebræt' ) ],
				'koekkensaks'     => [ 'name' => 'Køkkensaks', 'match' => 'køkkensaks|fjerkræsaks|urtesaks|\bsaks\b', 'not' => 'pizza|negle|hummer|skaldyr|reserveblad|' . self::acc( 'saks' ) ],
				'skraeller'       => [ 'name' => 'Skræller', 'match' => 'skræller|peeler', 'not' => 'elektrisk|spiralskræller|kniv|' . self::acc( 'skræller' ) ],
				'hvidloegspresse' => [ 'name' => 'Hvidløgspresse', 'match' => 'hvidløgspresse|hvidløgspresser|garlic ?press|hvidløgsknuser' ],
				'stegetermometer' => [ 'name' => 'Stegetermometer', 'match' => 'stegetermometer|kødtermometer|madtermometer|grilltermometer|instant ?read|termometer', 'not' => 'udendørs|husholdnings|infrarød|laser|vindue|ovntermometer|frysetermometer|køleskabstermometer|vintermometer|rumtermometer|sukkertermometer|' . self::acc( 'termometer' ) ],
				'koekkenvaegt'    => [ 'name' => 'Køkkenvægt', 'match' => 'køkkenvægt|digital ?vægt|\bvægt\b', 'not' => 'kaffe|person|bade|bagage|\\+|med vægt|vægtskål|tilbehør|' . self::acc( 'vægt' ) ],
				'piskeris'        => [ 'name' => 'Piskeris', 'match' => 'piskeris|ballonpisker', 'not' => 'tilbehør|elpisker|håndmixer|stavblender|' . self::acc( 'stavblender|køkkenmaskine|røremaskine' ) ],
				'doerslag'        => [ 'name' => 'Dørslag', 'match' => 'dørslag', 'not' => self::acc( 'dørslag' ) ],
			],
			'servering' => [
				'vinglas'      => [ 'name' => 'Vinglas', 'match' => 'vinglas|rødvinsglas|hvidvinsglas|champagneglas|bordeauxglas|bourgogneglas|bordeaux ?(rød)?vinsglas|dessertvinsglas|portvinsglas', 'not' => 'holder|markør|charms|børste|rengøring|stativ|ophæng|drypring|' . self::acc( 'glas' ) ],
				'roedvinsglas' => [ 'name' => 'Rødvinsglas', 'match' => 'rødvinsglas|bordeauxglas|bourgogneglas|bordeaux ?(rød)?vinsglas', 'not' => 'holder|markør|børste|rengøring|stativ|' . self::acc( 'glas' ) ],
				'hvidvinsglas' => [ 'name' => 'Hvidvinsglas', 'match' => 'hvidvinsglas|(chardonnay|riesling|sauvignon)[^,]*glas', 'not' => 'holder|markør|børste|rengøring|stativ|' . self::acc( 'glas' ) ],
				'champagneglas'=> [ 'name' => 'Champagneglas', 'match' => 'champagneglas|champagne ?flute|champagneskål|crémantglas|proseccoglas|boblevandsglas', 'not' => 'holder|markør|børste|rengøring|stativ|' . self::acc( 'glas' ) ],
				'tallerkener'  => [ 'name' => 'Tallerkener', 'match' => 'tallerken|pastatallerken|dyb tallerken', 'not' => 'stativ|ophæng|holder|røgklokke|airfryer|krus|\bkop|morgenmadssæt|' . self::acc( 'tallerken' ) ],
				'dyb-tallerken'=> [ 'name' => 'Dyb tallerken', 'match' => 'dybe? tallerken|pastatallerken|suppetallerken', 'not' => 'stativ|holder|krus|' . self::acc( 'tallerken' ) ],
				'spisestel'    => [ 'name' => 'Spisestel', 'match' => '\bstel\b|julestel|spisestel|middagsservice|servicesæt|bordservice|\bservice\b|tallerkensæt', 'not' => 'børn|tallerkenstativ' ],
				'boerneservice'=> [ 'name' => 'Børneservice', 'match' => 'børneservice|børnestel|børnetallerken' ],
				'ostesaet'     => [ 'name' => 'Ostesæt', 'match' => 'ostesæt|ostebræt|ostekniv' ],
				'karafler'     => [ 'name' => 'Karafler', 'match' => 'karaffel|karafler|karafel|dekanter|decanter|vandkande|glaskande|serveringskande|vinkande', 'not' => 'termo|filter|måle|mælk|fløde|kaffe|coffee|melitta|hario|kalita|\bv60|k400|mixer|juice|blender|pour over|moccamaster|rens|ernst vandkande|flora vandkande|globe vandkande|bloom vandkande|' . self::acc( 'karaffel|kande|dekanter' ) ],
				'termokande'   => [ 'name' => 'Termokande', 'match' => 'termokande|termo-?/?(serverings)?kande|pumpetermokande|thermo ?kande', 'not' => 'kaffemaskine|kaffebrygger|med termokande|' . self::acc( 'termokande' ) ],
			],
		];
	}

	/**
	 * Regex-del til 'not': navnet beskriver tilbehør TIL produkttypen ("Låg til stegepande",
	 * "Termometer til pizzaovn", "Kande t/RIO blender"), dvs. typens navneord står efter "til".
	 */
	private static function acc( string $nouns ): string {
		return '(?:\btil\b|\bt/|\bfor\b)[^|]*(?:' . $nouns . ')';
	}

	/** Produkter, der aldrig skal med (navn eller butikkens kategori). Finjusteres, når feedsne er hentet. */
	public static function exclude(): array {
		return [
			'gavekort',
			'reservedel|spare ?part|replacement part|\bsn ?[<>]',
			'\bguide\b|opskriftsbog|kogebog|\bbog\b|bøger',
			// Hvidevarer, der ikke hører til i et køkken-sortiment for madlavning
			'vaskemaskine|tørretumbler|vaskesøjle|opvaskemaskine|fryser|kummefryser|køle-?fryseskab|\bkøleskab\b(?!.*(drikke|vin|øl))|støvsuger|robotstøvsuger|affugter|aircondition|varmepumpe|\btv\b|fjernsyn',
			// Fødevarer og forbrugsvarer (vi samler udstyr, ikke mad)
			'kaffebønner|hele bønner|formalet kaffe|espressobønner|kapsler|kaffepuder|\bte\b \d|chokolade|slik|krydderi|olivenolie|eddike|sirup|marmelade|kulsyrepatron|rensetablet|afkalkning|filterposer',
			// Tøj og tekstiler
			'forklæde|grydelapp|grydehandske|viskestykke|karklud|\bt-shirt\b',
			// Køkkenindretning og bad (HvidevareShoppen sælger skabe, låger, emhætter og vaske)
			'køkken og bad|grydeskab|overskab|underskab|højskab|emhætte|emfang|bordplade|køkkenlåge|køkkenvask|armatur|vandhane|udblæsningskit',
			// Forbrugsvarer og reservedele til maskinerne
			'vakuumposer|vakuumruller|vakuumroller|poser til|papirforme|silikoneform|bagepapir|sugerør|ekstrakt|smagsekstrakt|filter til|kulfilter|røgpiller|røgchips|røgtræ|grillkul|briketter|optænding|cover til|overtræk|beholder til|mixerbehållare|dricklock',
			// Fest, bolig og interiør
			'festartikler|barspil|drikkespil|flag på|julekugle|julepynt|juletræ|lysestage|fyrfad|\bvase\b|lampe|pendel|\btæppe|plaid|opbevaringsboks',
			// Mad og drikke (Barlife og KitchenOne har også delikatesser og spiritus)
			'delikatesser|drikkevarer \||spiritus|whisky|likør|\bgin\b|\brom\b|rødvin(?!sglas)|hvidvin(?!sglas)|champagne(?!glas|køler|spand|sabel)|oliven|saucer og soja',
		];
	}

	/** Butikskategorier, hvor kun vores egne regler må afgøre placeringen (de siger intet om produktet). */
	public static function meaningless_shop_categories(): array {
		return [ 'brands', 'mærker', 'tilbud', 'udsalg', 'nyheder', 'gaveideer', 'gaver', 'alle produkter', 'køkken', 'køkkenudstyr', 'black friday' ];
	}

	/**
	 * Maskinkategorier, hvor tilbehør (filtre, reservedele, låg …) i stedet skal til 'accessory_target'.
	 * Fitbase bruger det til løbebånd m.m.; Kitzhen bruger det ikke endnu.
	 */
	public static function machine_categories(): array {
		return [];
	}

	public static function accessory_pattern(): string {
		return 'reservedel|filter til|kande til|skål til|knivblad til|tilbehør til';
	}

	public static function accessory_target(): string {
		return 'knive-redskaber';
	}

	/**
	 * Hvilke filteregenskaber Attributes skal udtrække fra teksten (se Attributes::extract()).
	 * Fitbase: foldable, incline, max_speed, max_weight, weight_kg. Kitzhen: ingen endnu.
	 */
	public static function attributes(): array {
		return [];
	}

	/** Prisintervaller i filtre og mega-menu: nøgle => [ label, min, max ]. */
	public static function price_bands(): array {
		return [
			'0-250'     => [ 'Under 250 kr', 0, 250 ],
			'250-500'   => [ '250–500 kr', 250, 500 ],
			'500-1000'  => [ '500–1.000 kr', 500, 1000 ],
			'1000-2500' => [ '1.000–2.500 kr', 1000, 2500 ],
			'2500-5000' => [ '2.500–5.000 kr', 2500, 5000 ],
			'5000-'     => [ 'Over 5.000 kr', 5000, PHP_INT_MAX ],
		];
	}

	public static function uncategorized_slug(): string {
		return 'ukategoriseret';
	}
}
