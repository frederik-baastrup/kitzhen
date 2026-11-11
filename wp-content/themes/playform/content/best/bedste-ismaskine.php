<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-ismaskine/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-ismaskine',
	'date'     => '2023-06-21 12:52:51',
	'title'    => 'Ismaskine: Vores bud på de 5 bedste',
	'excerpt'  => 'Med en ismaskine laver du hjemmelavet is, sorbet og frozen yoghurt. Her er vores bud på de 5 bedste ismaskiner fra de butikker, vi samarbejder med.',
	'more_cat' => 'ismaskine',
	'intro'    => <<<'HTML'
<p>Hjemmelavet is er nemmere, end mange tror. En ismaskine rører isblandingen, mens den fryser, så den bliver cremet i stedet for at fryse til en isklump. Du bestemmer selv smagen, sødmen og ingredienserne – fra klassisk vaniljeis til sorbet og frozen yoghurt.</p>
<p>Herunder er vores bud på de 5 bedste ismaskiner fra de butikker, vi samarbejder med – med og uden kompressor.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '9312432030076',
			'price'   => 2499,
			'name'    => 'Sage The Smart Scoop BCI600',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Selvkølende ismaskine med 12 hårdhedsgrader – fra blød sorbet til fast is på omkring en time, uden at fryse noget på forhånd.',
			'why'     => <<<'HTML'
<p>Sage The Smart Scoop er til dig, der vil have styr på konsistensen. Du vælger mellem 12 hårdhedsgrader, så du rammer præcis den is, du har lyst til: let sorbet, frozen yoghurt, blød gelato eller klassisk fast flødeis. Maskinen køler selv, så der er ingen fryseskål at huske dagen før, og på omkring en time er desserten klar.</p>
<p>Vil du ikke styre det hele selv, er der fire færdige programmer. Maskinen kan køle blandingen ned, før den går i gang, og den bipper, når det er tid til at komme chokolade, nødder eller frugt i. Er du ikke klar til at servere, holder den isen kold og rører i den i op til tre timer.</p>
<p>Kabinettet er i rustfrit stål, og skål og røreblad kan tages ud, så rengøringen er nem.</p>
HTML,
			'good'    => [ 'Dig, der vil vælge hårdheden selv', 'Is, gelato, sorbet og frozen yoghurt', 'Middage, hvor isen skal vente' ],
			'less'    => [ 'Store portioner til mange gæster', 'Dig, der kun laver is et par gange om året' ],
		],
		[
			'ean'     => '5413184909314',
			'price'   => 1399,
			'name'    => 'KitchenAid 5KSMICM ismaskine',
			'role'    => 'Bedst til KitchenAid',
			'reviews' => [],
			'verdict' => 'Isskål på 1,9 liter, der gør din KitchenAid-røremaskine til en ismaskine – cremet is på under 30 minutter.',
			'why'     => <<<'HTML'
<p>Har du allerede en KitchenAid-røremaskine, er 5KSMICM den nemmeste vej til hjemmelavet is. Isskålen sættes på maskinen, og røreredskabet drejer rundt og skraber siderne, så isen fryser jævnt og bliver tyk og cremet. På under 30 minutter har du is eller sorbet klar.</p>
<p>Skålen rummer 1,9 liter, så der er nok til hele familien eller børnefødselsdagen. Prøv klassikere som vanilje, chokolade og jordbær, eller gå på opdagelse med lakrids, basilikum eller safran. Den nyeste udgave har nye håndtag og en ny samling, så skålen er hurtigere at sætte på.</p>
<p>Husk at lægge skålen i fryseren 16 timer før brug. Tilbehøret fylder kun lidt i skabet, og KitchenAid giver 2 års garanti.</p>
HTML,
			'good'    => [ 'Dig med en KitchenAid-røremaskine', 'Store portioner på 1,9 liter', 'Dig med lidt plads i skabene' ],
			'less'    => [ 'Dig uden KitchenAid-røremaskine', 'Spontan is – skålen skal fryses 16 timer' ],
		],
		[
			'ean'     => '7350101117743',
			'price'   => 1099,
			'name'    => 'NOD ismaskine 1,5 liter',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Selvkølende ismaskine med kompressor, 1,5 liter skål i rustfrit stål og Keep-Cool, der holder isen kold.',
			'why'     => <<<'HTML'
<p>NODs ismaskine er til dig, der vil have en ismaskine med egen kompressor uden at gå helt til tops i pris. Maskinen køler selv, så du kan lave is, når du har lyst. Med 1,5 liter er der flere portioner ad gangen – nok til en familie efter aftensmaden.</p>
<p>Når isen er færdig, og kniven ikke kan røre mere, slår Keep-Cool-funktionen til og holder isen kold. Så kan du spise den med det samme, lade den stå lidt i maskinen eller sætte den i fryseren for en fastere is. Vil du lave flere slags efter hinanden, kan du købe en ekstra indsats.</p>
<p>Indsatsen i rustfrit stål kan tages ud og tåler opvaskemaskine. Kniven vaskes i hånden, og låget tørres af med en fugtig klud. NOD giver 3 års garanti.</p>
HTML,
			'good'    => [ 'Familier', 'Dig, der vil have kompressor til en lavere pris', 'Is uden forfrysning' ],
			'less'    => [ 'Små køkkener – den vejer 9,9 kg' ],
		],
		[
			'ean'     => '4008146031748',
			'price'   => 2576,
			'name'    => 'Severin ismaskine med kompressor og 2 isbeholdere',
			'role'    => 'To beholdere',
			'reviews' => [],
			'verdict' => 'Indbygget kompressor og to beholdere på 2 liter hver – is på cirka 30 minutter uden at fryse noget på forhånd.',
			'why'     => <<<'HTML'
<p>Severins ismaskine er til dig, der vil lave to slags is samme dag. Den indbyggede kompressor køler selv, og der følger to isbeholdere med på 2 liter hver. Mens den ene portion står i fryseren, kan den næste røres færdig. Du skal ikke huske at fryse noget dagen før.</p>
<p>På cirka 30 minutter har du cremet is med gelato-fornemmelse, men maskinen klarer også sorbet og frozen yoghurt. Den har desuden en funktion, der både varmer og køler, så du kan lave din egen yoghurt fra bunden.</p>
<p>Kabinettet er i rustfrit stål og måler 29 × 43 cm og 22,5 cm i højden. Den vejer 13,31 kg, så den har det bedst med en fast plads på bordet. Severin giver 2 års garanti.</p>
HTML,
			'good'    => [ 'Dig, der vil lave to slags is i træk', 'Is, sorbet, frozen yoghurt og yoghurt', 'Store portioner' ],
			'less'    => [ 'Små køkkener – den vejer 13,31 kg' ],
		],
		[
			'ean'     => '7391091858148',
			'price'   => 399,
			'name'    => 'Champion ismaskine 1,5 liter',
			'role'    => 'Billig med fryseskål',
			'reviews' => [],
			'verdict' => 'Enkel ismaskine med aftagelig fryseskål på 1,5 liter – is eller sorbet på cirka 15–30 minutter.',
			'why'     => <<<'HTML'
<p>Champions ismaskine er den nemme og billige vej ind i hjemmelavet is. Den har ingen kompressor, men en aftagelig fryseskål, der skal stå i fryseren i mindst 8 timer. Når skålen er gennemfrossen, er isen klar på cirka 15–30 minutter, afhængigt af opskriften.</p>
<p>Skålen rummer 1,5 liter, så der er nok til familien eller et par venner. Du bestemmer selv, om det skal være frisk sorbet, cremet yoghurtis eller klassisk flødeis med chokolade eller vanilje. Et opskriftshæfte følger med, så du har idéer at gå i gang med.</p>
<p>Maskinen vejer kun 3 kg og er lille nok til at stå i skabet, når den ikke er i brug. Sammenlignet med kompressormodellerne i guiden kræver den lidt planlægning, men den fylder og koster langt mindre.</p>
HTML,
			'good'    => [ 'Dig, der laver is en gang imellem', 'Små køkkener', 'Opskriftshæfte med' ],
			'less'    => [ 'Spontan is – skålen skal fryses mindst 8 timer', 'Én portion ad gangen' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en ismaskine</h2>
<h3>Med kompressor eller fryseskål?</h3>
<p>En ismaskine med kompressor fryser selv og kan lave is igen og igen. En maskine med fryseskål er billigere, men skålen skal i fryseren i mindst et døgn før brug, så du kan kun lave én portion ad gangen.</p>
<h3>Kapacitet</h3>
<p>1–1,5 liter er nok til en familie. Isblandingen udvider sig, når den fryser, så fyld aldrig skålen helt.</p>
<h3>Tips til cremet is</h3>
<p>Brug fløde og æggeblommer til den cremeste is, og lad isblandingen være helt kold, før den kommer i maskinen. Kom isen i fryseren en times tid efter, så den bliver fast nok til at kugle.</p>
<p>Se alle <a href="/ovne-apparater/ismaskine/">ismaskiner</a>, eller se vores guide til <a href="/bedste-isterningmaskine/">isterningmaskiner</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvor lang tid tager det at lave is i en ismaskine?', 'Typisk 20–40 minutter, afhængigt af maskinen og blandingen.' ],
		[ 'Kan man lave sorbet i en ismaskine?', 'Ja. Sorbet laves af frugt, sukker og vand og bliver ofte endnu bedre i en ismaskine.' ],
		[ 'Skal fryseskålen i fryseren før brug?', 'Ja, hvis maskinen ikke har kompressor. Typisk mindst 12–24 timer.' ],
	],
];
