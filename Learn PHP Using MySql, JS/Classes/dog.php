<?php
//-----class contains properties. Properties are also called variables. Properties include characteristics of the class.


declare(strict_types=1);
//$dog_size has been declared to allow only integers, other three to allow only strings.

class Dog
{
    //---properties
    private $dog_weight = 0;
    private $dog_breed = "no breed";
    private  $dog_color = "no color";
    private  $dog_name = "no name";

    // function get_properties(): string
    // {
    //     return "$this->dog_weight,$this->dog_breed,$this->dog_color.";
    // }


    //------set methods
    function set_dog_name(string $value): bool
    {
        $error_message = TRUE;
        (ctype_alpha($value) && strlen($value) < 21) ?
            $this->dog_name = $value : $error_message = FALSE;
        /**
         * If the $value property contains alphabetic characters only and is less than 21 characters, the $dog_name property is updated with the value that has been passed.
         */
        return $error_message;
    }

    function set_dog_weight($value): bool
    {
        $error_message = TRUE;
        (ctype_digit($value) && ($value > 0 && $value <= 120)) ?
            $this->dog_weight = $value : $error_message = FALSE;
        return $error_message;
    }

    function set_dog_breed($value): bool
    {
        $error_message = TRUE;
        (ctype_alpha($value) && strlen($value) <= 35) ?
            $this->dog_breed = $value : $error_message = FALSE;
        return $error_message;
    }

    function set_dog_color($value): bool
    {
        $error_message = TRUE;
        (ctype_alpha($value) && strlen($value) <= 15) ?
            $this->dog_color = $value : $error_message = FALSE;
        return $error_message;
    }

    function get_properties(): string
    {
        return "$this->dog_weight,$this->dog_breed,$this->dog_color.";
    }
}
