<?php



/*
 * Complete the 'fizzBuzz' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function fizzBuzz($n) {
    $result = "";
    for($i = 1; $i<=$n; $i++){
        if($i%3==0 && $i%5==0){
            $result = "FizzBuzz";
        }elseif($i%3==0){
            $result = "Fizz";
        }elseif($i%5==0){
            $result = "Buzz";
        }else{
            $result = $i;
        }
        print_r($result."\r\n");
    }

}

$n = intval(trim(fgets(STDIN)));

fizzBuzz($n);
