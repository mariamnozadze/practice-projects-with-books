<?php
//-----------------
// read file into string
$str = file_get_contents('example.txt') or die('ERROR: Cannot find file');
echo $str;



// //-------------------
// // read file into array
// $arr = file('example.txt') or die('ERROR: Cannot find file');
// foreach ($arr as $line) {
//     echo $line;
// }


// //-----------------
// // read file into array
// $arr = file('http://www.google.com') or die('ERROR: Cannot find file');
// foreach ($arr as $line) {
//     echo $line;
// }
// // opens google.com



//--------------------
// write string to file
$data = "A fish \n out of \n water\n";
file_put_contents('output.txt', $data)
    or die('ERROR: Cannot write file');
echo 'Data written to file';
// Creates file into folder and puts text there