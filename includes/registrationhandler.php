<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

  $fullname = htmlspecialchars($_POST["fullname"]);
  $username = htmlspecialchars($_POST["username"]);
  $password = htmlspecialchars($_POST["password"]);



  echo "Hello "; echo $fullname; echo ". Login your account";
  
}
?>