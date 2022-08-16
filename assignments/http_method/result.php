<?php 

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
}

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
        <h2>Hello <?= $fullname; ?></h2>
        <p>Email: <?= $email; ?></p>
        <p>Phone: <?= $phone; ?></p>
    </body>
</html>