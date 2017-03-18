<?php
	session_start();
	//ini_set('display_errors', 'On');
    $dbhost = "localhost";
    $dbuser = "agdhruv";
    $dbpass = "haha";
    $dbname = "onlineJudge";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CS-101 &middot; Hosted on Thor</title>
	<link rel="stylesheet" href="css/nav.css">
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<nav>
		<h1 class="title">
			CS-101
		</h1>
		<div class="links">
			<a href="submissions.php">Submissions</a>
			<a href="problems.php">Problems</a>
			<?php 
				if(isset($_SESSION["user"])){
					echo '<a href="submit-code.php"><span>Submit Code</span></a>';
					echo '<a href="problems_solved.php"><span>'.$_SESSION["user"].'</span></a>';
					echo '<a href="logout.php"><span>Logout</span></a>';
				}
				else{
					echo '<a href="login.php"><span>Login</span></a>';
					echo '<a href="register.php"><span>Register</span></a>';
				}
			?>
		</div>
	</nav>
	<section class="section1">
		<h1>Submissions for Assignment 5 will be closed on midnight of Thursday, 9th March.</h1>
        <h1> The server will be back up by Tuesday, 11:00 AM </h1>
        <h1> I will not be available on Wednesday or Thursday for doubts...so the last time you can meet me before the midterm will be Tuesday. </h1>
	</section>
</body>
<?php
	mysqli_close($conn);
?>
</html>
