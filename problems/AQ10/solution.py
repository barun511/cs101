def fill_sieve(sieve):
    for i in range(2,1000001):
        if sieve[i]:
            for j in range(2*i,1000002,i):
               sieve[j]=False        
sieve = [True]*1000010
t = input()
fill_sieve(sieve)
sieve[1] = False
for i in xrange(t):
    a,b = map(int, raw_input().split())
    for j in range(a,b+1):
        if sieve[j]:
            print j,
    print ''
