<?php
//----------------------------
$x = 89;
define('ABC', $x + 1);
$x += ABC;

echo $x; //179



//------------------------------
define('NUM', '7');
$a = NUM;
echo gettype($a); //string
