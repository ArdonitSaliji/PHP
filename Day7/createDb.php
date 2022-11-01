<?php  

    $host = "localhost";
    $user = "root";
    $pass = "";

    try {
        $con = new PDO("mysql:host=$host;", $user, $pass);
        $sql = 'CREATE DATABASE testdb';
        $con->exec($sql);
        echo 'Database is created';
    } catch (Exception $error) {
        echo $error;
    }

?>