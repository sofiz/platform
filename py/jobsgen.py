f = open("jobs.txt", "r", encoding="utf-8")
line = 0
jobs =[]

while line < 64:
 jobs.append(f.readline())
 line=line+1

jobs=str(jobs)
f = open("jobs.txt", "a", encoding="utf-8")
f.write(jobs)
print(jobs)
