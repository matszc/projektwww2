<?php
//if(!isset($_POST['id']))

require("connect_info.php");

echo "<pre>";
print_r($_POST);
echo "</pre";

foreach($_POST as $id)
    echo $id;

?>
