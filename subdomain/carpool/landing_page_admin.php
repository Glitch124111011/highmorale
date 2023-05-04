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

    <style>
        hr{
            height: 1px;
            background-color: black; 
        }
        .one{
            width: 35.43%;
            height: 600px;
            
            display:block;
        }
        .two{
            width: 80%;
            height: 635px;
          
            display:none;
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
        <script>
            function layer1(){
                document.getElementById("lyr1").style.display = 'block';
                document.getElementById("lyr2").style.display = 'none';
                document.getElementById("lyr3").style.display = 'none';

            }function layer2(){
                document.getElementById("lyr1").style.display = 'none';
                document.getElementById("lyr2").style.display = 'block';
                document.getElementById("lyr3").style.display = 'none';
            }
            function layer3(){
                document.getElementById("lyr2").style.display = 'none';
                document.getElementById("lyr1").style.display = 'none';
                document.getElementById("lyr3").style.display = 'block';
            }function hide(){
                document.getElementById("lyr1").style.display = 'none';
                document.getElementById("lyr2").style.display = 'none';
                document.getElementById("lyr3").style.display = 'none';
            }

            function Location(){
               loc = window.prompt("Enter Meet up Location: ");
               document.getElementById(loc).innerHTML = loc;

             
            }
        </script>
  </head>
<body style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);">
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

<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                  
                    <?php echo "<a href='landing_page_admin.php?id=$id2' class='logo'>" ?>
                        <h1>CARPOOL</h1>
                    </a>      
                    <ul class="nav">
                      <li><?php echo "<a href='landing_page_admin.php?id=$id2' >Home</a>"?></li>
                      <li><a href="#">Reports</a></li>
                      
                      <li><?php echo "<a href='logout.php?id=$id2'>"?>Log out</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    
                </nav>
            </div>
        </div>
    </div>
  
    <hr>
    <center>
    <input type="button" onclick="layer1()" id="btn1" value="Passenger">
    <input type="button" onclick="layer2()" id="btn1" value="Drivers">
<br>

    <div class="one" id="lyr1">
    <table class="styled-table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User Type</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody >
    <?php
    include 'db_connect.php';
            $sql="SELECT * FROM tbend_users WHERE verified = 'Y' AND user_type = 'Passenger'";
            $result = mysqli_query($db_connection, $sql);
            $row = mysqli_fetch_assoc($result);

            
            while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["user_id"]. "</td><td>" . $row["user_type"]. "</td><td>" . $row["firstname"] . "</td><td>"
          . $row["lastname"]. "</td><td>".$row["user_email"]."</td><td>".$row["gender"]."</td></tr>";
            }
            
          ?>
  </tbody>
</table>
    </div>

    <div class="two" id="lyr2">
    <table class="styled-table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User Type</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Car Type</th>
      <th scope="col">Car Model</th>
      <th scope="col">Car Color</th>
      <th scope="col">Plate Number</th>
      <th scope="col">VIN Number</th>
      <th scope="col">Status</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody  >
    <?php
    include 'db_connect.php';
   
            $sql="SELECT * FROM tbend_users WHERE verified = 'Y' AND user_type = 'Driver'";
            $result = mysqli_query($db_connection, $sql);
            $row = mysqli_fetch_assoc($result);
        
            while($row = $result->fetch_assoc()) {
              $id = $row["user_id"];
              $sql2="SELECT * FROM tbcar WHERE driver_id = '$id'";
            $result2 = mysqli_query($db_connection, $sql2);
            $row2 = mysqli_fetch_assoc($result2);
              
          echo "<tr><td>" . $row["user_id"]. "</td><td>" . $row["user_type"]. "</td><td>" . $row["firstname"] . "</td><td>"
          . $row["lastname"]. "</td><td>".$row["user_email"]."</td><td>".$row["gender"]."</td><td>".$row2["car_type"]."</td><td>".$row2["model"]."</td><td>".$row2["color"]."</td><td>".$row2["plate_num"]."</td><td>".$row2["VIN"]."</td><td>".$row2["status"]."</td><td><a href='driver_approve.php?id=$id'><input type='button' value='Approve'></a><a href='driver_reject.php?id=$id'><input type='button' value='Reject'></a> <a href='location.php?id=$id'><input type='button'  value='Send Meetup Location'></a></td></tr>";
            }
            

            
          ?>

       
       
          
  </tbody>
</table>
    </div>
    <center>
</body>
</html>