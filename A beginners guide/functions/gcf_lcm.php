<?php

/**
 * Euclidean algorithm, states: “Given two natural numbers functions_&_classesa and b, not both equal to zero: check if b is zero; if yes, a is the GCD. If not, repeat the process using, respectively, b, and the remainder after dividing a by b.”
 */


// function definition
// get GCF of two numbers
function getGCF($a, $b)
{
    if ($b == 0) {
        return $a;
    } else {
        return getGCF($b, $a % $b);
    }
}
// function definition
// get LCM of two numbers using GCF
function getLCM($a, $b)
{
    return ($a * $b) / getGCF($a, $b);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>GCF and LCM</title>
</head>

<body>
    <h2>GCF and LCM (greatest common
        factor (GCF) and least common multiple (LCM))</h2>
    <?php
    // if form not yet submitted
    // display form
    if (!isset($_POST['submit'])) {
    ?>
        <form method="post" action="gcf_lcm.php">
            Enter two integers: <br />
            <input type="text" name="num_1" size="3" />
            <p>
                <input type="text" name="num_2" size="3" />
            <p>
                <input type="submit" name="submit" value="Submit" />
        </form>
    <?php
        // if form submitted
        // process form input
    } else {
        $num1 = (int)$_POST['num_1'];
        $num2 = (int)$_POST['num_2'];
        // calculate and print GCF and LCM
        echo "You entered: $num1, $num2";
        echo "<br />";
        echo "The GCF of ($num1, $num2) is: " . getGCF($num1, $num2);
        echo "<br />";
        echo "The LCM of ($num1, $num2) is: " . getLCM($num1, $num2);
    }
    ?>
</body>

</html>