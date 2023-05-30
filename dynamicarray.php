<?php

/*
 * Complete the 'dynamicArray' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.dd
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. 2D_INTEGER_ARRAY queries
 */

function dynamicArray($n, $queries) {
    $arr = [];
    $lastAnwser = 0;
    $t = [];

    foreach($queries as $q){
        $x = $q[1];
        $y = $q[2];

        $idx = ($x ^ $lastAnwser) % $n;
        if($q[0] == 1){
            $arr[$idx][] = $y;
        }else{
            $lastAnwser = $arr[$idx][$y%count($arr[$idx])];
            $t[] = $lastAnwser;
        }
    }
    return $t;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$q = intval($first_multiple_input[1]);

$queries = array();

for ($i = 0; $i < $q; $i++) {
    $queries_temp = rtrim(fgets(STDIN));

    $queries[] = array_map('intval', preg_split('/ /', $queries_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = dynamicArray($n, $queries);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
