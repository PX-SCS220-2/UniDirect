<?php
    $server = "127.0.0.1";
    $user = "root";
    $pass = "";
    $db = "login";


    $con = mysqli_connect($server, $user, $pass, $db);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $username = mysqli_real_escape_string($con,$_REQUEST['user']);
    $password = mysqli_real_escape_string($con,$_REQUEST['pass']);
    $email = mysqli_real_escape_string($con,$_REQUEST['email']);

    $insert = "INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES (NULL , '$username', '$password', '$email')";

    if(mysqli_query($con, $insert)){
        echo "You have been successfully Sign In!";
    }else{
        echo "Error";
    }

    mysqli_close($con);