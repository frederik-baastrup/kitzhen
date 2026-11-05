<?php
/**
 * Omskrevet fra det gamle kitzhen.dk (/elektrisk-knivsliber/). Fakta kun fra butikkernes produktdata. Ingen påstand om egne test.
 */
defined( 'ABSPATH' ) || exit;

return [
	'slug'     => 'bedste-elektrisk-knivsliber',
	'title'    => 'Elektrisk knivsliber: Vores bud på de 3 bedste',
	'excerpt'  => 'En elektrisk knivsliber gør sløve knive skarpe på få minutter. Her er vores bud på de 3 bedste fra danske butikker – og hvornår du hellere skal vælge en slibesten.',
	'more_cat' => 'knivsliber',
	'intro'    => <<<'HTML'
<p>En sløv kniv er både irriterende og farlig, fordi den glider i stedet for at skære. En elektrisk knivsliber løser problemet på få minutter: du trækker kniven igennem et par slibeskiver i den rigtige vinkel, og maskinen klarer resten. Den er især god, hvis du aldrig har lært at bruge en slibesten.</p>
<p>Herunder er vores bud på de 3 bedste elektriske knivslibere hos danske butikker lige nu. Nederst finder du en købsguide til vinkler, trin og japanske knive.</p>
HTML,
	'picks'    => [
		[
			'ean'     => '4002293103617',
			'price'   => 1999,
			'name'    => 'Wüsthof Easyedge',
			'role'    => 'Bedst samlet',
			'reviews' => [],
			'verdict' => 'Elektrisk knivsliber fra knivproducenten Wüsthof med tre trin: shape, sharpen og refine.',
			'why'     => <<<'HTML'
<p>Wüsthof er en af de store tyske knivproducenter, og Easyedge er deres elektriske knivsliber. Den har tre forprogrammerede trin: shape til en beskadiget æg, sharpen, der gør kniven skarpere, og refine, der giver den sidste finish.</p>
<p>Tre trin betyder, at du både kan redde en meget sløv kniv og holde en god kniv skarp. Den er dyr, men et godt valg, hvis du har gode knive, du vil passe på.</p>
HTML,
			'good'    => [ 'Dig med gode europæiske knive', 'Meget sløve eller beskadigede knive' ],
			'less'    => [ 'Dig, der kun sliber en billig kniv en gang imellem' ],
		],
		[
			'ean'     => '7350101117842',
			'price'   => 879,
			'name'    => 'NOD Elektrisk knivsliber europæisk',
			'role'    => 'Bedst til prisen',
			'reviews' => [],
			'verdict' => 'Elektrisk knivsliber i tre trin til europæiske knive – til under det halve af Wüsthof.',
			'why'     => <<<'HTML'
<p>NODs elektriske knivsliber er lavet til europæiske knive. Du kan give en gammel, slidt kniv et nyt skær på få minutter, og slibningen sker i tre trin, så du slipper for at gøre hele arbejdet manuelt.</p>
<p>Den er et godt mellemvalg: tre trin som de dyre modeller, men til en lavere pris. Bemærk, at den er til europæiske knive – til japanske knive med en spidsere vinkel skal du vælge en anden løsning.</p>
HTML,
			'good'    => [ 'Almindelige køkkenknive', 'Dig, der vil have tre trin uden at give meget' ],
			'less'    => [ 'Japanske knive' ],
		],
		[
			'ean'     => '4011833303196',
			'price'   => 399,
			'name'    => 'Steba KS 1',
			'role'    => 'Billigst',
			'reviews' => [],
			'verdict' => 'Enkel elektrisk knivsliber fra tyske Steba – til dig, der bare vil have skarpe hverdagsknive.',
			'why'     => <<<'HTML'
<p>Steba KS 1 er den enkle og billige løsning. Den er en elektrisk knivsliber fra tyske Steba, der gør det nemt at få skarpe knive til grøntsager og kød.</p>
<p>Den er god til hverdagsknive, hvor det vigtigste er, at de skærer. Har du dyre knive, vil vi hellere pege på en af de to andre.</p>
HTML,
			'good'    => [ 'Billige hverdagsknive', 'Dig, der vil prøve en elektrisk knivsliber' ],
			'less'    => [ 'Dyre og japanske knive' ],
		],
	],
	'guide'    => <<<'HTML'
<h2>Sådan vælger du en elektrisk knivsliber</h2>
<h3>Vinklen skal passe til dine knive</h3>
<p>Europæiske knive slibes typisk i en lidt større vinkel end japanske knive, der er tyndere og hårdere. En knivsliber til europæiske knive kan ødelægge æggen på en japansk kniv. Tjek, hvilken type knivsliberen er lavet til – eller vælg en model med indstilling til begge.</p>
<h3>Antal trin</h3>
<p>Det første trin er groft og bruges til meget sløve eller beskadigede knive. De næste trin er finere og giver en skarp, glat æg. Tre trin er det mest fleksible; en enkel model med ét eller to trin er nok til at vedligeholde.</p>
<h3>Hvor ofte skal du slibe?</h3>
<p>Slib ikke for ofte – hver slibning fjerner lidt metal. Brug et strygestål mellem slibningerne for at rette æggen op, og slib, når kniven ikke længere skærer let igennem en tomat.</p>
<h3>Elektrisk knivsliber eller slibesten?</h3>
<p>En slibesten giver det bedste resultat og passer til alle knive, men kræver øvelse. En elektrisk knivsliber er hurtig og nem og giver et godt resultat på de fleste køkkenknive. Har du dyre japanske knive, er en slibesten eller en sliber lavet til japanske knive at foretrække.</p>
<p>Se alle <a href="/knive-redskaber/knivsliber/">knivslibere, slibesten og strygestål</a>, eller find en ny kniv i vores guide til den <a href="/bedste-kokkekniv/">bedste kokkekniv</a>.</p>
HTML,
	'faq'      => [
		[ 'Er en elektrisk knivsliber skadelig for knivene?', 'Ikke hvis den bruges rigtigt og ikke for ofte. Den fjerner mere metal end en slibesten, så slib kun, når kniven er sløv, og brug et strygestål ind imellem.' ],
		[ 'Kan man slibe japanske knive i en elektrisk knivsliber?', 'Kun i en knivsliber, der er lavet til japanske knive eller har en indstilling til en spidsere vinkel. Ellers kan æggen blive beskadiget.' ],
		[ 'Kan man slibe knive med takker?', 'De fleste elektriske knivslibere kan ikke slibe takkede knive som brødknive. Tjek producentens anvisning.' ],
		[ 'Hvor ofte skal man slibe sine knive?', 'Det afhænger af brugen. Mange sliber et par gange om året og bruger et strygestål ugentligt.' ],
	],
];
