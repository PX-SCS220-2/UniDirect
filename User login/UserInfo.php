<!DOCTYPE html>
<html>
<head>
    <title>Student profile</title>
    <Link rel="stylesheet" type="text/css" href="UserInfo.css"

</head>
<body>

<div align="center">
    <h3>
        User information update
    </h3>
    <div class="row">
        <div class="col-md-6">
            <form action="">

        <div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname">
        </div>

        <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Last name">
        </div>

        <div class="form-group">
        <label for="education">Education</label>
        <select id="education" name="education">
            <option value="australia">Diploma</option>
            <option value="canada">Bachelor</option>
            <option value="usa">Master</option>
            <option value="usa">Phd</option>
        </select>
        </div>

        <div class="form-group">
            <label for="file">Select File</label>
            <input type="file" name="file" >
        </div>

         <div class="form-group">
        <input type="submit" name="update" value="Update">
         </div>

    </form>
</div>
</div>
</div>
</body>

</html>