<?php
include 'db_connect.php';
session_start();
$id = $_SESSION['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$pass = $_POST['pass'];

$sql = "UPDATE tbend_users SET firstname = '$fname',lastname = '$lname', user_email= '$email', mobile_num = '$mobile', password = '$pass'  WHERE user_id = '$id'";
$result = mysqli_query($db_connection, $sql);    
header("Location:profile.php");
exit();

mysqli_close($db_connection);
?>