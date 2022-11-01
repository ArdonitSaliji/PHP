<?php  

    $host = "localhost";
    $db = "testdb";
    $user = "root";
    $pass = "";

    try {
        $con = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

        $sql = "UPDATE table users(id int NOT NULL AUTO_INCREMENT, 
        name VARCHAR(100), surname VARCHAR(100), email VARCHAR(100), PRIMARY KEY(id))";

        $con->exec($sql);
        echo "Table is created";
    } catch (Exception $error) {
        echo $error;
    }
?>




