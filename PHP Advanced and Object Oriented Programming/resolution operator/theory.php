<?php
// ->, used by objects to access their members.

/**
 * resolution operator: the combination of two colons together (::). It’s used to access members through classes, not objects:
 * ClassName::methodName();
 * ClassName::propertyName;
 */


class SomeClass
{
    function __construct()
    {
        self::doThis();
    }
    protected function doThis()
    {
        echo 'done!';
    }
}

/**
 * doThis() function defined in SomeClass can only be called by other methods within SomeClass or by methods within inherited classes, because doThis() is defined as protected.
 */


//To refer to a member of a parent class, use the scope resolution operator with the keyword parent:

class SomeOtherClass extends SomeClass
{
    function __construct()
    {
        parent::doThis();
    }
}

//test
function test()
{
    static $n = 1;
    echo "$n<br>";
    $n++;
}
test(); //1
test(); //2
test(); //3

//If $n was not declared as static, each call to the function would print the number 1.


/*static variable is remembered
across all instances of that class (across all objects based on the class). To declare a static attribute,
use the static keyword after the visibility indicator:
*/
class SomeClass1
{
    public static $var = 'value';
}
