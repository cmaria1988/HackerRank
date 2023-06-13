<?php

function jumpingOnClouds($c) {
    // Write your code here
    $counter=0;
    for($i=0; $i<count($c); $i++){
        if($c[$i]==0){
            if(isset($c[$i+2]) && $c[$i+2] == 0){
                $counter ++;
                $i += 1;
            }elseif(isset($c[$i+1]) && $c[$i+1] == 0){
                $counter ++;
            }
        }else{
            $i++;
        }
    }
    return $counter;
}