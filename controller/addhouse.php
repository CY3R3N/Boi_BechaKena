<?php
session_start();
include("connection.php");
$ownerid=$_GET["o"];
$nrooms=$_GET['n'];
$rate=$_GET['ra'];
$pics=$_GET['u'];
$city=$_GET['city'];
$add=$_GET['a'];


if($_GET['submit'])
{
	if($ownerid!="" && $nrooms!="")
	{
     
		$query="insert into house(owner_id,no_of_rooms,rate,pics,city,address) values('$ownerid','$nrooms','$rate','{$pics}','$city','$add')";
		$data=mysqli_query($conn,$query);
		
		if($data)

			{
				echo "<script type='text/javascript'>alert('Added successfully')
        window.location.href='houses.php';
        </script>";
	        }
		else
			{
				echo "<script type='text/javascript'>alert('Unsuccessfull')
        window.location.href='houses.php';
        </script>";
			}
	}
}
?>