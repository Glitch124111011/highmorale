<?php
include 'db_connect2.php';
session_start(); 
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
$email = $_POST["email"];
$name = $_POST["name"];
$subject = $_POST["subject"];
$message = $_POST["message"];
 
$_SESSION['email'] = $email;
$_SESSION['name'] = $name;
$_SESSION['subject'] = $subject;
$_SESSION['message'] = $message;
$email=$_SESSION['email'] ;
$name=$_SESSION['name'] ;
$subject=$_SESSION['subject'] ;
$message=$_SESSION['message'] ;

$sql = "INSERT INTO feedback(username,email,subject,message) 
		VALUES('$name','$email','$subject','$message')";
	mysqli_query($db_connection, $sql);

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
    $mail->setFrom('1510cyan@gmail.com', $name);
    $mail->addAddress('fuerteramonchristopher@gmail.com');     //Add a recipient
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';

    header("Location:mail_reply.php");
    exit();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>