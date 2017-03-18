<?php
	session_start();
	if(!isset($_SESSION["user"]))
    {
        header("Location: login.php"); 
        exit();
    }
	ini_set('display_errors', 'On');
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
			<a href="index.php">CS-101</a>
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
		<h1>List of Problems</h1>
		<table class="displayTable problemTable">
			<tr>
				<th>Submission Id</th>
				<th>Problem Name</th>
				<th>Verdict</th>
			</tr>
			<?php
				$username = $_SESSION["user"];
				$query =  "SELECT SID,problem_name,verdict FROM submissions JOIN problems ON submissions.PID = problems.PID WHERE verdict='Accepted' AND UID='$username' GROUP BY submissions.PID";
	    		$result = mysqli_query($conn,$query);
				while($data = mysqli_fetch_assoc($result)){

					echo " <td>".$data["SID"]."</td>\n";
					echo "	<td>".$data["problem_name"]."</td>\n";
					echo "	<td>".$data["verdict"]."</td>\n";
					echo "</tr>\n";

				}
			?>
		</table>
	</section>
</body>
<?php
	mysqli_close($conn);
?>
</html>