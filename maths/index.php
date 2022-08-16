<?php

// abs() -> returns the positive number

$num = -10;
$res = abs($num);

echo "<p>$num is now $res</p>";

// ceil () -> Rounds up to the next integer

$num2 = 5.3;
$result = ceil($num2); // 6
echo "<p>$num2 is now $result</p>";

$num2 = 0.4;
$result = ceil($num2); // 1
echo "<p>$num2 is now $result</p>";

$num2 = -3.6;
$result = ceil($num2); // -3
echo "<p>$num2 is now $result</p>";

// floor () Rounds down to the nearest integer

$num2 = 5.3;
$result = floor($num2); // 5
echo "<p>$num2 is now $result</p>";

$num2 = 0.6;
$result = floor($num2); // 0
echo "<p>$num2 is now $result</p>";

$num2 = -3.6;
$result = floor($num2); // -4
echo "<p>$num2 is now $result</p>";

// round() -> rounds up or down based on the number after the decimal point

$num = 4.6;
$result = round($num);
echo "<p>$num is now $result</p>";

// min () -> returns the minimum value in an array

$arr = [7, 9, 2, 3, 10];
$minimumNum = min($arr);

echo "<p>The minimum number in the array is $minimumNum</p>";

// max () -> returns the maximum value in an array

$arr = [7, 9, 2, 3, 1];
$maximumNum = max($arr);

// sqrt() -> returns the square root of the number
$num = 4;
$result = sqrt($num);

echo "<p>The square root of $num is $result.</p>";

// pow(base, exp) -> raised the based to the given exponent
// 3^2

$result = pow(3, 2);
echo "<p>The result of 3 to the power of 2 is $result.</p>";

echo "<p>The minimum number in the array is $minimunNum</p>";

// 


