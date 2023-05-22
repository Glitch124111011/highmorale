<?php
include 'db_connect.php';

$id=$_GET['id'];

$_SESSION['id1'] = $id;
$id1 = $_SESSION['id1'];

$sql="SELECT * FROM tbreload WHERE reloading_id = '$id1'";
$result = mysqli_query($db_connection, $sql);
$row = mysqli_fetch_assoc($result);
$id2 = $row['user_id'];

$sql3="SELECT * FROM tbend_users WHERE '$id2'";
$result3 = mysqli_query($db_connection, $sql3);
$row3 = mysqli_fetch_assoc($result3);


if($row['type'] == 'Cash In'){
    $new_amount = $row['amount'] - $row['conversion_fee'];

    $sql1="UPDATE tbreload SET transac_status = 'Approved' WHERE reloading_id = '$id1'";
    $result1 = mysqli_query($db_connection, $sql1);

    $sql2="UPDATE tbend_users SET balance = balance + $new_amount WHERE user_id = '$id2'";
    $result2 = mysqli_query($db_connection, $sql2);
}else if($row['type'] == 'Cash Out'){
    $new_amount = $row['amount'] + $row['process_fee'];

    $sql2="UPDATE tbreload SET gcash_ref_num = '09876544', transac_status = 'Approved' WHERE user_id = '$id1'";
    $result2 = mysqli_query($db_connection, $sql2);

    $sql2="UPDATE tbend_users SET balance = balance - $new_amount WHERE user_id = '$id2'";
    $result2 = mysqli_query($db_connection, $sql2);
}

header("Location:landing_page_admin.php");

?>