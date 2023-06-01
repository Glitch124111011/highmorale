<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>High Morale Dashboard</title>
  <!-- Favicon -->
 
  <!-- Custom styles -->
  <link rel="stylesheet" href="./css_admin/style.min.css">

</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
              
                <div class="logo-text">
                    <span class="logo-title">HIGH MORALE</span>
                    <span class="logo-subtitle">Dashboard</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
            <li>
            <ul class="cat-sub-menu">
                        
                        </ul>
                </li>
                
                <li>
                  <a class="" href="admin_index.php"><span class="icon home" aria-hidden="true"></span>Products</a>
                </li>
                <li>
                  <a class="active" href="upload.php"><span class="icon document" aria-hidden="true"></span>Upload</a>
                </li>
                </ul>

                
        </div>
    </div>
   
</aside>

<?php

include 'db_connect2.php';
session_start();
if (isset($_SESSION['id'])) {
$id = $_SESSION['id'];

}else{
  header("location:signin.php");
  exit();
} ?> 
  <div class="main-wrapper">
  <nav class="main-nav--bg">
  <div class="container main-nav">
    <h1>Admin</h1>
    <div class="main-nav-start">
     
    </div>
    <div class="main-nav-end">
      <button class="sidebar-toggle black-btn" title="Menu" type="button">
        <span class="sr-only">Toggle menu</span>
        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
      </button>
     
      <!-- <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
        <span class="sr-only">Switch theme</span>
        <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
        <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
      </button> -->
     
      <div class="nav-user-wrapper">
        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
          <span class="sr-only">My profile</span>
          <span class="nav-user-img">
            <picture><source srcset="icon.jpg" type="image/webp"><img src="icon.jpg" alt="User name"></picture>
          </span>
        </button>
        <ul class="users-item-dropdown nav-user-dropdown dropdown">
        
          <li><a class="danger" href="logout.php">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Log out</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
  <div class="main-wrapper">
    <div style="padding-left:100px;">
    <br>
    <center><h1>Upload Product/s</h1></center>
    <br>
    <h4> <i>Recommended image Orientation is Square*</i></h4>
    <form method="post" action="upload_process.php" enctype="multipart/form-data">
    <table>
      <tr>
      <td>
        <label >Category:</label>
          </td>
          <td style="width:200px;"></td>
        <td>
        <select id="cat" name="cat">
          <option value="T-Shirt">T-Shirt</option>
          <option value="Shorts">Shorts</option>
          <option value="Hat">Hat</option>
          <option value="Lanyard">Lanyard</option>
          <option value="Sticker">Sticker</option>
        </select><br><br>
        </td>
        </tr>
       
      
          <tr>
            <td>
        <label>Product Name:</label>
          </td>
          <td style="width:200px;"></td>
            <td>
        <input type="text" name="name" id="name" required><br><br>
          </td>
          </tr>
          <tr>
          <td>
        <label>Image:</label>
        </td>
        <td style="width:200px;"></td>
        <td>
        <input type="file" name="img" id="img" required>
        </td>
        </tr>
        <?php if (isset($_GET['error'])): ?>
		      <p><?php echo $_GET['error']; ?></p>
          <?php endif ?><br><br>
          <tr>
          <td>
        <label>Price:</label>
        </td>
        <td style="width:200px;"></td>
      <td>
        <input type="text" name="price" id="price" required><br><br>
        </td>
        <tr>
        <td>
        <label>Details:</label>
        </td>
        <td style="width:200px;"></td>
        <td>
        <input style="width:400px;height:100px;"type="text" name="detail" id="detail" required><br><br>
        </td>
        </tr>
        <tr>
        <td>
        <label>Shoppee Link:</label>
        </td>
        <td style="width:200px;"></td>
        <td>
        <input style="width:400px;" type="text" name="link" id="link" required><br><br>
        </td>
        </tr>
        <td style="width:200px;"></td>
        <tr>
        <td>
        <input type="Submit" name="submit" value="Submit">
        </td>
        </tr>
    </form>
</div>
  
            
          </div>
          
    <!-- ! Footer -->
    
  </div>
</div>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
</body>

</html>