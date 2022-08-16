<?php

// HTTP METHODS IN PHP
// - GET -> send data in form of a url string
// - POST -> send data in directly inside of the request body

// GET
// http://google.com?q=php

// if(isset($_GET["test"])) {
//     print_r($_GET);
// }

print_r($_REQUEST);

// http://localhost/PHP/http_method/index.php?test=hello world&subject=PHP

// print_r($_POST);
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
        <form action="" method="GET">
            <input type="text" name="person">
            <button type="submit">Submit</button>
        </form>
        <?php 
            // if(isset($_GET['person'])) {
            //     $name = $_GET['person'];
            //     echo "<h2>Hello $name</h2>";
            // }
            // else {
            //     echo "<h2>Hello Guest</h2>";
            // }
            
            // $name = $_GET['person'] ?? "Guest";
            // echo "<h2>Hello $name</h2>";

        ?>
    </body>
</html>

