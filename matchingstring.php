<?php

/*
 * Complete the 'matchingStrings' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. STRING_ARRAY strings
 *  2. STRING_ARRAY queries
 */

function matchingStrings($strings, $queries) {
    $result = array();

    foreach($queries as $key=>$qvalue){
        $counter = 0;
        foreach($strings as $svalue){
            if ($qvalue == $svalue){
                $counter += 1;
            }
        }
        $result[$key] = $counter;
    }
    return $result;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$strings_count = intval(trim(fgets(STDIN)));

$strings = array();

for ($i = 0; $i < $strings_count; $i++) {
    $strings_item = rtrim(fgets(STDIN), "\r\n");
    $strings[] = $strings_item;
}

$queries_count = intval(trim(fgets(STDIN)));

$queries = array();

for ($i = 0; $i < $queries_count; $i++) {
    $queries_item = rtrim(fgets(STDIN), "\r\n");
    $queries[] = $queries_item;
}

$res = matchingStrings($strings, $queries);

fwrite($fptr, implode("\n", $res) . "\n");

fclose($fptr);
