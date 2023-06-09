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
<script>
    function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
  </head>
<body style="background: -webkit-linear-gradient(left, #3931af, #00c6ff); ">
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
                  
                <a href='landing_page.php' class='logo'>
                        <h1>CARPOOL</h1>
                    </a>      
                    <ul class="nav">
                      <li><a href='landing_page.php' >Home</a></li>
                      <li><a href="#">Contact Us</a></li>
                      <li><a href='profile.php' class='active'>My Profile</a></li>
                      <li><a href='car_list.php'>My Cars</a></li>
                      <?php if($row['id_num'] == null){
                        echo "<li style='background-color:rgba(0,0,0,0.4);border-radius: 25px; '> <a href='car_register_license.php'>Register a Car</a> </li>";
                        }else{
                          echo "<li style='background-color:rgba(0,0,0,0.4);border-radius: 25px; '> <a href='car_register.php'>Register a Car</a> </li>";
                        }?>
                      <li><a href="logout.php>">Log out</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    
                </nav>
            </div>
        </div>
    </div>
  </header>
    
          <div class="row gutters-sm" style="padding-top:10%;">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $row['firstname'] ." ".$row['lastname'];?></h4>
                      <p class="text-secondary mb-1"><?php echo $row['user_type'];?></p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p><br>
                      <h3 style="color:#0171f9;"><?php echo "PHP ".$row['balance'];?></h3><br>
                   
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mt-3">
              </div>
            </div>

            <div class="col-lg-8">
              <form method="post" action="profile_save.php">
<div class="card">
<div class="card-body">
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">First Name</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" name="fname" class="form-control" value="<?php echo $row['firstname']; ?> " >
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Last Name</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" name="lname" class="form-control" value="<?php echo $row['lastname'];?>" >
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Email</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" name="email"class="form-control" value="<?php echo $row['user_email'];?>">
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Mobile</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text" name="mobile" class="form-control" value="<?php echo $row['mobile_num'];?>">
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Password</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="password" name="pass" id="pass" class="form-control" value="<?php echo $row['password'];?>">
<input type="button" onclick="myFunction()" value="Show"> 
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">License Number</h6>
</div>
<div class="col-sm-9 text-secondary">
<input type="text"  class="form-control" value="<?php echo $row['id_num'];?>" disabled>
</div>
</div>
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-9 text-secondary">
<input type="hidden" name="id" class="btn btn-primary px-4" value="<?php echo $id2 ?>">
<input type="submit" class="btn btn-primary px-4" value="Save Changes">
</div>
</div>
</div>
</div>
</form>

               
</body>
</html>