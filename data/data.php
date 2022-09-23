<?php

$host =  'localhost';
$user = 'root';
$password = '';
$dbname = 'ervintuz';

$dsn = 'mysql:host='. $host .';dbname='. $dbname;

try {
    $conn = new PDO($dsn, $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 

} catch (Exception $e) {
    echo "Error ". $e->getMessage();
    exit();
}