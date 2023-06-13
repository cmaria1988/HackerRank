<?php

function truckTour($petrolpumps) {
    $petrol = 0;
    $distance = 0;
    $cirle = $petrolpumps;
    $i = 0;
    for($i=0;$i<count($cirle); $i++){
        if($cirle[$i][0]<$circle[$i][1]){
            $arr=array();
            $arr[] = [$circle[$i][0], $circle[$i][1]];
            
        }
    }
    
}

function check($petrol, $distance){

}

$petrolpumps = [[1,5],[10,3],[3,4]];

$test = truckTour($petrolpumps);
print_r($test);
?>