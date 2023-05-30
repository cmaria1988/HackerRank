<?php
function flippingMatrix($matrix) {
    $count = count($matrix);
    $halfcount = $count/2;
    $temparray=array();
    for($i=0; $i<$halfcount; $i++){
        $k = $count-$i-1;
        for($j=0;$j<$halfcount;$j++){
            $l = $count-$i-1; 
            $m =   $count-$j-1;         
            $temparray[] = max($matrix[$i][$j],$matrix[$i][$m],$matrix[$l][$j],$matrix[$k][$m]);
            $l -= 1;    
        }
        $k--;
    }
    $result = array_sum($temparray);
    print_r($result);
}
?>