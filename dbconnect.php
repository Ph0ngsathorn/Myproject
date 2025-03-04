<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cs_shop";
    $dbcon = mysqli_connect($host,$username,$password,$dbname);
    if(!$dbcon){
        echo "can't connect to database";
        exit();
    }
    mysqli_query($dbcon,"SET NAMES 'utf8'");
?>