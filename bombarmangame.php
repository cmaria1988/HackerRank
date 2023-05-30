<?php

/*
 * Complete the 'bomberMan' function below.
 *
 * The function is expected to return a STRING_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. STRING_ARRAY grid
 */

function bomberMan($n, $grid) {
    $y = count($grid)-1;
    $x = strlen($grid[0])-1;

    if ($n == 1){
        return $grid;
    }elseif($n % 2 == 0 ){
        $arr1 = array();
        for($i=0;$i<=$y;$i++){
            $str= "";
            for($j=0; $j<=$x; $j++){
                $str .= "O";
            }
            $arr1[]=$str;
        }
        return $arr1;
    }

    $b1 = bombindex($grid);
    $b2 = bombindex($b1);
    
    if($n % 4 == 1){
        return $b2;
    }elseif($n % 4 == 3){
        return $b1;
    }
}

function bombindex($grid){
    $y = count($grid)-1;
    $x = strlen($grid[0])-1;
    
    //Plant bomb in all cell - fill all the array with O
    for($i=0;$i<=$y;$i++){
        $str= "";
        for($j=0; $j<=$x; $j++){
            $str .= "O";
        }
        $blast[]=$str;
    }
    
    for($i=0; $i<=$y; $i++){
        for($j=0; $j<=$x; $j++){
            if(substr($grid[$i], $j, 1) == 'O'){
                $blast[$i] = substr_replace($blast[$i],".",$j,1);
                
                if ($i-1>= 0){
                    $blast[$i - 1] = substr_replace($blast[$i - 1], ".",$j,1);
                }
                if ($i+1<= $y){
                    $blast[$i + 1] = substr_replace($blast[$i + 1], ".",$j, 1);
                }
                if($j-1>=0){
                    $blast[$i] = substr_replace($blast[$i],".",$j - 1,1);
                }
                if($j+1<=$x){
                    $blast[$i] = substr_replace($blast[$i],".",$j + 1, 1);
                }  
                
            }
        }
    }
    return $blast;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$r = intval($first_multiple_input[0]);

$c = intval($first_multiple_input[1]);

$n = intval($first_multiple_input[2]);

$grid = array();

for ($i = 0; $i < $r; $i++) {
    $grid_item = rtrim(fgets(STDIN), "\r\n");
    $grid[] = $grid_item;
}

$result = bomberMan($n, $grid);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
