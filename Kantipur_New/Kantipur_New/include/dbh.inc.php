<?php
    
    /*
    $serverName = "sql103.epizy.com";
    $dbUsername = "epiz_27507995";
    $dbPassword = "vNxb89YZfZNIGkb";
    $dbName = "epiz_27507995_kantipur";
    */

    $serverName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "kantipur";

    $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

    if(!$conn){
        die("Connection Failed:".mysqli_connect_error());
    }