<html>

<head>
    <title>Success</title>
</head>

<body>
    <h2>Success!</h2>
    <?php
    // get form input
    $type = $_POST['selType'];
    $color = $_POST['txtColor'];
    // use form input
    echo "Your $color $type is ready. Safe driving!";
    ?>
</body>

</html>