<?php
$phonebook = array(
    array(
        'name' => 'Raymond Rabbit',
        'tel' => '1234567',
        'email' => 'ray@bunnyplanet.in',
    ),
    array(
        'name' => 'David Duck',
        'tel' => '8562904',
        'email' => 'dduck@duckpond.corp',
    ),
    array(
        'name' => 'Harold Horse',
        'tel' => '5942033',
        'email' => 'kingharold@farmersmarket.horsestuff.com',
    )
);
// access nested value
echo "David Duck's number is: " . $phonebook[1]['tel'];
//David Duck's number is: 8562904



//-------------------
// $cities = array('London', 'Paris', 'Madrid', 'Los Angeles', 'Bombay', 'Jakarta');
// // iterate over array
// // print each value
// for ($i = 0; $i < count($cities); $i++) {
//     echo $cities[$i] . "\r\n";
// }
// London Paris Madrid Los Angeles Bombay Jakarta



//--------------------
// $cities = array('London', 'Paris', 'Madrid', 'Los Angeles', 'Bombay', 'Jakarta');
// // iterate over array
// // print each value
// foreach ($cities as $c) {
//     echo "$c \r\n";
// }
// // London Paris Madrid Los Angeles Bombay Jakarta



//---------------
// $cities = array(
//     "United Kingdom" => "London",
//     "United States" => "Washington",
//     "France" => "Paris",
//     "India" => "Delhi"
// );
// // iterate over array
// // print each value
// foreach ($cities as $key => $value) {
//     echo "$value is in $key. \r\n";
// }
// // London is in United Kingdom. Washington is in United States. Paris is in France. Delhi is in India.



//-------------
//---------- array iterator
$cities = array(
    "United Kingdom" => "London",
    "United States" => "Washington",
    "France" => "Paris",
    "India" => "Delhi"
);
// create an ArrayIterator object
$iterator = new ArrayIterator($cities);
// rewind to beginning of array
$iterator->rewind();
// iterate over array
// print each value
while ($iterator->valid()) {
    print $iterator->current() . " is in " . $iterator->key() . ". \r\n";
    $iterator->next();
}
// London is in United Kingdom. Washington is in United States. Paris is in France. Delhi is in India.