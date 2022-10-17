<!DOCTYPE html>
<html lang="en">

<head>
    <title>Adding Employees to a Database</title>
    <style type="text/css">
        div#message {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
            border: solid 2px green
        }
    </style>
</head>

<body>
    <h2>Adding Employees to a Database</h2>
    <h3>Add New Employee</h3>
    <?php
    // if form submitted
    // process form input
    if (isset($_POST['submit'])) {
        // attempt connection to MySQL database
        $mysqli = new mysqli("localhost", "root", "", "employee");
        if ($mysqli === false) {
            die("ERROR: Could not connect to database. " . mysqli_connect_error());
        }
        // open message block
        echo '<div id="message">';
        // retrieve and check input values
        $inputError = false;
        if (empty($_POST['emp_name'])) {
            echo 'ERROR: Please enter a valid employee name';
            $inputError = true;
        } else {
            $name = $mysqli->escape_string($_POST['emp_name']);
        }
        if ($inputError != true && empty($_POST['emp_desig'])) {
            echo 'ERROR: Please enter a valid employee designation';
            $inputError = true;
        } else {
            $designation = $mysqli->escape_string($_POST['emp_desig']);
        }
        // add values to database using INSERT query
        if ($inputError != true) {
            $sql = "INSERT INTO employees (name, designation)
VALUES ('$name', '$designation')";
            if ($mysqli->query($sql) === true) {
                echo 'New employee record added with ID: ' . $mysqli->insert_id;
            } else {
                echo "ERROR: Could not execute query: $sql. " . $mysqli->error;
            }
        }
        // close message block
        echo '</div>';
        // close connection
        $mysqli->close();
    }
    ?>
    </div>
    <form action="employee.php" method="POST">
        Employee name: <br />
        <input type="text" name="emp_name" size="40" />
        <p />
        Employee designation: <br />
        <input type="text" name="emp_desig" size="40" />
        <p />
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>

</html>