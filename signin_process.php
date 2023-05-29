<?php
include 'db_connect.php';
session_start();

$email = $_POST["email"];
$pass = $_POST["password"];

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$pass' AND user_type = 'Admin'";
$result = mysqli_query($db_connection, $sql);  
$row = mysqli_fetch_assoc($result);
$id = $row["user_id"];
$_SESSION['id'] = $id;
$sql1="UPDATE user SET status = 'Online' WHERE user_id = '$id'";
$result1 = mysqli_query($db_connection, $sql1);

$_SESSION['id'] = $id;
if($row['user_type'] == "Admin"){
    
    header("Location:admin_index.php");
}
else{
    header("Location:signin.php");
}

?>