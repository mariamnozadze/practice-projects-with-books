<?php
require_once('dog.php');
$lab = new Dog;
//Once the instance is created, you can then access any methods by using the object name ($lab) and the method name (get_properties).
// $lab->get_properties();


$dog_error_message = $lab->set_dog_name('Fred');

print $dog_error_message ? 'Name update successful<br/>' :
    'Name update not successful<br/>';

$dog_error_message = $lab->set_dog_weight(50);
print $dog_error_message ? 'Weight update successful<br />' :
    'Weight update not successful<br />';

$dog_error_message = $lab->set_dog_breed('Lab');
print $dog_error_message ? 'Breed update successful<br />' :
    'Breed update not successful<br />';

$dog_error_message = $lab->set_dog_color('Yellow');
print $dog_error_message ? 'Color update successful<br />' :
    'Color update not successful<br />';

//-----------------------------Get Properties---------------------------
$dog_properties = $lab->get_properties();
list($dog_weight, $dog_breed, $dog_color) = explode(',', $dog_properties);
print "Dog weight is $dog_weight. Dog breed is $dog_breed.
Dog color is $dog_color.";
