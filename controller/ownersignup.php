<html>

<head>
    <title>House Rental Management System</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/m1.css">


</head>

<body body style="background-color:rgb(230, 242, 217);">

    
<?php
session_start();
include("connection.php");
$name=$_GET['f'];
$email=$_GET['e'];
$pwd=$_GET['p'];
$mob=$_GET['m'];
$occ=$_GET['o'];
$nhouse=$_GET['n'];
$city=$_GET['ci'];
$add=$_GET['a'];

if($_GET['submit'])
{
	if($name!="" && $email!="" && $pwd!="" && $mob!="")
	{
		$query="insert into owner(name,email,pwd,mobile_no,occupation,no_of_houses,city,address) values('$name','$email','$pwd','$mob','$occ','$nhouse','$city','$add')";
		$data=mysqli_query($conn,$query);
		if($data)

			{
				
				$_SESSION['uname']=$name;
				header('location:../view/home.html');
				echo "<script type='text/javascript'>alert('Sign up successfull')
        window.location.href='../view/home.html';
        </script>";
	        }
		else
			{
				echo "<script type='text/javascript'>alert('Sign up unsuccessfull')
        window.location.href='../view/index.html';
        </script>";
			}
	}
}
echo "1"
?>
</body>

</html>
