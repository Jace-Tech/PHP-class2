<?php 

$temp = 28;

if($temp < 0) { // below < 0 
    echo "<h2>FREEZING WEATHER</h2>"; 
}
elseif($temp <= 10 && $temp > 0) { // 0 - 10
    echo "<h2>VERY COLD WEATHER</h2>";
}
elseif($temp <= 20 && $temp > 10) { // 10 - 20
    echo "<h2> COLD WEATHER</h2>";
}
elseif($temp <= 30 && $temp > 20) { // 20 - 30
    echo "<h2> NORMAL TEMPERATURE</h2>";
}
elseif($temp <= 40 && $temp > 30) { // 30 - 40
    echo "<h2> IT'S HOT</h2>";
}
else { // 40 > above
    echo "<h2> VERY HOT</h2>";
}