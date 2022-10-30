<?php
//-----mathematical functions----------

// random number
echo rand(0, 65535), "\n";
//displays a random integer between 0 and 65535
echo rand(2, 10), "\n";
// displays a random integer between 2 and 10
echo rand(-20, 20), "\n";
// displays a random integer between -20 and 20




//rounding a number
$a = 5.9;
echo round($a), "\n"; //It displays: 6
echo round(5.4), "\n"; //It displays: 5

$a = 5.312;
echo round($a, 2), "\n"; //It displays: 5.31

$a = 5.315;
echo round($a, 2), "\n"; //It displays: 5.32
echo round(2.3447, 3), "\n"; //It displays: 2.345




//sqrt(number) - This function returns the square root of number
echo sqrt(9), "\n"; //It displays: 3
echo sqrt(2), "\n"; //It displays: 1.4142135623731



//------task
$acceleration = 80;
$traveled_distance = 300;
$t = sqrt(2 * $traveled_distance / $acceleration);

echo "Your car travelled for $t  seconds";



//------task
//Writing a Mathematical Expression
$x = 12;
$z = 6;
$y = 10 * $x - (10 - $z) / 4;

echo "The result is: $y";
//The result is: 119