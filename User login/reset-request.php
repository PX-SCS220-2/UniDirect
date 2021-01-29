<?php

    $connection = new mysqli("localhost", "root", "", "login");

	if (isset($_POST["reset-request-submit"])) {

         $selector = bin2hex(random_bytes(8));
         $token = random_bytes(32);

         $url = "http://localhost:63342/UniDirect1/User%20login/createNewPass.php?selector=" . $selector . "&validator=" . bin2hex($token);

         $expires = date("U") + 1800;

        // require ''

         $userEmail = $_POST["email"];
         $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
         $stmt = mysqli_stmt_init($connection);
         if(!mysqli_stmt_prepare($stmt, $sql)){
             echo "There was an error123";
             exit();
         }else{
             mysqli_stmt_bind_param($stmt, "s", $userEmail);
             mysqli_stmt_execute($stmt);
         }

        $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpries) VALUES (?, ?, ?, ?);";

        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "There was an error12345";
            exit();
        }else{
            $hashedToken = password_hash($token, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
            mysqli_stmt_execute($stmt);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($connection);

        $to = $userEmail;

        $subject = 'Reset your password for UniDirect';
        $message = '<p>We received a password reset request. The link to reset your password is below. If you did not make this request, you can ignore this email</p>';
        $message .= '<p>Here is your password reset link: </br>';
        $message .= '<a href="' . $url . '">' . $url . '</a></p>';

        $headers = "Form: UniDirect <unidirect@gmail.com>\r\n";
        $headers .= "Reply-To: unidirect@gmail.com\r\n";
        $headers .= "Content-type: text/html\r\n";

        mail($to, $subject, $message, $headers);

        header("location:.../reset-password-inc.php?reset-success");

    }else {
	    header("login.php");
}

?>