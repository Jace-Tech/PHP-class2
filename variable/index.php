<?php

// = -> Assignment Operator
$person_name = "John Smith";
$age = 32;

// Bad Practice
// $5x

// $_5x = "";

// CONSTANTS   
// define()

define("PI", 3.142);


echo $person_name;

$person_name = "Jane Doe";
echo "<br />";
echo $person_name;
echo "<br />";
echo $age;
echo "<br />";
echo PI;


$name = "Jace";
$subject = "PHP";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Name:  <?= $name; ?></h1>
    <p>Subject: <?= $subject; ?></p>
</body>
</html>