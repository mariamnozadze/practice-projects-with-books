<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Constructors and Destructors</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    class Demo
    {
        function __construct()
        {
            echo "<p>in the constructor</p>";
        }

        function __destruct()
        {
            echo "<p>in the destructor</p>";
        }
    }

    //define a simple function which also creates an object
    function test()
    {
        echo "<p>In the function creating a new object....</p>";
        $f = new Demo();
        echo "<p>About to leave a function</p>";
    }
    //create an object of class Demo:
    echo "<p>Creating new object....</p>";
    $o = new Demo();
    /*<-----When this object is created, the constructor will be called. So this script first prints this line (Creating a new object...) and will then print In the constructor*/


    // Call the test() function:
    echo '<p>Calling the function...</p>';
    test();
    /* <------After the object is created in the function, the About to leave the function. message is printed.
    Then the function is exited, at which point in time the object defined in the function—$f—goes
    away, thus invoking the $f object’s destructor, printing In the destructor. */


    // Delete the object:
    echo '<p>About to delete the object...</p>';
    // unset($o);
    /* Once this object is deleted, its destructor is invoked. */

    /*@ ----- if unset($o) is commented out, $o object’s destructor is called after the final printed message */
    echo '<p>End of the script.</p>';

    ?>
</body>

</html>