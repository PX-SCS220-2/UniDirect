<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <Link rel="stylesheet" type="text/css" href="SignUpStyle.css"
</head>
<body>
<img src="img/Logo.png" height="60">
<div id="signUp">
    <h1>
        Forget Password
    </h1>
    <form action="UserForgetPass.php" method="post">


        <p>
            <label>Email: </label>
            <input type="email" id="email" name="email"  placeholder="Enter your email" required/>
        </p>

        <p>
            <input type="submit" id="submit" value="Submit" />
        </p>

        <div class="link">
            <a href="login.php">Login here</a>
        </div>

    </form>
                <footer>
                             <p>Copyright UniDirect 2021</p>
                </footer>
</body>

</html>
