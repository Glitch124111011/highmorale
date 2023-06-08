<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	 <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="css/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css3/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css3/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css3/owl.carousel.min.css">
	<link rel="stylesheet" href="css3/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css3/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css3/style.css">

	</head>
	<header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="../index.php">
            <img src="images/logo.png" style="width: 20%;height: auto;" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="../index.php">
                    Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="../prod.php" >
                    Products
                  </a>
                
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../index.php #message-section"> Contact</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
	<body>
	
	<?php
	include '../db_connect2.php';
	$id = $_GET['id'];
	$sql= "SELECT * FROM product WHERE product_id = '$id'";
	$result = mysqli_query($db_connection, $sql);
	$row = mysqli_fetch_assoc($result);
	 
   echo "<div class='colorlib-product'>
   <div class='container'>
	   <div class='row row-pb-lg product-detail-wrap'>
		   <div class='col-sm-8'>
	   
				   <div class='item'>
					   <div class='product-entry border'>
						   <a href='#' class='prod-img'>
							   <img style='width:600px;height:600px;' src='../uploads/$row[product_img]' class='img-fluid' alt=''>
						   </a>
					   
				   </div>
				   
			   </div>
		   </div>
		   <div class='col-sm-4'>
			   <div class='product-desc'>
				   <h1>$row[product_name]</h1>
				   <p class='price'>
					   <span>₱ $row[price]</span> 
					   
				   </p>
				   <p>$row[details].</p>
				   <br>
				   <span style='border:solid black 1px;padding:10px 20px 10px 20px;'>S</span>
				   <span style='border:solid black 1px;padding:10px 20px 10px 20px;'>M</span>
				   <span style='border:solid black 1px;padding:10px 20px 10px 20px;'>L</span>
				   <br>
				   <br> <br>
			 <div class='row'>
				 <div class='col-sm-12 text-center'>
						   <p class='addtocart'><a href='$row[shoppee_link]' target='_blank' class='btn btn-primary btn-addtocart'><i class='icon-shopping-cart'></i> Add to Cart</a></p>
					   </div>
				   </div>
			   </div>
		   </div>
	   </div>

	   
   </div>
</div>
</div>";
   ?>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
   <!-- popper -->
   <script src="js/popper.min.js"></script>
   <!-- bootstrap 4.1 -->
   <script src="js/bootstrap.min.js"></script>
   <!-- jQuery easing -->
   <script src="js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>


	</body>
</html>

