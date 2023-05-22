<?php
include 'db_connect.php';
session_start();
$id=$_GET['id'];

$_SESSION['id3'] = $id;
$id3 = $_SESSION['id3'];



$sql2= "SELECT * FROM tbcar WHERE car_id = '$id'";
$result2 = mysqli_query($db_connection, $sql2);
$row2 = mysqli_fetch_assoc($result2);
$id2 = $row2['user_id'];


$sql4="SELECT * FROM tbcar WHERE user_id = '$id2' AND status = 'Approved'";
$result4 = mysqli_query($db_connection, $sql4);
$row4 = mysqli_fetch_assoc($result4);
if($row4 = $result4->fetch_assoc()){
    $sql1="UPDATE tbcar SET status = 'Approved' WHERE car_id = '$id3'";
    $result1 = mysqli_query($db_connection, $sql1);
}else{
 
    $sql1="UPDATE tbcar SET status = 'Approved' WHERE car_id = '$id3'";
    $result1 = mysqli_query($db_connection, $sql1);

    $sql2="UPDATE tbend_users SET balance = balance + 40, user_type = 'Driver' WHERE user_id = '$id2'";
    $result2 = mysqli_query($db_connection, $sql2);


}


header("Location:landing_page_admin.php");

?>