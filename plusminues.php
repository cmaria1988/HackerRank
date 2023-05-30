<?php

function plusMinus($arr) {
    $length = count($arr);
    $plus = 0;
    $minus = 0;
    $zero = 0;
    for ($x=0; $x < $length; $x++){
        if ($arr[$x] == 0){
            $zero += 1;
        }elseif ($arr[$x] < 0){
            $minus += 1;
        }elseif($arr[$x] > 0){
            $plus += 1;
        } 
    }
    print number_format($plus/$length,6);
    echo "\n";
    print number_format($minus/$length,6);
    echo "\n";
    print number_format($zero/$length,6);
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);


?>