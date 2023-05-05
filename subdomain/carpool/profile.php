<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='profile.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Carpool App</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  </head>
<body style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);">
<?php 
    include 'db_connect.php';
    session_start();
    $id = $_SESSION['id']; 


    $sql = "SELECT * FROM tbend_users WHERE user_id = '$id'";
    $result = mysqli_query($db_connection, $sql);  
    $row = mysqli_fetch_assoc($result);
?>

<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                  
                    <?php echo "<a href='landing_page.php?id=$id' class='logo'>" ?>
                        <h1>CARPOOL</h1>
                    </a>      
                    <ul class="nav">
                      <li><a href="landing_page.php">Home</a></li>
                      <li><a href="#">Contact Us</a></li>
                      <li><a href="profile.php" class='active'>My Profile</a></li>
                      <li><a href="car_list.php">My Cars</a></li>
                      <?php if($row['id_num'] == null){
                        echo "<li style='background-color:rgba(0,0,0,0.4);border-radius: 25px; '> <a href='car_register_license.php'>Register a Car</a> </li>";
                        }else{
                          echo "<li style='background-color:rgba(0,0,0,0.4);border-radius: 25px; '> <a href='car_register.php'>Register a Car</a> </li>";
                        }?>
                      <li><a href='logout.php'>Log out</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    
                </nav>
            </div>
        </div>
    </div>
  </header>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm" style="padding-top:10%;">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4> <?php echo $row['firstname'] ." ".$row['lastname'];?></h4>
                      <p class="text-secondary mb-1"><?php echo $row['user_type'];?></p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                      <br>
                    <h3 style="color:#0171f9;"><?php echo "PHP ".$row['balance'];?></h3><br>
                    <button class="btn btn-primary">Reload</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
              
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">First Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['firstname'];?>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Last Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row['lastname'];?>
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['user_email'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['mobile_num'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      **********
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">License Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $row['id_num'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class='btn btn-info' target='__blank' href='profile_change.php'>Edit</a>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
</body>
</html>