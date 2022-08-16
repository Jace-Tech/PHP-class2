<?php
include_once("./db.php");

if(isset($_POST['login'])) {
    $email = $_POST['email']; 
    $password = $_POST['password'];

    // fontawesome
    // Ionic icons

    $user = null;
    // For loop method
    for ($row = 0; $row < count($database); $row++) { 
        $currentArr = $database[$row];
        if($currentArr["email"] == $email && $currentArr["password"] == $password) {
            $user = $currentArr;
        }
    }

    if($user) {
        // Store the Id in a cookie
        setcookie("USER_ID", $user["id"], strtotime("7 days"), "/");

        // Redirect to the dashboard
        header("Location: ./dashboard.php");
    } 
    else {
        // Redirect to the login page
        header("Location: ./index.php?alert=log_f");
    }
    // Foreach loop method
    // Filter method

}