<?php

/*
 * Complete the 'superDigit' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. STRING n
 *  2. INTEGER k
 */

function superDigit($n, $k) {
    $superdigit = 0;
    $n = (string)$n;
    if (strlen($n)>1){
        $arr = str_split($n);
        $arr = array_map('intval', $arr);
        $superdigit = array_sum($arr) * $k;
        while($superdigit > 9){
            $array = str_split((string)$superdigit);
            $array = array_map('intval',$array);
            $superdigit = array_sum($array);
        }
    }else{
        $superdigit = $n;
    }
    return $superdigit;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = $first_multiple_input[0];

$k = intval($first_multiple_input[1]);

$result = superDigit($n, $k);

fwrite($fptr, $result . "\n");

fclose($fptr);
