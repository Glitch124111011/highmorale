<?php
include 'db_connect.php';

$email = $_POST["email"];
$pass = $_POST["pass"];

$sql = "SELECT * FROM tbend_users WHERE user_email = '$email' AND password = '$pass' AND verified = 'Y'";
$result = mysqli_query($db_connection, $sql);  
$row = mysqli_fetch_assoc($result);
$id = $row["user_id"];

$sql1="UPDATE tbend_users SET status = 'Online' WHERE user_id = '$id'";
$result1 = mysqli_query($db_connection, $sql1);

if($row['user_type'] == "Admin"){
    header("Location:landing_page_admin.php?id=$id");
}
else if($row['user_type'] == "Passenger" ){
    header("Location:landing_page.php?id=$id");
}else if($row['user_type'] == "Driver" ){
    header("Location:landing_page.php?id=$id");
}
else{
    echo "Wrong email or Password";
}

?>