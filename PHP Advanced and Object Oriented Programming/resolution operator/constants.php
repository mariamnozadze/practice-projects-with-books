<?php
class SomeClass
{
    const PI = 3.14;
}

/*
Constants can only be assigned a value like in that example. The value cannot be based on
another variable, and it can’t be the result of an expression or a function call.
Constants, like static attributes, also cannot be accessed through the object. You cannot do this:
$obj->PI
or
$obj::PI

--------you can use ClassName::CONSTANT_NAME (e.g., SomeClass::PI) anywhere. You can
also use self::CONSTANT_NAME within the class’s methods-----
*/

//you cannot access them within the class using $this. Instead, you must use self: followed by the scope resolution operator (::), followed by the variable name, with its initial dollar sign:
class SomeClass1
{
    public static $counter = 0;
    function __construct()
    {
        self::$counter++;
    }
}

$obj = new SomeClass();
//each time a  new object is created $counter goes up by one.

//static methods
class SomeClass2
{
    public static function doThis()
    {
        // Code.
    }
}

class SomeClass4
{
    public static $counter = 0;
    public static function doThis()
    {
        // Code.
    }
}
echo SomeClass4::$counter; // 0
SomeClass4::doThis();
