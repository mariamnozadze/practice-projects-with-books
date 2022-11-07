<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Static</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    class Pet
    {
        protected $name;
        private static $_count = 0;

        // Constructor assigns the pet's name
        // and increments the counter:
        function __construct($pet_name)
        {
            $this->name = $pet_name;
            self::$_count++;
        }

        // Destructor decrements the counter:
        function __destruct()
        {
            self::$_count--;
        }

        // Static method for returning the counter:
        public static function getCount()
        {
            return self::$_count;
        }
    } //end of a Pet class

    class Cat extends Pet
    {
    }

    //Pet constructor is called when making an object of type Dog, because Dog(or any other pet) does not have its own constructor.
    class Dog extends Pet
    {
    }

    class Ferret extends Pet
    {
    }

    class PygmyMarmoset extends Pet
    {
    }

    //-------END OF CLASSES-------

    // Create a dog:
    $dog = new Dog('Old Yeller');

    // Print the number of pets:
    echo '<p>After creating a Dog, I now have ' . Pet::getCount() . ' pet(s).</p>';

    // Create a cat:
    $cat = new Cat('Bucky');
    echo '<p>After creating a Cat, I now vhave ' . Pet::getCount() . ' pet(s).</p>';

    // Create another pet:
    $ferret = new Ferret('Fungo');
    echo '<p>After creating a Ferret, I now have ' . Pet::getCount() . ' pet(s).</p>';

    // Tragedy strikes!
    unset($dog);
    echo '<p>After tragedy strikes, I now have ' . Pet::getCount() . ' pet(s).</p>';
    /**
     * When a Dog (or any other subclass) object is destroyed (here using unset()), the Pet destructor is invoked, subtracting 1 from $_count. (Again, the Pet destructor is called because no derived class has its own destructor.)
     */

    // create new pet:
    $pygmymarmoset = new PygmyMarmoset('Toodles');
    echo '<p>After creating a Pygmy Marmoset, I now have ' . Pet::getCount() . ' pet(s). </p>';

    // Delete the objects:
    unset($cat, $ferret, $pygmymarmoset);

    echo '<p>After unset(), I now have ' . Pet::getCount() . ' pet(s) :( </p>';
    ?>
</body>

</html>