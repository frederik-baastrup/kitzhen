import json, re, sys, time, html, urllib.request
from html.parser import HTMLParser
UA = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0 Safari/537.36'
class Text(HTMLParser):
    skip = {'script','style','noscript','svg','header','footer','nav','form'}
    def __init__(s): super().__init__(); s.d=0; s.out=[]
    def handle_starttag(s,t,a):
        if t in s.skip: s.d+=1
        if t in ('p','li','h1','h2','h3','h4','tr','br','div'): s.out.append('\n')
    def handle_endtag(s,t):
        if t in s.skip and s.d: s.d-=1
    def handle_data(s,x):
        if not s.d: s.out.append(x)
if __name__ == "__main__":
    res = {}
    for u in [l.strip() for l in open('urls.txt') if l.strip()]:
        try:
            req = urllib.request.Request(u, headers={'User-Agent': UA, 'Accept-Language': 'da-DK,da;q=0.9'})
            b = urllib.request.urlopen(req, timeout=25).read().decode('utf-8', 'replace')
            ld = []
            for m in re.finditer(r'<script[^>]+application/ld\+json[^>]*>(.*?)</script>', b, re.S):
                try:
                    j = json.loads(m.group(1)); js = j if isinstance(j, list) else j.get('@graph', [j])
                    for x in js:
                        if isinstance(x, dict) and 'Product' in str(x.get('@type')):
                            ld.append({k: x.get(k) for k in ('name','description','brand','sku','gtin13','additionalProperty','offers') if k in x})
                except Exception: pass
            og = re.search(r'<meta[^>]+property="og:description"[^>]+content="([^"]*)"', b)
            t = Text(); t.feed(b); txt = re.sub(r'\n\s*\n+', '\n', html.unescape(''.join(t.out)))
            txt = '\n'.join(l.strip() for l in txt.split('\n') if len(l.strip()) > 2)
            res[u] = {'ld': ld, 'og': html.unescape(og.group(1)) if og else '', 'text': txt[:60000]}
        except Exception as e:
            res[u] = {'error': str(e)}
        print(u, 'ERR' if 'error' in res[u] else len(res[u]['text']), flush=True)
        time.sleep(1.2)
    json.dump(res, open('pages.json','w'), ensure_ascii=False, indent=1)
