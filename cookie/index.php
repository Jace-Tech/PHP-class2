<?php 

// COOKIES

// Creating a cookie
// setcookie(name, value, expiry_time, path, domain, secure)

$id = "user_001";
$time = strtotime("1 day");
setcookie("USER_ID", $id, $time, "/");


// Redirect to preview
header("Location: preview.php");
