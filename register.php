<?php 
    session_start();
    if(isset($_SESSION['user']))
    {
        header("Location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CS-101 &middot; Register</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/loginregister.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            var showPassword = $("#showPassword");
            showPassword.click(function(){
                if(showPassword.is(":checked")){
                $("#password").attr("type","text");
            }
            else{
                $("#password").attr("type","password");
            }
            });
        });
    </script>
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
        <h1>Register</h1>
    	<form method="POST" action="api/check.php">
    		Name<br><input type="text" placeholder="Name" name="name" autocomplete="off"><br>
    		User ID<br><input type="text" placeholder="Unique Username" name="userID" autocomplete="off"><br>
    		Password<br><input id="password" type="password" name="userPassword" autocomplete="off" placeholder="Password"><span style="font-size: 0.8em;display: block;">Show Password <input type="checkbox" id="showPassword"></span><br>
    		<input type="submit" name="submitregister" style="margin-top: 0px;">
    	</form>
    	<p class="result">
        <?php
            if($_GET["success"]=="incomplete"){
                echo "Incomplete details.";
            }
            else if($_GET["success"]=="exists"){
                echo "Username exists. Try another one.";
            }
            else if($_GET["success"]=="true"){
                echo "Successfully registered!";
            }
            else{
                echo "";
            }
        ?> 
        </p>
    </section>
</body>
</html>
