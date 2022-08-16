<?php 

// SANITIZING A STRING

// FILTER_SANITIZE_STRING
// htmlspecialchar()

$string = "<script>alert('This is a malicious text')</script>";
$filterString = filter_var($string, FILTER_SANITIZE_STRING);
$filterString = htmlspecialchars($string);


// INTEGERS
// Validating an Integer 
$integer = 0;
$isValid = filter_var($integer, FILTER_VALIDATE_INT);

if($isValid || $integer == 0) {
    echo "<p>$integer is a valid integer</p>";
}
else {
    echo "<p>$integer is not a valid integer</p>";
}

// Validating for a range
$max_range = 50;
$min_range = 0;

$integer = 20;

$hasRange = filter_var($integer, FILTER_VALIDATE_INT, [
    "options" => [
        "min_range" => $min_range,
        "max_range" => $max_range
    ]
]);

if($hasRange) {
    echo "<p>$integer fall within range</p>";
}
else {
    echo "<p>$integer does not fall within range</p>";
}

// EMAILS

// $email = "test@@test.com";
// $email = "test - at - example dot com";
// test - at - example dot com
// $email = "{test@example.com}";
$email = "(test@example.com)";

$sanitizeEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

echo "<p>$sanitizeEmail</p>";
$isValidEmail = filter_var($sanitizeEmail, FILTER_VALIDATE_EMAIL);

if($isValidEmail) {
    echo "<p>$email is a valid email</p>";  
}
else {
    echo "<p>$email is not a valid email</p>";
}