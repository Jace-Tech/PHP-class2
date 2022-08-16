<?php 

$name = "Jane";

$sentence = '<h2>$name is a name of a person</h2>';
echo $sentence;

$sentence = "<h2>$name is a name of a person</h2>";
echo $sentence;

// ESCAPE CHARACTERS
// \n - new line
// \t - tab
// \r - carriage return
// \$ - dollar sign
// \\ - backslash

$text = "This is a new sentence \n\r \$name is a variable for $name\t and a tab";
?>
<!-- preformatted text -->
<pre>
    <?= $text; ?>
</pre>

<?php
 

// STRING FUNCTIONS 
// strlen() - returns the length of a string

$str = "Hello World";
$length = strlen($str);

echo "<h2>$length</h2>";

// strtoupper() - returns a string in all uppercase
$name = "jane doe";
$uppercased = strtoupper($name);

echo "<h2>$uppercased</h2>";

// strtolower() - returns a string in all lowercase
$name = "JANE DoE";
$lowercased = strtolower($name);
echo "<h2>$lowercased</h2>";

// explode() - returns an array of strings based on the seperator
$str = "Jace, John, Peter, Mark, James";
$arr_names = explode(", ", $str);

print_r($arr_names);

// obi-ada-mark
$test = "obi-ada-mark";
$result = explode("-", $test);
print_r($result);

// str_word_count() - returns an array of words in a string
$statement = "This is a sentence";
$words = str_word_count($statement);

echo "<h2>\$statement has a total number of $words words</h2>";

// str_replace() - replaces a string with another string
// string to replace | replacement | where to replace it in | number of items replaced

// print
// echo
// print_r
// var_dump

$string = "I hate hate PHP";
$new_string = str_replace("hate", "love", $string, $count);

echo "<h2>$new_string</h2>";
echo "<p>$count items replaced</p>";


