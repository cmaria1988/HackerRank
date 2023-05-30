<?php

function pairs($k, $arr) {
    // Write your code here
    sort($arr);
    $counter = 0;
    $i=0;
    $count = count($arr);
    while($i<$count){
        //$a = $arr[$i]
        if(($i+$k) < $count && (($arr[$i] + $k) == $arr[$i+$k])){
            $counter ++;
        }else{
            for($j=$i+1;$j<$count; $j++){
                if($arr[$j] == $arr[$i]+$k){
                    $counter ++;     
                    break;           
                }
            }    
        }
        $i++;
    }
    return $counter;
}

?>