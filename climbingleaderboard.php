<?php
function climbingLeaderboard($ranked, $player) {
    $ranked = array_unique($ranked);
    rsort($ranked);
    $result = array();
    $idx = count($ranked)-1;

    for($i=0; $i<count($player); $i++){
        while($idx>=0){
            if($player[$i] < $ranked[$idx]){
                $result[] = $idx+2;
                break;
            }elseif($idx == 0){
                $result[] = 1;
                break;
            }else{
                $idx--;
            }  
        }
    }
    return $result;
}

$ranked = [100, 100, 50, 40, 40, 20, 10];
$player = [5,5, 25, 50, 120];
$test2 = climbingLeaderboard($ranked, $player);
print_r($test2);
?>