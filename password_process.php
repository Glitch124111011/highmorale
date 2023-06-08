<?php
include 'db_connect2.php';
session_start(); 

$email = $_POST["email"];

$_SESSION['email_pass'] = $email;
$email = $_SESSION['email_pass'];

$sql = "SELECT * FROM user WHERE email = '$email'";
$result = mysqli_query($db_connection, $sql);  
$row = mysqli_fetch_assoc($result);
$email1 = $row["email"];

$code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);    
$sql2 = "UPDATE user SET code = '$code' WHERE email = '$email'";
$query = mysqli_query($db_connection, $sql2);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);



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
    $mail->Subject = 'Forgot Password';
    $mail->Body    = '<p><b style="font-size: 30px;">Confirm Your Email</b><br>We Received a Request to Sign in to your email account to High Morale Clothing.<br><br>If this is you, use the following code to proceed to your confirmation<br><br><b style="font-size: 20px;">Your verification code is:</b> <b style="font-size: 30px;">' . $code . '</b></p>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';

    header("Location:password_code.php");
    exit();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>