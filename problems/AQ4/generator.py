import random
print(100)
for i in range(100):
    a = random.randint(-100,100)
    b = random.randint(-100,100)
    c = random.randint(-100,100)
    if a==0:
        a+=1
    print(str(a) + ' ' + str(b) + ' ' + str(c))

