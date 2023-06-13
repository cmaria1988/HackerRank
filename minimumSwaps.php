<?php
function minimumSwaps($arr){ 
    $counter = 0;
    $length = count($arr);
    $i = 0;
    while($i<$length){
        if($arr[$i] != $i+1){
            $key = array_search($i+1, $arr);
            $arr[$key] = $arr[$i];
            $arr[$i]= $i+1;
            $counter ++;
        }
        $i++;
    }
    return $counter;
}
