<?php
$db_connection = mysqli_connect('localhost', 'u235219407_carpool','Ramon@15','u235219407_carpool');
// $db_connection = mysqli_connect('localhost', 'root','','highmorale');
 if(mysqli_connect_errno()){
    echo "Failed to connect to MYSQL:" .mysqli_connect_error();
    exit();
}
?>