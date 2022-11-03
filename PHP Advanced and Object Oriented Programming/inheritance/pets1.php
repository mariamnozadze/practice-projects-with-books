<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>inheritance</title>
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
    } //end of pet class


    //Cat has additional method: climb()
    class Cat extends Pet
    {
        function climb()
        {
            echo "<p>$this->name is climbing</p>";
        }
    } //end of cat class


    //dog has additional method: fetch()
    class Dog extends Pet
    {
        function fetch()
        {
            echo "<p>$this->name is fetching</p>";
        }
    } // end of a dog class

    //create a dog:
    $dog = new Dog('Satchel');

    //create a cat
    $cat = new Cat("Bucky");

    //feed them:
    $dog->eat();
    $cat->eat();

    //nap time:
    $dog->sleep();
    $cat->sleep();

    //do animal specific thing:
    $dog->fetch();
    $cat->climb();

    //delete te objects
    unset($dog, $cat);

    ?>
</body>

</html>