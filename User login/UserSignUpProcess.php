<?php


$server = "127.0.0.1";
$user = "root";
$pass = "";
$db = "login";

$username = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['pass'];
$password2 = $_POST['pass2'];


 $con = mysqli_connect($server, $user, $pass, $db);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$username = mysqli_real_escape_string($con,$_REQUEST['user']);
$email = mysqli_real_escape_string($con,$_REQUEST['email']);
$password = mysqli_real_escape_string($con,$_REQUEST['pass']);


$insert = "INSERT INTO 'registeruser' ('username', 'email', 'password') VALUES (NULL , '$username', '$email', '$password')";

if(mysqli_query($con, $insert)){
    echo "You have been successfully Sign In!";
}else{
    echo "Error...";
}

mysqli_close($con);

?>





