<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'PP';

try {
    $pdo = new PDO("mysql:host = $host; dbname = $dbname", $user, $pass);
   
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conected";
} catch (PDOException $e) {
    echo "Error" . $e->getMessage();
}


?>