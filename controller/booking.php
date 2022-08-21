<!DOCTYPE html>
<html lang="en">
<head>
  <title>House Rental Management System</title>
    <link rel="stylesheet" type="text/css" href="../view/m1.css">

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
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
                        <a href="../view/home2.html" style="color:rgb(37, 36, 36);">Home <span class="sr-only">(current)</span></a>
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
                    <li><a href="signup.html" style="color:rgb(37, 36, 36);"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>&nbsp; &nbsp;
                    <li><a href="signin.html" style="color:rgb(37, 36, 36);"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
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
    
  <table border="1" id="customers">
    <tr>
      <th>Rentar ID</th>
      <th>House ID</th>
      <th>Booking Date</th>
      <th>Period</th>
      <th>Rent</th>
    
    </tr>
<?php
include("connection.php");
$query="select * from booking";
$data=mysqli_query($conn,$query);
while($result=mysqli_fetch_assoc($data))
{
 echo "<tr><td>".$result['t_id']."</td><td>".$result['h_id']."</td><td>".$result['booking_date']."</td><td>".$result['period']."</td><td>".$result['price']."</td>";
 #echo "<a href='v.php?tid=".$result['t_id']."&hid=".$result['h_id']."'>View File</a>";
 #echo "</td></tr>";
}
echo "</table>";
?>
</div>
</body>
</html>
