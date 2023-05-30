<?php
$_fp = fopen("php://stdin","r");
$t = intval(trim(fgets($_fp)));

$queue = array();
for($i=0; $i<$t; $i++){
    $line = trim(fgets($_fp)); 
    $arr = explode(' ', $line);
    $option = intval($arr[0]);
    switch($option){
        case 1:
            array_push($queue, $arr[1]);
            break;
        case 2:
            $queue = array_slice($queue, 1);
            break;
        case 3:
            echo $queue[0].PHP_EOL;
            break;
    }
}

?>