<?php
include 'db_connect.php';

$id = $_GET['id'];

$sql1 = "UPDATE tbend_users SET verified = 'Y', balance = '$row[balance]' + 10 WHERE user_id = '$id'";
$result = mysqli_query($db_connection, $sql1);    
header("Location:login.html");
exit();

mysqli_close($db_connection);
?>