<?php
if(!isset($_GET['id'])){
    header("Location: cms.php/?v=orders");
    exit();
}

$id=$_GET['id'];
$result = $pdo->query("UPDATE orders SET status = 1 WHERE orderID='$id' ");
header("Location: cms.php/?v=orders");