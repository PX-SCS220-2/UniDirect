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
    <form action="UserSignUpProcess.php" method="post">

        <div class="input-group">
            <label class="textInput">User Name: </label>
            <input type="text" name="firstname" placeholder="First Name">
            <input type="text" name="lastname" placeholder="Last Name">
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
            <label class="textInput">Address: </label>
            <input type="text" name="address" />
        </div>


         <div class="input-group">
             <label class="textInput">Password: </label>
            <input type="password" name="password"  required/>
         </div>

        <div class="input-group">
            <label class="textInput">Confirm Password: </label>
            <input type="password"  name="password2"  required/>
        </div>

        <div class="input-group">
        <label class="name">Select Your Account Type </label>
        <select name="subject">
            <option disabled="disabled" selected="selected">Account Type</option>
            <option>Student</option>
            <option>University</option>
        </select>
        </div>

        <div>
            <input type="submit" name="register" value="Sign Up" />
        </div>

            <p class="text-center">Already a Member? <a href="login.php">Sign In</a> </p>

            </form>
                <footer>
                    <p>Copyright UniDirect 2021</p>
                </footer>
    </body>

</html>
