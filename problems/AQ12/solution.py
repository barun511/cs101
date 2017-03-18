import bisect
t = input()
def find(prices, value):
    for i in range(len(prices)):
        if prices[i]==value:
            return i
        if prices[i]> value:
            return i-1

def binary_search(prices,value):
    low = 0
    high = len(prices)
    while(low<high):
        mid = low + (high - low + 1)/2
        if prices[mid]<value:
            low = mid
        else:
            high = mid - 1
    if prices[low+1]==value:
        return low+1
    else:
        return low
for i in range(t):
    prices = map(int, raw_input().split())
    queries = map(int, raw_input().split())
    for value in queries:
        index = bisect.bisect_left(prices,value)
        #index = binary_search(prices, value)
        if prices[index]==value:
            print index,
        else:
            print index-1,
    print ''
