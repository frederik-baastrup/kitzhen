#!/usr/bin/env python3
"""find.py <offers.jsonl> <regex på navn> [--cat <kategori-delstreng>] – kandidater pr. EAN, billigste tilbud først."""
import json, re, sys
offf, rx = sys.argv[1], re.compile(sys.argv[2], re.I)
cat = sys.argv[sys.argv.index('--cat') + 1] if '--cat' in sys.argv else None
g = {}
for l in open(offf, encoding='utf-8'):
    o = json.loads(l)
    if not rx.search(o['name']) or (cat and cat not in o['cat']):
        continue
    g.setdefault(o['ean'], []).append(o)
for e, os_ in sorted(g.items(), key=lambda x: min(o['price'] for o in x[1])):
    o = min(os_, key=lambda x: x['price'])
    print(f"{e} | {int(o['price'])} kr | {o['brand']} | {o['name']} | cat={o['cat']} | butikker={', '.join(sorted(set(x['shop'] for x in os_)))}")
print(len(g), 'varer', file=sys.stderr)
