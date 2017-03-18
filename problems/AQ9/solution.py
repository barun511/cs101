def is_prime(n):
    for i in xrange(2,int(n**(0.5)) + 1):
        if n%i==0:
            return False
    return True
t = input()
for i in range(t):
    number = input()
    if number==1:
        print "NO"
        continue
    if is_prime(number):
        print "YES"
    else:
        print "NO"    
'''
times=input()
for j in range(times):
    num=input()
    g=0
    if num==1:
        print 'NO'
    else:
        root=int(num**(0.5))
        for i in range(2,root+1):
            if num%i==0:
                g=1
                break
        if g==1:
            print 'NO'
        else:
            print 'YES'
'''
