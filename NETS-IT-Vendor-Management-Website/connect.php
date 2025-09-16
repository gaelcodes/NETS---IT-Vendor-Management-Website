<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'order';


$conn = mysqli_connect($host, $user, $pass, $dbname);

if ($conn -> connect_error) {
    die('bad'.$conn -> connect_error );
} 
?>