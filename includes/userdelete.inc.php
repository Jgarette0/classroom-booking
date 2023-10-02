<?php 
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
      require_once"dbh.inc.php";
      $query = "DELETE FROM user WHERE username = :username AND password = :password;";



      $stmt = $pdo -> prepare($query);

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