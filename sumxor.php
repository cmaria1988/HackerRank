<?php
/*
 * Complete the 'sumXor' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER n as parameter.
 */

function sumXor($n) {
   return $n==0? 1 : pow(2,substr_count(decbin($n),'0'));
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$result = sumXor($n);

fwrite($fptr, $result . "\n");

fclose($fptr);
