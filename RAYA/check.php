<?php
session_start();

$con = mysqli_connect("localhost","root","","raya_db");

if (isset($_POST['sub'])) 
{
	$user = $_SESSION['user'];
	$name = $_POST['pname'];
	$price = $_POST['price'];
	$type = $_POST['type'];
	$image = $_POST['himage'];
	
  	$insert = "INSERT INTO orders (name,user,price,type,image) VALUES ('$name','$user','$price','$type','$image')";
	$res1 = $con->query($insert);

	$balance = "SELECT balance FROM users WHERE name = '$user'";
	$res = $con->query($balance);

	while($row=mysqli_fetch_assoc($res))
	{
		$balance1 = $row['balance'];
	}

	if ($price < $balance1) 
	{
		$update = "UPDATE users SET balance = ($balance1 - $price)  WHERE name = '$user'";
		$res2 = $con->query($update);
		
		if(!$res1 || !$res2)
		{
			echo "Error: " . $insert . "<br>" . $con->error;
		}
		else
		{
			header("Location: http://localhost/RAYA/index.php");
		}
	}
	else
	{
		echo "<script>alert('Balance Insuffient')</script>";
		header("Location: http://localhost/RAYA/cartcheck.php");
	}
	
}

$con->close();
?>