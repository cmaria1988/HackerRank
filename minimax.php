<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
        sort($arr);
    $length = count($arr);
    $minsum=0;
    $maxsum=0;

    for ($x=0; $x < $length-1; $x++){
        $minsum += $arr[$x];
    }
    for ($x=1; $x < $length; $x++){
        $maxsum += $arr[$x];
    }

    print $minsum;
    echo "\r";
    print $maxsum;

}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);
