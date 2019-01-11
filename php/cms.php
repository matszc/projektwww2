<?php
    session_start();
    if(!isset($_SESSION['loged']))
        header('Location: login.php');

        require("connect_info.php");

        if(!array_key_exists("v", $_GET))
        {
            $_GET['v']="orders";
        }

        $moduleDir = "modules/" . $_GET['v'] . ".php";

        if(file_exists($moduleDir))
        {
            ob_start();
            include($moduleDir);
            $content = ob_get_contents();
            ob_end_clean();


            require('layouts/layout.php');
        }
        else{
            header("HTTP/1.1 404 Not Found");
            echo "Error 404";
        }