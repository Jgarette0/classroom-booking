<?php 
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
      require_once"dbh.inc.php";
      $query = "UPDATE user SET email = :email, username = :username, password = :password WHERE user_id = 1;";


      $stmt = $pdo -> prepare($query);

      $stmt -> bindParam(":email",$email);
      $stmt -> bindParam(":password",$password);
      $stmt -> bindParam(":username",$username);

      $stmt-> execute();

      $pdo = null;
      $stmt = null;
      header("Location: ../login.php");
      die();
    }
    catch(PDOException $e){
     die("Query failed: ".$e->getMessage()); 
    }

    
  } 
  else {

  }