<?php

if(!isset($_GET['id'])){
    header("Location: ./cms.php?v=categories");
    exit();
}
$id=$_GET['id'];
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $edit=$pdo->query("UPDATE categories SET name='$name' WHERE categorieID='$id' ");
    if($edit)
    $_SESSION['result'] = "<h3 class='text-center 'style='color:green'>Zmieniono</h3> ";
else
    $_SESSION['result'] = "<h3 class='text-center 'style='color:red'>Błąd</h3> ";
    
header("Location: ./cms.php?v=categories");
}
?>

<h1 class="m-3">Edytuj</h1>

<form class="form-group" method="POST">
    <label>Nazwa</label>
    <input class="form-control" type="text" name="name" value="<?php echo $_GET['cname']?>">
    <input type="submit" class="btn btn-primary m-2" value="Zmień">

</form>