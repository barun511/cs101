<!DOCTYPE html>
<html>
<head>
	<title>Housing Prices 2 (Binary!!)</title>
	<link rel="stylesheet" href="../problems.css">
</head>
<body>
<h1> Housing Prices 2</h1>
<h3> Problem Statement </h3>
<p>
    The uncle has suddenly decided to settle in Bangalore. Unfortunately, he doesn't know the maximum value of the house he can afford. In fact, he does not even know the value of his fortune. <br>
    However, he knows the prices of the houses, h1, h2, h3, h4...hn. He also knows that for any value i, h(i-1) &le; h(i). Another way to say this would be that the prices of the houses are in sorted order. <br>
    He also has a list of potential values of his fortune. For each potential value, tell the uncle the highest value of the house he can buy. <br>
    More formally, given a sorted list of numbers, a[1], a[2]...a[n], and another (not necessarily sorted) list of q numbers, q1, q2, q3...qm, for some value qj, print the highest possible i, such that a[i] &le; qj. (Print this i 0-indexed, so if the first element is the answer, print 0)<br>
    It is guaranteed that such an element will always exist. <br>
    
 </p>
    
<h3> Input Description </h3>
    The first line contains a number t, the number of test cases. <br>
    Each test case has two lines. The first line contains a sorted list of n numbers. <br>
    The second line contains a list of q numbers, the possible values of the fortune. <br>
<h3> Output Description </h3>
    Print t lines. Each line should contain q numbers, the j'th of which should be the maximum indice i, such that a[i] &le; qj. <br>
<h3> Constraints </h3>
    1 &le; t &le; 5 <br>
    1 &le; len(a) &le; 10^4 <br>
    1 &le; len(q) &le; 10^5<br>
    1 &le; a[i] &le; 10^3<br>
    a[0] &le; qj<br>
<h3> Sample Input </h3>
<samp>
    2 <br>
    1 2 <br>
    1 <br>
    1 2 2 3 3 4 5 10 15<br>
    10 9 3 2 7 6    <br>
    
</samp>
<h3> Sample Output </h3>
  <samp>
    0 <br>
    7 6 3 1 6 6 <br>
  </samp>
</body>
</html>
