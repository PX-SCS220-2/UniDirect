<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <Link rel="stylesheet" type="text/css" href="SignUpStyle.css"
</head>
<body>
<div id="signUp">
    <h1>
        Sign Up
    </h1>
    <form action="UserSignUpProcess.php" method="post">

        <p>
            <label>Username: </label>
            <input type="text" name="user"  required/>
        </p>

        <p>
            <label>Email: </label>
            <input type="email"  name="email"  required/>
        </p>

        <p>
            <label>Password: </label>
            <input type="password" name="pass"  required/>
        </p>

        <p>
            <label>Confirm Password: </label>
            <input type="password"  name="pass2"  required/>
        </p>

        <p>
            <input type="submit" name="register" value="Sign Up" />
        </p>

            <p class="text-center">Already a Member? <a href="login.php">Sign In</a> </p>

            </form>
                <footer>
                    <p>Copyright UniDirect 2021</p>
                </footer>
    </body>

</html>
