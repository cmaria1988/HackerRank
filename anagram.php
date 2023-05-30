<?php



/*
 * Complete the 'anagram' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function anagram($s) {
    // Write your code here
    $length = strlen($s);
    $result = -1;
    if ($length % 2 != 1){
        $first = str_split(substr($s, 0, $length/2));
        $first = array_count_values($first);
        ksort($first);
        $second = str_split(substr($s, $length/2, $length/2));
        $second = array_count_values($second);
        ksort($second);
        $counter = 0;
        foreach($first as $key=>$char){ 
                if (isset($second[$key])){
                    $counter += ($first[$key] - $second[$key]) > 0 ? ($first[$key] - $second[$key]) : 0;
                }else{
                    $counter += $first[$key];
                }                 
        }

        $result =  $counter;
    }
    return $result;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = rtrim(fgets(STDIN), "\r\n");

    $result = anagram($s);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
