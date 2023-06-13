<?php

function decryptPassword($s) {
    // Write your code here
    $dp = str_split($s);
    
    for($i=0; $i<count($dp); $i++){
        if(is_numeric($dp[$i]) == true){
            $number = $dp[$i];
            for($j=count($dp)-1; $j>$i;$j--){
                if($dp[$j] == '0'){
                    $dp[$j] = $number;
                    unset($dp[$i]);       
                    break;
                }
            }
        }elseif($dp[$i] == '*'){
            $first = $dp[$i-2];
            $dp[$i-2] = $dp[$i-1];
            $dp[$i-1] = $first;
        }
    }
    $pass = implode($dp);
    $pass = str_replace('*','',$pass);
    return $pass;
}
$dec = '51Pa*0Lp*0e';
$test = decryptPassword($dec);
print_r($test);
?>