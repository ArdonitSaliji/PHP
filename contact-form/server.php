<?php 

  $host = 'localhost';
  $db = 'signup';
  $user = 'root';
  $password = '';

  try {
    $con = new PDO("mysql:host=$host; dbname=$db", $user, $password);
  } catch (Exception $e) {
    echo $e;
  }

?>