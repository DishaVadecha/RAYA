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
            .inline
            {
                font-family: "Poppins", Arial, sans-serif;
            }
            select 
            {
				width: 100%;
				padding: 16px 8px;
				border: none;
				border-radius: 4px;
				background-color: #ffffff;
				font-family: "Lora", Georgia, serif;
			}
        </style>
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
                </ul>
                </div>
            </div>
        </nav>
        <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
            <div class="container py-4">
                <div class="row d-flex justify-content-center py-5" style="padding-bottom: 0rem !important; padding-top: 2rem !important">
                    <h2 style="color:#82ae46" class="inline">Add Item</h2>
                </div>
                <div class="row d-flex justify-content-center py-5">
                    <div class="col-md-6 d-flex align-items-center">
                        <form action="add.php" class="subscribe-form" method="post" name="f1" id="f1" enctype="multipart/form-data">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                            </div>
                            <div class="form-group d-flex">
                                <input type="number" class="form-control" placeholder="Price in &#8377;" name="price" id="price">
                            </div>
                            <div class="form-group d-flex">
                                <input type="text" class="form-control" placeholder="Select the type" disabled>
                                <select name="type" id="type" value="type" name="type">
									<option value="floral">Floral Bouquets</option>
									<option value="chocolate">Chocolate Bouquets</option>
									<option value="babyshower">Baby Shower Packing</option>
									<option value="giftpacking">Gift Packing</option>
									<option value="trousseau">Trousseau Packing</option>
								</select>
                            </div>
                            <div class="form-group d-flex">
                                <input type="text" class="form-control" placeholder="Select the photo to upload" disabled>
                                <input type="file" class="form-control" placeholder="Image" name="image" id="image">
                            </div>
                            <div class="form-group d-flex">
                            	<input type="text" class="form-control" disabled style="height: 20px !important;">
                            	
                            	<input type="submit" name = "sub" id="sub" value="Submit" class="submit px-3 justify-content-center" style="padding: 0 3rem !important">
                            	
                            	<input type="button" name = "can" id="can" value="Cancel" class="submit px-3 justify-content-center" style="padding: 0 3rem !important; margin-left: 20px;" onclick="window.location='index.php'">
                            	
                            	<input type="text" class="form-control" disabled>
                        	</div>
                        	<div class="form-group d-flex">
                            	<input type="text" class="form-control" disabled style="height: 20px !important;">
                        	</div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <footer class="ftco-footer ftco-section" style="padding: 5em">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="index.php" target="_blank">RAYA</a>
                              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <div id="ftco-loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
            </svg>
        </div>

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