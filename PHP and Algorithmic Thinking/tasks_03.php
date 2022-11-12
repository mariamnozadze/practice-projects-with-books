<?php
//The modulus ( % ) operator
$num1 = 10;
$num2 = 4;
$q = (int)$num1 / $num2;
$r = $num1 % $num2;

echo "Integer Quotient: ", $q, " Integer Remainder: ", $r;
//Integer Quotient: 2.5 Integer Remainder: 2



//replacing strings
$a = "I am newbie in C++. C++ rocks!";
$b = str_replace("C++", "PHP", $a);

echo $a; //I am newbie in C++. C++ rocks
echo $b; //I am newbie in PHP. PHP rocks
