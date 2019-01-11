<?php

$host = 'localhost';
$db_login = 'root';
$db_password = '';
$db_name='php_www';

try{
    $pdo = new PDO ("mysql:host=$host;dbname=$db_name", $db_login, $db_password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
    exit();
}
