<?php
//get value passes from form in login.php
    $server = "127.0.0.1";
    $user = "root";
    $pass = "";
    $db = "login";
    $username = $_POST['user'];
    $password = $_POST['pass'];

    // connect to the server and select database
    $con = mysqli_connect($server, $user, $pass, $db);

    //query the databse for user
    $result = mysqli_query($con,"select * from user where username = '$username' and password = '$password'")
        or die("Failed to query database ".mysqli_error());
    $row = mysqli_fetch_array($result);
    if($row['username'] == $username && $row['password'] == $password){
        echo"Login Success! Welcome.".$row['username'];
    }else{
        echo"Failed to login!";
    }

    mysqli_close($con);
