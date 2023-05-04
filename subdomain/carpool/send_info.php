<?php
include 'db_connect.php';

$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone_num'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$id_num = $_POST['id1'];



// $license = $_POST['license'];
// $sql = "INSERT INTO tbdriver (user_id,license_num) VALUES ('','$license')";
// $result = mysqli_query($db_connection, $sql);   


$sql2 = "INSERT INTO tbend_users (user_type, firstname, lastname, gender, user_email, password, verified, mobile_num, id_num) VALUES ('Passenger','$fn','$ln','$gender','$email', '$password', 'N', '$phone', '$id_num')";
$result = mysqli_query($db_connection, $sql2);   

$sql = "SELECT * FROM tbend_users WHERE user_email = '$email' AND password = '$password'";
$result = mysqli_query($db_connection, $sql);  
$row = mysqli_fetch_assoc($result);

$id= $row['user_id'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

    header("Location:login.html");
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
        $mail->addAddress($email);     //Add a recipient
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Verify your Email Address';
        $mail->Body    = 'Hi, <b>'.$fn.' '.$ln.'</b><br><br> You are Applying as <b>Passenger</b><br><br>Thank you for signing up for our service. To complete the registration process, please click the following link to verify your email address:,<br><br><b><a href="https://carpool.highmorale.tech/update.php?id='.$id.'">Click Me</a></b><br><br>If you did not sign up for our service, please ignore this email.<br><br>
        Best regards,<br>
        <b>Car Pooling Company<b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
                                                                           
exit();
mysqli_close($db_connection);


?>