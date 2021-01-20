<?php
?>
<!DOCTYPE html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Offer</title>
    <Link rel="stylesheet" type="text/css" href="Un_to_Student_offer.css">
</head>
<body>
<img src="1001.PNG">
<h3><p><div class="T1">Student offer application</div></p></h3>
    <h3><p><div class="T2">University name</div></p></h3><br><!--The name of the big login university is displayed here-->


<form class="F1" action="demo_form.php"method="get">
    Student ID: <input type="search" name="search1"/>
    <input type="submit">
</form>
<a href="Letter of recommendation.html"></a>
<table>
    <tr>
        <th>student information</th>
        <th>agree</th>
        <th>disagree</th>
    </tr>
    <tr>
        <th>Student Name: <a href="Letter of recommendation.html">John Connor</a>,   University: University of Eastern Sydney<br> Phone:01145587, Course Type: Master <br> Email:sample@gamil.com<br></th>
        <td><input  type="checkbox" name="chk_all" v-model="chk_all" v-on:change="Chk_AllEvent"/></td>
        <td><input  type="checkbox" name="chk_all" v-model="chk_all" v-on:change="Chk_AllEvent"/></td>
    </tr>
    <tr>
        <th>Student Name: <a href="Letter of recommendation.html">John Connor</a>,   University: University of Eastern Sydney<br> Phone:01145587, Course Type: Master <br> Email:sample@gamil.com<br></th>
        <td><input  type="checkbox" name="chk_all" v-model="chk_all" v-on:change="Chk_AllEvent"/></td>
        <td><input  type="checkbox" name="chk_all" v-model="chk_all" v-on:change="Chk_AllEvent"/></td>
    </tr>
    <tr>
        <th>Student Name: <a href="Letter of recommendation.html">John Connor</a>,   University: University of Eastern Sydney<br> Phone:01145587, Course Type: Master <br> Email:sample@gamil.com<br></th>
        <td><input  type="checkbox" name="chk_all" v-model="chk_all" v-on:change="Chk_AllEvent"/></td>
        <td><input  type="checkbox" name="chk_all" v-model="chk_all" v-on:change="Chk_AllEvent"/></td>
    </tr>
    <tr>
        <th>Student Name: <a href="Letter of recommendation.html">John Connor</a>,   University: University of Eastern Sydney<br> Phone:01145587, Course Type: Master <br> Email:sample@gamil.com<br></th>
        <td><input  type="checkbox" name="chk_all" v-model="chk_all" v-on:change="Chk_AllEvent"/></td>
        <td><input  type="checkbox" name="chk_all" v-model="chk_all" v-on:change="Chk_AllEvent"/></td>
    </tr>
    <tr>
        <th>Student Name: <a href="Letter of recommendation.html">John Connor</a>,   University: University of Eastern Sydney<br> Phone:01145587, Course Type: Master <br> Email:sample@gamil.com<br></th>
        <td><input  type="checkbox" name="chk_all" v-model="chk_all" v-on:change="Chk_AllEvent"/></td>
        <td><input  type="checkbox" name="chk_all" v-model="chk_all" v-on:change="Chk_AllEvent"/></td>
    </tr>
    <tr>
        <th>Student Name: <a href="Letter of recommendation.html">John Connor</a>,   University: University of Eastern Sydney<br> Phone:01145587, Course Type: Master <br> Email:sample@gamil.com<br></th>
        <td><input  type="checkbox" name="chk_all" v-model="chk_all" v-on:change="Chk_AllEvent"/></td>
        <td><input  type="checkbox" name="chk_all" v-model="chk_all" v-on:change="Chk_AllEvent"/></td>
    </tr>
</table>


<div><button>Confirm</button></div>
</body>
</html>