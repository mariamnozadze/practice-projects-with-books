<html>

<head>
    <title>form</title>
</head>

<body>
    <h2>Select Your Car</h2>
    <form method="post" action="car.php">
        Type: <br />
        <select name="selType">
            <option value="Porsche 911">Porsche 911</option>
            <option value="Volkswagen Beetle">Volkswagen Beetle</option>
            <option value="Ford Taurus">Ford Taurus</option>
        </select>
        <br />
        Color: <br />
        <input type="text" name="txtColor" />
        <br />
        <input type="submit" />
    </form>
</body>

</html>