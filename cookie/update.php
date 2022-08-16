<?php

// UPDATING A COOKIE
// To update a cookie, reset the cookie again with the same name but now with a different value

$id = "user_0010";
$time = strtotime("1 day");
setcookie("USER_ID", $id, $time, "/");

// Redirect to preview page
header("Location: preview.php");