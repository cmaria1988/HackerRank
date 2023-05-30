<?php
function isBalanced($s){
    $temp = $s;
    if (strlen($s) % 2 != 0){
        return "NO";
    }else{
        $counter = strlen($temp);
        print_r($temp."|");
        while($counter > 0){
            
            $first=substr($temp,0,1);
            $second = substr($temp, 1,1);

            if(check($first, $second)){
                if(strlen($temp) == 2){
                    $temp = "";
                }else{
                    $temp = substr($temp, 2);
                }
                print_r($temp."|");
            }else{
                $c = 1;
                for($j=strlen($temp)-1; $j>0;$j--){
                    $back = substr($temp, $j, 1);
                    if(check($first, $back)){
                        $a = substr($temp, 1, $j-1);
                        $b= substr($temp, $j+1);
                        $temp = $a.$b;
                        print_r($temp."|");
                        //break;
                    }
                        
                }
                    $c ++;
            }
            if($c==strlen($temp)){
                //return "NO";
                //break;
            }
            $counter = strlen($temp);
            
        }
    }

//    print_r($temp);
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
//$s="()()()()()()()()";
//$s = "{[()]}";
//$s = "{[(])}";
//$s = "{{[[(())]]}}";
//$s = "{(([])[])[]}";
{[(])}

$test2 = isBalanced($s);
print_r($test2);
?>