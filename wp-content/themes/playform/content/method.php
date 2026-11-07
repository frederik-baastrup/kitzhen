<?php
/**
 * Siden "Sådan vælger vi produkter" (metode for købsguides). Teksten er skrevet til Kitzhen –
 * de andre sites har deres egen formulering (ingen duplicate content på tværs af domæner).
 */

defined( 'ABSPATH' ) || exit;

return [
	'title'   => 'Sådan vælger vi produkter',
	'excerpt' => 'Hvilke krav et produkt skal opfylde for at komme med i vores købsguides, hvad vi lægger vægt på, og hvad vi ikke kan vurdere.',
	'html'    => <<<'HTML'
<p class="lead">Vores købsguides peger på de modeller, vi mener er de mest oplagte at kigge på – men vi har ikke selv haft dem i køkkenet. Her kan du se præcis, hvordan valgene bliver truffet, så du selv kan vurdere, hvor meget du vil lægge i dem.</p>

<h2>Krav for at komme med</h2>
<ul>
<li>Produktet skal sælges af en af <a href="/vores-butikker/">de danske webshops, vi samarbejder med</a>. Vi kan derfor kun sammenligne det, de fører – ikke hele markedet.</li>
<li>Det skal være på lager og have et billede, da guiden blev skrevet. Pris og lager opdateres derefter automatisk to gange i døgnet.</li>
<li>Det skal passe til netop det, guiden handler om. En grillpande hører ikke hjemme i en guide om gasgrill.</li>
<li>Vi viser højst fem modeller pr. guide, så valget bliver overskueligt.</li>
</ul>

<h2>Det lægger vi vægt på</h2>
<p><strong>Det, der betyder noget i kategorien.</strong> For hver type udstyr ser vi på de få egenskaber, der afgør, om det løser opgaven: kapacitet og effekt for køkkenmaskiner, materiale og bund for gryder og pander, stålets type og hårdhed for knive, brændere og grillflade for gasgrill. Den model, der står stærkest på det vigtigste for det typiske behov, bliver vores "bedst samlet".</p>
<p><strong>Hvad du får for pengene.</strong> Giver en billigere model næsten det samme, bliver den typisk vores bud til prisen.</p>
<p><strong>Mærke og garanti.</strong> Producenter med et godt ry inden for netop den kategori og en længere garanti trækker op, når resten er lige.</p>
<p><strong>Hvem den passer til.</strong> Mange modeller er ikke bedre end andre, bare bedre til noget bestemt – et lille køkken, en stor familie, et stramt budget. Derfor skriver vi ved hvert valg, hvad det er godt og mindre godt til.</p>

<h2>Anmeldelser</h2>
<p>Findes der en uafhængig anmeldelse af præcis samme model fra et andet medie, linker vi til den, og den vejer tungt. Finder vi ingen, står der "Vores vurdering" ved produktet, så du kan se, at valget bygger på produktdata og ikke på en test.</p>

<h2>Sådan bruger vi AI</h2>
<p>Vi bruger AI (kunstig intelligens) til det tunge arbejde: at gennemgå butikkernes produktdata, finde anmeldelser af præcis samme model og skrive udkast til guiderne og produktteksterne. AI'en må kun bruge oplysninger fra butikkerne og fra anmeldelserne – den må ikke finde på egenskaber, og alle tal i en tekst tjekkes automatisk mod butikkens data, før den går live. Frederik Baastrup er ansvarlig redaktør og retter fejl, når vi bliver gjort opmærksom på dem.</p>

<h2>Det bruger vi ikke</h2>
<p>Provisionen, hvilken butik der sælger produktet, og betaling for placering spiller ingen rolle. Ingen kan købe sig ind i en guide. Du kan læse, <a href="/saadan-tjener-vi-penge/">hvordan vi tjener penge</a>.</p>

<h2>Det kan vores vurdering ikke</h2>
<p>Specifikationer siger intet om holdbarhed, finish eller hvordan en maskine larmer efter et år. Læs derfor gerne anmeldelser og brugeranmeldelser hos butikken, før du køber, og tjek altid den endelige pris og leveringstid hos butikken.</p>

<p>Ser du en fejl i en guide, eller mangler et produkt, du synes hører med, så skriv til os. Vi gennemgår guiderne løbende.</p>
HTML,
];
