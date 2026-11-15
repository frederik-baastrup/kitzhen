<?php
/**
 * Ny købsguide (15. nov. 2026) ud fra søgeordet "støbejernsgryde". Gryder i støbejern, også emaljerede – stegepander har deres egen guide.
 * Fakta kun fra butikkernes produktdata. Ingen påstand om egen afprøvning.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-stoebejernsgryde',
	'date'     => '2026-11-15 12:00:00',
	'keyword'  => 'støbejernsgryde',
	'title'    => 'Støbejernsgryde: Vores bud på de 5 bedste',
	'excerpt'  => 'En støbejernsgryde gør gryderetten mør, brødet sprødt og kan stå på bordet, når maden er klar. Her er vores bud på de 5 bedste støbejernsgryder fra de butikker, vi samarbejder med – fra den billige emaljerede gryde til den franske klassiker og gryden til bålet.',
	'more_cat' => 'stoebejernsgryde',
	'intro'    => <<<'HTML'
<p>Der er en grund til, at bedstemors støbejernsgryde stadig bliver brugt. Det tunge jern bliver varmt i hele gryden og slipper ikke varmen igen, så en gullasch, en oksesteg eller en bønnegryde kan simre i timevis ved lav varme uden at brænde på. Sæt den i ovnen med låg på, og du har samtidig den bedste form til et hjemmebagt grydebrød med knasende skorpe.</p>
<p>Herunder er vores bud på de 5 bedste støbejernsgryder lige nu fra de butikker, vi samarbejder med. Vi har valgt både emaljerede gryder til køkkenet og en sort gryde, der også kan komme med på grillen og over bålet – og i størrelser fra den lille husstand til den store familiemiddag. Nederst får du en købsguide til størrelse, emalje, induktion og pleje.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '8721022043500',
			'price'   => 1229,
			'name'    => 'Combekk støbejernsgryde med låg 28 cm, 5,3 liter',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Rummelig støbejernsgryde med låg på 28 cm og 5,3 liter – stor nok til familiens gryderet og til retter, der skal i ovnen.',
			'why'     => <<<'HTML'
<p>Combekk-gryden rammer den størrelse, de fleste ender med at savne, hvis de køber for småt. Med 5,3 liter og en diameter på 28 cm er der plads til en hel portion chili con carne, en kylling i stykker eller en stor omgang kødsovs, der skal fryses ned i portioner bagefter.</p>
<p>Gryden er lavet til langtidskogte retter på komfuret og til ovnretter, hvor låget holder fugten inde. Den klassiske form med det robuste ydre gør, at den passer lige så godt på spisebordet som på blusset – og den kirsebærrøde farve giver lidt liv til køkkenet.</p>
HTML,
			'good'    => [ 'Familier på fire eller flere', 'Gryderetter og ovnretter' ],
			'less'    => [ 'Små kogezoner og små husstande' ],
		],
		[
			'ean'     => '7350101112625',
			'price'   => 349,
			'name'    => 'Mareld emaljeret støbejernsgryde 5 liter, mat sort',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Emaljeret støbejernsgryde på 5 liter, der fordeler varmen jævnt og holder maden lun – til en meget lav pris.',
			'why'     => <<<'HTML'
<p>Har du længe ønsket dig en støbejernsgryde, men tøvet på grund af prisen, er Mareld et godt sted at begynde. Du får 5 liter emaljeret støbejern, og det er netop emaljen, der gør gryden let at gå til: den skal ikke indbrændes, og du kan roligt koge tomatsauce og vinsky i den.</p>
<p>Støbejernet spreder varmen ud i hele gryden, så maden ikke brænder fast i midten, mens kanterne stadig er kolde. Og når du slukker for blusset, bliver retten ved med at være varm et godt stykke tid – rart, når ikke alle kommer til bords på samme tid. Den matsorte overflade er nem at have stående fremme.</p>
HTML,
			'good'    => [ 'Første støbejernsgryde', 'Dig, der vil have meget gryde for pengene' ],
			'less'    => [ 'Dig, der vil have et kendt designmærke på bordet' ],
		],
		[
			'ean'     => '3272341024060',
			'price'   => 2449,
			'name'    => 'Staub La Cocotte rund 24 cm, 3,7 liter, kirsebærrød',
			'role'    => 'Bedste klassiker',
			'reviews' => [],
			'verdict' => 'Den franske cocotte, der er bygget til boeuf bourguignon, fyldig kødsauce og runde grydebrød med sprød skorpe.',
			'why'     => <<<'HTML'
<p>Staub La Cocotte er gryden, mange kokke drømmer om at eje. Den runde model på 24 cm er et godt mellemstørrelsesvalg: stor nok til en klassisk boeuf bourguignon eller en kødsauce, der skal simre hele eftermiddagen, men ikke så stor, at den bliver uhåndterlig til to–fire personer.</p>
<p>Den runde form gør den også oplagt til brødbagning. Forvarm gryden i ovnen, læg dejen i, og sæt låget på – så får du et rundt grydebrød med en sprød skorpe, der minder om bagerens. Den kirsebærrøde farve gør, at gryden sagtens kan bæres direkte fra ovnen til bordet.</p>
HTML,
			'good'    => [ 'Langtidsretter og grydebrød', 'Dig, der vil have en gryde for livet' ],
			'less'    => [ 'Dig med et stramt budget' ],
		],
		[
			'ean'     => '4250435703502',
			'price'   => 499,
			'name'    => 'Petromax Essential FT6 støbejernsgryde',
			'role'    => 'Bedst til grill og bål',
			'reviews' => [],
			'verdict' => 'Alsidig støbejernsgryde til komfur, ovn, grill og åben ild – stor nok til gryderetter og brødbagning.',
			'why'     => <<<'HTML'
<p>Petromax Essential FT6 er gryden til dig, der ikke kun laver mad inden døre. Den kan stå på komfuret og i ovnen, men også på grillen eller direkte over åben ild, så du kan lave chili over bålet i sommerhuset eller bage brød i udekøkkenet.</p>
<p>Størrelsen er valgt, så den rummer solide gryderetter og et brød, men stadig er til at bære med på tur, i haven eller hen til bålstedet. Kan du lide at lave mad udendørs, får du her én gryde, der dækker både hverdagen i køkkenet og weekendens projekter ude.</p>
HTML,
			'good'    => [ 'Bål, grill og udekøkken', 'Brødbagning' ],
			'less'    => [ 'Dig, der kun laver mad inden døre og vil have en gryde i farver' ],
		],
		[
			'ean'     => '6424002020332',
			'price'   => 699,
			'name'    => 'Fiskars Folken støbejernsgryde med låg 6 liter',
			'role'    => 'Bedst til store portioner',
			'reviews' => [],
			'verdict' => 'Stor støbejernsgryde med låg på 6 liter til søndagssteg, langtidsretter og middage med mange gæster.',
			'why'     => <<<'HTML'
<p>Inviterer du ofte familie og venner, eller laver du mad til hele ugen på én gang, er 6 liter en befriende størrelse. Fiskars Folken har plads til en hel søndagssteg med grøntsager omkring, en stor gryde suppe eller en langtidsret, der skal række til mange.</p>
<p>Med låget på holder gryden på både varme og saft, og når maden er færdig, kan du sætte den midt på bordet og lade alle tage selv. Det er gryden til de store middage, hvor stemningen er lige så vigtig som maden.</p>
HTML,
			'good'    => [ 'Store familier og gæster', 'Madlavning til flere dage' ],
			'less'    => [ 'Dig, der vil have en let gryde', 'Små husstande' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du den rigtige støbejernsgryde</h2>
<p>En god støbejernsgryde kan holde i mange år, så det betaler sig at vælge rigtigt første gang. Tænk over, hvor mange I er, hvad du helst laver, og om gryden kun skal bruges i køkkenet eller også udendørs.</p>
<h3>Størrelse: liter og diameter</h3>
<p>Til en eller to personer er 2–3 liter nok til de fleste retter. En familie på fire får mest ud af 4–5 liter, og laver du store portioner eller madpakker til fryseren, så gå op i 6 liter eller mere. Tjek også diameteren mod dit største kogefelt: gryden bliver jævnest varm, når bunden passer til feltet. Husk, at en stor støbejernsgryde er tung, når den er fyldt – og at den skal kunne være i ovnen med låg på.</p>
<h3>Emaljeret eller rå støbejernsgryde?</h3>
<p>En emaljeret støbejernsgryde har et glasagtigt lag på indersiden og ofte også udenpå. Den skal ikke indbrændes, ruster ikke så let og tåler syrlige råvarer som tomat, vin og citron. Til gengæld skal du passe på emaljen: undgå at tabe gryden og at varme den op tom ved høj varme. En rå, sort støbejernsgryde skal plejes med olie, men den tåler hårdhændet brug, kan stå over åben ild og bliver mere slip-let med årene.</p>
<h3>Rund eller oval?</h3>
<p>Den runde gryde er den mest alsidige. Den passer bedst til kogepladen og er oplagt til gryderetter, supper og brød. En oval gryde giver plads til en hel kylling eller en aflang steg, men den bliver ikke lige så jævnt varm på et rundt kogefelt og er mest til ovnen.</p>
<h3>Støbejernsgryde til induktion</h3>
<p>Støbejern er magnetisk, så både emaljerede og rå støbejernsgryder virker på induktion. Varm gryden langsomt op på middel varme, og løft den i stedet for at skubbe den hen over glaspladen. Støbejern skal ikke have fuld styrke for at blive varm – det holder på varmen, når den først er der.</p>
<h2>Pleje af din støbejernsgryde</h2>
<p>Lad gryden køle lidt af, før den kommer under vandhanen, så den ikke får et chok. Vask den emaljerede gryde med varmt vand, en blød børste og lidt opvaskemiddel; sidder der noget fast, så lad den stå i blød. Den rå gryde skylles i varmt vand, tørres helt og får et tyndt lag olie, før den kommer på plads. Ingen af dem har godt af opvaskemaskinen i længden.</p>
<p>Se alle <a href="/gryder-pander/stoebejernsgryde/">støbejernsgryder</a> med aktuelle priser. Skal du også bruge en pande i samme materiale, så se vores bud på den <a href="/bedste-stoebejernspande/">bedste støbejernspande</a>. Leder du efter en gryde i stål til hverdagen, kan du kigge i vores guides til <a href="/bedste-tykbundet-gryde/">tykbundet gryde</a> og <a href="/bedste-suppegryde/">suppegryde</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvilken størrelse støbejernsgryde skal jeg vælge?', 'Til en familie på fire er 4–5 liter et godt valg. Bor du alene eller to, er 2–3 liter nok, mens 6 liter eller mere passer til store portioner og gæster.' ],
		[ 'Kan en støbejernsgryde bruges på induktion?', 'Ja. Støbejern er magnetisk og virker på induktion, både med og uden emalje. Varm gryden langsomt op, og løft den frem for at skubbe den.' ],
		[ 'Hvad er forskellen på en emaljeret og en rå støbejernsgryde?', 'Den emaljerede støbejernsgryde skal ikke indbrændes og tåler syrlige retter. Den rå skal plejes med olie, men kan bruges over åben ild og bliver mere slip-let med tiden.' ],
		[ 'Kan man bage brød i en støbejernsgryde?', 'Ja, det er en af de bedste måder. Forvarm gryden med låg i ovnen, læg dejen i, og bag med låg den første del af tiden. Så får brødet en sprød skorpe.' ],
		[ 'Må en støbejernsgryde komme i opvaskemaskinen?', 'Det er bedst at vaske den i hånden. En rå gryde mister sin olie og kan ruste, og emaljen holder sig pænest uden opvaskemaskine.' ],
	],
];
