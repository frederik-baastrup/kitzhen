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
		// Rækkefølgen af feed-links antaget ud fra ejerens besked 4. nov. 2026 – bekræftes.
		$defaults = [
			'gourmetshoppen'      => [ 'name' => 'Gourmetshoppen.com', 'url' => "$base&bannerid=56457&feedid=1000" ],
			'bagestaalet'         => [ 'name' => 'Bagestålet.dk', 'url' => "$base&bannerid=79640&feedid=1878" ],
			'cibumic'             => [ 'name' => 'Cibumic.dk', 'url' => "$base&bannerid=46609&feedid=651" ],
			'japanske-kokkeknive' => [ 'name' => 'Japanske kokkeknive', 'url' => "$base&bannerid=80950&feedid=1925" ],
			'kitchenone'          => [ 'name' => 'KitchenOne.dk', 'url' => "$base&bannerid=90982&feedid=2362" ],
			'hvidevareshoppen'    => [ 'name' => 'HvidevareShoppen.dk', 'url' => "$base&bannerid=59757&feedid=1113" ],
			'koege-kafferisteri'  => [ 'name' => 'Køge Kafferisteri', 'url' => "$base&bannerid=58102&feedid=1060" ],
			'barlife'             => [ 'name' => 'Barlife.dk', 'url' => "$base&bannerid=79283&feedid=1862" ],
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
			'ovne-apparater'  => [ 'name' => 'Ovne & apparater', 'match' => 'mikroovn|mikrobølge|miniovn|mini ?ovn|minikøkken|airfryer|air ?fryer|varmluftsfriture|friture|brødrister|toaster|paninigrill|panini|sandwichtoaster|sandwich ?maker|vaffeljern|riskoger|slow ?cooker|langtidskoger|multicooker|trykkoger|sous ?vide|dehydrator|frugttørrer|vakuumpakker|vakuumpakning|\bismaskine|softice|gaskomfur|komfur|kogeplade|induktionsplade|indbygningsovn|\bovn\b|emhætte' ],
			'koekkenmaskiner' => [ 'name' => 'Køkkenmaskiner', 'match' => 'stavblender|blender|smoothie ?maker|røremaskine|køkkenmaskine|foodprocessor|food ?processor|minihakker|hakkemaskine|kødhakker|slow ?juicer|juicer|juicemaskine|saftpresser|citruspresser|spiralizer|pålægsmaskine|rullepølsepresse|pølsemaskine|elektrisk kartoffelskræller|kartoffelskræller,? elektrisk|håndmixer|elpisker' ],
			'gryder-pander'   => [ 'name' => 'Gryder & pander', 'match' => 'gryde|kasserolle|sauterpande|(?<!paella)pande\b|stegepande|wok\b|wokpande|grillpande|blinispande|æbleskivepande|støbejern|dutch ?oven|bradepande|ovnfast fad|låg til' ],
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
	 */
	public static function subcategories(): array {
		return [
			'pizza-bagning' => [
				'pizzaovn'    => [ 'name' => 'Pizzaovn', 'match' => 'pizzaovn|pizza ?ovn|pizza oven' ],
				'pizzasten'   => [ 'name' => 'Pizzasten og bagestål', 'match' => 'pizzasten|pizza ?sten|bagesten|bagest[åa]l|pizzastål' ],
				'broedmaskine'=> [ 'name' => 'Brødmaskine', 'match' => 'brødmaskine|bagemaskine' ],
				'pastamaskine'=> [ 'name' => 'Pastamaskine', 'match' => 'pastamaskine|pasta ?maker' ],
				'bageforme'   => [ 'name' => 'Bageforme', 'match' => 'bageform|springform|kageform|muffinform|brødform' ],
			],
			'kaffe-drikke' => [
				'espressomaskine'      => [ 'name' => 'Espressomaskine', 'match' => 'espressomaskine|espresso ?maskine|espressomachine|fuldautomatisk|portafilter', 'not' => 'kværn|tamper|kande|kop' ],
				'kaffekvaern'          => [ 'name' => 'Kaffekværn', 'match' => 'kaffekværn|kaffe ?kværn|grinder' ],
				'mokkakande'           => [ 'name' => 'Mokkakande', 'match' => 'mokkakande|moka|bialetti' ],
				'stempelkande'         => [ 'name' => 'Stempelkande', 'match' => 'stempelkande|french ?press' ],
				'kedel'                => [ 'name' => 'Kedel', 'match' => 'elkedel|vandkoger|\bkedel\b|kedel til|fløjtekedel' ],
				'sodavandsmaskine'     => [ 'name' => 'Sodavandsmaskine', 'match' => 'sodavandsmaskine|sodastream|kulsyremaskine|aarke' ],
				'isterningmaskine'     => [ 'name' => 'Isterningmaskine', 'match' => 'isterningmaskine|ice ?maker' ],
				'drikkevarekoeleskab'  => [ 'name' => 'Køleskab til drikkevarer', 'match' => 'drikkevarekøleskab|køleskab til drikke|vinkøleskab|ølkøler|minikøleskab|barkøleskab' ],
				'toendekoeler'         => [ 'name' => 'Tøndekøler', 'match' => 'tøndekøler|party ?cooler' ],
			],
			'ovne-apparater' => [
				'mikroovn'    => [ 'name' => 'Mikroovn', 'match' => 'mikroovn|mikrobølge' ],
				'miniovn'     => [ 'name' => 'Miniovn', 'match' => 'miniovn|mini ?ovn|bordovn' ],
				'airfryer'    => [ 'name' => 'Airfryer', 'match' => 'airfryer|air ?fryer|varmluftsfriture' ],
				'broedrister' => [ 'name' => 'Brødrister', 'match' => 'brødrister|toaster', 'not' => 'sandwich' ],
				'paninigrill' => [ 'name' => 'Paninigrill', 'match' => 'paninigrill|panini|sandwichtoaster|kontaktgrill' ],
				'riskoger'    => [ 'name' => 'Riskoger', 'match' => 'riskoger|rice ?cooker' ],
				'slow-cooker' => [ 'name' => 'Slow cooker', 'match' => 'slow ?cooker|langtidskoger|multicooker' ],
				'sous-vide'   => [ 'name' => 'Sous vide', 'match' => 'sous ?vide' ],
				'dehydrator'  => [ 'name' => 'Dehydrator', 'match' => 'dehydrator|frugttørrer|madtørrer' ],
				'vakuumpakker'=> [ 'name' => 'Vakuumpakker', 'match' => 'vakuumpakker|vakuumpakning|vakuummaskine' ],
				'ismaskine'   => [ 'name' => 'Ismaskine', 'match' => '\bismaskine|softice|ice ?cream' ],
				'gaskomfur'   => [ 'name' => 'Gaskomfur', 'match' => 'gaskomfur|gaskogeplade|gasblus' ],
			],
			'koekkenmaskiner' => [
				'stavblender'      => [ 'name' => 'Stavblender', 'match' => 'stavblender|stavmixer|hand ?blender' ],
				'blender'          => [ 'name' => 'Blender', 'match' => 'blender|smoothie', 'not' => 'stav|hand ?blender' ],
				'roeremaskine'     => [ 'name' => 'Røremaskine', 'match' => 'røremaskine|køkkenmaskine|stand ?mixer' ],
				'foodprocessor'    => [ 'name' => 'Foodprocessor', 'match' => 'foodprocessor|food ?processor|minihakker|hakkemaskine' ],
				'slow-juicer'      => [ 'name' => 'Slow juicer', 'match' => 'slow ?juicer|saftpresser' ],
				'juicemaskine'     => [ 'name' => 'Juicemaskine', 'match' => 'juicer|juicemaskine|citruspresser', 'not' => 'slow' ],
				'spiralizer'       => [ 'name' => 'Spiralizer', 'match' => 'spiralizer|spiralskærer' ],
				'palaegsmaskine'   => [ 'name' => 'Pålægsmaskine', 'match' => 'pålægsmaskine|skæremaskine' ],
				'rullepoelsepresse'=> [ 'name' => 'Rullepølsepresse', 'match' => 'rullepølsepresse' ],
			],
			'gryder-pander' => [
				'gryde'          => [ 'name' => 'Gryde', 'match' => 'gryde|kasserolle|dutch ?oven', 'not' => 'grydesæt|gryde ?sæt' ],
				'grydesaet'      => [ 'name' => 'Grydesæt', 'match' => 'grydesæt|gryde ?sæt|\d+ ?dele' ],
				'stegepande'     => [ 'name' => 'Stegepande', 'match' => 'stegepande|sauterpande|(?<!paella|grill|blinis|æbleskive)pande\b', 'not' => 'grill|blinis|æbleskive|wok|paella' ],
				'wokpande'       => [ 'name' => 'Wokpande', 'match' => 'wok' ],
				'grillpande'     => [ 'name' => 'Grillpande', 'match' => 'grillpande' ],
				'blinispande'    => [ 'name' => 'Blinispande', 'match' => 'blinis|pandekagepande|crepe' ],
				'aebleskivepande'=> [ 'name' => 'Æbleskivepande', 'match' => 'æbleskive' ],
			],
			'grill' => [
				'gasgrill'     => [ 'name' => 'Gasgrill', 'match' => 'gasgrill|gas ?grill' ],
				'kulgrill'     => [ 'name' => 'Kulgrill', 'match' => 'kulgrill|kul ?grill|kuglegrill', 'not' => 'kamado' ],
				'kamado-grill' => [ 'name' => 'Kamado grill', 'match' => 'kamado|big green egg' ],
				'roegeovn'     => [ 'name' => 'Røgeovn', 'match' => 'røgeovn|smoker|rygeovn' ],
				'bordgrill'    => [ 'name' => 'Bordgrill', 'match' => 'bordgrill|elgrill|elektrisk grill|raclette' ],
				'gasbraender'  => [ 'name' => 'Gasbrænder', 'match' => 'gasbrænder|paella ?brænder|gasblus' ],
				'paellapande'  => [ 'name' => 'Paellapande', 'match' => 'paella' ],
			],
			'knive-redskaber' => [
				'kokkekniv'       => [ 'name' => 'Kokkekniv', 'match' => 'kokkekniv|chef|santoku|gyuto|nakiri|kokkeknive' ],
				'japansk-kniv'    => [ 'name' => 'Japansk kniv', 'match' => 'japansk|santoku|gyuto|nakiri|petty|damask|shun|global|kai\b' ],
				'steakknive'      => [ 'name' => 'Steakknive', 'match' => 'steakkniv|steak ?kniv|bøfkniv' ],
				'knivsliber'      => [ 'name' => 'Knivsliber', 'match' => 'knivsliber|slibesten|vandsten|strygestål' ],
				'rivejern'        => [ 'name' => 'Rivejern', 'match' => 'rivejern|parmesan|microplane' ],
				'groentsagshakker'=> [ 'name' => 'Grøntsagshakker', 'match' => 'grøntsagshakker|mandolin|hakker', 'not' => 'mini|elektrisk' ],
				'skaerebraet'     => [ 'name' => 'Skærebræt', 'match' => 'skærebræt|skærebrædt|bambus' ],
			],
			'servering' => [
				'vinglas'      => [ 'name' => 'Vinglas', 'match' => 'vinglas|rødvinsglas|hvidvinsglas|champagneglas|bordeaux|bourgogne' ],
				'tallerkener'  => [ 'name' => 'Tallerkener', 'match' => 'tallerken|pastatallerken|dyb tallerken' ],
				'spisestel'    => [ 'name' => 'Spisestel', 'match' => '\bstel\b|julestel|spisestel|service' ],
				'ostesaet'     => [ 'name' => 'Ostesæt', 'match' => 'ostesæt|ostebræt|ostekniv' ],
				'karafler'     => [ 'name' => 'Karafler', 'match' => 'karaffel|dekanter|kande\b' ],
			],
		];
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
