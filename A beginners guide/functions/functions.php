<?php

/**
 * -------------- User-Defined Functions */
/****
 * user-defined functions are a neat way for
you to create independent, reusable code “packages” that perform specific tasks and can
be maintained independently of the main program */

//---It reduces duplication within a program
//----A function is created once but used many times. If the function code changes, the changes are implemented.
//----Debugging and testing a program becomes easier when the program is subdivided into functions.
//----Functions encourage abstract thinking, understanding how a specific task may be encapsulated into a generic component.


/**
 * There are three components to every function:
 * 1.arguments
 * 2. return values
 * 3. function body
 */




//-------
// function definition
// print today's weekday name
// function definition
// calculate perimeter of rectangle
// p = 2 * (l+w)
// function getPerimeter($length, $width)
// {
//     $perimeter = 2 * ($length + $width);
//     echo "The perimeter of a rectangle of length $length
//     units and width $width units is: $perimeter units";
// }
// // function invocation
// // with arguments
// getPerimeter(4, 2);
// // The perimeter of a rectangle of length 4 units and width 2 units is: 12 units



//----
// reverse and return as an array
function reverseMe($sentence)
{
    $words = explode(' ', $sentence);
    foreach ($words as $k => $v) {
        $words[$k] = strrev($v);
    }
    return $words;
}
// function invocation
echo implode(' ', reverseMe('Have a good day'));
// output: 'evaH a doog yad'

// function invocation
echo implode(' ', reverseMe('Will you marry me'));
// output: 'lliW uoy yrram em'



//--------------
// function definition
// generate e-mail address from supplied values
function buildAddress($username, $domain = 'mydomain.info')
{
    return $username . '@' . $domain;
}
// function invocation
// without optional argument
echo 'My e-mail address is ' . buildAddress('john');
// output: 'My e-mail address is john@mydomain.info'

// function invocation
// with optional argument
echo 'My e-mail address is ' . buildAddress('jane', 'cooldomain.net');
// output: 'My e-mail address is jane@cooldomain.net'



//--------------
function calcAverage()
{
    $args = func_get_args();
    $count = func_num_args();
    $sum = array_sum($args);
    $avg = $sum / $count;
    return $avg;
}
// function invocation
// with 3 arguments
// echo calcAverage(3, 6, 9);
// output: 6

// function invocation
// with 8 arguments
// echo calcAverage(100, 200, 100, 300, 50, 150, 250, 50);
// output: 150

//===============EASY WAY TO CALCULATE AVERAGE===================
//Our array, which contains a set of numbers.
$array = array(1, 7, 9, 3, 20, 12, 2, 9);
//Calculate the average and round it up.
$average = ceil(array_sum($array) / count($array));
//Print out the average.
echo $average; // 8




/** -------------VARIABLE SCOPE
 * By default, variables used within a function are local—their impact is restricted to the function space alone, and they cannot be viewed or manipulated from outside the function in which they exist.
 */
// function definition
// change the value of $score
// function changeScore()
// {
//     $score = 25;
// }
// // define a variable in the main program
// // print its value
// $score = 11;
// echo 'Score is: ' . $score; // output: 11
// // run the changeScore() function
// changeScore();
// // print $score again
// echo 'Score is: ' . $score; // output: 11



/**-----------------GLOBAL SCOPE
 * global keyword: when applied to a variable inside a function, this keyword turns the variable into a global variable, making it visible both inside and outside
the function.
 */
// function definition
// change the value of $score
function changeScore()
{
    global $score;
    $score = 25;
}
// define a variable in the main program
// print its value
$score = 11;
echo 'Score is: ' . $score; // output: 11
// run the changeScore() function
changeScore();
// print $score again
echo 'Score is: ' . $score; // output: 25