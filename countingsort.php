<?php

/*
 * Complete the 'countingSort' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function countingSort($arr) {
    $arraylength = count($arr);
    $newarray = array();
    $arr=array_count_values($arr); 
    //$new_key = max(array_keys($arr));
    
    for($i=0; $i<100; $i++){
        $counter = 0;
        if (isset($arr[$i])){
            $counter= $arr[$i];
        }
        $newarray[]= $counter;
    }    
    return $newarray;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = countingSort($arr);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
