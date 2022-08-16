<?php

// Creating a session
session_start();
$_SESSION["TEST"] = "This is a test example";

?>

<a href="./preview.php">Preview Page</a>
<br>
<a href="./update.php">Update Page</a>
<br>
<a href="./delete.php">Delete Page</a>