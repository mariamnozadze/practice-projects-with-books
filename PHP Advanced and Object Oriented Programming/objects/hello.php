<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hello</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require('helloWorld.php');

    //create new object
    $obj = new HelloWorld();

    //call sayHello() method
    $obj->sayHello();

    //say hello in different languages
    $obj->sayHello('Korean');
    $obj->sayHello('Spanish');

    //delete the object
    unset($obj);
    ?>
</body>

</html>