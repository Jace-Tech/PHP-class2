<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator</title>
    </head>
    <body>
        <form action="./script.php" method="post">
            <input type="number" name="first">
            <input type="number" name="second">

            <select name="operator" id="">
                <option value="" disabled selected>Choose operator</option>
                <option value="add">+</option>
                <option value="minus">-</option>
                <option value="multiply">&times;</option>
                <option value="divide">&divide;</option>
            </select>

            <button name="calculate">Calculate</button>
        </form>

        <h2> Result: <?= $_GET['result'] ?? "";  ?></h2>
    </body>
</html>