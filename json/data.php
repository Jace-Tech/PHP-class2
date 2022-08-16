<?php 
header("Content-Type: application/json");

$todoItems = [
    [
        "id" => "item_00001",
        "task" => "First task"
    ],
    [
        "id" => "item_00002",
        "task" => "Second task"
    ]
];

$jsonString = json_encode($todoItems);

echo $jsonString;
// echo 9887;

?>

