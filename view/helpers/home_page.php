<?php
    require "inicio.php";
    require "header2.php";
    require "home_content.php";
    echo __FILE__;
    echo "<br/>";
    $url_actual = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    echo "$url_actual";

    require "fin.php"; 
?>