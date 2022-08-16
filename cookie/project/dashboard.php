<?php require_once("./db.php"); ?>
<?php  
    // Check if the cookie [USER_ID] is set
    if(isset($_COOKIE['USER_ID'])) {
        // Checking where the value from that cookie matches with the `id` from the `$database` array 
        $user = array_filter($database, function ($item) {
            $id = $_COOKIE['USER_ID'];
            return $item["id"] == $id;
        })[0];

        // print_r($user);
    }
    else {
        header("location; ./index.php");
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
    <p>Name: <?= $user['name']; ?></p>
    <p>Email: <?= $user['email']; ?></p>
    <p>User ID: <?= $user['id']; ?></p>
</body>
</html>