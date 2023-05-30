<?php
$_fp = fopen("php://stdin", "r");
$t = intval(trim(fgets($_fp)));

$newstring = "";
$prev = array();
for($i=0;$i<$t;$i++){
    $line = trim(fgets($_fp));
    $arr = explode(' ', $line);
    $option = intval($arr[0]);
        switch ($option) {
            case 1:
                $newstring .= $arr[1];
                $prev[] = [1, $arr[1]];
                break;
            case 2:
                $length = intval($arr[1]);
                $part = substr($newstring, -$length);
                $prev[] = [2, $part];
                $newstring = substr($newstring, 0, -$length);
                break;
            case 4:
                $op = array_pop($prev);
                if (!$op) {
                    break;
                }
                if ($op[0] == 1) {
                    $newstring = substr($newstring, 0, -strlen($op[1]));
                } else {
                    $newstring .= $op[1];
                }
                break;
            case 3:
                $index = intval($arr[1]) - 1;
                echo $newstring[$index] . PHP_EOL;
        }             
}
?>