<?php
include 'db_connect.php';
$id = $_GET['id'];

$sql = "UPDATE tbend_users SET verified = 'Y' WHERE user_id = '$id'";
$result = mysqli_query($db_connection, $sql);    
header("Location:table_registered.php");
exit();

mysqli_close($db_connection);
?>