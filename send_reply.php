<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
$name = $_SESSION['name'];
$message = $_SESSION['message'];
?>
<center>
<h1>Users Name: <?php echo $name ?></h1>
<h1>Message: <?php echo $message ?></h1>

<h1>THANK YOU WE HAVE RECIEVED YOUR FEEDBACK</h1>

<a href="index.html"> <input type="button" value="Home"> <a>
</center>
</body>
</html>


