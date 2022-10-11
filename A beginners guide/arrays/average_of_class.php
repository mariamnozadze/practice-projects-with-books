<!DOCTYPE html>
<html lang="en">

<head>
    <title>Grade Averaging</title>
</head>

<body>
    <h2>Grade Averaging</h2>
    <?php
    // define array of grades
    // ranging between 1 and 100
    $grades = array(
        25, 64, 23, 87, 56, 38, 78, 57, 98, 95,
        81, 67, 75, 76, 74, 82, 36, 39,
        54, 43, 49, 65, 69, 69, 78, 17, 91
    );
    // get number of grades
    $count = count($grades);
    // iterate over grades
    // calculate total and top/bottom 20%
    $total = $top = $bottom = 0;
    foreach ($grades as $g) {
        $total += $g;
        if ($g <= 20) {
            $bottom++;
        }
        if ($g >= 80) {
            $top++;
        }
    }
    // calculate average
    $avg = round($total / $count);
    // print statistics
    echo "Class average: $avg <br />";
    echo "Number of students in bottom 20%: $bottom <br />";
    echo "Number of students in top 20%: $top <br />";


    /*
    Grade Averaging
Class average: 62
Number of students in bottom 20%: 1
Number of students in top 20%: 6
    */

    ?>
</body>

</html>