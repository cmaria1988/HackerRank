<?php
function icecreamParlor($m, $arr) {
    // Write your code here
    $first=0;
    $second=0;
    $newarr=array();

    for($i=0;$i<count($arr); $i++){
        $first = $i;
        for($j=$i+1; $j<count($arr); $j++){
            if($arr[$i] + $arr[$j] == $m){
                $second = $j;
                break;
            }
        }
        if($second != 0){
            break;
        }
    }
    $newarr = [$first+1, $second+1];
    return $newarr;
}
?>