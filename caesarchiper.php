<?php

/*
 * Complete the 'caesarCipher' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. STRING s
 *  2. INTEGER k
 */

function caesarCipher($s, $k) {
        $arrayaz = range('a','z');
    array_flip($arrayaz);
    $result = '';    
    $arrinput = str_split($s);

    $uppercase = false;
    foreach($arrinput as $key=>$value){
        if(ctype_alpha($value)){
            if(ctype_upper($value)){
                $uppercase = true;
                $value = strtolower($value);
            }
            $key = array_search($value, $arrayaz);
            $newkey = $key+$k;
            if ($newkey>25){
                $newkey = $newkey % 26;
            }
            $value = $arrayaz[$newkey];
            if($uppercase){
                $value = strtoupper($value);
            }
        }
        $result .= $value;
        $uppercase = false;
    }
    return $result;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$s = rtrim(fgets(STDIN), "\r\n");

$k = intval(trim(fgets(STDIN)));

$result = caesarCipher($s, $k);

fwrite($fptr, $result . "\n");

fclose($fptr);
