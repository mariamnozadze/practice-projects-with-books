<?php
//all attributes must be prefixed with a keyword indicating the variable’s visibility. The options are:
//--------public, private, and protected

//===value must be a literal value and not the result of an expression
class GoodClass
{
    public $var1 = 123;
    public $var2 = 'string';
    public $var3 = array(1, 2, 3);
}
class BadClass
{
    // =========These won't work!
    // public $today = get_date();
    public $square = $num * $num;
}




/****OBJECTS *****/
// -------$object = new ClassName();
//$object is an instance of ClassName.

//To call the methods of the class, you use this syntax:
//---------$object->methodName();

//To access an object’s properties, use
//---------$object->propertyName;
//========no dollar sign!
//$object->$propertyName; // Error!

//Once you’ve finished with an object, you can delete it as you would any variable:
//------unset($object);