t = int(raw_input())
for i in range(t):
    k = raw_input().split()
    if k[1] in k[0]:
        print "YES"
    else:
        print "NO"
