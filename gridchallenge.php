<?php

/*
 * Complete the 'gridChallenge' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING_ARRAY grid as parameter.
 */

function gridChallenge($grid) {
    $alphabet = range('a','z');
    $arraycolumn=array();
    $count = count($grid);

    for($i=0; $i<$count; $i++){
        $newarr = str_split($grid[$i]);
        sort($newarr);
        $grid[$i] = $newarr;
        
    }
    for($i=0; $i<$count;$i++){
        $arraycolumn[] = array_column($grid, $i);
    }
    $result = "YES";
    foreach($arraycolumn as $k=>$v){
        if($result == "NO"){
            break;
        }
        $checkkey = 0;
        foreach($v as $key=>$value){
            $k = array_search($value, $alphabet);
            if( $k >= $checkkey){
                $checkkey = $k;
            }else{
                $result= "NO";
                break;
            }
        }    
    }
    return $result;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $n = intval(trim(fgets(STDIN)));

    $grid = array();

    for ($i = 0; $i < $n; $i++) {
        $grid_item = rtrim(fgets(STDIN), "\r\n");
        $grid[] = $grid_item;
    }

    $result = gridChallenge($grid);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
