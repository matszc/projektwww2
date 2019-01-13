<?php
session_start();
if(!isset($_POST['client'])){
    header("Location: ../index.php");
    exit();
}
require("connect_info.php");


$price=$_SESSION['order_price'];
$components=$_SESSION['order_itmes_db'];
$name=$_POST['client'];
$address=$_POST['address'];
$notes = $_POST['notes'];

$add_orrder = $pdo->query("INSERT INTO orders VALUES (NULL, '$name', '$address', '$notes', '$components', 
'$price' , '0') ");

unset($_SESSION['order_price']);
unset($_SESSION['order_itmes']);
unset($_SESSION['order_itmes_db']);

header("Location: ../index.php");