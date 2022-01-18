
# using time module
import time

ts = time.time()
print(ts)

file = open("test.txt", 'w')
file.write(str(ts))
file.close()

