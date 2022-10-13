<?php
// function to print all the values
// in a nested array
function printValues($arr)
{
    global $count;
    global $out;
    // check that input is an array
    if (!is_array($arr)) {
        die('ERROR: Input is not an array');
    }
    // iterate through array
    // increment counter by 1 for each value found
    // if value is itself an array:
    // recursively call function to count
    // number of elements in the child array
    // else:
    // add the value found to the output array
    foreach ($arr as $a) {
        if (is_array($a)) {
            printValues($a);
        } else {
            $out[] = $a;
            $count++;
        }
    }
    // return total count and values found to caller
    // as array
    return array('total' => $count, 'values' => $out);
}
// define nested array
$data = array(
    'o' => array(
        'orange',
        'owl',
        'one'
    ),
    't' => array(
        'tea',
        'ten',
        'tag',
        'twentythree' => array(
            array('twenty', 'three'),
            array('vingt', 'trois', array(
                'red' => 'baron',
                'blue' => 'blood'
            ))
        )
    )
);
// count and print values in nested array
$ret = printValues($data);
echo $ret['total'] . ' value(s) found: ';
echo implode(', ', $ret['values']);
// 12 value(s) found: orange, owl, one, tea, ten, tag, twenty, three, vingt, trois, baron, blood