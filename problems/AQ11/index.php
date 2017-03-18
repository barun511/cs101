<!DOCTYPE html>
<html>
<head>
	<title>Housing Prices 1</title>
	<link rel="stylesheet" href="../problems.css">
</head>
<body>
<h1> Housing Prices 1</h1>
<h3> Problem Statement </h3>
<p>
    You are given two lists of prices of houses. The first list contains prices of houses in Nevada, the second contains prices of houses in Florida. For some reason, your Uncle wants to find out if the prices of two houses can be multiplied to reach the value of his family fortune.<br>
More formally, let there be two lists a and b. If a[i] represents the i'th indice of the first list, and b[j] represents the j'th indice of the second list, then given a number k, find any pair (i,j) such that a[i]*b[j] = k. <br>
(Note that if there are multiple solutions, print any of them. It is guaranteed that the solution will always exist.) <br>
</p>
    
<h3> Input Description </h3>
    The first line contains a number t, the number of test cases. <br>
    The first line of each test case contains two numbers, n and k. <br>
    The next two lines of each test case contains n numbers, the housing prices in Nevada and the housing prices in Florida. <br>
<h3> Output Description </h3>
    Print t lines. Each line should contain two indices seperated by a space (i and j), where i is the indice of the first list and j is the indice of the second list such that a[i]*b[j] = k.<br>
<h3> Constraints </h3>
    Note: Constraints are <b>GUARANTEED</b> declarations of what the input will be like, you do not need to check for them. <br>
    <br>
    1 &le; t &le; 10<br>
    1 &le; n &le; 1000 <br>
<h3> Sample Input </h3>
<samp>
    3<br>
    3 10<br>
    1 4 5<br>
    2 1 2<br>
    1 2<br>
    2<br>
    1<br>
    5 20<br>
    1 10 1 1 1<br>
    2 1 3 1 5 <br>
</samp>
<h3> Sample Output </h3>
  <samp>
    2 0 <br>
    0 0 <br>
    1 0 <br>
  </samp>
<h3> Explanation </h3>
The first test case has two lists, 1 4 5 and 2 1 2. The 3rd member of the first list (a[2]) can be multiplied into the first member of the second list (b[0]) to get 10 (which is the value of k). Hence the answer is 2 0. (Note that array indices should be 0 indexed during the output). You could also have given 2 2, as that is also a valid pair. <br>
</body>
</html>
