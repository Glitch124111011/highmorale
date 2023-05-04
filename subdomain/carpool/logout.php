<?php
session_start();
include 'db_connect.php';

$id = $_SESSION['id'];
$on = "UPDATE tbend_users SET status = 'Offline' WHERE user_id='$id'";
$query_ob = mysqli_query($db_connection, $on);

unset($_SESSION['id']);
header("location:login.html");
?>