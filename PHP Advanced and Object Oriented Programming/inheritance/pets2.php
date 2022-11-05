<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>inheritance/overriding</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    /*class Pet contains:
1 attribute: name,
3 methods: __construct(), eat(), sleep()
*/
    class Pet
    {
        //declare attributes
        public $name;

        //constructor assigns pet's name
        function __construct($pet_name)
        {
            $this->name = $pet_name;
        }

        //pets can eat:
        function eat()
        {
            echo "<p>$this->name is eating</p>";
        }

        //pets can sleep
        function sleep()
        {
            echo "<p>$this->name is sleeping</p>";
        }

        //pets can play
        function play()
        {
            echo "<p>$this->name is playing.</p>";
        }
    } //end of pet class


    //Cat has additional method: climb()
    class Cat extends Pet
    {
        function play()
        {
            echo "<p>$this->name is playing.</p>";
        }
    } //end of cat class


    //dog has additional method: fetch()
    class Dog extends Pet
    {
        function play()
        {
            echo "<p>$this->name is fetching</p>";
        }
    } // end of a dog class

    /**
     * The Cat and Dog classes -----override----- the Pet play() method, giving it new functionality. Which version of play() gets called depends on the type of the object calling it.
     */


    //create a dog:
    $dog = new Dog('Satchel');

    //create a cat
    $cat = new Cat("Bucky");

    // Create an unknown type of pet:
    $pet = new Pet('Rob');

    //feed them:
    $dog->eat();
    $cat->eat();
    $pet->eat();

    //nap time:
    $dog->sleep();
    $cat->sleep();
    $pet->sleep();

    //do animal specific thing:
    $dog->play();
    $cat->play();
    $pet->play();

    //delete te objects
    unset($dog, $cat, $pet);

    ?>
</body>

</html>