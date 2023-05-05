<?php
include 'db_connect.php';
session_start();

$email = $_POST["email"];
$pass = $_POST["pass"];

$sql = "SELECT * FROM tbend_users WHERE user_email = '$email' AND password = '$pass' AND verified = 'Y'";
$result = mysqli_query($db_connection, $sql);  
$row = mysqli_fetch_assoc($result);
$id = $row["user_id"];

$sql1="UPDATE tbend_users SET status = 'Online' WHERE user_id = '$id'";
$result1 = mysqli_query($db_connection, $sql1);

$_SESSION['id'] = $id;
if($row['user_type'] == "Admin"){
    
    header("Location:landing_page_admin.php");
}
else if($row['user_type'] == "Passenger" ){
    header("Location:landing_page.php");
}else if($row['user_type'] == "Driver" ){
    header("Location:landing_page.php");
}
else{
    header("Location:login.html");
}

?>