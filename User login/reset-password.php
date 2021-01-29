<?php

$server = "127.0.0.1";
$user = "root";
$pass = "";
$db = "login";
// connect to the server and select database
$con = mysqli_connect($server, $user, $pass, $db);

?>



<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <Link rel="stylesheet" type="text/css" href="SignUpStyle.css"
</head>
<body>
<img src="img/Logo.png" height="60">
<div id="signUp">
    <h1>
        Forget Password
    </h1>
    <form action="reset-request.php" method="post">


        <p>
            <label>Email: </label>
            <input type="text" name="email"  placeholder="Enter your email" required/>
        </p>

        <p>
            <input type="submit" name="reset-request-submit" value="Submit" />
        </p>

        <div class="link">
            <a href="login.php">Login here</a>
        </div>

    </form>

    <?php
    if(isset($_GET["reset"])){
        if($_GET["reset"] == "success"){
            echo '<p class="signupsucces">Check your email!</p>';
        }
    }
    ?>
                <footer>
                             <p>Copyright UniDirect 2021</p>
                </footer>
</body>

</html>
