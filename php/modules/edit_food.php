<?php

if(!isset($_GET['id'])){
    header("Location: ./cms.php?v=orders");
    exit();
}
$id=$_GET['id'];
$food=$pdo->query("SELECT * FROM menu WHERE foodID='$id'")->fetch();

$category=$pdo->query("SELECT * FROM categories")->fetchAll();

if(isset($_POST['name']))
{
 $name=$_POST['name'];
 $components = $_POST['components'];
 $price = $_POST['cena'];
 $category = $_POST['categoryID'];
     $edit=$pdo->query("UPDATE menu SET name='$name', components='$components', cena='$price', 
     categorieID='$category' WHERE foodID = '$id' ");
    if($edit)
    $_SESSION['result'] = "<h3 class='text-center 'style='color:green'>Zmieniono</h3> ";
else
    $_SESSION['result'] = "<h3 class='text-center 'style='color:red'>Błąd</h3> ";
    
header("Location: ./cms.php?v=menu");
}
?>


<h1 class="m-3">Edytuj</h1>

<form class="form-group" method="POST">
    <label>Nazwa</label>
    <input class="form-control" type="text" name="name" value="<?php echo $food['name']?>">
    <label>Składniki</label>
    <input class="form-control" type="text" name="components" value="<?php echo $food['components']?>" >
    <label>Cena</label>
    <input class="form-control" type="number" step="0.01" name="cena" value="<?php echo $food['cena']?>" >
    <label>Kategria</label>
    <select class="form-control" name="categoryID">
    <option value="<?php echo $food['categorieID']?>"><?php echo $_GET['cname'] ?></option>
    <?php foreach($category as $category){
        ?>
        <option value="<?php echo $category['categorieID']?>"> <?php echo $category['name'] ?></option>

    <?php } ?>
    </select>
    <input type="submit" class="btn btn-primary m-2" value="Zmień">

</form>