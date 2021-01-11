<?php

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<title>Admin</title>
</head>
<body>
	<div class="container">
		<div class="logo">
			<img src="img/unidirect.png">
			<div class="login-box">
				<h1>Admin Login</h1>
				<form action="admin_login.php" method="post">

			<input type="text" name="Admin_Username"  placeholder="Username" value="<?php echo $Admin_Username ?>">
			<input type="password" name="Admin_Password" placeholder="Password" value="<?php echo $Admin_Password ?>"> <br>
			<input type="submit" name="admin_login" value="Log in">

		</form>
				<div class="link">
				<a href="Im woeking on it">Forget password?</a>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<p>Copyright UniDirect 2021</p>
	</footer>

</body>

</html>
