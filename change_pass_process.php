<?php
include 'db_connect2.php';
session_start(); 

$new_pass = $_POST["password"];
$confirm = $_POST["confirm"];

if($new_pass == $confirm){
    $sql2 = "UPDATE user SET password = '$new_pass' WHERE email = '$email1'";
    $query = mysqli_query($db_connection, $sql2);
    header("Location:admin_index.php");
}else{
    echo "<script>
    alert('New Password and Confirm Password not matched!');
    location.href = 'change_pass.php';
    </script>";
}   

?>