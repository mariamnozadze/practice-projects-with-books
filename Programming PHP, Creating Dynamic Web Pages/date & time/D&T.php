<?php
//----------task_01-------------

// $tz = ini_get('date.timezone');
// $dtz = new DateTimeZone($tz);
// $past = new DateTime("2019-02-12 16:42:33", $dtz);
// $current = new DateTime("now", $dtz);
// // creates a new instance of DateInterval
// $diff = $past->diff($current);
// $pastString = $past->format("Y-m-d");
// $currentString = $current->format("Y-m-d");
// $diffString = $diff->format("%yy %mm, %dd");
// echo "Difference between {$pastString} and {$currentString} is
// {$diffString}";
// //Difference between 2019-02-12 and 2022-11-15 is 3y 9m, 3d


//--------------task_02-------------
$tz = ini_get('date.timezone');
$dtz = new DateTimeZone($tz);
echo "Server's Time Zone: {$tz}<br/>";
foreach ($dtz->getLocation() as $key => $value) {
    echo "{$key} {$value}<br/>";
}
/*Server's Time Zone: Europe/Berlin
country_code DE
latitude 52.5
longitude 13.36666
comments Germany (most areas)*/