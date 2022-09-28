<?php

/*********** */
// set a variable
$attribute = 'price';
// create a new variable
// its name comes dynamically
// from the value of $attribute
${$attribute} = 678;
// output: 678
echo $price;



/********************** */
// define variables
$name = 'Fiona';
$age = 28;
// display variable contents
var_dump($name);
var_dump($age);
//string(5) "Fiona" 
//int(28)



/***********************
Constants are defined using PHP’s define() function, which accepts two arguments:
the name of the constant, and its value. Constant names must follow the same rules as
variable names, with one exception: the $ prefix is not required for constant names
 **/
// define constants
define('PROGRAM', 'The Matrix');
define('VERSION', 11.7);

echo 'Welcome to ' . PROGRAM . ' (version ' . VERSION . ')';
//Welcome to The Matrix (version 11.7)


/**
 * The operators automatically add 1 to, or subtract 1 from, the variable they are applied to.
 *  Here’s an example:
 */
// define variable
$count = 19;
// increment
$count++;
// output: 20
echo $count;


// now decrement
$count--;
// output: 19
echo $count;
