<?php
$db_connection = mysqli_connect('localhost', 'u235219407_highmorale','Ramon@15','u235219407_highmorale');
// $db_connection = mysqli_connect('localhost', 'root','','highmorale');
 if(mysqli_connect_errno()){
    echo "Failed to connect to MYSQL:" .mysqli_connect_error();
    exit();
}
?>