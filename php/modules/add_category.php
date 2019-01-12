<?php

if(isset($_POST['name']))
{
$name=$_POST['name'];
    $add=$pdo->query("INSERT INTO categories VALUES (NULL, '$name')");
    if($add)
        $_SESSION['result'] = "<h3 class='text-center 'style='color:green'>Dodano</h3> ";
    else
        $_SESSION['result'] = "<h3 class='text-center 'style='color:red'>Błąd</h3> ";
        
    header("Location: ./cms.php?v=categories");
}
?>


<h1 class="m-3">Dodaj kategorie</h1>

<form class="form-group" method="POST">
    <label>Nazwa</label>
    <input class="form-control" type="text" name="name">
    <input type="submit" class="btn btn-primary m-2" value="Dodaj">

</form>