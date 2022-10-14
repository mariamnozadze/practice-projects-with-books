<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reading And Writing Configuration Files</title>
</head>

<body>
    <h2>Reading And Writing Configuration Files</h2>
    <?php
    // define configuration filename and path
    $configFile = 'config.ini';
    // if form not yet submitted
    // display form
    if (!isset($_POST['submit'])) {
        // set up array with default parameters
        $data = array();
        $data['AdminEmailAddress'] = null;
        $data['DefAuthor'] = null;
        $data['NumPosts'] = null;
        $data['NumComments'] = null;
        $data['NotifyURL'] = null;
        // read current configuration values
        // use them to pre-fill the form
        if (file_exists($configFile)) {
            $lines = file($configFile);
            foreach ($lines as $line) {
                $arr = explode('=', $line);
                $i = count($arr) - 1;
                $data[$arr[0]] = $arr[$i];
            }
        }
    ?>
        <form method="post" action="configure.php">
            Administrator email address: <br />
            <input type="text" size="50" name="data[AdminEmailAddress]" value="<?php
                                                                                echo $data['AdminEmailAddress']; ?>" />
            <p>
                Default author name: <br />
                <input type="text" name="data[DefAuthor]" value="<?php echo
                                                                    $data['DefAuthor']; ?>" />
            <p>
                Number of posts on index page: <br />
                <input type="text" size="4" name="data[NumPosts]" value="<?php echo
                                                                            $data['NumPosts']; ?>" />
            <p>
                Number of anonymous comments: <br />
                <input type="text" size="4" name="data[NumComments]" value="<?php echo
                                                                            $data['NumComments']; ?>" />
            <p>
                URL for automatic notification of new posts: <br />
                <input type="text" size="50" name="data[NotifyURL]" value="<?php echo
                                                                            $data['NotifyURL']; ?>" />
            <p>
                <input type="submit" name="submit" value="Submit" />
        </form>
    <?php
        // if form submitted
        // process form input
    } else {
        // read submitted data
        $config = $_POST['data'];
        // validate submitted data as necessary
        if ((trim($config['NumPosts']) != '' && (int)$config['NumPosts'] <= 0) ||
            (trim($config['NumComments']) != '' && (int)$config['NumComments'] <= 0)
        ) {
            die('ERROR: Please enter a valid number');
        }
        // open and lock configuration file for writing
        $fp = fopen($configFile, 'w+') or die('ERROR: Cannot open configuration
file for writing');
        flock($fp, LOCK_EX) or die('ERROR: Cannot lock configuration file for
writing');
        // write each configuration value to the file
        foreach ($config as $key => $value) {
            if (trim($value) != '') {
                fwrite($fp, "$key=$value\n") or die('ERROR: Cannot write [$key] to
configuration file');
            }
        }
        // close and save file
        flock($fp, LOCK_UN) or die('ERROR: Cannot unlock file');
        fclose($fp);
        echo 'Configuration data successfully written to file.';
    }
    ?>
</body>

</html>