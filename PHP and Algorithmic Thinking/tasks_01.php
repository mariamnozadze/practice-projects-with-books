<?php

//Calculating the Area of a Rectangle
$height = 13;
$base = 5;
$rec = $height * $base;

echo "Area of circle is $rec cm";
//Area of circle is 65 cm




//Calculating the Area of a Circle
$pi = 3.14;
$radius = 10;
$area = $pi * $radius ** 2;

echo "Area of circle is $area cm";
//Area of circle is 314 cm



//Calculating  MPG
$miles = 150; //number of miles i had driven
$usedGas = 80; //gallons of gas i used
$MPG = $miles / $usedGas;

echo "Your car's MPG is: $MPG";
//Your car's MPG is: 1.875



///Kelvin to Fahrenheit
$fahrenheit = 100;
$kelvin = ($fahrenheit + 459.67) /  1.8;

echo "The temperature in Kelvin is $kelvin ";
// The temperature in Kelvin is 310.92777777778



// Calculating sales tax
$vat = 0.19;
$price_before_tax = 80;
$sales_tax = $price_before_tax * $vat;
$price_after_tax = $price_before_tax + $sales_tax;

echo "The after-tax price is $price_after_tax $ ";
// The after-tax price is 95.2 $



//Calculating a Sales Discount
$price_before_discount = 100;
$discount = 20;
$discount_amount = $price_before_discount * $discount / 100;
$price_after_discount = $price_before_discount - $discount_amount;

echo "The price after discount is: $price_after_discount ";
// The price after discount is: 80