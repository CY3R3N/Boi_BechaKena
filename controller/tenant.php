<!DOCTYPE html>
<html lang="en">
<head>
<title>House Rental Management System</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/m1.css">
</head>
<body style="background-color:rgb(230, 242, 217);">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img id="nav-img" src="../view/img/logo.png" alt="logo image">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="../view/index.html" style="color:rgb(37, 36, 36);">Home <span class="sr-only">(current)</span></a>
                    </li>
                    &nbsp; &nbsp;
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:rgb(37, 36, 36);">View Houses <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="viewhouse.php" style="color:rgb(37, 36, 36);">Houses</a></li>
                            <li><a href="viewrating.php" style="color:rgb(37, 36, 36);">Rating</a></li>
                        </ul>
                    </li>
                    &nbsp; &nbsp;
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../view/signup.html" style="color:rgb(37, 36, 36);"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>&nbsp; &nbsp;
                    <li><a href="../view/signin.html" style="color:rgb(37, 36, 36);"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
                </ul>
                &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;

                <ul class="nav navbar-nav navbar-right">

                    <li><a href="#"><span class="glyphicon glyphicon-user"></span></a>
                    </li>
                    <li><a href="../view/index.html" style="color:rgb(37, 36, 36);"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
                </ul>
            </div>
        </nav>

    </div>
    
  <center>
<div class="container">
 
  <table border="1" id="customers">
    <br><br>
    <tr>
      <th>Renter ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Contact No No</th>
      <th>Occupation</th>
    </tr>
<?php
include("connection.php");
$query="select * from tenant";
$data=mysqli_query($conn,$query);
while($result=mysqli_fetch_assoc($data))
{
 echo "<tr><td>".$result['t_id']."</td><td>".$result['fname']."</td><td>".$result['lname']."</td><td>".$result['email']."</td><td>".$result['mobile_no']."</td><td>".$result['occupation']."</td></tr>";
}
echo "</table>";
?>
</div>
</center>
</body>
</html>
