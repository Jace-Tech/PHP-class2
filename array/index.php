<?php 

// ARRAYS: Is used to store relative items or a group of items[elements] under one variable

// Three types of array: 
//     - INDEXED ARRAY 
//     - ASSOCIATIVE ARRAY
//     - MULTI-DIMENSIONAL ARRAY

// INDEXED ARRAY: They are those arrays that are prefixed with indexes. The index is an integer which starts from zero and then stops at the length of the array minus one [i.e last_index = length_of_array - 1]

// Syntax to create an array is

// The array function
$arr = array(1, 2, 3, 4);
print_r($arr);
echo "<br />";

// The array literal [preferred way]
$arr = [1, 2, 3, 4];
print_r($arr);
echo "<br />";

// ACCESSING ITEMS FROM AN INDEXED ARRAY
// STUDENTS DATA
$students = ["Mary", "John", "Mark", "Smith"]; // index = [0 - 3]
$name = $students[2];

echo "<p>The student at index 2 is: $name</p>";

// Changing an element in an indexed array
$students[2] = "Jane";
$name = $students[2];

echo "<p>The student at index 2 is: $name</p>";


// ASSOCIATIVE ARRAY: The element are store in a key/value pair manner, the arrow symbol [=>] is used to assign the value to the key.

// Using the array function
$assoc_arr = array(
    "key" => "value"
);
print_r($assoc_arr);
echo "<br />";

// Using the array literal
$assoc_arr = [
    "key" => "value"
];
print_r($assoc_arr);

// REAL LIFE EXAMPLE
$person = [
    "id" => 22,
    "name" => "John",
    "email" => "john@example.com"
];

$email = $person["email"];
echo "<p>The email is $email</p>";

$name = $person["name"];
echo "<p>The name is $name</p>";

// Changing the value of an element

$person["email"] = "jane@example.com";
$email = $person["email"];
echo "<p>The email is $email</p>";

// Classwork
$movie = [
    "title" => "Deadpool",
    "price" => "$300",
    "tag" => "Action, Sci-fi",
    "date" => "2018"
];

print_r($movie);

// MULTI-DIMENTIONAL ARRAY: An array containing arrays as it's elements
$people = [
    [
        "id" => 1,
        "name" => "John Smith",
        "email" => "john@test.com"
    ],
    [
        "id" => 2,
        "name" => "Jane Doe",
        "email" => "jane@test.com"
    ],
    [
        "id" => 3,
        "name" => "Mark Fog",
        "email" => "mark@test.com"
    ],
    [
        "id" => 4,
        "name" => "Jude Luke",
        "email" => "jude@test.com"
    ],
    [
        "id" => 5,
        "name" => "Emeke Eze",
        "email" => "emy@test.com"
    ],
    [
        "id" => 6,
        "name" => "David Chukwu",
        "email" => "dave@test.com"
    ],
];

echo "<br />";
echo "<br />";
print_r($people[2]['name']);

// My own details

$people[3]['name'] = "Jace Alexander";
$people[3]['email'] = "jace@test.com";

print_r($people[3]);
// Accessing an item from the array


// ARRAY METHODS

// ["red", "green", "yellow"]
// array_push() - Adds an item to the end of the array
echo "<br />";

$arr_colors = ["red", "green", "yellow"];
print_r($arr_colors);
echo "<br />";

array_push($arr_colors, "blue");
print_r($arr_colors);
echo "<br />";

// array_unshift() - Adds an element to the beginning of the array

array_unshift($arr_colors, "purple");
print_r($arr_colors);
echo "<br />";

// ["red", "green", "blue"] = count(["red", "green", "blue"]) = 3
// count() - get the number of elements in the array
$number_of_colors = count($arr_colors);

echo "<p>\$arr_colors has $number_of_colors items</p>";

// array_pop() - removes the last item from the array
$lastItem = array_pop($arr_colors);
print_r($lastItem);

echo "<br />";
print_r($arr_colors);

// array_shift() - removes the first item from the array
$firstItem = array_shift($arr_colors);
print_r($firstItem);

echo "<br />";
print_r($arr_colors);

// array_slice() - returns part of the array based on the given arguments

$items = ["shoe", "cap", "watch", "cheese", "apple"];
$someItems = array_slice($items, 1, 3);

echo "<br />";
print_r($someItems);
echo "<br />";
print_r($items);

// array_splice() - You can add a new item in any place, you can replace an item and also delete an item

$newItems = ['jane', 'mark', 'john'];

// Adding with array_splice
array_splice($newItems, 0, 0, "moses");

echo "<br />";
print_r($newItems);

// Replacing an item using array_splice
array_splice($newItems, 0, 1, "jerry");

echo "<br />";
print_r($newItems);

// [3, 5, 6, 8]
// Deleting item using array_splice
array_splice($newItems, 1, 2);


echo "<br />";
print_r($newItems);


// list() indexes arrays
// extract() associative arrays

$assoc_arr = [
    "name" => "John Smith",
    "age" => 30
];

extract($assoc_arr);

echo "The name is $name";
echo "The age is $age";

$brand = ["IOS", "iPhone", 300];

list( $brandName, $productName, $price) = $brand;

echo "<p>The brand is $brandName</p>";
echo "<p>The product is $productName</p>";
echo "<p>The price is $price</p>";

// CASES
//  - PASCAL CASE = product name => ProductName
//  - SNAKE CASE = product name => product_name
//  - CAMEL CASE = product name => productName
//  - KEBAB CASE = justify items center => justify-items-center




// SORTING ARRAYS

// sort() - sorts the array in ascending order [ INDEXED ARRAYS ]
// rsort() - sorts the array in descending order [ INDEXED ARRAYS ]

// arsort() - sorts the array in descending order by value [ ASSOCIATIVE ARRAYS ]
// rsort() - sorts the array in ascending order by value [ ASSOCIATIVE ARRAYS ]

// ksort() - sorts the array in ascending order by key [ ASSOCIATIVE ARRAYS ]
// krsort() - sorts the array in descending order by key [ ASSOCIATIVE ARRAYS ]

$arr_scores = [90, 30, 20, 75, 32, 55, 98, 100];

// Sorting in ASC
sort($arr_scores);
print_r($arr_scores);

echo "<br>";

// Sorting in DESC
rsort($arr_scores);
print_r($arr_scores);

echo "<br>";

$arr_names = ["Xena", "Jane", "Mark", "Jude", "Alex"];
// Sorting in ASC
sort($arr_names);
print_r($arr_names);

echo "<br>";

// Sorting in DESC
rsort($arr_names);
print_r($arr_names);


$studentMark = [
    "mark" => 50,
    "xena" => 70,
    "alex" => 99,
    "john" => 22,
];

// Sorting by VALUE ASC
asort($studentMark);
echo "<br>";
print_r($studentMark);

// Sorting by VALUE DESC
arsort($studentMark);
echo "<br>";
print_r($studentMark);

echo "<br>";

// Sorting by KEYS ASC
ksort($studentMark);
print_r($studentMark);

echo "<br>";

krsort($studentMark);
print_r($studentMark);