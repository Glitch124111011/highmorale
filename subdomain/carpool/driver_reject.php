<?php
include 'db_connect.php';
session_start();
$id=$_GET['id'];

$_SESSION['id3'] = $id;
$id3 = $_SESSION['id3'];

$sql2= "SELECT * FROM tbcar WHERE car_id = '$id'";
$result2 = mysqli_query($db_connection, $sql2);
$row2 = mysqli_fetch_assoc($result2);
$id2 = $row2['driver_id'];

$sql1="UPDATE tbcar SET status = 'Rejected' WHERE car_id = '$id3'";
$result1 = mysqli_query($db_connection, $sql1);

header("Location:landing_page_admin.php");

?>