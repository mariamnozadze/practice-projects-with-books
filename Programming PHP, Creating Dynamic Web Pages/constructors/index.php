<?php
class Person
{
    public $name, $address, $age;
    function __construct($name, $address, $age)
    {
        $this->name = $name;
        $this->address = $address;
        $this->age = $age;
    }
}

class Employee extends Person
{
    public $position, $salary;
    function __construct($name, $address, $age, $position, $salary)
    {
        parent::__construct($name, $address, $age);
        $this->position = $position;
        $this->salary = $salary;
    }
}


/*When an object is destroyed, such as when the last reference to an
object is removed or the end of the script is reached, its destructor is
called*/
class Building
{
    function __destruct()
    {
        echo "A Building is being destroyed!";
    }
}
