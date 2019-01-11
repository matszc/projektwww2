<?php
session_start();

require('connect_info.php');


$login = $_POST['login'];
$password = $_POST['password'];

//$query1 = $pdo->query("SELECT * FROM users WHERE login='$login' AND haslo='$password'");
$rows_check = $pdo->query("SELECT count(*) FROM users WHERE login='$login' AND haslo='$password'")->fetchColumn();

if($rows_check==0)
{
    $_SESSION['error']='<span style="color:red">Błąd logowania</span>';
    header("Location: login.php");
    exit();
}

header("Location: cms.php");
$_SESSION['loged']=true;

