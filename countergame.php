<?php

/*
 * Complete the 'counterGame' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts LONG_INTEGER n as parameter.
 */

function counterGame($n) {
    $p = 0;
    $i = 0;
    $counter = 0;
    $result = "";

        while (pow(2,$i) <= $n){
            $p = pow(2,$i);
  
            if ($n-$p == 0 && $n != 1){
                $n = $n/2;
                $counter += 1;
                $i = 0;
            }
            
            if($n > pow(2,$i)  && ($n < pow(2, $i+1))){
                $n = $n-$p;
                $counter += 1;
                $i=0;
            }
            $i++; 
        }

        if ($counter % 2 == 0){
            $result = "Richard";
        }else{
            $result = "Louise";
        }    
        return $result;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $n = intval(trim(fgets(STDIN)));

    $result = counterGame($n);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
