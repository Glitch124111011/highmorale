<?php
include 'db_connect.php';

$license = $_POST['license'];
$car_type = $_POST['car_type'];
$car_model = $_POST['car_model'];
$color = $_POST['color'];
$platenum = $_POST['plate'];
$VIN = $_POST['vin'];

$id = $_POST['id'];

$sql = "INSERT INTO tbcar (driver_id,plate_num,car_type,model,color,VIN,status) VALUES ('$id', '$platenum' ,'$car_type','$car_model','$color', '$VIN','Pending')";
$result = mysqli_query($db_connection, $sql);  



$sql1="UPDATE tbend_users SET user_type = 'Driver', id_num = '$license' WHERE user_id = '$id'";
$result1 = mysqli_query($db_connection, $sql1);
header("Location:car_list.php?id=$id");
exit();
?>