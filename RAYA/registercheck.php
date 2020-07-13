<?php
session_start();

$con = mysqli_connect("localhost","root","","raya_db");

if (isset($_POST['sub'])) 
{
	$name = $_POST['name'];
	$town = $_POST['town'];
	$email = $_POST['eid'];
	$password = $_POST['pwd'];
	$balance = 2000;

    $insert = "INSERT INTO users (name,town,email,password,balance) VALUES ('$name','$town','$email','$password','$balance')";
	$res = $con->query($insert);
	
	$insert2 = "INSERT INTO login (username,password) VALUES ('$name','$password')";
	$res2 = $con->query($insert2);

	if(!$res || !$res2)
	{
		echo "Error: " . $insert . "<br>" . $con->error;
	}
	else
	{
		header("Location: http://localhost/RAYA/index.php");
	}
}


$con->close();
?>