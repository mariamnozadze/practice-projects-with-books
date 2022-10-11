<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pizza Topping Selector</title>
</head>

<body>
    <h2>Pizza Topping Selector</h2>
    <form method="post" action="pizza.php">
        Select your favourite pizza toppings: <br />
        <input type="checkbox" name="toppings[]" value="tomato">Tomato</input>
        <input type="checkbox" name="toppings[]" value="onion">Onion</input>
        <input type="checkbox" name="toppings[]" value="jalapenos">Jalapeno
        peppers</input>
        <input type="checkbox" name="toppings[]" value="olives">Olives</input>
        <input type="checkbox" name="toppings[]" value="mint">Mint</input>
        <input type="checkbox" name="toppings[]" value="pineapple">Pineapple</input>
        <input type="checkbox" name="toppings[]" value="bacon">Bacon</input>
        <input type="checkbox" name="toppings[]" value="chicken">Chicken</input>
        <input type="checkbox" name="toppings[]" value="ham">Ham</input>
        <input type="checkbox" name="toppings[]" value="anchovies">Anchovies</input>
        <input type="checkbox" name="toppings[]" value="x-cheese">Extra cheese</input>
        <p>
            <input type="submit" name="submit" value="Submit" />
    </form>
</body>

</html>