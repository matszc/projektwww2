<?php
require("php/connect_info.php");
$result = $pdo->query("SELECT * FROM categories");
$categories = $result->fetchAll();


?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>ProjektPHP</title>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div class="container">
    <div class="header">
        <div class="logo">
            <img src="img/lagrande.jpg" alt="logo">
        </div>
        <div class="menu">
            <ul>
                <li><a href="#zestaw">Zestawy</a></li>
                <li><a href="#pizza">Pizza</a></li>
                <li><a href="#bezmiesny">Bezmiesne</a></li>
                <li><a href="#pasta">Pasty</a></li>
                <li><a href="#sos">Sosy</a></li>
                <li><a href="#napoj">Napoje</a></li>
            </ul>
        </div>
        <div class="card">
            <ul>
                <li>Zapraszamy na smaczne obiady i zestawy dnia!</li>
                <li>schabowy + zupa już za 13,00 zł</li>
                <li>chlopskie jadlo + zupa już za 13,00 zł</li>
                <li>paluszki z kurczaka+ zupa już za 13,00 zł</li>
                <li>zeberka pieczone w kapuscie + zupa już za 13,00 zł</li>
            </ul>
        </div>
        <div class="content">
        <form action="php/sum.php" method="post">
            <?php 
                foreach($categories as $category){
            ?>
            <table id="<?php echo $category['name']?>"frame="box">
                <thead>
                    <tr>
                        <th><?php echo $category['name']?> </th>
                        <th>Składniki</th>
                        <th>Cena</th>
                        <th>Zamów</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $id=$category['categorieID'];
                        $result1 = $pdo->query("SELECT * FROM menu WHERE categorieID='$id'");
                        $menu = $result1->fetchAll();
                        foreach($menu as $food){
                    ?>  

                        <tr>
                            <td><?php echo $food['name'] ?></td>
                            <td><?php echo $food['components'] ?></td>
                            <td><?php echo $food['cena']."zł" ?></td>
                            <td><input type="checkbox" name="order[]" value="<?php echo$food['foodID'] ?>"></td>
                        </tr>
                        <?php } ?>
                        </tbody>  
            </table>

            <?php } ?>
            <div class="text-center">
                <input class="button" type="reset" value="Wyczyść">
                <input class="button" type="submit" value="Zamów">
            </div>
            </form>
        </div>
        
    </div>
        
</div>
</body>
</html>