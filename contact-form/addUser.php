<?php

  include_once("server.php");

  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];
    
    $sql = "INSERT INTO user (name, email, password, phone, description) 
    VALUES (:name, :email, :password, :phone, :description)";
    
    $newUser = $con->prepare($sql);
    $newUser->bindParam(':name', $name);
    $newUser->bindParam(':email', $email);
    $newUser->bindParam(':password', $password);
    $newUser->bindParam(':phone', $phone);
    $newUser->bindParam(':description', $description);
    try {
      $newUser->execute();
      echo 'User created successfully!';
    } 
    catch (Exception $e){
      echo $e;
    }
  }
?>


