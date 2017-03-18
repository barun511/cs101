t = int(raw_input())
for i in range(t):
    p = map(int, raw_input().split())
    a = p[0]
    b = p[1]
    c = p[2]
    determinant = b**2 - 4*a*c
    if determinant < 0:
        print "Complex"
    else:
        root1 = -b/float(2*a) + determinant**(0.5)/(2*a)
        root2 = -b/float(2*a) - determinant**(0.5)/(2*a)
        print "%.4f" % root1,
        print "%.4f" % root2
