<?php
//connect to database
//modern way?

//-> DSN stands for Data Source Name //'classroom' is the name of database
$dsn = "mysql:host=localhost;dbname=classroom";//This code is used to specify connection to database
$dbusername ="root";
$dbpassword ="";//password is blank but the default is also a "root" 
//so $dbpassword =""; is the same with $dbpassword ="root";


//try and catch blocks which is a way to handle potential errors in code
//my understanding or analogy is that 'if an error occurs then I will do something else by catching the error and doing something with the error message
try {
 $pdo = new PDO($dsn, $dbusername, $dbpassword); //pdo stands for PHP Data Obejects
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo"Connection failed: " . $e->getMessage();
}