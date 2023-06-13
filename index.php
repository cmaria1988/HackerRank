<?php
function minimumSwaps($arr){ 
    $counter = 0;
    $length = count($arr);
    $i = 0;
    while($i<$length){
        if($arr[$i] != $i+1){
            $key = array_search($i+1, $arr);
            $arr[$key] = $arr[$i];
            $arr[$i]= $i+1;
            $counter ++;
            //break;
            /*
             for($j=$i+1; $j<$length; $j++){
                if($arr[$j] == $i+1){
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $i+1;
                    $counter ++;
                    break;
                }
            }
            */
        }
        $i++;
    }
    print_r($arr);
    return $counter;
}

$arr = [4,3,1,2];
$test = minimumSwaps($arr);
print_r($test);

?>