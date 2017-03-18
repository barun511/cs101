<?php
	session_start();
	$dbhost = "localhost";
    $dbuser = "agdhruv";
    $dbpass = "haha";
    $dbname = "onlineJudge";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(isset($_POST['submit'])){
    	$query = "SELECT count(*) as number FROM submissions";
		$result = mysqli_query($conn,$query);
		$data = mysqli_fetch_assoc($result);
		$sub_id = $_SESSION["user"].$data["number"];//Generate sub_id
		$sub_id = str_replace(' ','',$sub_id); // Make sure there are no spaces in the submission id
        echo '<script>console.log("hello")</script>';

		$problemID = mysqli_real_escape_string($conn,trim($_POST["problemID"]));//Generate problem ID
//		$in_id = $problemID; //Generate in_id
//		$exout_id = $problemID; //Generate exout_out // Why was in_id in snake case but problemID in camelcase anyway?
// Why have two for the same id? Redundant information. Changed it so that $problemID alone is enough
		$lang_code = $_POST['language'];//Generate Input Language

		$query = "SELECT * FROM problems WHERE PID='{$problemID}'";
		$result = mysqli_query($conn,$query);
		$data = mysqli_fetch_assoc($result);
		$timeout = $data["timeout"]; //Generate timeout

		$submission_file = fopen("../submissions/{$sub_id}".".".$lang_code,"w");
		$sub_code = $_POST["submittedCode"];
		fwrite($submission_file,$sub_code);
		fclose($submission_file);

	    //Calling the API
		$ch = curl_init("127.0.0.1:5000/judge/"."{$sub_id}/"."{$problemID}/"."{$timeout}/"."{$lang_code}");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 	$output = curl_exec($ch);
	 	curl_close($ch);
        date_default_timezone_set("Asia/Kolkata");
        $mysqltime = date ("Y-m-d H:i:s", time());
	 	$query = "INSERT into submissions VALUES ('{$sub_id}','{$problemID}','{$_SESSION["user"]}','{$output}','{$lang_code}','{$mysqltime}')";
	 	echo $output;
    }
    else{
		header('HTTP/1.0 403 Forbidden');
		exit();
    	//echo "Why do you want to access this page? All you will get here is an error. Error 403.";
    }
 	mysqli_query($conn,$query);
?>
