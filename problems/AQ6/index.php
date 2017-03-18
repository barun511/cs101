<!DOCTYPE html>
<html>
<head>
	<title>Strings within Strings 1</title>
	<link rel="stylesheet" href="../problems.css">
</head>
<body>
<h1> Strings within Strings 1</h1>
<h3> Problem Statement </h3>
<p>
	Given a string s, and another string r, output "YES" if string r occurs in s, "NO", otherwise.<br>
 A string r is said to be a substring of another string s, if you can take some consecutive characters of s to obtain r. <br>
 For instance, the string "aba" is a substring of "abal", but not a substring of "abla". <br>
 It is guaranteed that both the strings will contain lower case characters, and that len(s) is greater than len(r). <br>
 </p>
    
<h3> Input Description </h3>
    The first line contains a number t, the number of test cases. <br>
	The next t lines each contain a string s, and a string r, separated by a space. <br>
<h3> Output Description </h3>
	Print t lines, each containing "YES" if the string r occurs in s, or "NO" if it does not. (quotes only for clarity) <br>
<h3> Sample Input </h3>
<samp>
    3 <br>
    aaa aa <br>
    johnny jn <br>
    ablewasiereisawabla abl <br>
</samp>
<h3> Sample Output </h3>
  <samp>
    YES <br>
    NO  <br>
    YES <br>
    </samp>
</body>
</html>
