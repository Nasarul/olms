<?php 
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'napd_olms';

    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    mysqli_set_charset($db,"utf8");

    // Check connection
    /*if ($db->connect_error) {
     die("Connection failed: " . $db->connect_error);
    }
    echo "Connected successfully";
    */
?>
