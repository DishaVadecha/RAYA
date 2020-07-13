<?php 
session_start();
if(empty($_SESSION['user']))
{
    header("Location: http://localhost/RAYA/index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style type="text/css">
        .img-check
            {
                height: 200px;
                width: 700px;
                /*padding-right: 115px;*/
            }
    </style>

</head>
<body>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Products</h2>
            </div>
        </div>          
    </div>
        
    <div class="container">
        <div class="row">
            
	    <?php

	    $con=mysqli_connect("localhost","root","","raya_db");
	    
	    $sql = "select * from product where type = 'floral' OR type = 'chocolate' OR type = 'babyshower' OR type = 'giftpacking' OR type = 'trousseau' ORDER BY type";

	    $res = $con->query($sql);

	    while($row=mysqli_fetch_assoc($res))
	    {
	    ?>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	        <form method="post" action="cart.php" name="cartform">
	            <div class="product">
                	
		<!-- Image of the product -->
                <a href="#" class="img-prod"><img class="img-fluid img-check" src="<?php echo $row['image']?>" alt="Floral">
                    <div class="overlay"></div>
                </a>

                    
                <div class="text py-3 pb-4 px-3 text-center">
        <!-- Name of the product -->
                    <h3><a href="#"><?php echo $row['name'] ?></a></h3>
                    <div class="d-flex">

        <!-- Price of the product -->
                        <div class="pricing">
                        <p class="price"><span class="mr-2 price-dc"></span><span class="price-sale">&#8377; <?php echo $row['price'] ?></span></p>

        <!-- Type of the product -->
                            <p class="price"><span class="mr-2 price-dc"></span><span class="price-sale">
                            <?php echo $row['type'] ?></span></p>
                        </div>
                    </div>
                	
                	<input type="hidden" name="hidden_name" id="hidden_name" value="<?php echo $row['name']; ?>">
                	<input type="hidden" name="hidden_price" id="hidden_price" value="<?php echo $row['price']; ?>">
					<input type="hidden" name="hidden_type" id="hidden_type" value="<?php echo $row['type']; ?>">
					<input type="hidden" name="hidden_image" id="hidden_image" value="<?php echo $row['image']; ?>">

                    <div class="bottom-area d-flex px-3">
                        <div class="m-auto d-flex">
                            <input type="submit" name="sub" class="buy-now d-flex justify-content-center align-items-center" value="BUY NOW">
                        </div>
                    </div>
                </div>
                </div>
            </form>
            </div>
            <?php 
        }
            ?>
        </div>
    </div>
</section>

<script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="js/cart.js"></script>  
</body>
</html>