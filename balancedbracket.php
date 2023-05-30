<?php
function isBalanced($s){
    $temp = $s;
    if (strlen($s) % 2 != 0){
        return "NO";
    }else{
        $counter = strlen($temp);
        print_r($temp."---");
        while($counter > 0){
            for($i=1; $i<strlen($temp); $i++){
                $left = substr($temp, $i-1, 1);
                $right= substr($temp, $i, 1);
    
                if(check($left, $right)){
                    $a = substr($temp, 0, $i-1);
                    $b= substr($temp, $i+1);
                    $temp = $a.$b;
                    print_r($temp."---");
                    break;
                }
                if($i==strlen($temp)-1){
                    return "NO";
                    break;
                }       
            }
        $counter = strlen($temp);                
        }
    }

    $result = "NO";
    if($temp == ""){
        $result = "YES";
    }
    return $result;
}

function check($first, $second){
    if($first=="(" and $second == ")"){
        return TRUE;
    }elseif($first=="[" and $second == "]"){
        return TRUE;
    }elseif($first=="{" and $second == "}"){
        return TRUE;
    }else{
        return FALSE;
    }
}
?>