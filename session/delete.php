<?php 
session_start();
// To delete a session you can use either of the following:

// unset() -> Deletes a particular session
// session_destroy() -> Deletes all sessions

// UNSET
// unset($_SESSION["TEST"]);

//session_destroy
session_destroy();
?>

<a href="./preview.php">Preview Page</a>