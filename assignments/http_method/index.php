<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
    </head>
    <body>
        <form action="./result.php" method="post">
            <input type="text" required name="fullname" placeholder="Enter your full name">
            <input type="email" required name="email" placeholder="Enter your email address">
            <input type="tel" required name="phone" placeholder="Enter your phone number">

            <button type="submit" name="submit">Submit</button>
        </form>
    </body>
</html>