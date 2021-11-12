<?php
    //create SQL Kubernetes connection
    $host = "mysql-service";
    $user = "user";
    $password = "password";
    $db = "library_management_db";

    $connect = mysqli_connect($host,$user,$password,$db);

    if (!$connect) 
    {
        echo '<script>alert("Failed to connect to Database")</script>';
        die("Connection failed: " . mysqli_connect_error());
    }