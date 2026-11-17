# Ugentligt tjek af købsguides (alle seks sites)

Køres af Claude som planlagt opgave hver mandag (ejerens ønske 17. nov. 2026: Claude retter og udruller selv, ingen WordPress-mails).
Sites/repos (GitHub frederik-baastrup): kitzhen, fitbase (lokal mappe kan hedde playform), outdoorland, pizzalicious, koffee, myappeal.
Værktøjerne her (i kitzhen-repoet) virker på alle seks, fordi koden er den samme. Læs hvert repos CLAUDE.md – reglerne der gælder.

## 1. Find problemer
For hvert site <repo> (absolut sti) og en arbejdsmappe W:
```
php dev/guide-check/feeds.php <repo> W/<site>                     # henter alle shops' feeds (få sek.)
php -d memory_limit=4G dev/guide-check/dump.php <repo> W/<site> W/<site>.jsonl   # tilbud, der vises på sitet
php dev/guide-check/check.php <repo> W/<site>.jsonl > W/<site>-check.json         # valg, der ikke kan købes
python3 dev/guide-check/find.py W/<site>.jsonl '<regex>' [--cat <kategori>]       # kandidater
```
dump.php tager kun varer på lager, med billede og i en kategori (samme regler som importen). Et valg i check.json kan altså ikke købes på sitet lige nu.

## 2. Ret hvert problem (i guidefilen content/best/<slug>.php)
1. **Samme model i en anden farve/variant?** Søg med find.py på modelnavnet. Findes den: behold valget og tilføj `'eans' => [ ... ]` med alle varianternes EAN (første = den på lager), opdatér 'ean' og 'price'. Nævn ikke farven i teksten.
2. **Ellers erstat** med den bedste kandidat af samme produkttype og cirka samme prisleje/rolle (find.py med typeord og evt. --cat <more_cat>). Ikke et produkt, der allerede er valg i guiden. Skriv nyt valg: ean, price (heltal), name (pænt navn, mærker med stort begyndelsesbogstav pr. ord), role (behold rollen hvis den passer, ellers ny), reviews => [], verdict, why (2 afsnit), good (2), less (1–2) – samme stil som resten af filen.
3. **Ingen god erstatning** (forkert produkttype, eller under 3 valg ville være tilbage efter fjernelse – så er det stadig bedre at fjerne end at sætte noget forkert ind): fjern valget. Ret antallet overalt: title ("Vores bud på de N bedste"), excerpt, intro, sammenligning og andre steder, der nævner antal eller det fjernede produkt. Første valg skal have rollen "Bedst samlet".
4. Ret også al anden omtale af det fjernede/udskiftede produkt i guidens tekst (intro, guide-afsnit, FAQ).

## Tekstregler (skal overholdes)
- Kun fakta fra butikkens data (navn + beskrivelse i <site>.jsonl) + generel korrekt købsrådgivning. Opfind aldrig mål, effekt, materialer, garanti. Tal om et produkt skal stå i dets data.
- Ingen test-påstande. Ordet "test" må ikke stå i nye tekster (heller ikke "oftest", "lettest"). Aldrig "ifølge", "oplyser", "angiver", "perfekt", "markedets bedste", butiksnavne eller priser i brødtekst, "danske webshops" (skriv "de butikker, vi samarbejder med").
- Unik tekst – kopiér ikke butikkens sætninger. Ingen duplicate content med søstersitesne.
- Solgte/sponsorerede artikler (legacy-posts) må aldrig ændres – kun content/best/-guides.

## 3. Kontrol og udrulning
- `php -l` på hver ændret fil; kør check.php igen – de rettede guides må ikke stå der længere (undtagen bevidst fjernede valg).
- grep -inE "ifølge|oplyser|angiver|perfekt|danske webshops|testvinder|bedst i test" på ændrede filer = 0 nye hits.
- Commit pr. site med en kort besked, push til main (GitHub Actions udruller). Tjek `gh run list --limit 1` = success.
- Sitet lægger ændringer i guidefiler ind ved udrulning (seed-hash). Redaktørens egne rettelser i WordPress vinder – det er fint.

## 4. Rapport
Send ejeren én kort besked på dansk (SendUserMessage): pr. site hvilke guides der blev rettet, hvad der blev skiftet/fjernet, og hvad der evt. kræver hans vurdering. Ingen problemer = "Alle købsguides er i orden".
