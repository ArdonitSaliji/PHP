<?php  

    $host = "localhost";
    $db = "testdb";
    $user = "root";
    $pass = "";

    try {

        $con = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

        $sql = "DROP table users";

        $con->exec($sql);
        echo "Dope column";
    } catch (Exception $error) {
        echo $error;
    }

?>