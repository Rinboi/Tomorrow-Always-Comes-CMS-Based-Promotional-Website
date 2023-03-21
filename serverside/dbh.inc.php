<?php
    $host = "localhost";
    $name = "root";
    $password = "";
    $dbName = "tomorrow_always_comes";

    $conn = mysqli_connect($host, $name, $password, $dbName);

    // Check if database has errors

    if(mysqli_connect_error()){
        die("ERROR: ".mysqli_connect_error());
    }

    