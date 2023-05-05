<?php
include 'db_connect.php';
session_start();
$id = $_SESSION['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$pass = $_POST['pass'];

$sql = "UPDATE tbend_users SET firstname = '$name', user_email= '$email', mobile_num = '$mobile', password = '$pass'  WHERE user_id = '$id'";
$result = mysqli_query($db_connection, $sql);    
header("Location:profile.php?id=$id");
exit();

mysqli_close($db_connection);
?>