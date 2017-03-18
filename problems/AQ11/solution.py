t = int(input())
def check(a,b,k):
    for i in range(len(a)-1,-1,-1):
        for j in range(len(b)-1,-1,-1):
            if a[i]*b[j]==k:
                return [i,j]
for i in range(t):
    n, k = map(int, raw_input().split())
    a = map(int, raw_input().split())
    b = map(int, raw_input().split())
    answer = check(a,b,k)
    print answer[0],answer[1]
