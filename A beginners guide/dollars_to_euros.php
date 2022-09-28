<html>

<head>
    <title>USD/EUR Currency Conversion</title>
</head>

<body>
    <h2>USD/EUR Currency Conversion</h2>

    <?php
    //define exchange rate
    //1.00 USD = 0.70 EUR
    define('EXCHANGE_RATE', 0.70);

    //define number of dollars
    $dollars = 150;

    //perform conversion and print result
    $euros = $dollars * EXCHANGE_RATE;

    //print
    echo "$dollars USD is equivalent to: $euros EUR";
    //150 USD is equivalent to: 105 EUR
    ?>
</body>

</html>