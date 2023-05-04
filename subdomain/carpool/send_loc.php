<?php
include 'db_connect.php';

$location = $_POST['loc'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
header("Location:landing_page_admin.php?id=1");
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'carpoolapp596@gmail.com';                     //SMTP username
    $mail->Password   = 'djpravcqkvjvhojz';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('carpoolapp596@gmail.com', 'Car Pool App');
    $mail->addAddress('fuerteramonchristopher@gmail.com');     //Add a recipient
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Documents Verification Meet Up';
    $mail->Body    = 'Hi, <b></b><br><br> You are Registering your vehicle <br><br>Please meet with us in this location:<br><br><b>'.$location.'</b><br><br>Bring your Documents and Car/s<br><br>If you did not register your vehiicle, please ignore this email.<br><br>
    Best regards,<br>
    <b>Car Pooling Company<b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}





?>