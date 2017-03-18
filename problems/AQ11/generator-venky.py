import random
y =0
z=0
print "5"
for p in range(5):
    r = []
    f = []
    for i in range(random.randint(30,1000)):
        r.append(random.randint(1,1000))
        f.append(random.randint(1,1000))
    y = random.choice(r)
    z = random.choice(f)
    total = y*z
    print len(r), total
    for num in r:
        print num,
    print ''
    for num in f:
        print num,
    print ''
