<?php

function findSubstring($s, $k) {
    // Write your code here
    $vowel = ['a','e','i','o','u'];
    $result = '';
    $counter=0;
    $length = strlen($s)-$k;

    for($i=0; $i<=$length; $i++){
        $word = substr($s, $i, $k);
        $arr = str_split($word);
        $arr = array_count_values($arr);
        //print_r($arr);
        $c = 0;
        for($j=0; $j<count($vowel); $j++){
            $l = $vowel[$j];
            if(isset($arr[$l])){
                $c += $arr[$l];
            }
        }
        if($c>$counter){
            $counter = $c;
            $result = $word;
        }
    }
    return $result;
}

$s = 'caberqiitefg';
$k = 5;
$test = findSubstring($s, $k);
print_r($test);

?>