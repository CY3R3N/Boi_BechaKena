<?php
session_start();
$signupas=$_GET["s"];
 $_SESSION['ltype']=$signupas;
if($signupas=='tenant');
 {
header('Location: ../view/tenantsignup.html');
 }
if($signupas=='owner')
{
header('Location: ../view/ownersignup.html');
}
?>