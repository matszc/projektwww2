<?php

if(isset($_POST['search'])) {
    $name=$_POST['search'];
    $result = $pdo->query("SELECT * FROM categories WHERE name LIKE '%$name%' ");
    $categories = $result->fetchAll();
}
else{
    $result = $pdo->query("SELECT * FROM categories");
    $categories = $result->fetchAll();
}

?>
<form class="m-4" method="post" action="./cms.php?v=categories">
<input type="text" name="search">
<input type="submit" class="btn btn-secondary" value="Wyszukaj">

</form>
<h1 class="m-4">Kategorie</h1>
<a href="./cms.php?v=add_category"class="btn btn-primary m-3">Dodaj kategorie</a>
<?php
    if(isset($_SESSION['result']))
    {
        echo $_SESSION['result'];
        unset($_SESSION['result']);
    }
?>
<table class="table table-hover">
    <tr>
        <th>Nazwa</th>
        <th>Edytuj</th>
        <th>Usuń</th>
    </tr>
    <?php
    foreach($categories as $category){
    ?>
        <tr>
            <td><?php echo $category['name']?></td>
            <td><a href="cms.php?v=edit_category&id=<?php echo $category['categorieID'] . '&cname=' . $category['name']?>" class="btn btn-success">Edytuj</a></td>
            <td><a href="cms.php?v=delete_category&id=<?php echo $category['categorieID'] ?> " class="btn btn-danger delete">Usuń</a></td>
        </tr>

    <?php } ?>

</table>