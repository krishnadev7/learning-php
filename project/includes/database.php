<?php
    // params to connect to a database
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'phpTutorial';

    // connection to a database
    $conn = mysqli_connect($dbHost,$dbUser,$dbPassword,$dbName);

    if($conn){

    }else{
        die("Database connection failed!!!");
    }
