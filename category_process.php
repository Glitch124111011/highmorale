<?php
include 'db_connect2.php';
session_start(); 

$cat = $_POST["cat"];

$sql = "INSERT INTO category(cat_name) VALUES('$cat')";
$result = mysqli_query($db_connection, $sql);  

header("Location:upload.php");

?>