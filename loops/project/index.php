<?php 
// (<?php echo) === (<?=)
$foodCharts = [
    [
        "days" => "Sunday",
        "breakfast" => "Oats + Milk + Chips",
        "lunch" => "Jellof BEANS + Chicken",
        "dinner" => "Fruit Salad"
    ],
    [
        "days" => "Monday",
        "breakfast" => "Oats + Milk + Chips",
        "lunch" => "Jellof Rice + Chicken",
        "dinner" => "Fruit Salad"
    ],
    [
        "days" => "Tuesday",
        "breakfast" => "Oats + Milk + Chips",
        "lunch" => "Jellof Rice + Chicken",
        "dinner" => "Fruit Salad"
    ],
    [
        "days" => "Wednesday",
        "breakfast" => "Oats + Milk + Chips",
        "lunch" => "Jellof Rice + Chicken",
        "dinner" => "Fruit Salad"
    ],
    [
        "days" => "Thursday",
        "breakfast" => "Oats + Milk + Chips",
        "lunch" => "Jellof Rice + Chicken",
        "dinner" => "Fruit Salad"
    ],
    [
        "days" => "Friday",
        "breakfast" => "Oats + Milk + Chips",
        "lunch" => "Jellof Rice + Chicken",
        "dinner" => "Fruit Salad"
    ],
    [
        "days" => "Saturday",
        "breakfast" => "Oats + Milk + Chips",
        "lunch" => "Jellof Rice + Chicken",
        "dinner" => "Fruit JHDVNDJDVJD"
    ],
];

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Food Chart</title>
    </head>

    <body>
        <table cellpadding="15" border="1">
            <thead>
                <tr>
                    <th>Days</th>
                    <th>Breakfast</th>
                    <th>Lunch</th>
                    <th>Dinner</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($foodCharts as $chart) {  ?>
                    <tr>
                        <td><?= $chart['days'] ?></td>
                        <td><?= $chart['breakfast'] ?></td>
                        <td><?= $chart['lunch'] ?></td>
                        <td><?= $chart['dinner'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>