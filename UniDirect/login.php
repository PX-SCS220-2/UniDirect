<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <Link rel="stylesheet" type="text/css" href="loginStyle.css"
</head>
<body>
    <h2>
        User login
    </h2>
    <div id="frm">
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
                <a href="UserForgetPass.php">Forget password?</a>
        </div>
              <footer>
                         <p>Copyright UniDirect 2021</p>
              </footer>
</body>

</html>





