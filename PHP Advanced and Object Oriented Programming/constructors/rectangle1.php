<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rectangle</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require('Rectangle.php');

    $width = 160;
    $height = 75;

    echo "<h2>With a width of $width and a height of $height...</h2>";

    //creates an object of type Rectangle
    // $r = new Rectangle();
    $r = new Rectangle($width, $height);

    //     /*assigns the values of the
    // variables in this script—$width and $height—to the object’s attributes
    // */
    //     $r->setSize($width, $height);

    //print rectangle's area
    echo '<p>The area of the rectangle is ' . $r->getArea() . '</p>';

    //print the rectangle's perimeter
    echo '<p>The perimeter of the rectangle is ' . $r->getPerimeter() . '</p>';

    //Indicate whether or not this rectangle is also a square
    echo '<p>This rectangle is</p>';
    if ($r->isSquare()) {
        echo 'also';
    } else {
        echo 'not';
    }
    echo ' a square.</p>';
    ?>
</body>

</html>