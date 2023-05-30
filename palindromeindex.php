<?php



/*
 * Complete the 'palindromeIndex' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function palindromeIndex($s) {
    // Write your code here
    $arr = str_split($s);
    $start = 0;
    $end = count($arr)-1;
    $result = -1;
    $startstr = "";
    $endstr = "";
    while($start<$end){
        if($arr[$start] != $arr[$end]){
            if($arr[$start+1] == $arr[$end] && $arr[$start+2] == $arr[$end-1]){
                $result = $start;
                break;
            }elseif($arr[$start] == $arr[$end-1]){
                $result = $end;
                break; 
            }else{
                break;
            }
        }
        $start++;
        $end --;
    }
    return $result;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = rtrim(fgets(STDIN), "\r\n");

    $result = palindromeIndex($s);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
