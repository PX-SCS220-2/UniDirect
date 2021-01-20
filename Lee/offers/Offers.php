
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Offer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <Link rel="stylesheet" type="text/css" href="Offer.css">

</head>
<body>
<img src="1001.PNG">
<h3><p>New Offers From Student</p></h3><br>


<form action="/action_page.php">
    <div class="row">
        <div class="col-md-4">
            <table>
                <tr>
                    <th>
                        <select class="form-control">
                            <option value="Name ID">Course Name</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <th>
                        <select>
                            <option value="Name ID">Course Name</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <th>
                        <select>
                            <option value="Name ID">Course Name</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <th>
                        <select>
                            <option value="Name ID">Course Name</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <th>
                        <select>
                            <option value="Name ID">Course Name</option>
                        </select>
                    </th>
                </tr>
            </table>
        </div>
        <div class="col-md-8">
            <label for="sname">Student name:</label><br>
            <button type="button">Accept </button>
            <input type="text" id="sname" name="sname"><br>
            <label for="sID">Student ID:</label><br>
            <button style="color:red;" type="button">Reject </button>
            <input type="text" id="sID" name="sID"><br>
            <label for="Email">Student Email:</label><br>
            <button type="button">Later </button>
            <input type="text" id="Email" name="Email"><br>
            <label for="Cname">Course name:</label><br>
            <button type="button">Personal Statement </button>
            <input type="text" id="Cname" name="Cname"><br>
            <label for="Clevel">Course Level:</label><br>
            <button type="button">Reference Letter </button>
            <input type="text" id="Clevel" name="Clevel"><br>
        </div>

    </div>
</form>

<h3><p>Offer History</p></h3>



    <form class="">
        <table class="table table-bordered text-center">
            <thead class="text-center">
                <th>Course Name</th>
                <th>Course Type</th>
                <th>Course Status</th>
                <th>Finishing Course</th>
            </thead>
            <tbody>
            <tr>
                <td>Accounting</td>
                <td>Phd</td>
                <td>Doing</td>
                <td>Not Yet</td>
            </tr>
            <tr>
                <td>Programming</td>
                <td>Phd</td>
                <td>Done</td>
                <td>Done</td>
            </tr>
            </tbody>
        </table>
    </form>

</body>
</html>