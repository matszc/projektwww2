<?php

$host = 'localhost';
$db_login = 'phpmyadmin';
$db_password = 'root';
$db_name='phpmyadmin';

try{
    $pdo = new PDO ("mysql:host=$host;dbname=$db_name", $db_login, $db_password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
    exit();
}
