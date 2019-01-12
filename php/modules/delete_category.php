<?php
if(!isset($_GET['id'])){
    header("Location: ./cms.php/?v=categories");
    exit();
}
$id=$_GET['id'];
$result = $pdo->query("DELETE FROM categories WHERE categorieID='$id' ");

if($result)
    $_SESSION['result'] = "<h3 class='text-center 'style='color:green'>Usunięto</h3> ";
else
    $_SESSION['result'] = "<h3 class='text-center 'style='color:red'>Błąd</h3> ";

header("Location: ./cms.php/?v=categories");