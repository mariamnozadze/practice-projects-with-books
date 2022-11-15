<?php
class Person
{
    public $age;
    public function __construct()
    {
        $this->age = 0;
    }
    public function incrementAge()
    {
        $this->age += 1;
        $this->ageChanged();
    }
    protected function decrementAge()
    {
        $this->age -= 1;
        $this->ageChanged();
    }
    private function ageChanged()
    {
        echo "Age changed to {$this->age}";
    }
}
class SupernaturalPerson extends Person
{
    public function incrementAge()
    {
        // ages in reverse
        $this->decrementAge();
    }
}

$person = new Person;
$person->incrementAge();
//Age changed to 1

//$person->decrementAge(); // not allowed
//$person->ageChanged(); // also not allowed

$person = new SupernaturalPerson;
$person->incrementAge(); // calls decrementAge under the hood
//Age changed to -1
