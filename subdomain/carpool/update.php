<?php
include 'db_connect.php';
$email = $_GET['email'];

$sql = "UPDATE tbend_users SET verified = 'Y' WHERE user_email = '$email'";
$result = mysqli_query($db_connection, $sql);    
header("Location:table_registered.php");
exit();

mysqli_close($db_connection);
?>