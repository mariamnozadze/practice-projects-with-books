<!-- <?php
        require_once("dog.php");

        /**
         * if statement uses the isset method and $_POST to verify that all four properties  have been passed into the program from the html file with the POST method. If all items have been passed, we  will filter (clean) those items.
         */
        if ((isset($_POST['dog_name'])) && (isset($_POST['dog_breed'])) && (isset($_POST['dog_color'])) && (isset($_POST['dog_weight']))
        ) {
            $dog_name = filter_var($_POST['dog_name']);
            $dog_breed = filter_var($_POST['dog_breed']);
            $dog_color = filter_var($_POST['dog_color']);
            $dog_weight = filter_var($_POST['dog_weight']);
        } else {
            print "<p>Missing or invalid parameters. Please go back to the lab. html page to enter valid information.<br />";
            print "<a href='lab.html'>Dog Creation Page</a>";
        }
        ?> -->

<!DOCTYPE html>
<html lan="en">

<head>
    <title>Dog Object</title>
    <script src="get_breeds.js"></script>
</head>

<body>
    <h1>Dog Object Creator</h1>
    <form method="post" action="lab.php">
        <h2>Please complete ALL fields. Please note the required format of
            information.</h2>
        Enter Your Dog's Name (max 20 characters, alphabetic) <input type="text" pattern="[a-zA-Z ]*" title="Up to 20 Alphabetic Characters" maxlength="20" name="dog_name" id="dog_name" /><br /><br />
        Select Your Dog's Color:<br />
        <input type="radio" name="dog_color" id="dog_color" value="Brown">Brown<br />
        <input type="radio" name="dog_color" id="dog_color" value="Black">Black<br />
        <input type="radio" name="dog_color" id="dog_color" value="Yellow">Yellow<br />
        <input type="radio" name="dog_color" id="dog_color" value="White">White<br />
        <input type="radio" name="dog_color" id="dog_color" value="Mixed">Mixed<br /><br />
        Enter Your Dog's Weight (numeric only) <input type="number" min="1" max="120" name="dog_weight" id="dog_weight" /><br /><br />
        <script>
            AjaxRequest();
        </script>
        <div id="AjaxResponse"></div><br />
        <input type="submit" value="Click to create your dog" />
    </form>
    </div>
</body>

</html>