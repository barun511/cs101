<!DOCTYPE html>
<html>
<head>
	<title>Manhattan</title>
	<link rel="stylesheet" href="../problems.css">
</head>
<body>
<h1>Manhattan</h1>
<p>
    Note: This program has multiple test cases. Please be careful with input and output.  <br>
    Note: It is recommended to take input using raw_input() in Python 2. For multiple integers on the same line, you usually need to convert to a list. <br>
    Note: So for instance, if there are four numbers on one line, you could use the following python expression. a = map(int, raw_input().split()) <br>
    Note: Now a[0] will hold the first number, a[1] will hold the second number, a[2] will hold the third number, and a[3] will hold the fourth number.<br>
    Given two points on a coordinate axis (x1,y1) and (x2,y2), find the <a href="https://en.wiktionary.org/wiki/Manhattan_distance">Manhattan Distance</a> between the two points. </p>
 <h3>Description of Input</h3><p>
    The first line of the input contains one number t, the number of test cases. <br>
    The next t lines each contain 4 numbers with one space between each number : x1,y1,x2,y2 (in that order). </p>
 <h3>Description of Output</h3>
    <p>
        Print t lines, each line should contain the Manhattan distance between the two points.
 <p>
 <h3> Constraints </h3>
 	<p>
 		Each coordinate k will follow the rule <MATH> -100 <= k <= 100</MATH> <br>
 		The number of test cases are between 1 and 100 inclusive. 
 	</p>
 	<h3>Sample Input: </h3>
 	<samp>
 	2 <br>
 	0 0 1 1 <br>
 	4 3 1 1 <br>
 	</samp>
 	<h3> Sample Output: </h3>
 	<samp>
 	2 <br>
 	5 <br>
 	</samp>
</body>
</html>
