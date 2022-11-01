<?php  

    $host = "localhost";
    $db = "testdb";
    $user = "root";
    $pass = "";

    try {
        $con = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
        
        $sql = "insert into users(name, surname, email) values ('Digital' , 'School', 'abc@gmail.com')";
        $con->exec($sql);
        echo "Row is created";
    } catch (Exception $error) {
        echo $error;
    }
?>