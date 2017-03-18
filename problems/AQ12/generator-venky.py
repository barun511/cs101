import random
y =0
z=0
print "5"
for p in range(5):
    r = []
    f = []
    for i in range(10000):
        r.append(random.randint(150,1000))
    r.sort()
    for j in range(random.randint(1000,10000)):
        f.append(random.randint(r[0],1000))
    for num in r:
        print num,
    print ''
    for num in f:
        print num,
    print ''
