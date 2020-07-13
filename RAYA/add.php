<?php
session_start();

$con = mysqli_connect("localhost","root","","raya_db");

if (isset($_POST['sub'])) 
{
	$_name = $_FILES['image']['name'];
	$target_dir = "upload/";
  	$target_file = $target_dir . basename($_FILES["image"]["name"]);

  	$name = $_POST['name'];
	$price = $_POST['price'];
	$type = $_POST['type'];
	$fname = "images/";
	$iname = $fname.$_name;
  	
  	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $extensions_arr = array("jpg","jpeg","png","gif");

    if(in_array($imageFileType,$extensions_arr) )
    {
    	$insert = "INSERT INTO product (name,price,type,image) VALUES ('$name','$price','$type','".$iname."')";
    	$res = $con->query($insert);
		
		if(!$res)
		{
			echo "Error: " . $insert . "<br>" . $con->error;
		}
		else
		{
			header("Location: http://localhost/RAYA/index.php");
		}
	}
}

$con->close();
?>