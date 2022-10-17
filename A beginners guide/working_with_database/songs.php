<?php
// define values to be inserted
$songs = array(
    array('Patience', 4, 3),
    array('Beautiful World', 4, 4),
    array('Shine', 4, 4),
    array('Hold On', 4, 3),
);
// attempt database connection
$mysqli = new mysqli("localhost", "root", "", "music");
if ($mysqli === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// prepare query template
// execute multiple times
$sql = "INSERT INTO songs (song_title, fk_song_artist, fk_song_rating)
VALUES (?, ?, ?)";
if ($stmt = $mysqli->prepare($sql)) {
    foreach ($songs as $s) {
        $stmt->bind_param('sii', $s[0], $s[1], $s[2]);
        if ($stmt->execute()) {
            echo "New song with id: " . $mysqli->insert_id . " added.\n";
        } else {
            echo "ERROR: Could not execute query: $sql. " . $mysqli->error;
        }
    }
} else {
    echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
}
// close connection
$mysqli->close();
