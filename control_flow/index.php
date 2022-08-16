<?php


// Control Flows: => Controls the flow of the program 

// IF
// IF...ELSE
// IF...ELSEIF...ELSE
// SWITCH CASE 
// TENARY OPERATOR [ ? ]
// NULLISH COALESCING [ ?? ]


// IF

// if(condition) {}

$papa = "Adenuga";

if($papa == "Dangote") {
    echo "<p>You have made it in Life</p>";
}

// ELSE
if($papa == "Dangote") {
    echo "<p>You have made it in Life</p>";
}
else {
    echo "<p>You gats to hustle bro!</p>";
}

// ELSEIF
if($papa == "Dangote") {
    echo "<p>You have made it in Life</p>";
}
elseif($papa == "Otedola" AND $papa !== "Trench Man") {
    echo "<p>You have made it in Life</p>";
}
elseif($papa == "Adenuga") {
    echo "<p>You have made it in Life</p>";
}
else {
    echo "<p>You gats to hustle bro!</p>";
}


$color = "pink";

switch($color) {
    case "red":
        echo "<p>The color is red</p>";
        break;
    
    case "black":
        echo "<p>The color is Black</p>";
        break;
    
    case "blue":
        echo "<p>The color is Blue</p>";
        break;
    
    default:
        echo "<p>The color is Unknown</p>";
        break;
    
}

// TENARY OPERATOR

$age = 18;

if($age >= 18) {
    echo "<p> You are an Adult </p>";
}
else {
    echo "<p> You are a child </p>";
}

// condition ? true : false;
$result = ($age >= 18) ? "<p> You are an Adult </p>" : "<p> You are a child </p>";
echo $result;


// NULLISH COALESCING [ ?? ]

// $unfixVar = "THisjbdhd";

// if( $result_of_isset_func) {
//     echo $unfixVar;
// }
// else {
//     echo "<p>Variable does not exist</p>";
// }

// FALSY VALUES
// 0
// ""
// NULL
// undefined
// false


// Truthy Values
// 1
// "jsdjdjd"
//

$value = "hshshshs";

$result = $value ?? "<p>Variable does not exist</p>";
echo $result;


// FIZZ-BUZZ-FIZZBUZZ 
// - $num can be any number 1 - infinity
// - If the $num is a multiple of 3 and 5 echo 'FIZZBUZZ'
// - If the $num is a multiple of 3 and not a multiple of 5 echo 'FIZZ'
// - If the $num is a multiple of 5 and not a multiple of 3 echo 'BUZZ'
// - If the $num is not a multiple of 5 and not a multiple of 3 echo $num


$num = 7;

if($num % 3 == 0 and $num % 5 == 0) {
    echo "<h2>FIZZBUZZ</h2>";
}
elseif($num % 3 == 0 and $num % 5 != 0) {
    echo "<h2>FIZZ</h2>";
}
elseif($num % 3 != 0 and $num % 5 == 0) {
    echo "<h2>BUZZ</h2>";
}
else {
    echo "<h2>$num</h2>";
}
