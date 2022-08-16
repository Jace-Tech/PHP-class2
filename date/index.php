<?php

// DATE

// Get todays date

// 27-07-2022
$today = date("d-m-Y");

echo "<h2>Today's Date: $today</h2>";

// DATE FORMATING CHARACTERS

// DAYS
// d - day in digit with leading zero [eg. 07, 08..etc]
// D - abbreviated day text [eg. Mon, Tue ...etc]
// j - day in digit without leading zero [eg. 7, 8..etc]
// l - A full textual representation of the day of the week [eg. Monday, ...etc]

echo "<h2>Day Formats</h2>";

$day = date("D");
echo "<p>Day: $day</p>";

$day = date("d");
echo "<p>Day: $day</p>";

$day = date("j");
echo "<p>Day: $day</p>";

$day = date("l");
echo "<p>Day: $day</p>";

echo "<hr />";

// MONTHS
// m - digit of the month with leading zero [eg. 01, 02, 07...etc]
// M - A short textual representation of a month, three letters [eg. Jan, Feb, Mar, Apr...etc]
// F - A full textual representation of a month [eg. January, April...etc]
// n - Numeric representation of a month, without leading [eg. 1, 3, 7, ..etc]

echo "<h2>Month Formats</h2>";

$month = date("m");
echo "<p>Month: $month</p>";

$month = date("M");
echo "<p>Month: $month</p>";

$month = date("F");
echo "<p>Month: $month</p>";

$month = date("n");
echo "<p>Month: $month</p>";

echo "<hr />";


// YEAR 
// y - two digit representation of the year [eg. 2022 -> 22, 2018 -> 18]
// Y - four digit representation of the year [eg. 2022, 2018]

echo "<h2>Year Formats</h2>";

$year = date("y");
echo "<p>Year: $year</p>";

$year = date("Y");
echo "<p>Year: $year</p>";

echo "<hr />";
// Hour
// h -> 12-hour format of an hour with leading zeros [01, 02, 12 ...etc]
// H -> 24-hour format of an hour with leading zeros [13, 14, 02 ...etc]

// g -> 12-hour format of an hour without leading zeros [1, 2, 12 ...etc]
// G -> 24-hour format of an hour without leading zeros [13, 14, 02 ...etc]

echo "<h2>Hours Formats</h2>";

$hour = date("h");
echo "<p>Hour: $hour</p>";

$hour = date("H");
echo "<p>Hour: $hour</p>";

$hour = date("g");
echo "<p>Hour: $hour</p>";

$hour = date("G");
echo "<p>Hour: $hour</p>";

echo "<hr />";

// MINUTES
// i - returns the minutes [eg, 22, 45...etc]

echo "<h2>Minutes Formats</h2>";

$minutes = date("i");
echo "<p>Minutes: $minutes</p>";

echo "<hr />";

// SECONDS
// s - returns the seconds [eg, 22, 45...etc]

echo "<h2>Seconds Formats</h2>";

$seconds = date("s");
echo "<p>Seconds: $seconds</p>";

echo "<hr />";

// AM / PM
// a - in lowercase [am | pm] 
// A - in uppercase [AM | PM] 
echo "<h2>AM / PM Formats</h2>";

$meridiem = date("a");
echo "<p>Meridiem: $meridiem</p>";

$meridiem = date("A");
echo "<p>Meridiem: $meridiem</p>";

echo "<h3>EXAMPLE [Use cases]</h3>";

$date = date("d, M Y");

// dd, M YYYY
// 27, Jul 2022
echo "<p>dd, M YYYY -> $date</p>";


// CLASS WORK

echo "<hr />";
echo "<h2>Class Work</h2>";

// 7/27/22
$date = date("m/d/y");
echo "<p>$date</p>";

// 27, 07, 22
$date = date("d, m, y");
echo "<p>$date</p>";

// Wednesday 27, July 2022
$date = date("l j, F, Y");
echo "<p>$date</p>";


// TIMESTAMPS 
// date(format, timestamp)

// mktime(hour, minutes, seconds, month, day, year)

// day -> 14,  month -> 02, year -> 2022, hour -> 12, minute -> 0, second -> 0
$valentineTimestamp = mktime(12, 0, 0, 2, 14, 2022);
$day = date('l', $valentineTimestamp);
echo "<p>Valentine 2022: $day</p>"; // Monday

// Christmas
// day -> 14,  month -> 02, year -> 2022, hour -> 12, minute -> 0, second -> 0
$christmasTimestamp = mktime(13, 0, 0, 12, 25, 2022);
$day = date('l', $christmasTimestamp);
echo "<p>Valentine 2022: $day</p>"; // Sunday

// strtotime()
$christmasTimestamp = strtotime("25-12-2022"); // parse
$day = date("l", $christmasTimestamp);
echo "<p>Valentine 2022: $day</p>"; // Sunday

$nextWeekTimestamp = strtotime("last week");
echo date("l d, F", $nextWeekTimestamp);