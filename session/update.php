<?php 

// Recreate that session again, using the same KEY
session_start();
$_SESSION["TEST"] = "Something else entirely";

?>

<a href="./preview.php">Preview Page</a>