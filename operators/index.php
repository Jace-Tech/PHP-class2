<?php
// Kinds of Operators

// - Unary Operators
//      -  One operans
// - Binary Operators
//      - Two operands
// - Ternary Operators
//      - Three operands

// ARITHEMATIC OPERATORS
// [-, +, *, /, %] -> Binary Operators

// Substraction
$num1 = 10;
$num2 = 5;

$result = $num1 - $num2;

echo "<h2>The result of $num1 - $num2 = $result</h2>";


// Addition
$num1 = 10;
$num2 = 5;

$result = $num1 + $num2;

echo "<h2>The result of $num1 + $num2 = $result</h2>";


// Multiplication
$num1 = 10;
$num2 = 5;

$result = $num1 * $num2;

echo "<h2>The result of $num1 * $num2 = $result</h2>";

// Division
$num1 = 10;
$num2 = 5;

$result = $num1 / $num2;

echo "<h2>The result of $num1 / $num2 = $result</h2>";

// Modulus
$num1 = 10;
$num2 = 5;

$result = $num1 % $num2;

echo "<h2>The result of $num1 % $num2 = $result</h2>";


// ASSIGNMENT OPERATORS
// [=, +=, -=, *=, /=, %=] -> Binary Operators

// Assign [=]
$num = 4;
echo "<h2>$num</h2>";

// Add and Assign [+=]
$num = 5;
$num += 5;
// $num = $num + 5;
echo "<h2>$num</h2>";

// Subtract and Assign [-=]
$num = 5;
$num -= 5;
// $num = $num + 5;
echo "<h2>$num</h2>";

// Divide and Assign [/=]
$num = 5;
$num /= 5;
// $num = $num + 5;
echo "<h2>$num</h2>";

// Modulus and Assign [%=]
$num = 5;
$num %= 5;
// $num = $num + 5;
echo "<h2>$num</h2>";

// Multiply and Assign [*=]
$num = 5;
$num *= 5;
// $num = $num + 5;
echo "<h2>$num</h2>";


// COMPARISON OPERATORS
// [==, ===, !=, !==, >, <, >=, <=] -> Binary Operators

// Equal [==]
$num1 = 3;
$num2 = 7;

var_dump($num1 == $num2); // False
echo "<br />";

$num3 = "7";
$num4 = 7; 

var_dump($num3 == $num4);  // True
echo "<br />";

// Identical [===]
$num5 = "7";
$num6 = 7;

var_dump($num5 === $num6); // False
echo "<br />";

// Not Equal [!= | <>]
$num7 = 6;
$num8 = 7;

var_dump($num7 != $num8); // True
echo "<br />";

$num7 = "7";
$num8 = 7;

var_dump($num7 != $num8); // False
echo "<br />";

// Not Identical [!==]

$num9 = 8;
$num10 = "8";

var_dump($num9 !== $num10); // True
echo "<br />";

// Less Than [<]
$num11 = 7;
$num12 = 8;

var_dump($num11 < $num12); // True
echo "<br />";

$num11 = 8;
$num12 = 8;

var_dump($num11 < $num12); // False
echo "<br />";

// Greater Than [>]

$num11 = 8;
$num12 = 8;

var_dump($num11 > $num12); // False
echo "<br />";

// Less Than or Equals To [<=]
$num13 = 7;
$num14 = 7;

var_dump($num13 <= $num14); // True
echo "<br />";

// Greater Than or Equals To [>=]
$num13 = 6;
$num14 = 7;

var_dump($num13 >= $num14); // True
echo "<br />";


// INCREMENT / DECREMENT OPERATORS [--, ++]

// ================= INCREMENTING ===================
// PRE INCREMENT OPERATORS [++$i]

$num1 = 2;
$num2 = ++$num1; // 3

echo "<h1>Increment And Decrement [Pre Increment]</h1>";

echo "<p>\$num1 = $num1</p>";
echo "<p>\$num2 = $num2</p>";

// POST INCREMENT OPERATORS [$i++]

$num1 = 9; // 3
$num2 = $num1++; // 2

echo "<h1>Increment And Decrement [Post Increment]</h1>";

echo "<p>\$num1 = $num1</p>";
echo "<p>\$num2 = $num2</p>";


// ============== END INCREMENT =====================

// =================== DECREMENT =================
// Pre Decrement OPERATORS [--$i]

$num1 = 8; // 4
$num2 = --$num1; // 4

echo "<h1>Increment And Decrement [Pre Decrement]</h1>";

echo "<p>\$num1 = $num1</p>";
echo "<p>\$num2 = $num2</p>";

// Post Decrement OPERATORS [$i--]

$num1 = 5; // 4
$num2 = $num1--; // 5

echo "<h1>Increment And Decrement [Post Decrement]</h1>";

echo "<p>\$num1 = $num1</p>";
echo "<p>\$num2 = $num2</p>";

// ===================== END DECREMENT ===================

// LOGICAL OPERATORS [AND (&&), OR (||), NOT (!), XOR]

$cond1 = 4 < 3; // false,
$cond2 = 5 > 2; // true
$cond3 = 7 == '7'; // true

echo "<h2>AND OPERATOR </h2>";

var_dump($cond1 AND $cond2); // false
echo "<br />";
var_dump($cond2 && $cond3); // true
echo "<br />";


// ================= END AND =====================

// OR OPERATOR
$cond1 = 8 > 4; // true
$cond2 = 5 == 2; // false
$cond3 = 7 !== '7'; // true

echo "<h2>OR OPERATOR </h2>";

var_dump($cond1 OR $cond2); // true
echo "<br />";
var_dump($cond2 || $cond3); // true
echo "<br />";


// ================= END OR =====================

// XOR OPERATOR
$cond1 = 8 > 4; // true
$cond2 = 5 == 2; // false
$cond3 = 7 !== '7'; // true

echo "<h2>XOR OPERATOR </h2>";

var_dump($cond1 XOR $cond2); // true
echo "<br />";
var_dump($cond1 XOR $cond3); // false
echo "<br />";


// ================= END XOR =====================

// NOT OPERATOR [UNARY OPERATOR]
$cond1 = 8 > 4; // true
$cond2 = 5 == 2; // false
$cond3 = 7 !== '7'; // true

echo "<h2>NOT OPERATOR </h2>";

var_dump(!$cond1); // false
echo "<br />";

var_dump(!$cond2); // true
echo "<br />";


// CLASS WORRK

$x = 7 == 2; // false
$y = 5 !== '5'; // true
$z = 9 > 4; // true

var_dump(!($x && $z) XOR $y); // false

// ====================== END CLASS WORK ===================

// STRING OPERATORS [., .=]

$firstname = 'John';
$lastname = ' Smith';

$name = $firstname . $lastname; // "John Smith"
echo "<p>$name</p>";

$html = "<ul>";
$html .= "<li>First item</li>";
// $html = "<ul> <li>First item</li>";
$html .= "<li>Second item</li>";
// $html = "<ul> <li>First item</li> <li>Second item</li>";
$html .= "</ul>";
// $html = "<ul> <li>First item</li> <li>Second item</li> </ul>";
echo $html;


// ARRAY OPERATORS [+, ==]

// Associative arrays

$arr1 = [
    "name" => "obi",
    "age" => 28
];

$arr2 = [
    "subject" => "PHP"
];

$result = $arr1 + $arr2;

print_r($result);
echo "<br />";


// ===========================

$arr1 = [
    "name" => "obi",
    "age" => 28
];

$arr2 = [
    "name" => "obi",
    "age" => 28
];

var_dump($arr1 == $arr2);


// SPACESHIP OPERATORS [ <=> ]

$con = 2 <=> 3; // -1
echo "<p>Spaceship $con</p>";

$con = 2 <=> 2; // 0
echo "<p>Spaceship $con</p>";

$con = -2 <=> -4; // 1
echo "<p>Spaceship $con</p>";

