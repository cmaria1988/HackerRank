<?php

/*
 * Complete the 'isValid' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function isValid($s) {
    // Write your code here
    $newarray = str_split($s);
    $newarray = array_count_values($newarray);
    sort($newarray);
    $result = "YES";
    if(count($newarray) == 1){
        return $result;
    }elseif(count($newarray) == 2){
        if($newarray[1] - $newarray[0] > 1){
            $result = "NO";
            return $result;
        }
    }else{
        $count = 0;
        $v = $newarray[0];
        $check = 0;
        for($i=1; $i<count($newarray);$i++){
            $check = $newarray[1] - $v;
            if($check == 0){ 
                if($newarray[$i] - $v > 1){
                    $result = "NO";
                    break;
                }elseif($newarray[$i] - $v == 1){
                    $count += 1;
                    if($count > 1){
                        $result = "NO";
                        break;
                    }
                }
            }elseif($newarray[$i] - $v != $check){
                $result = "NO";
                break;
            }     
        }
    }
    return $result;    

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = isValid($s);

fwrite($fptr, $result . "\n");

fclose($fptr);
