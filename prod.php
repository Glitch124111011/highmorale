<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High Morale</title>
  <link rel="stylesheet" type="text/css" href="css2/style.css">
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

</head>
<header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" style="width: 20%;height: auto;" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.php">
                    Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  
                </li>
                <li class="nav-item active">
                  <a class="nav-link " href="prod.php" >
                    Products
                  </a>
            
        
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php #message-section"> Contact</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
<body>
<section class="section" id="products">
 <div class="container">
     <div class="row">
         <div class="col-lg-12">
             <div class="section-heading">
                 <h2>Our Latest Products</h2>
                 <span>Check out all of our products.</span>
             </div>
         </div>
     </div>
 </div>
 <div class="container">
     <div class="row">
<?php
 include 'db_connect2.php';

 $sql="SELECT * FROM product WHERE status = 'N' AND category = 'T-Shirt'";
 $result = mysqli_query($db_connection, $sql);
 $row = mysqli_fetch_assoc($result);
  while($row = $result->fetch_assoc()) {
     echo "<div class='col-lg-4'>
     <div class='item'>
         <div class='thumb'>
             <div class='hover-content'>
                 <ul>
                     <li><a href='single_product/product-detail.php?id=$row[product_id]'><i class='fa fa-eye'></i></a></li>
                 </ul>
             </div>
             <img style='width:350px;height:370px;' src='uploads/$row[product_img]' alt=''>
         </div>
         
         <div class='down-content'>
             <h4>$row[product_name]</h4>
             <span>₱ $row[price]</span>
         </div>
         
     </div>
 </div>";
  }
     ?>
     </section>
<!-- -->
     <section class="section" id="products">
 <div class="container">
     <div class="row">
         <div class="col-lg-12">
             <div class="section-heading">
                 <h2>Shorts</h2>
                 <span></span>
             </div>
         </div>
     </div>
 </div>
 <div class="container">
     <div class="row">
<?php


 $sql="SELECT * FROM product WHERE status = 'N' AND category = 'Shorts'";
 $result = mysqli_query($db_connection, $sql);
 $row = mysqli_fetch_assoc($result);
  while($row = $result->fetch_assoc()) {
     echo "<div class='col-lg-4'>
     <div class='item'>
         <div class='thumb'>
             <div class='hover-content'>
                 <ul>
                     <li><a href='single_product/product-detail.php?id=$row[product_id]'><i class='fa fa-eye'></i></a></li>
                 </ul>
             </div>
             <img style='width:350px;height:370px;' src='uploads/$row[product_img]' alt=''>
         </div>
         
         <div class='down-content'>
             <h4>$row[product_name]</h4>
             <span>₱ $row[price]</span>
         </div>
         
     </div>
 </div>";
  }
     ?>
     </section>
<!-- -->

     <section class="section" id="products">
 <div class="container">
     <div class="row">
         <div class="col-lg-12">
             <div class="section-heading">
                 <h2>Hats</h2>
                 <span></span>
             </div>
         </div>
     </div>
 </div>
 <div class="container">
     <div class="row">
<?php


 $sql="SELECT * FROM product WHERE status = 'N' AND category = 'Hat'";
 $result = mysqli_query($db_connection, $sql);
 $row = mysqli_fetch_assoc($result);
  while($row = $result->fetch_assoc()) {
     echo "<div class='col-lg-4'>
     <div class='item'>
         <div class='thumb'>
             <div class='hover-content'>
                 <ul>
                     <li><a href='single_product/product-detail.php?id=$row[product_id]'><i class='fa fa-eye'></i></a></li>
                 </ul>
             </div>
             <img style='width:350px;height:370px;' src='uploads/$row[product_img]' alt=''>
         </div>
         
         <div class='down-content'>
             <h4>$row[product_name]</h4>
             <span>₱ $row[price]</span>
         </div>
         
     </div>
 </div>";
  }
     ?>
     </section>
<!-- -->
     <section class="section" id="products">
 <div class="container">
     <div class="row">
         <div class="col-lg-12">
             <div class="section-heading">
                 <h2>Lanyards</h2>
                 <span></span>
             </div>
         </div>
     </div>
 </div>
 <div class="container">
     <div class="row">
<?php


 $sql="SELECT * FROM product WHERE status = 'N' AND category = 'Lanyard'";
 $result = mysqli_query($db_connection, $sql);
 $row = mysqli_fetch_assoc($result);
  while($row = $result->fetch_assoc()) {
     echo "<div class='col-lg-4'>
     <div class='item'>
         <div class='thumb'>
             <div class='hover-content'>
                 <ul>
                     <li><a href='single_product/product-detail.php?id=$row[product_id]'><i class='fa fa-eye'></i></a></li>
                 </ul>
             </div>
             <img style='width:350px;height:370px;' src='uploads/$row[product_img]' alt=''>
         </div>
         
         <div class='down-content'>
             <h4>$row[product_name]</h4>
             <span>₱ $row[price]</span>
         </div>
         
     </div>
 </div>";
  }
     ?>
     </section>
<!-- -->
     <section class="section" id="products">
 <div class="container">
     <div class="row">
         <div class="col-lg-12">
             <div class="section-heading">
                 <h2>Stickers</h2>
                 <span></span>
             </div>
         </div>
     </div>
 </div>
 <div class="container">
     <div class="row">
<?php


 $sql="SELECT * FROM product WHERE status = 'N' AND category = 'Sticker'";
 $result = mysqli_query($db_connection, $sql);
 $row = mysqli_fetch_assoc($result);
  while($row = $result->fetch_assoc()) {
     echo "<div class='col-lg-4'>
     <div class='item'>
         <div class='thumb'>
             <div class='hover-content'>
                 <ul>
                     <li><a href='single_product/product-detail.php?id=$row[product_id]'><i class='fa fa-eye'></i></a></li>
                 </ul>
             </div>
             <img style='width:350px;height:370px;' src='uploads/$row[product_img]' alt=''>
         </div>
         
         <div class='down-content'>
             <h4>$row[product_name]</h4>
             <span>₱ $row[price]</span>
         </div>
         
     </div>
 </div>";
  }
     ?>
     </section>
</body>
</html>