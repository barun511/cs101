import random
print("1000000")
counter = 151
print("1 150")
for i in range(1,1000000):
    initial = random.randint(100000,1000000)
    final = initial + random.randint(1,1000)
    if final > 1000000:
        final = 1000000
    if initial > final:
        initial,final = final,initial 
    counter += final - initial + 1
    print(str(initial) + ' ' + str(final))
    if counter > 1000000:
        print(i)
        break

