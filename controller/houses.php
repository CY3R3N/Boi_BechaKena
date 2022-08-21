<!DOCTYPE html>
<html lang="en">
<head>
    <title>House Rental Management System</title>
   <link rel="stylesheet" type="text/css" href="../view/m1.css">
   
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  

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
                        <a href="../view/home.html" style="color:rgb(37, 36, 36);">Home <span class="sr-only">(current)</span></a>
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
                    <li><a href="index.html" style="color:rgb(37, 36, 36);"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
                </ul>
            </div>
        </nav>
        
    <a href="../view/addhouse.html" class='btn btn-primary' style="background-color: rgb(243, 118, 211);">Add House</a>

    </div>


<div class="container">
  <br>
  <table border="2" id="customers">
    <tr>
      <th>House ID</th>
      <th>Owner ID</th>
      <th>No of rooms</th>
      <th>Address</th>
      <th>City</th>
      <th>Rate for rent</th>
      <th>Pics of the house</th>
    </tr>
<?php
include("connection.php");
$query="select * from house";
$data=mysqli_query($conn,$query);
while($result=mysqli_fetch_assoc($data))
{
  echo "<tr><td>".$result['id']."</td><td>".$result['owner_id']."</td><td>".$result['no_of_rooms']."</td><td> ".$result['address']."</td><td>";
echo  $result['city']."</td><td>".$result['rate']."</td><td>";
echo '<img src="data:pics/jpeg;base64,'.base64_encode( $result['pics'] ).'"/>';
echo "</td></tr>";
}
echo "</table>";
?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
