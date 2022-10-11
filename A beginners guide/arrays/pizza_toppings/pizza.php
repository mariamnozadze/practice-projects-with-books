<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pizza Topping Selector</title>
</head>

<body>
    <h2>Pizza Topping Selector</h2>
    You selected the following toppings: <br />
    <ul>
        <?php
        foreach ($_POST['toppings'] as $t) {
            echo "<li>$t</li> \r\n";
        }
        ?>
    </ul>
</body>

</html>