<?php

    session_start();
    if(!isset($_SESSION['loged']))
        header('Location: login.php');

        require("connect_info.php");

        if(array_key_exists("v", $_GET))
        {
            $module = $_GET['v'];
        }
        else{
            $module = 'orders';
        }

        $moduleDir = "modules/" . $module . ".php";

        if(file_exists($moduleDir))
        {
            ob_start();
            require($moduleDir);
            $content = ob_get_contents();
            ob_end_clean();


            require('layouts/layout.php');
        }
        else{
            header("HTTP/1.1 404 Not Found");
            echo "Error 404";
        }