from random import choice
import random
from string import ascii_lowercase
y= ''
x = random.randint(2,10)

for i in range(100):
	v = ''.join(choice(ascii_lowercase) for i in range(random.randint(2,10)))
	if(len(v)%2==0):
		for i in range(random.randint(1,5)):
			x = ''.join(choice(ascii_lowercase) for i in range(random.randint(2,10)))
			y += x+v
		print y,v		
		y= ''
	else:
		l = ''.join(choice(ascii_lowercase) for i in range(random.randint(5,40)))
		print l,v



			


