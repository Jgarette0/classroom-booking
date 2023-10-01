<?php 

$dsn = "mysql:host=localhost;dbname=cctc-guide";
$dbusernmae = "root";
$dbpassword = "jilian";

try {
  $pdo = new PDO($dsn, $dbusernmae, $dbpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed: ".$e->getMessage();
}

?>