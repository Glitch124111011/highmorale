<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Carpool App</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
<?php

include 'db_connect.php';
session_start();
$id = $_GET['id'];
$_SESSION['id'] = $id;
$id2 = $_SESSION['id'];

$sql = "SELECT * FROM tbend_users WHERE user_id = '$id2'";
$result = mysqli_query($db_connection, $sql);  
$row = mysqli_fetch_assoc($result);
?>
 <?php 
                           if ($_SESSION['id']) {
                           }else{
                              header("location:login.html");
                              exit();
                           } ?>
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                  
                    <a href="#" class="logo">
                        <h1>CARPOOL</h1>
                    </a>      
                    <ul class="nav">
                      <li><a href="#" class="active">Home</a></li>
                      <li><a href="#">Contact Us</a></li>
                      <li><?php echo "<a href='profile.php?id=$id2'>My Profile</a>" ?></li>
                      <li><?php echo "<a href='car_list.php?id=$id2'>My Cars</a>" ?></li>
                      <?php if($row['id_num'] == null){
                        echo "<li style='background-color:rgba(0,0,0,0.4);border-radius: 25px; '> <a href='car_register_license.php?id=$id2'>Register a Car</a> </li>";
                        }else{
                          echo "<li style='background-color:rgba(0,0,0,0.4);border-radius: 25px; '> <a href='car_register.php?id=$id2'>Register a Car</a> </li>";
                        }?>
                     
                      <li><?php echo "<a href='logout.php?id=$id2'>"?>Log out</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    
                </nav>
            </div>
        </div>
    </div>
  </header>
 

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">

        
           <?php echo "<h6>Welcome ".$row['firstname']." ".$row['lastname']."</h6>"; ?>
            <h2>BEST CARPOOL SITE EVER!</h2>
            <p>LUGX Gaming is free Bootstrap 5 HTML CSS website template for your gaming websites. You can download and use this layout for commercial purposes. Please tell your friends about TemplateMo.</p>
           
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="right-image">
          <img style="height: 50%;width: 100%;padding-top:50px;"src="car.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>


  <footer>
    <div class="container">
      <div class="col-lg-12">
    
    </div>
  </footer>
  </body>
</html>