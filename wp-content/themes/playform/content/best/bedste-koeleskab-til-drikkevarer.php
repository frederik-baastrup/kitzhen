<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/koeleskab-til-drikkevarer/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-koeleskab-til-drikkevarer',
	'title'    => 'Køleskab til drikkevarer: Vores bud på de 3 bedste',
	'excerpt'  => 'Et køleskab til drikkevarer frigør plads i det store køleskab og holder vin, øl og sodavand klar. Her er vores bud på de 3 bedste fra danske butikker – fra vinkøleskab til party cooler.',
	'more_cat' => 'drikkevarekoeleskab',
	'intro'    => <<<'HTML'
<p>Et køleskab til drikkevarer giver plads i det almindelige køleskab og holder vin, øl, sodavand og vand klar – i køkkenet, stuen, kælderen eller udestuen. Der er to hovedtyper: vinkøleskabe med glaslåge, præcis temperatur og hylder til flasker, og mobile "party coolers", der kan stå, hvor festen er.</p>
<p>Lige nu har de danske butikker vi samarbejder med flest vinkøleskabe, så to af vores tre bud er vinkøleskabe – de kan sagtens også rumme øl og sodavand. Nederst finder du en købsguide til størrelse, temperatur, støj og placering.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '7330066136614',
			'price'   => 5699,
			'name'    => 'mQuvée WineExpert 24',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Fritstående vinkøleskab til 24 flasker med træhylder – stilrent nok til at stå i køkkenet.',
			'why'     => <<<'HTML'
<p>mQuvée WineExpert 24 er et fritstående vinkøleskab med plads til 24 flasker. Butikken oplyser, at flaskerne ligger på elegante træhylder, og at det stilrene design passer ind i ethvert køkken.</p>
<p>24 flasker er en god størrelse, hvis du vil have vin, øl og sodavand klar til hverdag og fest uden at skabet fylder for meget. Valget er vores vurdering ud fra butikkens oplysninger.</p>
HTML,
			'good'    => [ 'Dig, der vil have vin og drikkevarer klar i køkkenet', 'Dig, der vil have et skab, der også ser pænt ud' ],
			'less'    => [ 'Dig, der skal have mange dåser og kasser øl' ],
		],
		[
			'ean'     => '4038437006292',
			'price'   => 4603,
			'name'    => 'Caso WineSafe 18',
			'role'    => 'Bedst til indbygning',
			'reviews' => [],
			'verdict' => 'Smalt 1-zones vinkøleskab til 18 flasker, der kan bygges ind – med temperatur fra 5 til 20 °C.',
			'why'     => <<<'HTML'
<p>Caso WineSafe 18 er et indbygningsvinkøleskab med plads til op til 18 flasker. Butikken oplyser, at det har én zone, og at temperaturen kan justeres mellem 5 og 20 °C på et touch-display.</p>
<p>Det lave temperaturområde gør det også brugbart til hvidvin, bobler, øl og sodavand. Skal skabet bygges ind i køkkenet, så tjek målene og ventilationskravene hos butikken. Valget er vores vurdering.</p>
HTML,
			'good'    => [ 'Køkkener, hvor skabet skal bygges ind', 'Hvidvin, bobler og kolde drikke' ],
			'less'    => [ 'Dig, der skal have rødvin og hvidvin ved forskellig temperatur samtidig' ],
		],
		[
			'ean'     => '7350101118276',
			'price'   => 2690,
			'name'    => 'NOD Party Cooler 50 liter',
			'role'    => 'Bedst til fest',
			'reviews' => [],
			'verdict' => 'Mobil og støjsvag køler på 50 liter, der holder drikkevarerne kolde lige der, hvor du er.',
			'why'     => <<<'HTML'
<p>NOD Party Cooler er ikke et klassisk køleskab, men en køler, du kan stille i stuen, udestuen eller hobbyrummet. Butikken beskriver den som praktisk, stilren og støjsvag (43 dB) og fremhæver, at du slipper for at gå frem og tilbage til køleskabet.</p>
<p>Med 50 liter er der god plads til øl, sodavand og vin til en fest. Valget er vores vurdering ud fra butikkens oplysninger og prisen.</p>
HTML,
			'good'    => [ 'Fester, terrassen og udestuen', 'Øl og sodavand i dåser' ],
			'less'    => [ 'Langtidsopbevaring af vin' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du et køleskab til drikkevarer</h2>
<h3>Vinkøleskab eller drikkevarekøleskab?</h3>
<p>Et vinkøleskab holder en stabil temperatur og har hylder, hvor flaskerne kan ligge ned. Et drikkevarekøleskab kan typisk gå lavere i temperatur og har hylder til dåser og flasker, der står op. Mange vinkøleskabe kan godt bruges til øl og sodavand, men tjek den laveste temperatur, hvis drikkene skal være iskolde.</p>
<h3>Størrelse</h3>
<p>Kapaciteten angives i antal standardvinflasker. Regn med, at øl og sodavand fylder anderledes, og at store flasker som champagne kan kræve, at du fjerner en hylde.</p>
<h3>Én eller to zoner</h3>
<p>Med to zoner kan du have rødvin og hvidvin ved hver sin temperatur. Med én zone er hele skabet samme temperatur – fint, hvis du mest har drikkevarer, der skal være kolde.</p>
<h3>Støj og placering</h3>
<p>Skal skabet stå i stuen eller i et åbent køkken, så kig efter støjniveauet i dB. Fritstående skabe skal have luft omkring sig; indbygningsmodeller har ventilation fortil og kan bygges ind i køkkenet.</p>
<p>Se alle <a href="/kaffe-drikke/drikkevarekoeleskab/">køleskabe til drikkevarer og vin</a>, og find de rigtige glas i vores guides til <a href="/bedste-roedvinsglas/">rødvinsglas</a> og <a href="/bedste-store-vinglas/">store vinglas</a>.</p>
HTML,
	'faq'      => [
		[ 'Kan man have øl i et vinkøleskab?', 'Ja. Tjek bare, hvor lav temperaturen kan gå. Mange vinkøleskabe går ned til omkring 5 °C, hvilket er fint til øl og sodavand.' ],
		[ 'Hvad er forskellen på et vinkøleskab og et almindeligt køleskab?', 'Et vinkøleskab holder en mere stabil og højere temperatur, svinger mindre i temperatur og har hylder til liggende flasker. Et almindeligt køleskab er koldere og tørrere.' ],
		[ 'Larmer et køleskab til drikkevarer?', 'Det afhænger af modellen. Kig efter støjniveauet i dB, hvis skabet skal stå i stuen eller et åbent køkken.' ],
	],
];
