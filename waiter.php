<?php

/*
 * Complete the 'waiter' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY number
 *  2. INTEGER q
 */

function waiter($number, $q) {
    $answer = array();
    $prime = getprime($q);
    
    foreach($prime as $p){
        $A = array();
        $B = array();
        krsort($number);
        foreach($number as $val){
            if($val % $p == 0){
                $B[] = $val;
            }else{
                $A[] = $val;
            }
        }
        $number = $A;
        krsort($B);
        $answer = array_merge($answer, $B);
    }
    krsort($A);
    $answer = array_merge($answer, $A);
    return $answer;
}

function getprime($q){
    $prime = array();
    $counter = 0;
    $i=2;
    while($counter != $q){
        $divided = 0;
        for($j=2; $j<$i;$j++){
            if($i%$j==0){
                $divided ++;
            }
        }
        if($divided == 0){
            $prime[] = $i;
            $counter++;
        }
        $i++;
    }
    return $prime;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$q = intval($first_multiple_input[1]);

$number_temp = rtrim(fgets(STDIN));

$number = array_map('intval', preg_split('/ /', $number_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = waiter($number, $q);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
