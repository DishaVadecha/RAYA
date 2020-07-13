<?php
session_start();

$username = $_POST['uid'];
$password = $_POST['pwd'];

$con=mysqli_connect("localhost","root","","raya_db");

if ($con) 
{
	print("Connected");
}

$sql = "select * from login where username= '$username' and password = '$password'";

$res = $con->query($sql);

if($res->num_rows>0)
{
	echo "\n\n\n\nWelcome";
	$_SESSION['user'] = $username;
	$_SESSION['shopping_cart'] = $username;

	header("Location: http://localhost/RAYA/index.php");
}
else
{
	echo "\n\n\n\nGet lost";
}
?>