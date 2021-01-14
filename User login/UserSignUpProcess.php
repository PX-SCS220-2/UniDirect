<?php
session_start();

$db = mysqli_connect("localhost", "root", "", "register");



if(isset($_POST['register'])){

    $username = mysqli_real_escape_string($_POST['user']);
    $email = mysqli_real_escape_string($_POST['email']);
    $password = mysqli_real_escape_string($_POST['pass']);
    $password2 = mysqli_real_escape_string($_POST['pass2']);


    if($password == $password2) {
        $password = md5($password);
        $sql = "INSERT INTO user(username, email, password) VALUES('$username', '$email', '$password')";
        mysqli_query($db, $sql);
        $_SESSION['message'] = "You are now success Sign up";
        $_SESSION['username'] = $username;
        header("location: login.php");

    }else{
        $_SESSION['message'] = "The two password do not match";
    }
}


?>



