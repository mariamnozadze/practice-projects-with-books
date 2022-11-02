<?php
class Rectangle
{
    //attributes
    public $width = 0;
    public $height = 0;

    //constructor
    function __construct($w = 0, $h = 0)
    {
        $this->width = $w;
        $this->height = $h;
    }

    //method to set dimensions
    function setSize($w = 0, $h = 0)
    {
        $this->width = $w;
        $this->height = $h;
    }

    //calculates rectangle's area
    function getArea()
    {
        return ($this->width * $this->height);
    }

    //method to calculate the area and return the perimeter
    function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }

    //method to determine if the rectangle is also a square
    function isSquare()
    {
        if ($this->width == $this->height) {
            return true; //Square
        } else {
            return false; //not a square
        }
    }
} // end of rectangle class
