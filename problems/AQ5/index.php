<!DOCTYPE html>
<html>
<head>
	<title>Strings within Strings 2</title>
	<link rel="stylesheet" href="../problems.css">
</head>
<body>
<h1> Strings within Strings 2</h1>
<h3> Problem Statement </h3>
<p>
	Given a string s, and another string r, find all occurrences of r in s. To be more precise, check how many times the substring r occurs in the string s. <br>
 A string r is said to be a substring of another string s, if you can take some consecutive characters of s to obtain r. <br>
 For instance, the string "aba" is a substring of "abal", but not a substring of "abla". <br>
 It is guaranteed that both the strings will contain lower case characters, and that len(s) is greater than len(r). <br>
 Note that we only count the number of distinct substrings, therefore the string 'aa' occurs once in the string 'aaa', and not twice.<br>
 </p>
    
<h3> Input Description </h3>
    The first line contains a number t, the number of test cases. <br>
	The next t lines each contain a string s, and a string r, separated by a space. <br>
<h3> Output Description </h3>
	Print t lines, each containing k, the number of times the string r occurs in s. <br>
<h3> Sample Input </h3>
<samp>
    3 <br>
    aaa aa <br>
    johnny jn <br>
    ablewasiereisawabla abl <br>
</samp>
<h3> Sample Output </h3>
  <samp>
    1 <br>
    0  <br>
    2 <br>
    </samp>
</body>
</html>
