<?php
if(!isset($_GET['id'])){
    header("Location: ./cms.php?v=orders");
    exit();
}

$id=$_GET['id'];
$result = $pdo->query("UPDATE orders SET status = 1 WHERE orderID='$id' ");

if($result)
    $_SESSION['result'] = "<h3 class='text-center 'style='color:green'>Zmieniono</h3> ";
else
    $_SESSION['result'] = "<h3 class='text-center 'style='color:red'>Błąd</h3> ";


header("Location: ./cms.php?v=orders");