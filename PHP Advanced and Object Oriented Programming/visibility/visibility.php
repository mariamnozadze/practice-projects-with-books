<?php

/**Access control, which is also called visibility, dictates how accessible a class’s properties and methods
are... in other words: where the class’s members can be referenced and where they are inaccessible.

There are three levels of visibility:
 1)public, 2)protected,  3)private. */
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Visibility</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    class Test
    {
        //declare attributes
        public $public = 'public';
        protected $protected = 'protected';
        private $_private = 'private';

        //function for printing variable's value:
        function printVar($var)
        {
            echo "<p>In Test, \$$var: '{$this->$var}'.</p>";
        }
    } //end of a Test class

    class LittleTest extends Test
    {
        function printVar($var)
        {
            echo "<p>In LittleTest, \$$var: '{$this->$var}'.</p> ";
        }
    } //end of a LittleTest class

    //Create the objects:
    $parent = new Test();
    $child = new LittleTest();

    //print the current value of $public:
    echo '<h1>Public</h1>';
    echo '<h2>Initially...</h2>';
    $parent->printVar('public');
    $child->printVar('public');

    //modify public and reprint:
    echo '<h2>Modifying $parent->public...</h2>';
    $parent->public = 'modified';
    $parent->printVar('public');
    $child->printVar('public');

    // Print the current value of $protected:
    echo '<hr><h1>Protected</h1>';
    echo '<h2>Initially...</h2>';
    $parent->printVar('protected');
    $child->printVar('protected');

    // // Attempt to modify $protected and reprint:
    // echo '<h2>Attempting to modify $parent->protected...</h2>';
    // $parent->protected = 'modified';
    // $parent->printVar('protected');
    // $child->printVar('protected');

    // Print the current value of $_private:
    echo '<hr><h1>Private</h1>';
    echo '<h2>Initially...</h2>';
    $parent->printVar('_private');
    // $child->printVar('_private');

    // Attempt to modify $_private and reprint:
    // echo '<h2>Attempting to modify $parent->_private...</h2>';
    // $parent->_private = 'modified';
    // $parent->printVar('_private');
    // $child->printVar('_private');

    // Delete the objects:
    unset($parent, $child);
    ?>
</body>

</html>