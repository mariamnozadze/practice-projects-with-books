<?php
// class Person
// {
//     static $global = 23;
// }
/**PHP allows you to define static properties, which are variables on an object class, and can be accessed by referencing the property with the class name */
// $localCopy = Person::$global;


/*Inside an instance of the object class, you can also refer to the static
property using the self keyword:*/
//------echo self::$global;


/**
 * you might declare a class that represents data pulled from a database, but you might not want to pull in large data values, unless specifically requested.
 * One way to implement that, of course, would be to create access methods for the property that read and write the data whenever requested
 */
// class Person
// {
//     public function __get($property)
//     {
//         if ($property === 'biography') {
//             $biography = "long text here..."; // would retrieve from database
//             return $biography;
//         }
//     }
//     public function __set($property, $value)
//     {
//         if ($property === 'biography') {
//             // set the value in the database
//         }
//     }
// }
