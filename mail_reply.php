<?php
session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function


$email = $_SESSION['email'];
$name = $_SESSION['name'];
echo "<script>
    alert('Your Message has been Sent to our Admin!');
    location.href = 'index.php';
    </script>";
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
    $mail->Username   = 'fuerteramonchristopher@gmail.com';                     //SMTP username
    $mail->Password   = 'biehdlavioyicybc';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('fuerteramonchristopher@gmail.com', 'High Morale');
    $mail->addAddress($email);     //Add a recipient
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Thank you';
    $mail->Body    = 'Hi, <b>'.$name.'</b><br><br>Thank you for your recent inquiry at High Morale. We appreciate your interest and are delighted to hear from you. <br><br>Please feel free to ask us any questions you may have, and we will be more than happy to provide you with the information you need. We pride ourselves on delivering exceptional customer service, and we are committed to ensuring that you have a positive experience with us.<br><br>Thank you once again for considering our clothing shop, and we look forward to hearing from you soon.<br><br>Best regards,<br><br><b>HIGH MORALE</b><br><br>Typically Reply within 1 to 3 business days.';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
  
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>

