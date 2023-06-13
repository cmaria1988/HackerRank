<?php

function rotate($nums, $k) {
    $length = count($nums);
    
    for($i=0; $i<$k; $i++){
        array_unshift($nums, $nums[count($nums)-1]);
        unset($nums[count($nums)-1]); 
    }
    return $nums;
}

$nums = [1,2,3,4,5,6,7];
$k = 3;
$test = rotate($nums, $k);
print_r($test);
?>