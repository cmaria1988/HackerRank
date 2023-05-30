<?php
function minimumBribes($q) {
    $count = count($q)-1;
    $bribes = 0;
    $chaotic = false;
    $newarray = [];
    for($i=0;$i<=$count;$i++){
        $newarray[] = $i+1;
    }

    $i=0;
    while ($i<=$count){  
        if($newarray[$i] != $q[$i]){
                    $moves = 0;
                    if($q[$i] == $newarray[$i+1]){
                        $temp = $newarray[$i];
                        $newarray[$i] = $q[$i];
                        $newarray[$i+1] = $temp;
                        $moves = 1;
                    }elseif($q[$i] == $newarray[$i+2]){
                        $temp = $newarray[$i];
                        $temp2 = $newarray[$i+1]; 
                        $newarray[$i] = $q[$i];
                        $newarray[$i+1] = $temp;
                        $newarray[$i+2] = $temp2;
                        $moves = 2;
                    }else{
                        $chaotic = true;
                        break;
                    }
                    $bribes += $moves;
        }
        $i++;
        
    }
    $result = $chaotic ? "Too chaotic" : $bribes;
    echo($result);
}

$q = [1, 2, 5, 3, 7, 8, 6, 4];
//$q = [1,5,2,3,4];
$test2 = minimumBribes($q);
print_r($test2);
?>