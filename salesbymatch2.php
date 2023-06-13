<?php

function sockMerchant($n, $ar) {
    // Write your code here
    $newarr = array_count_values($ar);
    $counter = 0;
    
    foreach($newarr as $val){
        $r = $val/2;
        $counter += (int)$r;
    }
    return $counter;
}