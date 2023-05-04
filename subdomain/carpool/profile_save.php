<?php
include 'db_connect.php';
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$pass = $_POST['pass'];
$id = $_POST['id'];

$_SESSION['id_SAVE'] = $id;


$sql = "UPDATE tbend_users SET firstname = '$name', user_email= '$email', mobile_num = '$mobile', password = 'pass'  WHERE user_id = '$id'";
$result = mysqli_query($db_connection, $sql);    
header("Location:profile.php?id=$id");
exit();

mysqli_close($db_connection);
?>