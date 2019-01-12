<!DOCTYPE html>
<html>
<head>
<meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>CMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
     <ul class="navbar-nav flex-row">
        <li class="nav-item mr-3"><a class="nav-link" href="./cms.php?v=orders">Zamowienia</a></li>
        <li class="nav-item mr-3"><a class="nav-link" href="./cms.php?v=menu">Dania</a></li>
        <li class="nav-item mr-3"><a class="nav-link" href="./cms.php?v=categories">Kategorie</a></li>
        <li class="nav-item mr-3"><a class="nav-link" href="./log_out.php">Wyloguj</a></li>
     </ul>
    </div>
    <div  class="container">
    <?php
        echo $content;
    ?>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>