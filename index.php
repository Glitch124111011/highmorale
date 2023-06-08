<!DOCTYPE html>
<html lang="en">

<head>
<link rel = "icon" href = "images/logo3.png" type = "image/x-icon">
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

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

<body>
  <div class="hero_area">
    <!-- header section strats -->
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
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">
                    Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                 
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="prod.php" >
                    Products
                  </a>
                 
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#message-section"> Contact</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1 >
                     
                      <br />
                      <div class="slider_txt2">
                      <span class="slider_txt" style="border: 1px;border-color: black;">
                        SPREAD<br>POSITIVITY
                      </span>
                    </h1>
                    <p class="slider_txt3">
                      Our collections are inspired by the latest fashion trends and are designed to be both timeless and versatile, so you can wear them season after season. 
                    </p>
                    <div class="btn-box slider_txt3">
                      <a href="#about_section" class="btn-1">
                        Read More
                      </a>
                      <a href="#message-section" class="btn-2">
                        Contact us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
    </section>
    <!-- end slider section -->
  </div>

  <!-- offer section -->
  <br>
  <br>
  <br>
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

 $sql="SELECT * FROM product WHERE status = 'N' ORDER BY product_id DESC LIMIT 7   ";
 $result = mysqli_query($db_connection, $sql);
 $row = mysqli_fetch_assoc($result);
  while($row = $result->fetch_assoc()) {
     echo "<div class='col-lg-4'>
     <div  class='item'>
         <div class='thumb'>
             <div class='hover-content'>
                 <ul>
                     <li><a href='single_product/product-detail.php?id=$row[product_id]'><i class='fa fa-eye'></i></a></li>
                 </ul>
             </div>
             <img style='width:350px;height:370px;border:solid black 0px;border-radius:25px;' src='uploads/$row[product_img]' alt=''>
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
          <center><a href="prod.php"><button>SEE MORE</button></a></center>
          <br><br><br><br>
  <!-- about section -->
  <section class="about_section " id="about_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-5 col-lg-4">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                A Few words about us
              </h2>
            </div>
            <p style="font-size:20px;">
              High Morale has grown into a thriving clothing brand that is recognized for its high-quality, on-trend designs. At High Morale, we believe that fashion is not just about looking good, but also about feeling good. That's why we use only the finest materials and work with the best manufacturers to ensure that our clothing is comfortable, durable, and stylish.
            </p>
            <div>
              <!-- <a href="">
                Read More
              </a> -->
            </div>

          </div>
        </div>
      </div>
    </div>


  </section>

  <!-- end about section -->

<!-- contact section -->

<section class="contact_section layout_padding" id="message-section">
  <div class="container ">
    <div class="heading_container ">
      <h2 class="">
        <span>
        Send
        
          Us a message
        </span>

      </h2>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 ">
        <form method="post" action="mail.php">
          <div>
            <input type="text" id="name" name="name" placeholder="Name" />
          </div>
          <div>
            <input type="email" id="email" name="email" placeholder="Email" />
          </div>
          <div>
            <select style="border-radius:25px;margin-bottom: 25px;width: 100%;padding-left: 25px;height: 50px;" id="subject" name="subject">
            <option value="" disabled selected>Select Subject</option>
          <option value="Inquiry">Inquiry</option>
          <option value="Report">Report</option>
          <option value="Feedback">Feedback</option>
          <option value="Suggestions">Suggestions</option>
          
        </select>
          </div>
          <div>
            <input type="text" id="message" name="message" class="message-box" placeholder="Message" />
          </div>
          <div class="d-flex  mt-4 ">
            <input style="background-color: rgb(43, 43, 43);color: white;" type="submit" value="Send">
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <!-- map section -->
        <div class="map_section">
          <div id="map" class="w-100 h-100"></div>
        </div>

        <!-- end map section -->
      </div>
    </div>
  </div>
</section>

<!-- end contact section -->
  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_form">

      

      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_logo">
            <div>
              <a href="">
                <img src="images/logo.png" style="width: 50%; height: auto;" alt="" />
              
              </a>
            </div>
            <p style="color:white;">
            HIGH MORALE CLO. a brand, made for us to express our positive emotions and aim to spread positivity.
   
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links ">
            <h5>
              Contact Us
            </h5>
            <p style="color:white;" class="pr-0 pr-md-4 pr-lg-5">
            <a href="#message-section">Contact</a><br>
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_insta">
            <h5>
              INFORMATION
            </h5>
            <p style="color:white;" class="pr-0 pr-md-4 pr-md-5">
            High morale can be described as a positive attitude, emotion, and a high satisfaction level towards everything that is happening in our lives. "POSITIVE MINDSET POSITIVE LIFE"

This brand was made for us to express our Positive Emotions 
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="pl-0 pl-lg-5 pl-md-4">
            <h5>
              ACCOUNT

            </h5>
            <p style="color:white;">
              <a href="signin.php" target="_blank">Admin</a><br>
              <a href="https://www.facebook.com/highmoraleclo" target="_blank">Facebook</a><br>
              <a href="https://www.tiktok.com/@highmoraleclothing" target="_blank">Tiktok</a><br>
              <a href="https://shopee.ph/highmoraleclothing" target="_blank">shoppee</a><br>
            </p>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
   
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var coordinates = { lat: 15.125972201086691, lng: 120.95996416778316 };
    var map = new google.maps.Map(document.getElementById('map'), {
      center: coordinates,
      zoom: 15
    });
  
    // Add a marker to the map at the specified coordinates
    var marker = new google.maps.Marker({
      position: coordinates,
      map: map,
      title: 'Location'
    });
  }
  </script>
  <!-- google map js -->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->

  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
</body>

</html>