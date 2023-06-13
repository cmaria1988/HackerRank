<?php
function countingValleys($steps, $path) {
    // Write your code here
    $newpath = str_split($path);
    $valley = 0;
    $count = 0;
    $prev = 0;
    foreach($newpath as $val){
        $v = $val == 'U' ? 1 : -1;
        $count += $v;
        if($count == -1 && $prev== 0){
            $valley ++;
        }
        $prev = $count;
    }
    return $valley;
}