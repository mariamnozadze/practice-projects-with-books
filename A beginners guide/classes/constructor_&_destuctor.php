<?php
//--------------------
// parent class definition
class Mammal
{
    public $age;
    function __construct()
    {
        echo 'Creating a new ' . get_class($this) . '...';
    }
    function setAge($age)
    {
        $this->age = $age;
    }
    function getAge()
    {
        return $this->age;
    }
    function grow()
    {
        $this->age += 4;
    }
}

// child class definition
class Human extends Mammal
{
    public $name;
    function __construct()
    {
        parent::__construct();
    }
    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
    function grow()
    {
        $this->age += 1;
        echo 'Growing...';
    }
}
$baby = new Human;
// Creating a new Human...
$baby->setAge(1);
$baby->setName('Tonka');
echo $baby->getName() . ' is now ' . $baby->getAge() . ' year(s) old...';
//Tonka is now 1 year(s) old...
$baby->grow();
//Growing...
$baby->grow();
//Growing...
echo $baby->getName() . ' is now ' . $baby->getAge() . ' year(s) old.';
//Tonka is now 3 year(s) old.
