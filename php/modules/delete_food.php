<?php
if(!isset($_GET['id'])){
    header("Location: ./cms.php/?v=orders");
    exit();
}
$id=$_GET['id'];
$result = $pdo->query("DELETE FROM menu WHERE foodID='$id' ");

header("Location: ./cms.php/?v=menu");