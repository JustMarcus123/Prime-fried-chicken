<?php

$serverName = "localhost";
$userName ="root";
$password ="";
$dbName ="prime_fried_chicken";


//create connection

try {
    $con = new PDO("mysql:host=$serverName; dbname=$dbName", $userName,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection success";
} catch (PDOException $e) {
    echo"connection fail". $e->getMessage();
}

?>