import json, re, time, urllib.request, urllib.parse, xml.etree.ElementTree as ET
from fetch import Text  # genbrug af tekstudtræk
import html
UA = {'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0 Safari/537.36',
      'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8', 'Accept-Language': 'da-DK,da;q=0.9,en;q=0.5'}
eans = {l.strip() for l in open('eans.txt') if l.strip()}
norm = {e.lstrip('0'): e for e in eans}
found = {}
for f in [l.strip() for l in open('feeds.txt') if l.strip()]:
    try:
        data = urllib.request.urlopen(urllib.request.Request(f, headers=UA), timeout=120).read()
        for ev, el in ET.iterparse(__import__('io').BytesIO(data)):
            if el.tag == 'produkt':
                e = (el.findtext('ean') or '').strip()
                e = norm.get(e.lstrip('0'), '')
                if e:
                    u = el.findtext('vareurl') or ''
                    m = re.search(r'htmlurl=(.*)$', u); u = urllib.parse.unquote(m.group(1)) if m else u
                    found.setdefault(e, []).append({'shop': el.findtext('forhandler'), 'url': u, 'desc': (el.findtext('beskrivelse') or '').strip(), 'name': el.findtext('produktnavn')})
                el.clear()
        print('feed ok', f[-30:], flush=True)
    except Exception as ex:
        print('feed ERR', f[-30:], ex, flush=True)
def q(u):
    p = urllib.parse.urlsplit(u)
    return urllib.parse.urlunsplit((p.scheme, p.netloc, urllib.parse.quote(p.path), urllib.parse.quote(p.query, safe='=&?/'), ''))
pages = {}
for e, offers in found.items():
    for o in offers:
        u = o['url']
        if u in pages: continue
        try:
            b = urllib.request.urlopen(urllib.request.Request(q(u), headers=UA), timeout=30).read().decode('utf-8', 'replace')
            ld = []
            for m in re.finditer(r'<script[^>]+application/ld\+json[^>]*>(.*?)</script>', b, re.S):
                try:
                    j = json.loads(m.group(1)); js = j if isinstance(j, list) else j.get('@graph', [j])
                    ld += [{k: x.get(k) for k in ('name','description','additionalProperty') if k in x} for x in js if isinstance(x, dict) and 'Product' in str(x.get('@type'))]
                except Exception: pass
            t = Text(); t.feed(b); txt = re.sub(r'\n\s*\n+', '\n', html.unescape(''.join(t.out)))
            pages[u] = {'ld': ld, 'text': '\n'.join(l.strip() for l in txt.split('\n') if len(l.strip()) > 2)[:15000]}
        except Exception as ex:
            pages[u] = {'error': str(ex)}
        print(u[:80], 'ERR' if 'error' in pages[u] else 'ok', flush=True)
        time.sleep(1.5)
json.dump({'found': found, 'pages': pages}, open('pages3.json', 'w'), ensure_ascii=False, indent=1)
