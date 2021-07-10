<?php

    $hostname = "localhost";
    $username = "ucp2pkw_MuhammadAbdullahAzzam";
    $password = "ucp2pkw_MuhammadAbdullahAzzam";

    try {
        $connection = new PDO("mysql:host=$hostname;dbname=ucp2pkw_TokoBuku", $username, $password);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Database connected successfully";
    } catch(PDOException $e) {
        echo "Database connection failed: " . $e->getMessage();
    }

?>