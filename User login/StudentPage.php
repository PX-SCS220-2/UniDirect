
<!DOCTYPE html>
<html>
<head>
    <title>User Page</title>
    <Link rel="stylesheet" type="text/css" href="StudentPageStyle.css">
</head>
<body>
           <nav>
               <a href="login.php"><img src="img/1001.PNG"></a>
           </nav>
<h1>This is a Student Page</h1>
<p>When user log in, they should see this page.</p>


 <div class="row">
     <div class="col-md-4">
         <table>
             <tr>
                 <th>
                     <form method="get" action="UserInfo.php">
                     <button onclick="window.location.href='/UserInfo.php'">Student Profile</button>
                     </form>
                 </th>
             </tr>
             <tr>
                 <th>
                     <form method="get" action="Offers.php">
                         <button onclick="window.location.href='/Offers.php'">Offers</button>
                     </form>

                 </th>
             </tr>
             <tr>
                 <th>
                     <form method="get" action="#">
                     <button onclick="window.location.href='#'">Settings</button>
                     </form>
                 </th>
             </tr>
             <tr>
                 <th>
                     <form method="get" action="Logout.php">
                     <button onclick="window.location.href='/Logout.php'">Log Out</button>
                     </form>
                 </th>
             </tr>
         </table>
     </div>
</body>
</html>
