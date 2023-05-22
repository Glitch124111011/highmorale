<?php
include 'db_connect.php';
session_start();
$id = $_SESSION['id'];
$license = $_POST['license'];
$car_type = $_POST['car_type'];
$car_model = $_POST['car_model'];
$color = $_POST['color'];
$platenum = $_POST['plate'];
$VIN = $_POST['vin'];

$sql = "INSERT INTO tbcar (user_id,plate_num,car_type,model,color,VIN,status) VALUES ('$id', '$platenum' ,'$car_type','$car_model','$color', '$VIN','Pending')";
$result = mysqli_query($db_connection, $sql);  

$sql2="UPDATE tbend_users SET id_num = '$license' WHERE user_id = '$id'";
    $result2 = mysqli_query($db_connection, $sql2);

header("Location:car_list.php?id=$id");
exit();
?>