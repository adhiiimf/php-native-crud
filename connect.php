<?php
    $connection = new mysqli("localhost","root","","yoihalo");
    if(!$connection){
        echo "Connection Error!";
        exit();
    }
?>