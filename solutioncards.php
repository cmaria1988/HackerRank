<?php
function solution($cards) {
    $newcards = array();
    $res = -1;
    for($i=0; $i<count($cards); $i++){
        $newcards[] = array_count_values($cards[$i]); 
    }

    $highest = 0;
    foreach($newcards as $val){
        foreach($val as $k => $v){
            $key = 0;

            if($v==1){
                $key = $k;
            }
            if($highest < $key){
                $highest = $k;
            }
        }
    }
    return $highest;
}