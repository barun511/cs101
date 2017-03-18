<?php
	session_start();

	if(!isset($_SESSION["user"]))
    {
        header("Location: login.php"); 
        exit();
    }
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
	<title>CS 101 &middot; Submit Code</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/submitCode.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="ace/src-min/ace.js" type="text/javascript" charset="utf-8"></script>
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
        <h1>Submit Code</h1>

        <form action="#" class="inputs-container">
            <div class="problemID">
                <label>Problem - </label>
                <select name="problemID">
                <?php
                    $query = "SELECT PID,problem_name from problems where assignment_set=5";
                    $result = mysqli_query($conn, $query);
                    while($data = mysqli_fetch_assoc($result))
                    {
                        echo '<option value="'.$data["PID"].'">'.$data["problem_name"].'</option>';
                    }
                ?>
                </select>
            </div>
            <div class="language">
                <label>Language - </label>
                <select name="language">
                    <option value="py">Python</option>
                </select>
            </div>
            <div class="ace-code">
                <label>Your code</label><br>
                <div id="editor">#include</div>
                <textarea id="code" name="submittedCode"></textarea><br>
            </div>
            <div class="submitButton">
               <input type="submit" name="submit" required>
            </div>
        </form>
        <p class="result"></p>
    </section>
    <script>

        //Configure the Code Editor
        $("#code").css("display","none");//hide textarea
        var editor = ace.edit("editor");
        editor.setTheme("ace/theme/xcode");
        editor.getSession().setMode("ace/mode/python");

        //Handle default code in code editor
        var content = "# your code goes here";
        editor.setValue(content,1);

        //Handle language change in code editor
        $('form select').on('change', function(){
            var lang = $(this).val();
            if(lang==="cpp"){
                editor.getSession().setMode("ace/mode/c_cpp");
                content = "#include <iostream>\nusing namespace std;\n\nint main() {\n    //your code goes here\n   return 0;\n}";
                editor.setValue(content,1);
            }
            else if(lang==="c"){
                editor.getSession().setMode("ace/mode/c_cpp");
                content = "#include <stdio.h>\n\nint main(void) {\n    //your code goes here\n   return 0;\n}";
                editor.setValue(content,1);
            }
            else if(lang==="py"){
                editor.getSession().setMode("ace/mode/python");
                content = "# your code goes here";
                editor.setValue(content,1);
            }
            else if(lang==="java"){
                editor.getSession().setMode("ace/mode/java");
                content = "/* package whatever; //don't place package name! */\n\nimport java.util.*;\nimport java.lang.*;\nimport java.io.*;\n\n/* Name of the class has to be \"Main\" only. */\n\nclass Main\n{   public static void main (String[] args) throws java.lang.Exception\n    {\n     // your code goes here\n    }\n}";
                editor.setValue(content,1);
            }
        });

        //Handle AJAX Call
        $("form").on("submit",function(e){
            e.preventDefault();
            $("p.result").html("Checking...");
            $("#code").val(editor.getSession().getValue());//enter code editor code to text area to POST to API
            var data = $(this).serialize();
            data += "&submit=yes";
            //console.log(data);
            $.post("api/result.php",data,function(response){
                //console.log(response);
                if(response){
                    $("p.result").html("Verdict: "+response);
                }
                else{
                    $("p.result").html("Some error, try again in some time.");
                }
            });
        });
    </script>
</body>
<?php
	mysqli_close($conn);
?>
</html>
