<?php
/*
 * Complete the 'findMedian' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function findMedian($arr) {
    sort($arr);
    $median = 0;
    if(count($arr) % 2 == 1){
        $indexmed = (count($arr)-1)/2;
        $median = $arr[$indexmed]; 
    }
    return $median;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = findMedian($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
