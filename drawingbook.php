<?php

/*
 * Complete the 'pageCount' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER p
 */

function pageCount($n, $p) {
    $pagetoturn = $p;
    $totalpages = $n;
    if ($pagetoturn%2 == 0){
        $pagetoturn+=1;
    }
    if ($totalpages%2 == 0){
        $totalpages += 1;
    }
    $fromfirst = ($pagetoturn-1)/2;
    $fromlast = ($totalpages-$pagetoturn)/2;
    return min($fromfirst,$fromlast);   

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$p = intval(trim(fgets(STDIN)));

$result = pageCount($n, $p);

fwrite($fptr, $result . "\n");

fclose($fptr);
