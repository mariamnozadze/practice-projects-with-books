<html>

<head>
    <title>Factorial Calculator</title>
</head>

<body>
    <h2>Factorial Calculator</h2>
    <?php
    // if form not yet submitted
    // display form
    if (!isset($_POST['submit'])) {
    ?>
        <form method="post" action="factorial_calc.php">
            Enter a number: <br />
            <input type="text" name="num" size="3" />
            <p>
                <input type="submit" name="submit" value="Submit" />
        </form>
    <?php
        // if form submitted
        // process form input
    } else {
        // retrieve number from form input
        $num = $_POST['num'];
        // check that number is positive
        if ($num <= 0) {
            echo 'ERROR: Please enter a number greater than 0';
            exit();
        }
        // calculate factorial
        // by multiplying the number by all the
        // numbers between itself and 1
        $factorial = 1;
        for ($x = $num; $x >= 1; $x--) {
            $factorial *= $x;
        }
        echo "Factorial of $num is: $factorial";
    }
    ?>
</body>

</html>