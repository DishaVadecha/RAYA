<?php 
session_start();
if(empty($_SESSION['user']))
{
    header("Location: http://localhost/RAYA/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RAYA BOUQUETS</title>
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
                height: 280px;
            }
        </style>

        <script type="text/javascript">
        function incrementValue()
        {
            var c = parseInt(document.getElementById('cartval').textContent);
            c = c + 1;
            document.getElementById('cartval').textContent = c;
        }
        </script>


    </head>
    <body class="goto-here">
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
            <a class="navbar-brand" href="index.php">Raya Bouquets</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bouquets</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="floral.php">Floral Bouquets</a>
                        <a class="dropdown-item" href="chocolate.php">Chocolate Bouquets</a>
                        <a class="dropdown-item" href="babyshower.php">BS Packing</a>
                        <a class="dropdown-item" href="trousseau.php">Trousseau Packing</a>
                        <a class="dropdown-item" href="giftpacking.php">Gift Packing</a>
                    </div>
                </li>

                <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                <li class="nav-item"><a href="reviews.html" class="nav-link">Reviews</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="cartcheck.php" class="nav-link"><span><i class="ion-ios-cart"></i></span>[<span id="cartval">0</span>]</a></li>
                <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                </ul>
                </div>
            </div>
        </nav>

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-3 pb-3">
                    <div class="col-md-12 heading-section text-center ftco-animate">
                        <h2 class="mb-4">Products</h2>
                        <span class="subheading">Trousseau Packing</span>
                    </div>
                </div>          
            </div>
                
            <div class="container">
                <div class="row">
                    <?php

                    $con=mysqli_connect("localhost","root","","raya_db");
                    if ($con) 
                    {
                    }
                    $sql = "select * from product where type = 'trousseau'";

                    $res = $con->query($sql);

                    while($row=mysqli_fetch_assoc($res))
                    {
                    ?>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="#" class="img-prod"><img class="img-fluid img-check" src="<?php echo $row['image'] ?>" alt="Floral">
                                <span class="status"></span>
                                <div class="overlay"></div>
                            </a>

                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#"><?php echo $row['name'] ?></a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span class="mr-2 price-dc"></span><span class="price-sale">&#8377; <?php echo $row['price'] ?></span></p>
                                    </div>
                                </div>
                            
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1" onclick="incrementValue()">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>
                                        <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="ion-ios-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                    } 
                ?>
                </div>
            </div>
            <p class="condition">* Implies Per Packing </p>
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
    
  </body>
</html>