<?php
session_start();
if(!isset($_POST['order'])){
    header("Location: ../index.php");
    exit();
}
require("connect_info.php");
$order_price=0;
$order_itmes="";
$order_items_db="";

$order=$_POST['order'];

$tab_size = count($order);

for($i=0; $i<$tab_size; $i++){
    $sql = $pdo->query("SELECT name , cena  FROM menu WHERE foodID='$order[$i]' ")->fetch();

    $order_price=$order_price + $sql['cena'];
    $order_itmes=$order_itmes . $sql['name'] . "<br/>";
    $order_items_db=$order_items_db . $sql['name'] . ", ";
}

$_SESSION['order_price']=$order_price;
$_SESSION['order_itmes']=$order_itmes;
$_SESSION['order_itmes_db']=$order_items_db;
header("Location: order.php");


?>
