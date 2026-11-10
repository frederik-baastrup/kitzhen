<?php
/**
 * Ny købsguide (10. nov. 2026) ud fra søgeordet "vinkøleskab". Kun vinkøleskabe – køleskabe til dåser og øl har
 * deres egen guide (bedste-koeleskab-til-drikkevarer). Fakta kun fra butikkernes produktdata og producenternes egne sider.
 * Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-vinkoeleskab',
	'date'     => '2026-11-10 10:00:00',
	'keyword'  => 'vinkøleskab',
	'title'    => 'Vinkøleskab: Vores bud på de 5 bedste vinkøleskabe',
	'excerpt'  => 'Et vinkøleskab giver vinen en stabil temperatur, ro og mørke – og dig vinen klar til servering. Her er vores bud på de 5 bedste vinkøleskabe fra de butikker, vi samarbejder med: små og store, med én eller to zoner, fritstående og til indbygning.',
	'more_cat' => 'vinkoeleskab',
	'intro'    => <<<'HTML'
<p>Vin har det bedst, når den får lov at ligge i fred: samme temperatur hele tiden, ingen sol og ingen rystelser. Det almindelige køleskab er for koldt til rødvinen, og stuen er for varm. Et vinkøleskab løser begge dele – og så har du altid en flaske hvidvin, der er klar til at blive skænket.</p>
<p>Herunder er vores bud på de 5 bedste vinkøleskabe lige nu. Vi har spredt valgene over størrelser og prisklasser: et lille skab til de første 12 flasker, et kompakt skab med to zoner, et større skab til samlingen, et smalt skab til indbygning under bordpladen og et stort skab til højskabet i køkkenet. Nederst finder du en købsguide til zoner, placering og støj.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4038437006452',
			'price'   => 3990,
			'name'    => 'Caso WineComfort 24 vinkøleskab',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Kompakt vinkøleskab med to temperaturzoner og plads til 24 flasker – rødvin og hvidvin ved hver sin temperatur.',
			'why'     => <<<'HTML'
<p>Caso WineComfort 24 giver dig det, mange først opdager, at de mangler: to zoner. Du stiller temperaturen for hver zone for sig på touchpanelet, så rødvinen og hvidvinen kan ligge ved hver sin temperatur i samme skab. Hele skabet kan indstilles fra 5 til 20 grader.</p>
<p>Der er plads til op til 24 flasker på fem træhylder, som kan tages ud. Glasdøren har tre lag isolerende glas med UV-filter, der skærmer vinen mod lys, og døren kan låses. Køleskabet køler med kompressor og står på fødder, der dæmper vibrationer. Med en bredde på knap 40 cm og en højde på godt 82 cm finder det plads de fleste steder.</p>
HTML,
			'good'    => [ 'Dig, der drikker både rød og hvid', 'Lejligheden og det mindre køkken' ],
			'less'    => [ 'Dig, der vil bygge skabet ind' ],
		],
		[
			'ean'     => '4038437006223',
			'price'   => 3290,
			'name'    => 'Caso WineSafe 12 vinkøleskab',
			'role'    => 'Bedst lille',
			'reviews' => [],
			'verdict' => 'Lille vinkøleskab til 12 flasker med kompressor, UV-beskyttet glasdør og udtrækshylder i træ.',
			'why'     => <<<'HTML'
<p>Caso WineSafe 12 er et godt første vinkøleskab. Det er kun godt 51 cm højt og knap 40 cm bredt, så det kan stå på et skænk, i et hjørne af køkkenet eller under et bord. Der er plads til 12 flasker – nok til ugens vin og et par flasker, der skal gemmes til en særlig aften.</p>
<p>Skabet har én zone, som du indstiller elektronisk fra 5 til 20 grader. Det køler med kompressor og ligger omkring 41 dB. Døren har tre lag glas med UV-filter og kan låses, og to af de tre træhylder kører ud på kuglelejer, så du nemt finder den rigtige flaske. LED-lyset indeni kan slukkes.</p>
HTML,
			'good'    => [ 'Dit første vinkøleskab', 'Lidt plads' ],
			'less'    => [ 'Dig, der vil have rød og hvid ved hver sin temperatur' ],
		],
		[
			'ean'     => '7330066134313',
			'price'   => 5395,
			'name'    => 'Cavin Polar Collection 51 Black',
			'role'    => 'Bedst til samlingen',
			'reviews' => [],
			'verdict' => 'Fritstående vinkøleskab med to zoner til 37 flasker – med træhylder og en hylde, hvor du kan vise flaskerne frem.',
			'why'     => <<<'HTML'
<p>Er din samling vokset ud af det lille skab, er Cavin Polar Collection 51 et naturligt næste skridt. Der er plads til 37 flasker i to zoner, som du indstiller hver for sig mellem 4 og 22 grader. Så kan hvidvinen være kold, mens rødvinen ligger ved kældertemperatur.</p>
<p>Skabet har seks hylder i træ og en præsentationshylde, hvor flaskerne står med etiketten frem. Glasdøren er UV-beskyttet, lyset indeni er hvidt LED, og støjniveauet er 39 dB. Det er fritstående og 54 cm bredt – samme bredde som mange køkkenskabe – og under 85 cm højt. Elektronikken og det digitale display gør det let at holde øje med begge zoner.</p>
HTML,
			'good'    => [ 'Dig med en voksende samling', 'Både rødvin og hvidvin', 'Spisestuen og det åbne køkken' ],
			'less'    => [ 'Indbygning i køkkenet' ],
		],
		[
			'ean'     => '4242005265480',
			'price'   => 7790,
			'name'    => 'Bosch Serie 6 KUW20VHF0 vinkøleskab',
			'role'    => 'Bedst til indbygning',
			'reviews' => [],
			'verdict' => 'Smalt vinkøleskab til indbygning under bordpladen – kun 30 cm bredt, med plads til 21 flasker og lyd på 38 dB(A).',
			'why'     => <<<'HTML'
<p>Vil du have vinen med ind i selve køkkenet, er Bosch KUW20VHF0 bygget til det. Det sidder under bordpladen og passer i en niche på kun 30 cm, så det kan finde plads ved siden af opvaskemaskinen eller for enden af et skabsforløb. Alligevel er der plads til 21 flasker.</p>
<p>Skabet har én zone, som du stiller fra 5 til 20 grader. Glasdøren har tre lag glas med UV-filter, kan hængsles om og har lås. LED-lyset kan dæmpes og har en præsentationsindstilling, der fremhæver flaskerne. Med 38 dB(A) er det et af de mere stille skabe her – fint i et åbent køkken.</p>
HTML,
			'good'    => [ 'Det nye køkken eller køkkenrenoveringen', 'Åbne køkkener, hvor støj betyder noget' ],
			'less'    => [ 'Dig, der vil have to zoner', 'Dig, der vil have skabet stående frit' ],
		],
		[
			'ean'     => '9005382278956',
			'price'   => 32499,
			'name'    => 'Liebherr Vinidor EWTdf 3553 vinkøleskab',
			'role'    => 'Bedst til højskab',
			'reviews' => [],
			'verdict' => 'Integreret vinkøleskab til højskabet med to zoner, op til 80 flasker og kun 32 dB(A).',
			'why'     => <<<'HTML'
<p>Liebherr EWTdf 3553 er til dig, der vil give vinen en fast plads i køkkenet. Skabet bygges ind i et højskab på cirka 178 cm og får samme front som resten af køkkenet. Der er plads til op til 80 flasker i to zoner, som hver har sit eget display og kan stilles fra 5 til 20 grader.</p>
<p>Otte af hylderne er i træ og kører ud på teleskopskinner, så du kan se hele rækken. Glasset har tre lag med UV-beskyttelse, og lyset kan dæmpes. Skabet larmer kun 32 dB(A), har døralarm og børnesikring, og døren kan hængsles om.</p>
HTML,
			'good'    => [ 'Den store samling', 'Køkkener med højskabe', 'Dig, der vil have et stille skab' ],
			'less'    => [ 'Dig, der leder efter et fritstående skab', 'Mindre budgetter' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du det rigtige vinkøleskab</h2>
<p>Et vinkøleskab skal først og fremmest holde en stabil temperatur. Derefter handler valget om, hvor mange flasker du har, hvilken vin du drikker, og hvor skabet skal stå.</p>
<h3>1 eller 2 zoner</h3>
<p>Et vinkøleskab med én zone har samme temperatur i hele skabet. Det er nok, hvis du mest drikker én slags vin, eller hvis skabet bruges til at lagre vin ved en fast kældertemperatur. Med to zoner kan du have hvidvin og bobler koldt i den ene del og rødvin lidt varmere i den anden – så er begge klar til at blive skænket. Drikker du både rød og hvid, er to zoner pengene værd.</p>
<h3>Fritstående eller til indbygning</h3>
<p>Et fritstående vinkøleskab skal have luft omkring sig, fordi det afgiver varme bagud eller til siderne. Et skab til indbygning har ventilation i fronten og kan sidde under bordpladen eller i et højskab, så det glider ind i køkkenet. Sæt aldrig et fritstående skab ind i et skab – det kan ikke komme af med varmen.</p>
<h3>Små vinkøleskabe</h3>
<p>Har du ikke meget plads, findes der små vinkøleskabe til 6–12 flasker, som kan stå på et skænk eller en bordplade. De er et godt sted at starte. Køb gerne lidt større, end du tror, du har brug for – samlingen vokser som regel.</p>
<h3>Støj, lys og placering</h3>
<p>Skal skabet stå i stuen eller i et åbent køkken, så kig på støjniveauet i dB. Kig også efter glas med UV-filter, der beskytter vinen mod lys. Stil skabet væk fra direkte sol, radiator og komfur, og husk, at et vinkøleskab ikke kan køle meget ned, hvis rummet er meget varmt.</p>
<h3>Vinkøleskab eller køleskab til drikkevarer?</h3>
<p>Et vinkøleskab holder en stabil temperatur og har hylder, hvor flaskerne ligger ned. Skal du mest have kolde øl og sodavand, er et køleskab til drikkevarer et bedre valg – se vores guide til <a href="/bedste-koeleskab-til-drikkevarer/">køleskab til drikkevarer</a>.</p>
<p>Se alle <a href="/kaffe-drikke/vinkoeleskab/">vinkøleskabe</a> med aktuelle priser, og find de rigtige glas i vores guides til <a href="/bedste-roedvinsglas/">rødvinsglas</a> og <a href="/bedste-store-vinglas/">store vinglas</a>.</p>
HTML,
	'faq'      => [
		[ 'Hvilken temperatur skal et vinkøleskab have?', 'Til lagring af vin bruger mange omkring 12 grader. Til servering er hvidvin og bobler typisk koldere og rødvin lidt varmere. Med to zoner kan du have begge dele i samme skab.' ],
		[ 'Hvad er forskellen på 1 og 2 zoner?', 'Med én zone har hele skabet samme temperatur. Med to zoner kan du stille to temperaturer, fx én til hvidvin og én til rødvin.' ],
		[ 'Kan et fritstående vinkøleskab bygges ind?', 'Kun hvis producenten skriver, at det kan. Et fritstående skab skal have luft omkring sig for at komme af med varmen. Vælg et skab til indbygning, hvis det skal sidde i køkkenet.' ],
		[ 'Hvor mange flasker skal mit vinkøleskab kunne rumme?', 'Tæl de flasker, du har i dag, og læg lidt til. Bemærk, at antallet gælder standardflasker – brede flasker som champagne fylder mere.' ],
		[ 'Larmer et vinkøleskab?', 'Det afhænger af modellen. Kig efter støjniveauet i dB, hvis skabet skal stå i stuen eller et åbent køkken.' ],
	],
];
