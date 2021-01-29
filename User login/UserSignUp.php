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
        Sign Up
    </h1>
    <form action="UserSignUp.php" method="post">

        <div class="input-group">
            <label class="textInput">User Name: </label>
            <input type="text" name="firstname" placeholder="First Name" required>
            <input type="text" name="lastname" placeholder="Last Name" required>
        </div>

            <div class="input-group">
                <label class="textInput">Email: </label>
                <input type="email"  name="email" placeholder="xxx@gmail.com" required/>
            </div>

        <div class="input-group">
            <label class="textInput">Phone Number: </label>
            <input type="text" name="phoneNumber"  required/>
        </div>


         <div class="input-group">
             <label class="textInput">Password: </label>
            <input type="password" name="password"  required/>
         </div>

        <div class="input-group">
            <label class="textInput">Confirm Password: </label>
            <input type="password"  name="password2"  required/>
        </div>

        <div>
            <input type="submit" name="register" value="Sign Up" />
        </div>

            <p class="text-center">Already a Member? <a href="login.php">Sign In</a> </p>

            </form>

    <?php
    if(isset($_GET["newpwd"])){
        if($_GET["newpwd"] == "passwordupdated"){
            echo '<p class="signupsuccess">Your password hs been reset!</p>';
        }
    }
    ?>

                <footer>
                    <p>Copyright UniDirect 2021</p>
                </footer>
    </body>

</html>
