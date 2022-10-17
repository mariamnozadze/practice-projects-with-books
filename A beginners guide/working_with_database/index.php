<?php
// attempt database connection
$mysqli = new mysqli("localhost", "root", "", "music");
if ($mysqli === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// attempt query execution
// iterate over result set
// print each record and its fields
// output: "1:Aerosmith \n 2:Abba \n ..."
$sql = "SELECT artist_id, artist_name FROM artists";
if ($result = $mysqli->query($sql)) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            echo $row['artist_id'] . ":" . $row['artist_name'] . "\n";
        }
        $result->close();
    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not execute $sql. " . $mysqli->error;
}

// --------------
// add a new record
// output: "New artist with id:7 added."
$sql = "INSERT INTO artists (artist_name, artist_country) VALUES
('Kylie Minogue', 'AU')";
if ($mysqli->query($sql) === true) {
    echo 'New artist with id:' . $mysqli->insert_id . ' added.';
} else {
    echo "ERROR: Could not execute query: $sql. " . $mysqli->error;
}


//------------------
// attempt query execution
// add a new record
// output: "1 row(s) updated."
$sql = "UPDATE artists SET artist_name = 'Eminem', artist_country = 'US' WHERE
artist_id = 7";
if ($mysqli->query($sql) === true) {
    echo $mysqli->affected_rows . ' row(s) updated.';
} else {
    echo "ERROR: Could not execute query: $sql. " . $mysqli->error;
}


// close connection
$mysqli->close();
