<?php
include 'db_connect2.php';
session_start(); 
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$street = $_POST['street'];
$city = $_POST['city'];
$province = $_POST['province'];
$email = $_POST['email'];
$password = $_POST['password'];

$_SESSION['email'] = $email;
$_SESSION['password'] = $password;

$email1 = $_SESSION['email'];
$password1 = $_SESSION['password'];

$code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

$sql = "SELECT * FROM user WHERE email = '$email1'";
$result = mysqli_query($db_connection, $sql);  

if($result){
    $numRows = mysqli_num_rows($result);
    if ($numRows > 0) {
        // Email already exists in the database
        echo "<script>
        alert('Email is already Exist! Use different Email');
        location.href = 'signup.php';
        </script>";
    } else {


$sql = "INSERT INTO user(user_type, firstname, lastname, street, city, province, email, password, code) VALUES('Admin', '$fn', '$ln', '$street' , '$city', '$province', '$email1', '$password1', '$code')";
$result = mysqli_query($db_connection, $sql);  
}
} 

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
    $mail->Subject = 'Email Verification';
    $mail->Body    = '<p><b style="font-size: 30px;">Confirm Your Email</b><br>We Received a Request to use your email account to register to High Morale Clothing as an Admin.<br><br>If this is you, use the following code to proceed to your registration<br><br><b style="font-size: 20px;">Your verification code is:</b> <b style="font-size: 30px;">' . $code . '</b></p>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';

    header("Location:signup_code.php");
    exit();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

   
?>