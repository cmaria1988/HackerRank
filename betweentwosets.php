<?php



/*
 * Complete the 'getTotalX' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */

function getTotalX($a, $b) {
    sort($a);
    sort($b);
    $factor = array();
    $lcm = $a[0];

    $check = count($a);
    $j=$a[0];
    
    while($j <= $b[0]){
        $counter=0; 
        for($k=0; $k<count($a); $k++){
            if($j % $a[$k] == 0){
                $counter += 1;
            }
            
        }
        if($counter == count($a)){
            $lcm = $j;
            break;
        }
        $j += $a[0];
    }

    $i=$lcm;
    while($i<=$b[0]){
        $counter = 0;
        for($j=0; $j<count($b);$j++){
            if($b[$j] % $i == 0){
                $counter += 1;
            }
        }
        if ($counter == count($b)){
            $factor [] = $i;
        }
        $i+=$lcm;
    } 
    return count($factor);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$m = intval($first_multiple_input[1]);

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$brr_temp = rtrim(fgets(STDIN));

$brr = array_map('intval', preg_split('/ /', $brr_temp, -1, PREG_SPLIT_NO_EMPTY));

$total = getTotalX($arr, $brr);

fwrite($fptr, $total . "\n");

fclose($fptr);
