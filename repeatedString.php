<?php

function repeatedString($s, $n) {
    // Write your code here
    $length = strlen($s);
    $a = $n/$length;
    $a = (int)$a;
    $remain = $n % $length;
    
    $arr = array_count_values(str_split($s));
    $remain_arr = array_count_values(str_split(substr($s,0,$remain)));
    
    $total_a = $a * $arr['a'] + $remain_arr['a'];
    return $total_a;
}