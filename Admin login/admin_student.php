<?php
session_start();
if($_SESSION['AdminLoginStatus']!=true){
	session_destroy();
	header('location:admin_login.php');
}
require 'inc/admin_connection.php';
require 'func/edit-course-form.php';
require 'func/update-course.php';
require 'func/Delete-course.php';
require 'func/add-course-form.php';
require 'func/add-course.php';






?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Admin</title>
	<style type="text/css">
	</style>
	<link rel="stylesheet" type="text/css" href="css/admin_student.css">
</head>
<body>
	<nav class="navbar" style="">
		<a class="navbar-brand" style=" padding: 5px;" href="#">
			<img src="img/unidirect.png" height="60">
		</a>
		<a href="admin_login.php?logout=true" class="btn logout-btn">
		Logout
		</a>
	</nav>

	<div class="banner banner-top">
			<div class="tabs col-xs-12 col-sm-2">
				<ul class="tabs-ul">
					<li><a class="btn" href="admin_home.php">University</a></li>
					<li><a class="btn" href="admin_course.php">Course</a></li>
					<li><a class="btn active-tab" href="admin_student.php">Student Offer</a></li>
				</ul>
			</div>
			<form method="post" action="admin_student.php">
				<div class="container " style="overflow: scroll;width: auto;">
						<?php require 'func/admin-student-list.php' ?>
				</div>


			</form>
	</div>



	<div class="footer">
	<p>Copyright UniDirect 2020</p>
	</div>

</body>

</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('.detail-panel').fadeIn(400);
	});
	$('.close-details').click(function(){
		$('.detail-panel').fadeOut(400);
	})
</script>
