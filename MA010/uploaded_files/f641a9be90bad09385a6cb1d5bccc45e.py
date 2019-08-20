import sys;
import time


args = sys.argv;

n1 = int(args[1]);
n2 = int(args[2]);
start = time.time()
local_time=time.ctime(start)
for i in range(n1,n2+1):
    if(i>1):
        for ii in range(2,i):
            if(i%ii)==0:
                break
            else:
                print(i);
end = time.time()
elapsed = end-start;
print("elapsed time is:",local_time);

            
