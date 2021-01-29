
<?php
$server = "localhost";
$user = "unidirec_admin";
$pass = "4kaxqiz_=.Nx";
$db = "unidirec_user";


$con = mysqli_connect($server, $user, $pass, $db);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

$firstname = mysqli_real_escape_string($con,$_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($con,$_REQUEST['lastname']);
$email = mysqli_real_escape_string($con,$_REQUEST['email']);
$phoneNumber = mysqli_real_escape_string($con,$_REQUEST['phoneNumber']);
$password = mysqli_real_escape_string($con,$_REQUEST['password']);

$password = md5($password);

$insert = "INSERT INTO `users` (`id`, `fisrstname`, `lastname`, `email`, `phoneNumber`, `password`) 
VALUES (NULL , '$firstname', '$lastname', '$email','$phoneNumber', '$password')";

if(mysqli_query($con, $insert)){
    echo "You have been successfully Sign In!";
}else{
    echo "Error";
}

mysqli_close($con);