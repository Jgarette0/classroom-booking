<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php 
//This is Scalar data types which contains one value
$string = "Jilian";
$int = 21;
$float = 5.7;
$boolean = true;



echo "My name is"; echo $string;
?> <br> <?php 
echo "I am "; echo $int; echo " years old.";
?> <br> <?php
echo "Height: ";echo $float;
?>
//This is an array data types
<?php $food = ["chicken", "Pizza", "Salad"]; 
?>

//This will be an object data types

<?php 
  //$car = new Car();
  $test = $string;
?>
<h1>Hi I am <?php echo $test; ?> and I am learning php</h1> 

<?php 
echo $_SERVER["DOCUMENT_ROOT"];
echo $_SERVER["PHP_SELF"]; 
?>
<br>
<?php
echo $_SERVER["REQUEST_METHOD"];
echo $_GET["name"];
?>
<br>
<?php
echo $_GET["color"];
?>
<br>
<?php
$_SESSION["username"] = "JILIAN";
echo $_SESSION["username"];
$SESSION["age"] = "21";
echo $_SESSION["age"];
?>
</body>
</html>