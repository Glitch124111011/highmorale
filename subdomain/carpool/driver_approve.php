<?php
include 'db_connect.php';

$id=$_GET['id'];

$sql="SELECT * FROM tbend_users WHERE verified = 'Y' AND user_type = 'Driver'";
$result = mysqli_query($db_connection, $sql);
$row = mysqli_fetch_assoc($result);


$sql1="UPDATE tbcar SET status = 'Approved' WHERE driver_id = '$id'";
$result1 = mysqli_query($db_connection, $sql1);

header("Location:landing_page_admin.php");

?>