<?php

/*
 * Complete the 'flippingBits' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER n as parameter.
 */

function flippingBits($n) {
    $unassigned = "";
    $runassigned = "";
    $dec = $n;
    $mod = 0;
    $reverse=0;
        for ($i=31; $i>=0; $i--){
                $d = pow(2, $i);
                if ($dec<$d){
                    $unassigned .= "0";
                }else{
                    $unassigned .= "1";
                    $mod = $dec % $d;
                    $dec -= $d;            
                }
        }

        for($j=0; $j<strlen($unassigned); $j++){
                if($unassigned[$j] == "1"){
                    $runassigned .= "0";
                }else{
                    $runassigned .= "1";
                }
        }

        for($k=0; $k<strlen($runassigned); $k++){
                $e = pow(2,31-$k);
                $dec_runassigned = (int)$runassigned[$k];
                $temp = $dec_runassigned * $e;
                $reverse += $temp;
        }

    return $reverse;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $n = intval(trim(fgets(STDIN)));

    $result = flippingBits($n);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
