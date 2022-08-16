<?php 

// Getting the stored cookie
// // $_COOKIE
print_r($_COOKIE);
if(isset($_COOKIE["USER_ID"])) {
    $userId = $_COOKIE['USER_ID'];
    echo "<p> $userId </p>";
}
else {
    echo "<p> Cookie is not set or expired.</p>";
}

?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body { 
            height: 100vh;
        }

        ion-icon {
            color: red;
            font-size: 2rem;
        }
    </style>
</head>
<body>

    <ion-icon name="heart"></ion-icon>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html> -->