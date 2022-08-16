<?php 

// DATATYPES

// 1. String
// 2. Float
// 3. Integer
// 4. Boolean
// 5. Array
// 6. Object
// 7. Null
// 8. Resource


// STRING
// "" | ''
$name = "John Doe";
$name2 = 'John Doe';

echo gettype($name); // String
echo "<br />";

// FLOAT
$float = 1.1;
echo gettype($float); // Float
echo "<br />";

// INTEGER
$int = 1;
echo gettype($int); // Integer
echo "<br />";

// BOOLEAN
// true | false
$bool = true;
echo gettype($bool); // Boolean
echo "<br />";

// ARRAY
// INDEXED | ASSOCIATIVE | MULTI-DIMENSIONAL

// INDEXED ARRAY
$indexed_array = ["mary", "jane", "joe"];
echo $indexed_array[0];
echo "<br />";   // mary

// ASSOCIATIVE ARRAY
$assoc_array = [
    "name" => "John Doe",
    "age" => 30,
];
$name = $assoc_array['name'];
echo $name; // John Doe
echo "<br />";   

// MULTI-DIMENSIONAL ARRAY
$multi_array = [
    ["name" => "John Doe", "age" => 30],
    ["name" => "Jane Doe", "age" => 25],
];

echo $multi_array[1]['name']; // Jane Doe
echo "<br />";   

// OBJECT
class Book {
    public $title = "testing";
}

$book = new Book();
var_dump($book);
echo "<br />";

// NULL
// NULL -> absence of value
$null = NULL;
var_dump($null);
echo "<br />";

// RESOURCE
// FILES | DATABASE CONNECTIONS | NETWORK CONNECTIONS

$handler = fopen("text.txt", "a+");
var_dump($handler);
echo "<br />";