<?php
include 'db_connect.php';
session_start();
$id = $_GET['id'];

$sql = "UPDATE product SET status ='Archived' WHERE product_id = '$id';";
$result = mysqli_query($db_connection, $sql);  

header("Location:admin_index.php");


?>