<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "icon" href = "images/logo3.png" type = "image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
$name = $_SESSION['name'];
$subject = $_SESSION['subject'];
$message = $_SESSION['message'];
?>
<center>
<h1>Users Name: <?php echo $name ?></h1>
<h1>Subject: <?php echo $subject ?></h1>
<h1>Message: <?php echo $message ?></h1>

<h1>THANK YOU WE HAVE RECIEVED YOUR FEEDBACK</h1>

<a href="index.php"> <input type="button" value="Home"> <a>
</center>
</body>
</html>


