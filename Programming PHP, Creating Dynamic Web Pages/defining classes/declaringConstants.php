<?php
class PaymentMethod
{
    public const TYPE_CREDITCARD = 0;
    public const TYPE_CASH = 1;
}
echo PaymentMethod::TYPE_CREDITCARD;
// 0



//inherit the properties and methods from another class, use the extends keyword
class Person
{
    public $name, $address, $age;
}
class Employee extends Person
{
    public $position, $salary;
}
