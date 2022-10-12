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
function getPerimeter($length, $width)
{
    $perimeter = 2 * ($length + $width);
    echo "The perimeter of a rectangle of length $length
    units and width $width units is: $perimeter units";
}
// function invocation
// with arguments
getPerimeter(4, 2);
// The perimeter of a rectangle of length 4 units and width 2 units is: 12 units