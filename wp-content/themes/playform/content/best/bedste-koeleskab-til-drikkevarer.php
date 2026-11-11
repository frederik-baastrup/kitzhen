<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/koeleskab-til-drikkevarer/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-koeleskab-til-drikkevarer',
	'date'     => '2023-06-28 09:57:38',
	'title'    => 'Køleskab til drikkevarer: Vores bud på de 5 bedste',
	'excerpt'  => 'Et køleskab til drikkevarer holder øl, sodavand og vand iskolde og frigør plads i det store køleskab. Her er vores bud på de 5 bedste – også displaykøleskabe med glaslåge – fra de butikker, vi samarbejder med.',
	'more_cat' => 'vinkoeleskab',
	'intro'    => <<<'HTML'
<p>Et køleskab til drikkevarer er et ekstra køleskab, kun til det, du drikker: øl, sodavand, vand og hvidvin. Det giver plads i det almindelige køleskab, og fordi det kan gå helt ned til få grader, er dåserne iskolde, når gæsterne kommer. Glasdøren og lyset indeni gør det nemt at se, hvad der er tilbage.</p>
<p>Herunder er vores bud på de 5 bedste køleskabe til drikkevarer – et stort til hobbyrummet, et med lås, et lille til bordet eller kontoret, et displaykøleskab med glaslåge og et barkøleskab til hjemmebaren. Nederst finder du en guide til størrelse, temperatur og placering.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7330066164570',
			'price'   => 2992,
			'name'    => 'Cavin Northern Collection 83 ølkøleskab',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Fritstående ølkøleskab på 83 liter med plads til 118 dåser, LED-lys og temperatur ned til 0 °C.',
			'why'     => <<<'HTML'
<p>Cavin Northern Collection 83 er bygget til netop drikkevarer. Der er plads til op til 118 dåser på 33 cl fordelt på tre glashylder, som du selv indretter til flasker og dåser. Det er nok til både en almindelig uge og den store fest.</p>
<p>På det digitale touchpanel stiller du temperaturen mellem 0 og 20 °C, så øllet kan blive rigtig koldt, mens andre drikkevarer kan stå lidt varmere. Hele skabet er én zone med jævn køling, og den hvide LED-belysning bag glasdøren giver overblik uden at lyse hele rummet op.</p>
<p>Det helsorte design passer ind i garagen, udestuen eller hjemmebiografen, og automatisk afrimning betyder, at du slipper for at hakke is. Skabet er 84 cm højt og 47,4 cm bredt.</p>
HTML,
			'good'    => [ 'Hobbyrummet og hjemmebiografen', 'Øl, der skal være helt kolde', 'Mange dåser på én gang' ],
			'less'    => [ 'Dig, der vil kunne låse skabet' ],
		],
		[
			'ean'     => '5704704016187',
			'price'   => 5509,
			'name'    => 'Scandomestic SC 131 HE barkøleskab',
			'role'    => 'Bedst med lås',
			'reviews' => [],
			'verdict' => 'Barkøleskab i rustfrit stål med glasdør, nøglelås og LED-lys – 103 liter brutto til øl, sodavand og vand.',
			'why'     => <<<'HTML'
<p>Scandomestic SC 131 HE er til dig, der vil kunne låse drikkevarerne inde. Glasdøren har nøglelås, så skabet passer i et fællesrum, i klubhuset eller i et hjem med børn, hvor øl og sodavand ikke skal forsvinde af sig selv.</p>
<p>Med 103 liter brutto (86 liter netto) er der god plads, og de to hylder kan flyttes, så høje flasker også kan stå. Temperaturen stilles mellem 0 og 10 °C, og LED-lyset indeni gør det let at se, hvad der står klar bag glasset.</p>
<p>Skabet er bygget i rustfrit stål til barer og caféer, men passer lige så godt i hjemmebaren, på kontoret eller i hobbyrummet.</p>
HTML,
			'good'    => [ 'Fællesrum og familier med børn', 'Hjemmebaren og kontoret', 'Dig, der vil se drikkevarerne gennem glasset' ],
			'less'    => [ 'Stille rum – det er bygget til barer og caféer', 'Dig, der skal have døren hængt om' ],
		],
		[
			'ean'     => '5704704018884',
			'price'   => 1999,
			'name'    => 'Scandomestic minibar MB 32 BE',
			'role'    => 'Bedst lille',
			'reviews' => [],
			'verdict' => 'Lille køleskab på 32 liter med automatisk afrimning og vendbar dør – til kontoret, soveværelset eller sommerhuset.',
			'why'     => <<<'HTML'
<p>Scandomestic MB 32 BE er den lille løsning, når du bare vil have kolde drikkevarer inden for rækkevidde. Med 32 liter fylder den ikke meget, så den passer på kontoret, i soveværelset, i sommerhuset eller under et bord.</p>
<p>Automatisk afrimning betyder, at du ikke skal tømme den for at fjerne is, og døren kan vendes, så den åbner til den side, der passer bedst, hvor den står.</p>
HTML,
			'good'    => [ 'Kontoret og sommerhuset', 'Lidt plads' ],
			'less'    => [ 'Mange drikkevarer til fest' ],
		],
		[
			'ean'     => '5704704013254',
			'price'   => 4199,
			'name'    => 'Scandomestic SD 217 BE displaykøleskab',
			'role'    => 'Bedst displaykøleskab',
			'reviews' => [],
			'verdict' => 'Displaykøleskab med klar glaslåge, lodret LED-lys i fronten og oplyst top – drikkevarerne står udstillet.',
			'why'     => <<<'HTML'
<p>Scandomestic SD 217 BE er til dig, der vil vise drikkevarerne frem. Det er et displaykøleskab med en stor, klar glaslåge, som du kender det fra caféen eller kiosken. Alle kan se, hvad der står klar, uden at åbne døren.</p>
<p>Lodret LED-lys i fronten og en oplyst top får flasker og dåser til at stå flot frem, også når rummet er dæmpet. Skabet er bygget til barer, caféer og butikker, så det er et oplagt valg til hjemmebaren, festlokalet eller klubhuset, hvor der skal være kolde drikke til mange.</p>
HTML,
			'good'    => [ 'Hjemmebaren og festlokalet', 'Dig, der vil udstille drikkevarerne', 'Klubhuse og foreninger' ],
			'less'    => [ 'Soveværelset og kontoret – det er bygget til barer og caféer' ],
		],
		[
			'ean'     => '5704704012974',
			'price'   => 4795,
			'name'    => 'Scandomestic SC 211 HDE barkøleskab',
			'role'    => 'Bedst under bardisken',
			'reviews' => [],
			'verdict' => 'Robust barkøleskab (back bar) med 158 liter nettovolumen – lavet til at stå under bardisken.',
			'why'     => <<<'HTML'
<p>Scandomestic SC 211 HDE er et barkøleskab, også kaldet en back bar. Det er lavet til at stå bag eller under bardisken, så de kolde drikke er lige ved hånden, når du skænker. Skabet er udviklet til barer, restauranter og caféer, men passer lige så godt i en stilren hjemmebar.</p>
<p>Med en nettovolumen på 158 liter (198 liter brutto) er der god plads til øl, sodavand, vand og hvidvin, og du har overblik over, hvad der står klar. Konstruktionen er robust og bygget til at blive brugt meget – også når der er fest hver weekend.</p>
HTML,
			'good'    => [ 'Hjemmebaren med bardisk', 'Mange drikkevarer', 'Dig, der vil have et robust skab' ],
			'less'    => [ 'Små rum og små budgetter' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du et køleskab til drikkevarer</h2>
<h3>Vinkøleskab eller drikkevarekøleskab?</h3>
<p>Et vinkøleskab holder en stabil temperatur og har hylder, hvor flaskerne kan ligge ned. Et drikkevarekøleskab kan typisk gå lavere i temperatur og har hylder til dåser og flasker, der står op. Mange vinkøleskabe kan godt bruges til øl og sodavand, men tjek den laveste temperatur, hvis drikkene skal være iskolde.</p>
<h3>Størrelse</h3>
<p>Kapaciteten angives i antal standardvinflasker. Regn med, at øl og sodavand fylder anderledes, og at store flasker som champagne kan kræve, at du fjerner en hylde.</p>
<h3>Displaykøleskab og barkøleskab</h3>
<p>Et displaykøleskab har en stor glaslåge og lys, så drikkevarerne står udstillet – som i en kiosk eller café. Et barkøleskab (back bar) er lavt og bredt og passer ind under en bardisk. Begge er bygget til barer og caféer, men gør sig også godt i en hjemmebar eller et stort festlokale.</p>
<h3>Én eller to zoner</h3>
<p>Med to zoner kan du have rødvin og hvidvin ved hver sin temperatur. Med én zone er hele skabet samme temperatur – fint, hvis du mest har drikkevarer, der skal være kolde.</p>
<h3>Støj og placering</h3>
<p>Skal skabet stå i stuen eller i et åbent køkken, så kig efter støjniveauet i dB. Fritstående skabe skal have luft omkring sig; indbygningsmodeller har ventilation fortil og kan bygges ind i køkkenet.</p>
<p>Se alle <a href="/kaffe-drikke/vinkoeleskab/">vinkøleskabe</a>, og find de rigtige glas i vores guides til <a href="/bedste-roedvinsglas/">rødvinsglas</a> og <a href="/bedste-store-vinglas/">store vinglas</a>.</p>
HTML,
	'faq'      => [
		[ 'Kan man have øl i et vinkøleskab?', 'Ja. Tjek bare, hvor lav temperaturen kan gå. Mange vinkøleskabe går ned til omkring 5 °C, hvilket er fint til øl og sodavand.' ],
		[ 'Hvad er forskellen på et vinkøleskab og et almindeligt køleskab?', 'Et vinkøleskab holder en mere stabil og højere temperatur, svinger mindre i temperatur og har hylder til liggende flasker. Et almindeligt køleskab er koldere og tørrere.' ],
		[ 'Larmer et køleskab til drikkevarer?', 'Det afhænger af modellen. Kig efter støjniveauet i dB, hvis skabet skal stå i stuen eller et åbent køkken.' ],
	],
];
