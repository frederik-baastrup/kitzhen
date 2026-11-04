# Kitzhen – projektnoter til Claude

Kitzhen (kitzhen.dk) er en affiliate-side, der ligner en webshop. Den samler køkkenudstyr fra flere danske shops via Partner-ads-produktfeeds. Man køber ikke på siden: "Gå til butik" sender brugeren videre til shoppen via et affiliate-link.

Ejer: Frederik Baastrup (Mondae). Al tekst på siden er på dansk.

**Samme kodebase som Fitbase** (github.com/frederik-baastrup/playform). Kitzhen startede som en kopi af Fitbase 4. nov. 2026. Kodenavnene er bevidst de samme: mappenavne `playform`/`playform-feeds`, namespace `Playform\Feeds`, funktioner `playform_*`, metafelter `_pf_*`, shortcodes `[playform_produkter]` og `[fitbase_…]`. Så kan rettelser flyttes mellem de to sites. Omdøb dem ikke.

Alt, der er særligt for nichen, ligger i `wp-content/plugins/playform-feeds/src/Config.php`: sitets navn og kontaktoplysninger (`site()`), shops, kategorier, underkategorier, udelukkelser, prisintervaller og filteregenskaber. Temaet læser navn, domæne m.m. via `playform_site()` (`inc/site.php`). Skriv aldrig "Kitzhen" eller "kitzhen.dk" direkte i en skabelon.

## Opbygning

- `wp-content/plugins/playform-feeds/` – importen (PHP 8.1+, kræver WooCommerce). Se Fitbases CLAUDE.md for de enkelte klasser; de er uændrede, bortset fra at `Classifier` og `Attributes` nu læser maskinkategorier og filteregenskaber fra Config.
- `wp-content/themes/playform/` – temaet.
  - `inc/site.php` – `playform_site()` og `playform_price_bands()`.
  - `inc/navigation.php` – topmenuen: de 8 hovedkategorier (`playform_menu_spec()`), flertalsnavne (`playform_menu_labels()`), "Populære" i sidefoden. Ingen grupperingskategorier.
  - `inc/permalinks.php` – flade kategori-URL'er (`/grill/gasgrill/`). Kategorier må ikke starte med `bedste-` (blokeres ved oprettelse).
  - `inc/best.php` + `content/best/<slug>.php` – købsguides "Vores bud på de bedste X". **Guides ligger på roden** (`PLAYFORM_GUIDE_BASE = ''`): `/bedste-gasgrill/`. Oversigten er `/koebsguide/` (`PLAYFORM_GUIDE_INDEX`). `playform_legacy_redirects()` har de gamle Kitzhen-adresser (301 eller 410).
  - `content/category-texts.php` – intro, SEO-tekst og FAQ til kategorierne. Tomme felter udfyldes ved udrulning; felter med tekst røres ikke.
  - `inc/setup.php` – opdateringer efter udrulning, standardsider, cache-tømning. Permalinks `/%postname%/`.
  - `inc/legal.php` – privatlivs- og cookiepolitik med pladsholdere (`{NAME}`, `{DOMAIN}` …).
  - `assets/img/` – logo (sort tekst til lys baggrund), `logo-white.svg`, favicon. Kategoribilleder: `cat-<slug>.jpg` (1600×1100) + `th-<slug>.jpg` (240×240, mobilmenu); mangler de, vises `cat-placeholder.svg`. De 8 hovedkategorier har fotos fra Pexels (fri licens, ingen kreditering krævet), foto-id: grill 16617574, kaffe-drikke 5825346, ovne-apparater 5825716, koekkenmaskiner 6608137, gryder-pander 15257786, knive-redskaber 32878603, pizza-bagning 905847, servering 1114425. Underkategorier bruger forælderens billede. Brug aldrig produktbilleder som kategori- eller artikelbilleder.

## URL'er

- Guides: `/bedste-<emne>/`. Aldrig "test" i URL'en (ejerens valg). Gamle adresser uden "bedste-" eller med "-test" omdirigeres med 301.
- Kategorier: `/kaffe-drikke/`, `/ovne-apparater/`, `/koekkenmaskiner/`, `/gryder-pander/`, `/knive-redskaber/`, `/grill/`, `/pizza-bagning/`, `/servering/` – underkategorier under dem.
- `/viden/` = Viden & guides (alle indlæg), `/viden/emne/<emne>/`, `/koebsguide/` = oversigt over købsguides.
- Produkter: `/produkt/<navn>/`.
- Redirect-planen (alle gamle URL'er og hvorfor) ligger i Claude-dokumentet "Kitzhen.dk – ombygningsplan".

## Vigtige regler

Samme som Fitbase:

1. **Tilbud = butikkernes egne tilbud, højst 14 dage gamle** (`Sales::DAYS`). Kontrolleret førpris fra vores prishistorik, ellers butikkens førpris tydeligt mærket "Butikkens førpris".
2. **AI må aldrig opfinde fakta.** Produkttekster kun ud fra feed-data; `AiWriter::check()` faktatjekker.
3. **Affiliate-links** har `rel="sponsored nofollow"`, og siden oplyser tydeligt, at den indeholder annoncer. Alle klik går gennem `playform_aff_url()`.
4. **Produkter uden billede vises ikke.** Udsolgte produkter slettes ikke.
5. **Prissammenligning er en bonus.** "Sælges af [butik]" ved én butik, prisliste ved flere.
6. **Ingen pixelerede billeder.**
7. **Ingen tredjepartskald fra den offentlige side.**
8. **Redaktørens rettelser vinder** (`_pf_locks`, seed-hash på guides, tomme felter på kategoritekster).
9. **Guides påstår aldrig egen test.** Top-valg bygger på rigtige anmeldelser af præcis samme model, ellers markeret "vores vurdering". Det gamle Kitzhen blev ramt af en algoritmisk nedtoning (AI-tekster), så guides skrives om med reel substans – de gamle tekster flyttes ikke over uændret.

## Shops (Partner-ads, partnerid 14854)

KitchenOne.dk (~27.700 produkter), HvidevareShoppen.dk (~9.300), Barlife.dk (~7.500), Japanske kokkeknive, Køge Kafferisteri, Cibumic.dk, Bagestålet.dk. Moreland (mest havemøbler) kun med grill, grilltilbehør og pizzaovne via `category_map` (~21 produkter). Gourmetshoppen.com er godkendt, men feedet var tomt 4. nov. 2026. Shop ↔ feed-link er bekræftet ud fra `bannerid` i feedets `vareurl`.

HvidevareShoppen, KitchenOne og Barlife sælger meget, der ikke er køkkenudstyr (hvidevarer til vask/frys, køkkenskabe, emhætter, spiritus, delikatesser, interiør). `Config::exclude()` holder det ude; tjek altid fordelingen efter en import (`wp playform stats`). Reglerne er testet på feedsne fra 4. nov. 2026: ca. 21.000 produkter i kategorierne.

## Kommandoer

```bash
wp playform import                  # hent og importer alle feeds
wp playform import --shop=kitchenone --limit=50
wp playform import --file=kitchenone:/sti/feed.xml
wp playform stats                   # produkter pr. kategori
wp playform sales                   # genberegn butikstilbud
```

På hosting: kør `wp playform import` fra et rigtigt cronjob kl. 05:30 og 17:30 og sæt `DISABLE_WP_CRON`.

Cronjobs på SiteGround (Site Tools → Devs → Cron Jobs), sat op 4. nov. 2026 på det midlertidige domæne:

```
30 5,17 * * *  cd /home/customer/www/frederikb10.sg-host.com/public_html && wp playform import --quiet
*/5 * * * *    cd /home/customer/www/frederikb10.sg-host.com/public_html && wp cron event run --due-now --quiet
```

Når kitzhen.dk flyttes, omdøber SiteGround mappen – ret stien i begge jobs og `SITE_DIR`/`SITE_URL` i deploy.yml.

## Udrulning

Hvert push til `main` udrulles via GitHub Actions (FTPS) til SiteGround. Kræver secrets `FTP_SERVER`, `FTP_USERNAME`, `FTP_PASSWORD` og variablerne `SITE_DIR` (fx `kitzhen.dk/public_html`) og `SITE_URL` (fx `https://kitzhen.dk`). Mangler de, springes udrulningen over. Udrulningen stopper, hvis mappen ikke indeholder `wp-config.php`.

## Design

Som Fitbase: hvid baggrund, sort tekst, BDO Grotesk, afrundede hjørner, tynde linjeikoner. Accentfarve `#24FF00` fra Kitzhen-logoet (grøn cirkel), brugt sparsomt (købsknap).

## Åbne punkter (4. nov. 2026)

- **Grill:** dækkes af KitchenOne (ca. 1.160 produkter: gasgrill, kamado, kulgrill, røgeovne, tilbehør). En ekstra grillforhandler er ikke nødvendig.
- SEO-tekst og FAQ til kategorierne mangler (kun intro).
- Guides fra det gamle site skal skrives om som `content/best/<slug>.php`.
- Udrulning kører til det midlertidige domæne (frederikb10.sg-host.com). Når kitzhen.dk flyttes, skal SITE_DIR/SITE_URL i deploy.yml rettes.
