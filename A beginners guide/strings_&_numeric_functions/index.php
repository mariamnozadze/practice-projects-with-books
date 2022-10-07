<?php
// calculate length of string
$str = 'Welcome to Xanadu';
echo strlen($str); // 17
echo '<br>';



//-----------------
// Reversing a string
$str = 'One small step';
echo strrev($str); // 'pets llams enO'
echo '<br>';



//-------------
// repeat string
$str = 'yo';
echo str_repeat($str, 3); // 'yoyoyo'
echo '<br>';



//------------
/*accepts three arguments: the original string, the position (offset) at which to start slicing, and the number of characters to return from the starting position.*/
$str = 'Welcome to nowhere';
echo substr($str, 3, 4); // 'come'
echo '<br>';



//------------
/*To extract a substring from the end of a string (rather than the beginning), pass
substr() a negative offset*/
$str = 'Welcome to nowhere';
echo substr($str, 3, 5) . substr($str, -4, 4); // 'come here'
echo '<br>';
