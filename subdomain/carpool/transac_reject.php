<?php
include 'db_connect.php';

$id=$_GET['id'];

$sql1="UPDATE tbreload SET status = 'Rejected' WHERE user_id = '$id'";
$result1 = mysqli_query($db_connection, $sql1);

header("Location:landing_page_admin.php");

?>