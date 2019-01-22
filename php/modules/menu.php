<?php
if(isset($_POST['search'])) {
    $name=$_POST['search'];
    $result=$pdo->query("SELECT menu.foodID, menu.cena, menu.components, menu.name, categories.name 
    AS catregoyName FROM menu INNER JOIN categories ON menu.categorieID=categories.categorieID
    WHERE menu.cena='$name' OR menu.components='$name' OR menu.name='$name' OR categories.name='$name'
    ORDER BY menu.categorieID")->fetchAll();
}
else{
    $result=$pdo->query("SELECT menu.foodID, menu.cena, menu.components, menu.name, categories.name 
    AS catregoyName FROM menu INNER JOIN categories ON menu.categorieID=categories.categorieID 
    ORDER BY menu.categorieID")->fetchAll();
}

?>
<form class="m-4" method="post" action="./cms.php?v=menu">
<input type="text" name="search">
<input type="submit" class="btn btn-secondary" value="Wyszukaj">

</form>

<h1 class="m-3">Menu</h1>

<?php
    if(isset($_SESSION['result']))
    {
        echo $_SESSION['result'];
        unset($_SESSION['result']);
    }
?>
<table class="table table-hover">
<a href="cms.php?v=add_food"class="btn btn-primary m-3">Dodaj pozycje</a>
<tr>
    <th>Nazwa</th>
    <th>Składniki</th>
    <th>Cena</th>
    <th>Kategoria</th>
    <th>Edytuj</th>
    <th>Usuń</th>
</tr>

<?php foreach($result as $menu){
?>
<tr>
    <td><?php echo $menu['name'] ?></td>
    <td><?php echo $menu['components'] ?></td>
    <td><?php echo $menu['cena']."zł" ?></td>
    <td><?php echo $menu['catregoyName'] ?></td>
    <td><a href="cms.php?v=edit_food&id=<?php echo $menu['foodID'] . '&cname=' . $menu['catregoyName']?>" class="btn btn-success">Edytuj</a></td>
    <td><a href="cms.php?v=delete_food&id=<?php echo $menu['foodID'] ?> " class="btn btn-danger">Usuń</a></td>
</tr>

<?php
}
?>

</table>