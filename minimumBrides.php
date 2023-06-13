<?php

function minimumBribes($q) {
    $result = "";
    $counter = 0;
    $arr = array();
    $length = count($q);

    for($h=0; $h<$length; $h++){
        $arr[$h] = $h+1;
    }
    for($i = 0; $i<$length; $i++){
        if($q[$i] != $arr[$i]){
  
            if(isset($arr[$i+2]) && $q[$i] == $arr[$i+2]){
               
                $temp1 = $arr[$i];
                $temp2 = $arr[$i+1];
                $arr[$i] = $q[$i];
                $arr[$i+1] = $temp1;
                $arr[$i+2] = $temp2;
                $counter += 2;
            }elseif(isset($arr[$i+1]) && $q[$i] == $arr[$i+1]){
                $temp1 = $arr[$i];
                $arr[$i] = $q[$i];
                $arr[$i+1] = $temp1;
                $counter ++;
            }else{
                $result = "Too chaotic";
                break;
            }
        }
    }
    if(!empty($result)){
        echo $result.PHP_EOL;
    }else{
        echo $counter.PHP_EOL;
    }
}

//$q = [1,2,5,3,7,8,6,4];
$q = [2, 5, 1, 3, 4];
$test = minimumBribes($q);
$test;
?>