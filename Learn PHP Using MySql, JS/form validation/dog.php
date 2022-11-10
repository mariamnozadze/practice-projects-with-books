<?php

class Dog
{
    //---properties
    private $dog_weight = 0;
    private $dog_breed = "no breed";
    private  $dog_color = "no color";
    private  $dog_name = "no name";
    private $error_message = "??";

    // ----------------------------- Constructor ------------------------------
    function __construct(
        $value1,
        $value2,
        $value3,
        $value4
    ) {
        if (method_exists('dog_container', 'create_dog_app')) {
            $name_error = $this->set_dog_name($value1) ==
                TRUE ? 'TRUE,' : 'FALSE,';
            $breed_error = $this->set_dog_breed($value2) ==
                TRUE ? 'TRUE,' : 'FALSE,';
            $color_error = $this->set_dog_color($value3) ==
                TRUE ? 'TRUE,' : 'FALSE,';
            $weight_error = $this->set_dog_weight($value4) ==
                TRUE ? 'TRUE' : 'FALSE';
            $this->error_message = $name_error . $breed_error . $color_error .
                $weight_error;
        } else {
            exit;
        }
    }

    public function __toString()
    {
        return $this->error_message;
    }

    // ----------------------------- Set Methods ------------------------------
    function set_dog_name(string $value): bool
    {
        $error_message = TRUE;
        (ctype_alpha($value) && strlen($value) <= 20) ?
            $this->dog_name = $value : $error_message = FALSE;
        return $error_message;
    }

    function set_dog_weight(string $value): bool
    {
        $error_message = TRUE;
        (ctype_digit($value) && ($value > 0 && $value <= 120)) ?
            $this->dog_weight = $value : $error_message = FALSE;
        return $error_message;
    }

    function set_dog_breed(string $value): bool
    {
        $error_message = TRUE;
        ((preg_match("/[a-zA-Z ]+$/", $value)) &&
            ($this->validator_breed($value) === TRUE) && strlen($value) <=
            35) ?
            $this->dog_breed = $value : $error_message = FALSE;
        return $error_message;
    }

    function set_dog_color(string $value): bool
    {
        $error_message = TRUE;
        (ctype_alpha($value) && strlen($value) <= 15) ?
            $this->dog_color = $value : $error_message = FALSE;
        return $error_message;
    }

    // ---------- Get Methods
    function get_dog_name(): string
    {
        return $this->dog_name;
    }
    function get_dog_weight(): int
    {
        return $this->dog_weight;
    }
    function get_dog_breed(): string
    {
        return $this->dog_breed;
    }
    function get_dog_color(): string
    {
        return $this->dog_color;
    }
    function get_properties(): string
    {
        return "$this->dog_weight,$this->dog_breed,$this->dog_color.";
    }

    //----general method------
    private function validator_breed(string $value): bool
    {
        $breed_file = simplexml_load_file("breeds.xml");
        $xmlText = $breed_file->asXML();
        if (stristr($xmlText, $value) === FALSE) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
