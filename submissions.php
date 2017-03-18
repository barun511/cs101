<?php
	session_start();
	//ini_set('display_errors', 'On');
    $dbhost = "localhost";
    $dbuser = "agdhruv";
    $dbpass = "haha";
    $dbname = "onlineJudge";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
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
		<h1>My Submissions</h1>
		<table class="displayTable problemTable">
			<tr>
				<th>Submission ID</th>
				<th>Username</th>
				<th>Problem Name</th>
				<th>Language</th>
				<th>Time</th>
				<th>Verdict</th>
			</tr>
			<?php
				$username=$_SESSION["user"];
				$query = "SELECT * FROM submissions join problems on problems.pid = submissions.pid WHERE UID='$username' ORDER BY time DESC";
	    		$result = mysqli_query($conn,$query);
				while($data = mysqli_fetch_assoc($result)){

					echo "	<td>".$data["SID"]."</td>";
					echo "	<td>".$data["UID"]."</td>";
					echo "  <td>".$data["problem_name"]."</td>";
					echo "	<td>".$data["language"]."</td>";
					echo "	<td>".$data["time"]."</td>";
					echo "	<td>".$data["verdict"]."</td>";
					echo "</tr>";
				}
			?>
		</table>
	</section>
</body>
<?php
	mysqli_close($conn);
?>
</html>
