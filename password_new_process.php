<?php
include 'db_connect2.php';
session_start(); 

$new_pass = $_POST["password"];
$confirm = $_POST["confirm"];

$email1 = $_SESSION['email_pass'];

if($new_pass == $confirm){
    $sql2 = "UPDATE user SET password = '$new_pass' WHERE email = '$email1'";
    $query = mysqli_query($db_connection, $sql2);
    echo "<script>
    alert('Password has been changed!');
    location.href = 'signin.php';
    </script>";
}else{
    echo "<script>
    alert('New Password and Confirm Password not matched!');
    location.href = 'password_new.php';
    </script>";
}   
?>