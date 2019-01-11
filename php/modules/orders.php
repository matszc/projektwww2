<?php

    $result = $pdo->query("SELECT * FROM orders ORDER BY status");
    $orders = $result->fetchAll();

    // echo "<pre>";
    // print_r($orders);
    // echo "</pre>";

?>
<h1 class="m-4">Zamówienia</h1>
<table class="table table-hover">
    <tr>
        <th>Imie i nazwisko</th>
        <th>Adres</th>
        <th>Uwagi</th>
        <th>Zamowienie</th>
        <th>Wartosc</th>
        <th>Status</th>
        <th>Zmień status</th>
    </tr>
    <?php
    foreach($orders as $order){
    ?>
        <tr>
            <td><?php echo $order['client_name']?></td>
            <td><?php echo $order['client_address']?></td>
            <td><?php echo $order['notes']?></td>
            <td><?php echo $order['order_components']?></td>
            <td><?php echo $order['price'] . "zł"?></td>
            <td><?php
            if($order['status'])
            echo "Zrealizowane";
            else
            echo "W trakcie";
            ?></td>
            <td><a href="cms.php?v=change_order&id=<?php echo $order['orderID'] ?>" class="btn btn-success">Zmień status</a></td>
        </tr>

    <?php } ?>

</table>