<?php
function reverse($llist) {
    $prev = null;
    $current = $llist;

    while($current!= null){
        $next = $current->next;
        $current->next = $prev;
        $prev = $current;
        $current = $next;
    }
    return $prev;
}



class LinkedList{
    public $next;
    public $data;

    public function __construct(){
        $this->next = null;
        //$this->data = 0;
    }
}


$llist1 = new LinkedList();
$llist1->data = 1;

//second list
$llist2 = new LinkedList();
$llist2->data=2;
//linking with first list
$llist1->next = $llist2;

//third list
$list3 = new LinkedList();
$list3->data=3;
//linking with second list
$llist2->next = $list3;

//fourth list 
$list4 = new LinkedList();
$list4->data = 4;
//linking with third list
$list3->next = $list4;

//fifth list
$list5 = new LinkedList();
$list5->data = 5;
//linking with fourth list
$list4->next = $list5;

$test2 = reverse($llist1);
print_r($test2);
?>