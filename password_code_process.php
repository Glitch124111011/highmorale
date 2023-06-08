<?php
include 'db_connect2.php';
session_start(); 

$code = $_POST["code"];

$email1 = $_SESSION['email_pass'];

$sql = "SELECT * FROM user WHERE email = '$email1'";
$result = mysqli_query($db_connection, $sql);  
$row = mysqli_fetch_assoc($result);
$ver_code = $row["code"];

if($code == $ver_code){
header("Location:password_new.php");
}else{
    echo "<script>
    alert('WRONG CODE!');
    location.href = 'password_code.php';
    </script>";
}

?>