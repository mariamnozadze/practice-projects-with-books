<?php
//----while loop
// repeat continuously until counter becomes 10
// output: 'xxxxxxxxx'
$counter = 1;
while ($counter < 10) {
    echo 'x';
    $counter++;
}


//----do while loop
// repeat continuously until counter becomes 10
// output: 'xxxxxxxxx'
$counter = 1;
do {
    echo 'x';
    $counter++;
} while ($counter < 10);


//-------for Loop
// repeat continuously until counter becomes 10
for ($x = 1; $x < 10; $x++) {
    echo "$x ";
}
// 1 2 3 4 5 6 7 8 9


// ---------generate ordered list of 6 items
echo "<ol>";
for ($x = 1; $x < 7; $x++) {
    echo "<li>Item $x</li>";
}
echo "</ol>";
/*
Item 1
Item 2
Item 3
Item 4
Item 5
Item 6
*/



//-------Unlike break, continue doesn’t halt processing of the loop; it simply “jumps one” iteration.
$count = 0;
// loop 5 times
while ($count <= 4) {
    $count++;
    // when the counter hits 3
    // skip to the next iteration
    if ($count == 3) {
        continue;
    }
    echo "This is iteration #$count <br/>";
}
/*
This is iteration #1
This is iteration #2
This is iteration #4
This is iteration #5
*/
