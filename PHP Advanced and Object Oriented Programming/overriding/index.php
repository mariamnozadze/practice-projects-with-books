<?php
class SomeClass
{
    function scream($count = 1)
    {
        for ($i = 0; $i < $count; $i++) {
            echo 'Eek!<br>';
        }
    }
}
class SomeOtherClass extends SomeClass
{
    function scream($count = 1)
    {
        for ($i = 0; $i < $count; $i++) {
            echo 'Whoohoo!<br>';
        }
    }
}
$obj1 = new SomeClass();
$obj1->scream();
$obj1->scream(2);
$obj2 = new SomeOtherClass();
$obj2->scream();
$obj2->scream(2);

//Eek!
//Eek!
//Eek!
//Whoohoo!
//Whoohoo!
//Whoohoo!