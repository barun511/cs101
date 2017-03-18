<?php
	session_start();
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
				<th>Problem Name</th>
				<th>Time Limit</th>
				<th>Assignment Set</th>
			</tr>
			<?php
				$query = "SELECT * FROM problems order by assignment_set";
	    		$result = mysqli_query($conn,$query);
	    		$rank = 1;
				while($data = mysqli_fetch_assoc($result)){
					echo "	<td><a href=problems/".$data["PID"]."/>".$data["problem_name"]."</a></td>";
					echo "	<td>".$data["timeout"]." seconds"."</td>";
					echo "	<td>".$data["assignment_set"]."</td>";
					echo "</tr>";
					$rank++;
				}
			?>
		</table>
	</section>
</body>
<?php
	mysqli_close($conn);
?>
</html>
