<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>square</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require('Rectangle.php');

    //create class
    class Square extends Rectangle
    {
        //constructor takes 1 argument
        //rectange width & height attributes
        function __construct($side = 0)
        {
            $this->width = $side;
            $this->height = $side;
        }
    } //end of square class

    //rectangle dimensions
    $width = 21;
    $height = 98;


    //print intro
    echo "<h2>With a width of $width and a height of $height...</h2>";

    //create new Rectangle
    $r = new Rectangle($width, $height);

    //print area
    echo '<p>The area of the rectangle is ' . $r->getArea() . '</p>';

    //print perimeter
    echo '<p>The perimeter of the rectangle is ' . $r->getPerimeter() . '</p>';

    //square dimensions
    $side = 60;

    //lil intro
    echo "<h2>With each side being $side... </h2>";

    //create new object
    $s = new Square($side);

    //print square area
    echo '<p>The area of the square is ' . $s->getArea() . '</p>';

    //print square perimeter
    echo '<p>The perimeter of the square is ' . $s->getPerimeter() . '</p>';

    // Delete the objects:
    unset($r, $s);

    ?>
</body>

</html>