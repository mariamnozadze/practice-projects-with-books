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



//--------------------------------

/** what if you wanted to change the behavior of the parent class’s methods? It would be wrong to change the definition of the parent class (presumably it works as it should, and besides, other classes might inherit from it too ). Instead, you can override a parent class’s method to customize it for the new class. ---This is polymorphism----, where calling the same method can have different results, depending on the object type.*/

/**
 * ----Visibility ----- controls what members of a class can be accessed or altered by other classes (or even outside of any class).
 */
