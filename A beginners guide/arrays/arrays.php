<?php
//-------------
// $str = 'tinker,tailor,soldier,spy';
// // convert string to array
// $arr = explode(',', $str);
// print_r($arr);
// // output: ('tinker', 'tailor', 'soldier, 'spy')



//-----
// $arr = array('one', 'two', 'three', 'four');
// // convert array to string
// $str = implode(' and ', $arr);
// print_r($str);
// // output: 'one and two and three and four'


//------
// $arr = range(1, 5);
// print_r($arr);
// /*
// "1",
// "2",
// "3",
// "4",
// "5"
// */


// //-------min() and max() functions--------
// $arr = array(7, 36, 5, 48, 28, 90, 91, 3, 67, 42);
// // get min and max
// echo 'Minimum is ' . min($arr) . ' and maximum is ' . max($arr);
// // output: 'Minimum is 3 and maximum is 91'



/*
the index position (offset) at which to
start slicing, and the number of elements to return from the starting offset.
*/
// $rainbow = array(
//     'violet', 'indigo', 'blue', 'green', 'yellow',
//     'orange', 'red'
// );
// // extract 3 central values
// $arr = array_slice($rainbow, 2, 3);
// print_r($arr);
// output: ('blue', 'green', 'yellow')



//-------
// $rainbow = array(
//     'violet', 'indigo', 'blue', 'green', 'yellow',
//     'orange', 'red'
// );
// // extract 3 central values
// // starting from the end
// // output: ('blue', 'green', 'yellow')
// $arr = array_slice($rainbow, -5, 3);
// print_r($arr);



//------Adding and Removing Array Elements-------
$movies = array('The Lion King', 'Cars', 'A Bug\'s Life');
// remove element from beginning of array
array_shift($movies);
// remove element from end of array
array_pop($movies);
// add element to end of array
array_push($movies, 'Ratatouille');
// add element to beginning of array
array_unshift($movies, 'The Incredibles');
// print array
print_r($movies);
// output: ('The Incredibles', 'Cars', 'Ratatouille')



//-------REMOVE DUPLICATES
$duplicates = array('a', 'b', 'a', 'c', 'e', 'd', 'e');
// remove duplicates
$uniques = array_unique($duplicates);
print_r($uniques);
// output: ('a', 'b', 'c', 'e', 'd')



/*
shuffle() function re-arranges the elements of an array in random order, while
its array_reverse() function reverses the order of an array’s elements.
*/
$rainbow = array(
    'violet', 'indigo', 'blue', 'green', 'yellow',
    'orange', 'red'
);
// randomize array
shuffle($rainbow);
print_r($rainbow);
// reverse array
$arr = array_reverse($rainbow);
print_r($arr);
// output: ('red', 'orange', 'yellow', 'green', 'blue',
// 'indigo', 'violet')
