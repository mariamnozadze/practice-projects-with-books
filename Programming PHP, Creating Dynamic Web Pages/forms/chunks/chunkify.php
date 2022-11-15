<?php
$word = $_POST['word'];
$number = $_POST['number'];
$chunks = ceil(strlen($word) / $number);
echo "The {$number}-letter chunks of '{$word}' are:<br />\n";
for ($i = 0; $i < $chunks; $i++) {
    $chunk = substr($word, $i * $number, $number);
    printf("%d: %s<br />\n", $i + 1, $chunk);
}

/*
The 3-letter chunks of 'javascript' are:
1: jav
2: asc
3: rip
4: t
*/