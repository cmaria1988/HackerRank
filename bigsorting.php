<?php
function bigSorting($unsorted) {
    // Write your code here
    $sorted = array();
    for($i=0;$i<count($unsorted); $i++){
        $sorted[] = intval($unsorted[$i]);
    }
    sort($sorted);
    return $sorted;
}

$unsorted = ['6','76572973648','1','3','10','3','5'];

$test = bigSorting($unsorted);
print_r($test);