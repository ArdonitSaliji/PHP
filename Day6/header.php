<?php 
    $text = 'This is a navbar';

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    try {
        $con = new PDO('mysql:host=$host; ', $user, $pass);
        echo "Connected"
    } catch (Exception $e) {
        echo "Not Connected";
    }
    

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Header</title>
</head>

<body>
        <h1><?php echo $text ?></h1>
</body>
</html>
