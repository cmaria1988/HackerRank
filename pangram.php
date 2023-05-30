<?php

/*
 * Complete the 'pangrams' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function pangrams($s) {
    $letters = range('A','Z');
    $arrayfillskey = array_combine($letters,$letters);
    $inputstring = strtoupper($s);
    $arrinput = str_split($inputstring);
    $arrinput=array_count_values($arrinput); 

    $r = "not pangram";
    $arrintersect = array_intersect_key($arrayfillskey, $arrinput);
    if (count($arrintersect) == 26){
        $r = "pangram";
    }
        
    return $r;   

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = pangrams($s);

fwrite($fptr, $result . "\n");

fclose($fptr);
