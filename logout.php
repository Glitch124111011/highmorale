<?php
session_start();
include 'db_connect.php';
if(isset($_SESSION['id'])){
$id = $_SESSION['id'];
$on = "UPDATE user SET status = 'Offline' WHERE user_id='$id'";
$query_ob = mysqli_query($db_connection, $on);

session_destroy();
header("location:signin.php");
}
?>