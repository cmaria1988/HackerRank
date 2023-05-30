<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($a) {
    $count = count($a);
    $pos=0;
    $neg=0;
    $zero=0;
    
    for($i=0;$i<$count;$i++){
        if($a[$i]==0){
            $zero += 1;
        }elseif($a[$i]<0){
            $neg += 1;
        }else{
            $pos += 1;
        }
    }
    print_r($pos/$count."\n\r");
    print_r($neg/$count."\n\r");
    print_r($zero/$count."\n\r");
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
