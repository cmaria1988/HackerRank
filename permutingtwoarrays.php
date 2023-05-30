<?php

/*
 * Complete the 'twoArrays' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. INTEGER k
 *  2. INTEGER_ARRAY A
 *  3. INTEGER_ARRAY B
 */

function twoArrays($k, $a, $b) {
    $r = "YES";
    $key = array_keys($a);
    asort($a);
    rsort($b);

    $a = array_combine($key, $a);
    $b = array_combine($key, $b);
   
    foreach($a as $key=>$value){
        if($a[$key] + $b[$key] < $k){
            $r = "NO";
            break;
        }

    }
    return $r;  

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

    $n = intval($first_multiple_input[0]);

    $k = intval($first_multiple_input[1]);

    $A_temp = rtrim(fgets(STDIN));

    $A = array_map('intval', preg_split('/ /', $A_temp, -1, PREG_SPLIT_NO_EMPTY));

    $B_temp = rtrim(fgets(STDIN));

    $B = array_map('intval', preg_split('/ /', $B_temp, -1, PREG_SPLIT_NO_EMPTY));

    $result = twoArrays($k, $A, $B);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
