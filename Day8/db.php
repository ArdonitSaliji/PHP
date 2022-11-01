<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'test100';
    try {
        $con = new PDO("mysql:host=$host; dbname=$db`", $user, $pass, );
        $databasses = $con->query('show databases')->fetchAll(PDO::FETCH_COLUMN);

        if(in_array($db, $databasses)) {
            $con = new PDO("mysql:host=$host; dbname=$db ", $user, $pass, );
            $sql = 'create table administrator (id int NOT NULL AUTO_INCREMENT, name VARCHAR(100),
            email VARCHAR(100), pass VARCHAR(100), datelindja DATETIME, Pozita int, PRIMARY KEY(id))';
            $con->exec($sql);

        } else {
            $sql = "create database depo";
            $con->exec($sql);

            echo 'Database is created';
        }

        echo "Database created";
    } catch (PDOException $e) {
        echo $e;
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Header</title>
</head>

<body>

</body>
</html> 
