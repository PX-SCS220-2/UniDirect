<?php

require 'inc/admin_connection.php';
require 'func/university-detail-reject-approve.php';
require 'func/university-marked-Approve-reject.php';
require 'func/add-university-form.php';
require 'func/add-university.php';


if (isset($_POST['forget-password'])) {


    $username    = $_POST["username"];


    $query  = "SELECT * FROM admin WHERE Admin_Username='$username' ";
    $result = mysqli_query($admin_con, $query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

           ?> <script> alert("Thankyou! Your password Successfully sent!");

           window.location.replace("forget-password.php");
   </script>
<?php

        }
    }
    else { ?>

    	<script>
    		alert("Sorry this email don't exists! Please try again!");
    	     window.location.replace("forget-password.php");
    	     </script>

    	     <?php
    	 }
    	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>forget password</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
	<div class="container">
		<div class="logo">
			<img src="img/unidirect.png">
			<div class="login-box">
				<h1>Forget Password</h1>
				<form action="forget-password.php" method="post">
				<input type="text" name="username" id="username" placeholder="Enter your username" required>
				<input type="submit" name="forget-password" value="Submit"  >
				</form>
				<div class="link">
				<a href="admin_login.php">Login here</a>
				</div>
			</div>
		</div>
	</div><br><br>
	<footer>
		<p>Copyright UniDirect 2021</p>
	</footer>
</body>
</html>
