<?php
function insertNodeAtPosition($llist, $data, $position){
    $current = $llist;
    $newllist = new LinkedList();
    $counter = 0;
    $temp = null;
    while($current != null){
        if($counter == 0){
            if($counter == $position){
                //OK
                $newnode = new Node();
                $newnode->data = $data;
                $newnode->next = $current;
    
                $newllist = $newnode;
                return $newllist;
                break;
            }else{
                //OK
                $newnode = new Node();
                $newnode->data = $current->data;
                $newnode->next = null;
                $newllist = $newnode;
                $temp = $newllist;
            }
        }else{
            $temp = $newllist;
            while($temp->next != null){
                $temp = $temp->next;
            }
            if($counter == $position){
                $node = new Node();
                $node->data = $data;
                $node->next = $current;
    
                $temp->next = $node;

                return $newllist;
                break;
            }else{
                //OK
                $node = new Node();
                $node->data = $current->data;
                $node->next = null;
                $temp->next = $node;
            }
        }
        $counter++;
        $current = $current->next;
    }
}

class LinkedList{
    public function __construct(){
    }
}

class Node{
    public $data;
    public $next;
}

$llist = new LinkedList();

$node1 = new Node();
$node1->data = 11;
$node1->next = null;

$llist = $node1;

$node2 = new Node();
$node2->data = 9;
$node2->next = null;

$node1->next = $node2;

$node3 = new Node();
$node3->data = 19;
$node3->next = null;

$node2->next = $node3;

$node4 = new Node();
$node4->data = 10;
$node4->next = null;

$node3->next = $node4;

$node5 = new Node();
$node5->data = 4;
$node5->next = null;

$node4->next = $node5;


//var_dump($llist->head->data);
$test2 = insertNodeAtPosition($llist, 20,3);
print_r($test2);


?>