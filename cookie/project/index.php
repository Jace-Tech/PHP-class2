<?php  

    if(isset($_GET['alert'])) {
        $alert = $_GET['alert'];

        // if($alert == "log_f") {
        //     echo "<script>alert('login failed')</script>";
        // }

        if($alert == "log_f") {
            ?>
                <script>alert('login failed')</script>
           <?php
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Form</title>
    </head>

    <body>
        <form action="./handler.php" method="post">
            <input type="email" name="email" placeholder="Enter email address" required />
            <input type="password" name="password" placeholder="Enter your password" required />
            <button type="submit" name="login">Login</button>
        </form>
    </body>

</html>