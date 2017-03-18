#include <bits/stdc++.h>
#define ll long long
#define PRIME 1000000007
using namespace std;
vector<bool> isprime(1000001, true);
void sieve()
{
	for(int i=2;i*i<=1000001;i++)
	{
		if(isprime[i]==true)
		{
			for(int j=(i+i);j<=1000001;j=j+i)
			{
				isprime[j]=false;
			}
		}
	}
}
int main()
{
	ios_base::sync_with_stdio(0); cin.tie(0);
	#ifndef ONLINE_JUDGE
	freopen("input.txt","r",stdin);
	freopen("output.txt","w",stdout);
	#endif
	
}