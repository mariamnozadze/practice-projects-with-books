<?php
// class definition
class Automobile
{
    // properties
    public $color;
    public $make;
    public $speed = 55;
    // methods
    public function accelerate()
    {
        $this->speed += 10;
        echo 'Accelerating to ' . $this->speed . '...';
    }
    public function brake()
    {
        $this->speed -= 10;
        echo 'Slowing down to ' . $this->speed . '...';
    }
    public function turn()
    {
        $this->brake();
        echo 'Turning...';
        $this->accelerate();
    }
}

$car = new Automobile;
// set object properties
$car->color = 'red';
$car->make = 'Ford Taurus';
// invoke object methods
$car->accelerate();
$car->turn();
// 'Accelerating to 65...'
// 'Slowing down to 55...'
// 'Turning...'
// 'Accelerating to 65...'