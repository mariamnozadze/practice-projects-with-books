<?php
// define class
class Machine
{
    // constructor
    function __construct()
    {
        echo "Starting up...\n";
    }
    // destructor
    function __destruct()
    {
        echo "Shutting down...\n";
    }
}
// create an object
$m = new Machine();
// output: "Starting up..."
// then destroy it
unset($m);
// output: "Shutting down..."



/*extensibility implies that a new class can be derived from an existing one, inheriting all the properties and methods of the parent class and adding its own new properties and methods as needed. 
Thus, for example, a Human class could
extend a Mammal class
*/
// class Mammal
// {
//     // class definition
// }
// class Human extends Mammal
// {
//     // class definition
// }



//-------------
// class Vertebrate
// {
// }
// class Mammal extends Vertebrate
// {
// }
// class Human extends Mammal
// {
// }
// $baby = new Human;
// echo ($baby instanceof Vertebrate) ? 'true' : 'false';
// // output: true


//--------------------
// class tree
class Mammal
{
    public $name;
    protected $age;
    private $species;
}
class Human extends Mammal
{
}
$mammal = new Mammal;
$mammal->name = 'William'; // ok
$mammal->age = 3; // fatal error
$mammal->species = 'Whale'; // fatal error

$human = new Human;
$human->name = 'Barry'; // ok
$human->age = 1; // fatal error
$human->species = 'Boy'; // undefined



//-----------
class Daddy
{
    public function talk()
    {
        echo get_class($this);
    }
}
class Baby extends Daddy
{
    public function play()
    {
        parent::talk();
    }
}
$a = new Baby;
$a->play();
// Baby