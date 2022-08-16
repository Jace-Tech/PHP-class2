<?php

// DELETING A COOKIE
// To delete a cookie, reset the cookie again with the same name but now with a past time

$id = "user_0010";
$time = strtotime("1 day ago");
setcookie("USER_ID", $id, $time, "/");

// Redirect to preview page
header("Location: preview.php");