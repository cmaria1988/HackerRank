<?php

/*
 * Complete the 'lonelyinteger' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function lonelyinteger($a) {
    $length = count($a);
    $lonelyinteger = 0;
    $result;
    
    foreach ($a as $key=>$value){
        $counter = 0;
        foreach($a as $bkey => $bvalue){  
            if ($value == $bvalue){
                $counter += 1;
            }
        }
        if($counter==1){
            $lonelyinteger=$value;
        }
    }
    return $lonelyinteger;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = lonelyinteger($a);

fwrite($fptr, $result . "\n");

fclose($fptr);
