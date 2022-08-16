<?php 

// DECLARING A FUNCTION
function sayHello () {
    echo "<h1>Hello World!</h1>";
}

// INVOKE / EXECUTE / CALL 
sayHello();

// FUNCTIONS WITH PARAMETERS
// $name = "Jane Doe";

function sayHi ($name) {
    echo "<h1>Hello $name!</h1>";
}

sayHi("John Smith");

// SUMMATION

// function summation ($firstNum, $secondNum) {
//     $result = $firstNum + $secondNum;
//     echo "<p>The sum of $firstNum and $secondNum is  <strong>$result</strong> </p>";
// }

// summation(5, 10); // 15

// CREATE A FUNCTION THAT RETURNS "TRUE" IF A NUMBER IS EVEN AND "FALSE" WHEN THE NUMBER IS ODD 

function checkEven($number) {
    if($number % 2 == 0){
        echo "TRUE";
    }
    else {
        echo "FALSE";
    }
}

// checkEven(16);
// CREATE A FUNCTION THAT RETURNS "TRUE" IF A NUMBER IS PRIME AND "FALSE" WHEN THE NUMBER IS NOT A PRIME NUMBER
function checkPrime ($number) {
    $isPrime = "TRUE";

    for($counter = 5; $counter < $number; $counter++) {
        if($number % $counter == 0) {
            $isPrime = "FALSE";
        }
    }
    
    echo "<h1>$isPrime</h1>";
}

checkPrime(4);

// FUNCTIONS WITH DEFAULT [OPTIONAL] PARAMETERS

function idGenerator ($prefix, $length = 8) {
    $id = "$prefix";

    for($i = 1; $i <= $length; $i++) {
        echo "Prev id => $id <br />";
        $id .= rand(0, 9); // 3
    }

    echo "<p>$id</p>";
}

// PREFIX = PRD_
// OUTPUT = PED_34987645

// https://www.hackerrank.com
// https://leetcode.com/

// https://turing.com/

idGenerator("PDR_", 10);
idGenerator("ADM");
// echo pow(2, 4);


// AREA OF A CIRCLE

function getSquare ($num) {
    $result = $num * $num;
    return $result;
}

function getCircleArea ($radius) {
    $PI = 3.142;
    // pow()
    $area = $PI * ($radius * $radius);
    // $area = $PI * pow($radius, 2);

    return $area;
}
// 5 => 78.55

getCircleArea(5);

// RETURN VALUES FROM A FUNCTION

$number = 5;

$area = getCircleArea($number);

$square = getSquare($area);

echo "<h2>Square of $area = $square</h2>";


function getDivision ($first, $second) {
    $quotient = $first / $second;
    $remainder = $first % $second;

    $result = ["quotient" => $quotient, "remainder" => $remainder];
    return $result;
}


$computation = getDivision(5, 5);  // [1, 0]

print_r($computation);

// CREATE A FUNCTION THAT RETURNS THE TOTAL SUM OF ALL THE PRIME NUMBERS IN 1 - 20


function isPrime($number) {
    $result = true;
    for($counter = 2; $counter < $number; $counter++) {
        if($number % $counter == 0) {
            $result = false;
        }
    }
    return $result;
}

var_dump(isPrime(18)); // bool(false)

function sumAllPrime ($limit = 20) {
    $sum = 0;

    for($i = 2; $i <= $limit; $i++) {
        if(isPrime($i)) {
            $sum = $sum + $i;
        }
    }

    return $sum;
}

$sumOfPrime = sumAllPrime(10);
// 2
// 3,
// -- 4
// 5
// -- 6
// 7
// --8
// -- 9
//  -- 10


echo "<h1> The sum of prime numbers from 1 - 5 is: $sumOfPrime</h1>";


// RECURSIVE FUNCTIONS

// GET A FACTORIAL OF A NUMBER

function getFactorial($number) {
    if($number == 1) {
        return 1;
    }
    else {
        return $number * getFactorial($number - 1);
    }
}

getFactorial(4); // 24 