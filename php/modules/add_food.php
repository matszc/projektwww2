<?php

$category=$pdo->query("SELECT * FROM categories")->fetchAll();

if(isset($_POST['name']))
{
$name=$_POST['name'];
$components = $_POST['components'];
$price = $_POST['cena'];
$category = $_POST['categoryID'];
    $add=$pdo->query("INSERT INTO menu VALUES (NULL, '$name', '$components'
    , '$price', '$category')");
    if($add)
        echo "<h3 class='text-center 'style='color:green'>Dodano</h3> ";
    else
        echo "<h3 class='text-center 'style='color:red'>Błąd</h3> ";
}
?>


<h1 class="m-3">Dodaj pozycję</h1>

<form class="form-group" method="POST">
    <label>Nazwa</label>
    <input class="form-control" type="text" name="name">
    <label>Składniki</label>
    <input class="form-control" type="text" name="components">
    <label>Cena</label>
    <input class="form-control" type="number" step="0.01" name="cena">
    <label>Kategria</label>
    <select class="form-control" name="categoryID">
    <?php foreach($category as $category){
        ?>
        <option value="<?php echo $category['categorieID']?>"> <?php echo $category['name'] ?></option>

    <?php } ?>
    </select>
    <input type="submit" class="btn btn-primary m-2" value="Dodaj">

</form>