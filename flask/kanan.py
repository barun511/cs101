times=input()
for j in range(times):
    num=input()
    g=0
    root=int(num**(0.5))
    for i in range(2,root+1):
        if num%i==0:
            g=1
    if g==1:
        print 'NO'
    else:
        print 'YES'
