<?php
session_start();
if(!isset($_SESSION['order_price']) && !isset($_SESSION['order_itmes'])){
    header("Location: ../index.php");
    exit();
} 



?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>ProjektPHP</title>
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>
</head>
<body>
<div class="container">
    <div class="header">
        <div class="logo">
            <img src="../img/lagrande.jpg" alt="logo">
        </div>
        <div class="menu">
            <ul>
                <li>Zestawy<</li>
                <li>Pizza</li>
                <li>Bezmiesne</li>
                <li>Pasty</li>
                <li>Sosy</li>
                <li>Napoje</li>
            </ul>
        </div>
        <div class="content text-center">
        <h2>Twoje zamówienie</h2>
            <div class="order">
                <?php 
                echo $_SESSION['order_itmes'];
                ?>
                 </div>
                 <div class="price">
                <span>Cena: </span>
                <?php
                    echo $_SESSION['order_price']."zł";
                ?>
                </div>
        </div>
        <form method="post" action="add_order.php" class="text-center"> 
            <label>Imie i nazwisko</label>
            <input class="order-form" name="client" type="text" autofocus required>
            <label>Adres</label>
            <input class="order-form" name="address" type="text" required>
            <label>Uwagi</label>
            <textarea name="notes" rows="10" cols="35"></textarea>
            <div class="text-center">
                <input class="button" type="reset" value="Wyczyść">
                <input class="button" type="submit" value="Zamów">
            </div>
        </form>
</div>
</body>
</html>


