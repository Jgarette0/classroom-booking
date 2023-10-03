<?php 
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
      require_once"dbh.inc.php";
      $query = "INSERT INTO user (email, username, password) VALUES (:email,:username,:password);";


      $stmt = $pdo -> prepare($query);

      $options = ['cost' => 12];
      $hashedPassword = password_hash($password,PASSWORD_BCRYPT,$options);

      $stmt -> bindParam(":email",$email);
      $stmt -> bindParam(":password",$hashedPassword);
      $stmt -> bindParam(":username",$username);

      $stmt-> execute();

      $pdo = null;
      $stmt = null;
      header("Location: ../accounts/login.php");
      die();
    }
    catch(PDOException $e){
     die("Query failed: ".$e->getMessage()); 
    }

    
  } 
  else {

  }