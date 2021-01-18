<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <Link rel="stylesheet" type="text/css" href="loginStyle.css"
</head>
<body>
        <img src="img/Logo.png" height="60">
    <div id="frm">
        <h1>
            User login
        </h1>

        <?php
        if(isset($_SESSION['message'])) {
            echo "<div id='error-msg'>".$_SESSION['message']."</div>";
            unset($_SESSION['message']);
        }
        ?>
        <form action="LoginProcess.php" method="post">

        <p>
            <label>Username: </label>
            <input type="text" id="user" name="user"  required/>
        </p>

        <p>
             <label>Password: </label>
             <input type="password" id="pass" name="pass"  required/>
         </p>

         <p>
             <input type="submit" id="btn" value="login" />
         </p>

        </form>
    </div>

         <div class="link">
                     <a href="../User%20login/UserForgetPass.php">Forget password?</a><br>
             <a href="../User%20login/UserSignUp.php">No Account? Sign Up</a>
         </div>
              <footer>
                         <p>Copyright UniDirect 2021</p>
              </footer>
</body>

</html>




