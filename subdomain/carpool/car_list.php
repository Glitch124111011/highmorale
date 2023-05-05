<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <style>
        body{
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        }
        .styled-table {
           
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }.styled-table thead tr { 
       
        background-color: #0171f9;
        color: #ffffff;
        text-align: left;
    }.styled-table th,
    .styled-table td {
       
        padding: 12px 15px;
    }.styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }.styled-table tbody tr:nth-of-type(odd) {
        background-color: white;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #0171f9;
    }.styled-table tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }
    </style>
</head>
<body>
<?php 
 include 'db_connect.php';
 session_start();
 $id = $_SESSION['id'];

 $sql = "SELECT * FROM tbend_users WHERE user_id = '$id'";
 $result = mysqli_query($db_connection, $sql);  
 $row = mysqli_fetch_assoc($result);
?>

<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                  
                <a href='landing_page.php' class='logo'>" ?>
                        <h1>CARPOOL</h1>
                    </a>      
                    <ul class="nav">
                      <li><a href="landing_page.php">Home</a></li>
                      <li><a href="#">Contact Us</a></li>
                      <li><a href="profile.php">My Profile</a></li>
                      <li><a href="car_list.php" class='active'>My Cars</a></li>
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

 
    <center>
        <br><br><br><br><br><br><br>
        <div>
        <table class="styled-table" >
            <thead>
                <tr>
                    
                    <th>Type</th>
                    <th>Model</th>
                    <th>Color</th>
                    <th>Plate Number</th>
                    <th>VIN Number</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include 'db_connect.php';
            $sql2="SELECT * FROM tbcar WHERE driver_id = $id";
            $result2 = mysqli_query($db_connection, $sql2);
            $row2 = mysqli_fetch_assoc($result);
            while($row2 = $result2->fetch_assoc()) {
            echo "<tr><td>" . $row2["car_type"]. "</td><td>" . $row2["model"] . "</td><td>"
             . $row2["color"]. "</td><td>".$row2["plate_num"]."</td><td>".$row2["VIN"]."</td><td>".$row2["status"]."</td></tr>";
          }
            
          ?>
                <!-- and so on... -->
            </tbody>
        </table>
        </div>
        </center>
   
      
</body>
</html>