import sys, re
with open(sys.argv[1]) as f:
    content = f.read()
idx = content.find('1751:(t,e,r)')
if idx >= 0:
    print(content[idx:idx+3000])
else:
    print('not found')