<?php 

// WHILE LOOP

// Syntax:
// while (condition) {
//     // code to be executed
// }

// $counter = 1;

// while($counter < 20) {
//     // if($counter % 3 == 0 && $counter % 5 != 0) {
//     //     echo "The counter is: $counter <br />";
//     // }
//     echo "The counter is: $counter <br />";
//     $counter++;
// }

// DO WHILE LOOP

// Syntax:
// do {
//     // code to be executed
// } while (condition);

// $bool = true;

// do {
//     echo "The counter is: $counter <br />";
//     $counter++;
// } while($counter <= 20);

// while($bool) {
//     echo "<p>This supposed to show when the condition is True</p>";
//     break;
// }

// FOR LOOP

// Syntax:

// for (initialization; condition; increment) {
//     // code to be executed
// }

// for ($counter = 1; $counter <= 20; $counter++) {
//     echo "The counter is: $counter <br />";
// }

// for($counter = 20; $counter >= 1; $counter--) {
//     if($counter % 3 == 0 && $counter % 5 != 0) {
//         echo "The counter is: $counter <br />";
//     }
// }

// FOREACH LOOP

// Syntax:

// foreach ($array as $key => $value) {
//     // code to be executed
// }

// Indexed array
// $names = ["John", "Mary", "Mark", "Smith"];

// foreach($names as $name) {
//     echo "<p>The name is $name</p>";
// }

// // Associative array

$students = [
    "id" => 22,
    "name" => "John",
    "email" => "john@test.com"
];

foreach($students as $key => $value) {
    echo "<p>The key is $key, the value is $value</p>";
}