<!DOCTYPE html>
<html>
<head>
    <title>logowanie</title>
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>
</head>
<body>
    <div class="form">
    <form action="login_check.php" method="post">
        <label>Login</label>
        <input type=text name="login"><br/><br/>
        <label>Hasło</label>
        <input type="password" name="password"><br/><br/>
        <input type="submit" value="zaloguj">
    </form>
    <?php
         session_start();
        if(isset($_SESSION['error']));
        {
            error_reporting(E_ALL ^ E_NOTICE);
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
    ?>
    </div>  
</body>
</html>