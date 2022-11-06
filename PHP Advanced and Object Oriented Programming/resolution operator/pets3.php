<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>inheritance/overriding</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    class Pet
    {
        public $name;
        function __construct($pet_name)
        {
            $this->name = $pet_name;
            self::sleep();
            //It seems that many animals go to sleep as one of the first things they do. By placing this new line in the constructor, you ensure that the sleep() method is called as soon as the object is created.
        }

        function eat()
        {
            echo "<p>$this->name is eating</p>";
        }

        function sleep()
        {
            echo "<p>$this->name is sleeping</p>";
        }

        function play()
        {
            echo "<p>$this->name is playing.</p>";
        }
    }
    class Cat extends Pet
    {
        function play()
        {
            // Call the Pet::play() method:
            parent::play();
            echo "<p>$this->name is playing.</p>";
        }
    }


    class Dog extends Pet
    {
        function play()
        {
            // Call the Pet::play() method:
            parent::play();
            echo "<p>$this->name is fetching</p>";
        }
    } // end of a dog class

    //-----------modified code now calls the Pet play() method each time a Cat or Dog plays.--------

    //In Dog and Cat, you could also use the code Pet::play(). But by using parent::play(), you minimize the chance of future problems should the class definitions change.

    $dog = new Dog('Satchel');

    $cat = new Cat("Bucky");

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