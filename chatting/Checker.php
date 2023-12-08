<?php 
include('dbConfig.php');
session_start();
if(!($_SESSION['email'] && $_SESSION['password'])){
	header('Location: ../../Default pages/Login and Signup Form with Email Verification - PHP/login-user.php');
 }

$email=$_SESSION['email'];
$sql="SELECT * FROM usertable WHERE email='$email'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

if (!empty($row['role'])) {
	if ($row['role']=="Active") {
		header('Location: ../../Admin pages/index.php');
		}else{
		header('Location: chatBot.php');
		}
	}else{
		header('Location: chatBot.php');
		}
 ?>