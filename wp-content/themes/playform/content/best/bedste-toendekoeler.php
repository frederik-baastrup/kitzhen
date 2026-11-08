<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/bedste-toendekoeler/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-toendekoeler',
	'title'    => 'Tøndekøler: Vores bud på de 3 bedste',
	'excerpt'  => 'En tøndekøler eller party cooler holder øl og sodavand kolde lige der, hvor festen er. Her er de 3 tøndekølere, vi kan anbefale fra de butikker, vi samarbejder med.',
	'more_cat' => 'toendekoeler',
	'intro'    => <<<'HTML'
<p>En tøndekøler – eller party cooler – er et lille køleskab formet som en tønde eller kasse, der kan stå i stuen, udestuen, på terrassen eller i hobbyrummet. Du slipper for at gå frem og tilbage til køleskabet, og drikkene er kolde hele aftenen.</p>
<p>Herunder er de tre tøndekølere, vi kan anbefale fra de butikker, vi samarbejder med: to party coolers til hjemmet og en rund tøndekøler til bar og events.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7350101118276',
			'price'   => 2690,
			'name'    => 'NOD Party Cooler 50 liter',
			'role'    => 'Bedst til fest',
			'reviews' => [],
			'verdict' => '50 liter kølet fra 0 til 16 °C på hjul – og så støjsvag (43 dB), at den kan stå i stuen.',
			'why'     => <<<'HTML'
<p>NOD Party Cooler 50 liter er til dig, der holder fest, og som er træt af at løbe frem og tilbage til et overfyldt køleskab. Stil den i stuen, udestuen eller hobbyrummet, så har gæsterne de kolde drikke lige ved hånden hele aftenen. Med 43 dB er den så stille, at den ikke forstyrrer samtalen.</p>
<p>Du indstiller selv temperaturen fra 0 til 16 °C – koldt til øl og sodavand, lidt mildere til vinen. Den kan også holde salat og frugtsalat kølige. Trådkurvene gør det let at holde orden i indholdet.</p>
<p>Hjulene gør, at du let kan rulle den derhen, hvor festen er. Lad den stå oprejst i 4 timer, før du sætter stikket i, og brug den indendørs.</p>
HTML,
			'good'    => [ 'Fester og store familiesammenkomster', 'Øl, sodavand og vin', 'Stuen og udestuen' ],
			'less'    => [ 'Må ikke stå ude i regn og blæst', 'Vejer 21,8 kg' ],
		],
		[
			'ean'     => '7350101118085',
			'price'   => 1990,
			'name'    => 'NOD Party Cooler 30 liter',
			'role'    => 'Bedst kompakt',
			'reviews' => [],
			'verdict' => 'Kompakt 30 liters køler på hjul med 0–16 °C, 43 dB og 3 års garanti.',
			'why'     => <<<'HTML'
<p>NOD Party Cooler 30 liter er til dig, der vil have kolde drikke tæt på uden at fylde stuen op. Den er kun 62 cm høj, men 30 liter rummer mere, end man tror – nok til filmaftenen, middagen eller festen i kælderen. Med 43 dB summer den stille i baggrunden.</p>
<p>Temperaturen justeres fra 0 til 16 °C, så den kan køle sodavand, øl og vin og holde salater friske til middagsgæsterne. Med de medfølgende trådkurve er det nemt at holde styr på, hvad der ligger hvor.</p>
<p>Hjulene gør den let at flytte fra stue til udestue, og du får 3 års garanti. Lad den stå oprejst i mindst 4 timer, før den tilsluttes, og hold den væk fra regn og fugt.</p>
HTML,
			'good'    => [ 'Stuen og udestuen', 'Mindre fester og hyggeaftener', 'Dig, der vil have garanti' ],
			'less'    => [ 'Store fester', 'Må ikke stå ude i regn og fugt' ],
		],
		[
			'ean'     => '5704704010932',
			'price'   => 4259,
			'name'    => 'Scandomestic ST 66 tøndekøler 40 liter',
			'role'    => 'Bedst til bar og events',
			'reviews' => [],
			'verdict' => 'Rund tøndekøler på 40 liter, der holder drikkene iskolde og fanger blikket til fester, events og i baren.',
			'why'     => <<<'HTML'
<p>Scandomestic ST 66 er tøndekøleren til dig, der vil have kolde drikke med stil. Den har den klassiske, runde tøndeform, så den bliver et blikfang, uanset om den står til festen, på eventet, i baren eller i loungen.</p>
<p>Med 40 liter er der plads til masser af øl, sodavand og andre drikke, så gæsterne kan forsyne sig selv. Køleren er mobil og lavet til at servere iskolde drikke der, hvor folk er – i stedet for at nogen skal løbe frem og tilbage til køleskabet.</p>
<p>Hvor NOD-kølerne er bygget til stuen og udestuen, er ST 66 et oplagt valg, hvis du har en hjemmebar, holder mange arrangementer eller vil have en køler, der også er en del af stemningen.</p>
HTML,
			'good'    => [ 'Hjemmebar og lounge', 'Fester og events', 'Dig, der vil have den klassiske tøndeform' ],
			'less'    => [ 'Dig, der bare vil have en enkel køler til hyggeaftener' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en tøndekøler</h2>
<h3>Størrelse</h3>
<p>30 liter rækker til en hyggeaften, 40–50 liter til en fest.</p>
<h3>Støj</h3>
<p>Skal køleren stå i stuen, så kig efter støjniveauet i dB.</p>
<h3>Ude og inde</h3>
<p>Tjek, om køleren må stå udendørs, og stil den i skygge, så den ikke skal arbejde for hårdt.</p>
<p>Se også vores guide til <a href="/bedste-koeleskab-til-drikkevarer/">køleskab til drikkevarer</a> og <a href="/bedste-isterningmaskine/">isterningmaskiner</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvad er en tøndekøler?', 'Et lille køleskab til drikkevarer, ofte formet som en tønde, der kan stå, hvor festen er.' ],
		[ 'Kan en tøndekøler stå udenfor?', 'Det afhænger af modellen. Tjek producentens anvisning, og stil den i skygge.' ],
		[ 'Larmer en party cooler?', 'De bedste er støjsvage – omkring 40–45 dB.' ],
	],
];
