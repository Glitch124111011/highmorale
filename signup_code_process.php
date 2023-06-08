<?php
include 'db_connect2.php';
session_start(); 

$code = $_POST["code"];

$email1 = $_SESSION['email'];
$password1 = $_SESSION['password'];

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($db_connection, $sql);  
$row = mysqli_fetch_assoc($result);
$ver_code = $row["code"];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


if($code == $ver_code){
$sql2 = "UPDATE user SET verified = 'Y' WHERE code = '$code'";
$query = mysqli_query($db_connection, $sql2);
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '1510cyan@gmail.com';                     //SMTP username
    $mail->Password   = 'cpxgbytsouoxdwij';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('fuerteramonchristopher@gmail.com', 'High Morale Clothing');
    $mail->addAddress('fuerteramonchristopher@gmail.com');     //Add a recipient
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Your Account is Verified';
    $mail->Body    = 'Thank you for Signing up an Account, you may now use your account for managing the High Morale Clothing website.<br><br> Congratulation for becoming an Admin!!!';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';

    header("Location:signin.php");
    exit();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}else{
    echo "<script>
    alert('WRONG CODE!');
    location.href = 'signup_code.php';
    </script>";
}

?>