<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HIgh Morale Dashboard</title>
  <!-- Favicon -->
  <link rel = "icon" href = "images/logo3.png" type = "image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css_admin/style.min.css">
  <link rel="stylesheet" href="css_admin/style.min.css">
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
            <a href="admin_index.php" class="logo-wrapper" title="Home">
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
                  <a class="" href="upload.php"><span class="icon document" aria-hidden="true"></span>Add Product</a>
                </li>
                <li>
                  <a class="active" href="feedback_admin.php"><span class="icon document" aria-hidden="true"></span>Feedback</a>
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
        <li><a href="profile.php">
               <!-- <i data-feather="user" aria-hidden="true"></i> -->
               <a href="change_pass.php"><span>Change Password </span></a>
            </a></li>
          <li><a class="danger" href="logout.php">
              <i data-feather="log-out" aria-hidden="true"></i>
              <span>Log out</span>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
            <div class="users-table table-wrapper">
              <table class="posts-table">
                <thead>
                  <tr class="users-table-info">
                    <th>
                      <label class="users-table__checkbox ms-20">
                        <input type="checkbox" class="check-all">Name
                      </label>
                    </th>
                    <th>Message</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th></th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php
                   

                  $sql2="SELECT * FROM feedback " ;
                  $result2 = mysqli_query($db_connection, $sql2);
                  $row2 = mysqli_fetch_assoc($result2);
                   while($row2 = $result2->fetch_assoc()) {
                
                    echo "<tr>
                    <td>
                      <label class='users-table__checkbox'>
                        <input type='checkbox' class='check'>
                        <div  class='categories-table-img'>
                          $row2[username]
                        </div>
                      </label>
                    </td>
                    <td>
                    $row2[message]
                    </td>
                    <td>
                      <div class='pages-table-img'>
                      
                      $row2[email]
                      </div>
                    </td>
                    <td><span class='badge-pending'> $row2[subject]</span></td>
                    
                    <td>
                      <span class='p-relative'>
                        <button class='dropdown-btn transparent-btn' type='button' title='More info'>
                          <div class='sr-only'>More info</div>
                          <i data-feather='more-horizontal' aria-hidden='true'></i>
                        </button>
                        <ul class='users-item-dropdown dropdown'>
                          
                        </ul>
                      </span>
                    </td>
                  </tr>";
                   }
                  ?>
                  
                </tbody>
              </table>
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