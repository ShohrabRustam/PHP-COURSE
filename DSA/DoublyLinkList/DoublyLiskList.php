<?php

use DoublyLinkList as GlobalDoublyLinkList;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("Nodes.php");
?>

<?php
class DoublyLinkList{

    public $header=null;

    public static $numberOfNodes = 0;

    public function insertNodeAtFirst($item){
        $newNode=new Node($item);
        if($this->header==null){
            $this->header=$newNode;
        }
        else{
            $this->header->pre = $newNode;
            $newNode->next = $this->header;
            $this->header = $newNode;
        }
        self::$numberOfNodes++;
    }

    public function insertNodeAtLast($item){
        $newNode=new Node($item);
        if($this->header==null){
            $this->head = $newNode;
        }
        else{
            $node=$this->header;
            while($node->next!=null){
                $node=$node->next;
                $node->pre = $node;
            }
            $newNode->pre=$node;
             $node->next=$newNode;

        }
        self::$numberOfNodes++;
    }
    
    public function insertNodeAtGivenPosition($Item, $position)
    {
        $newnode = new Node($Item);
        //if possition is incorrect
        if ($position < 1 || $position >= self::$numberOfNodes + 1) {
            echo "Invalid Possition because total list size is ".self::$numberOfNodes.'<br>';
        } 
        else if ($position == 1) 
        {
            $newnode->next = $this->header;
            $this->header->pre=$newnode;
            $this->header = $newnode;
        }
        //   node at after 1st possition 
        else {
            $node = $this->header;
            for ($i = 1; $i < $position - 1; $i++) {
                if ($node != null) {
                    $node = $node->next;
                }
            }
            if ($node->next != null) {
                $newnode->next = $node->next;
                $node->next = $newnode;
            } 
            else {
                //6. When the previous node is null
                $node->next=$newnode;
            }
        }
        self::$numberOfNodes++;
    }

    function deleteAtFirst(){
        if($this->head==null){
            echo "The list already Empty";
        }
        else{
            $current=$this->header;
            $this->header->next->pre=null;
            $this->header=$this->header->next;
            
            $current=null;
        }
        self ::$numberOfNodes--;
    }
    public function deleteAtLast()
    {
        if($this->header != null) {
            if($this->header->next == null) {
              $this->header = null;
              echo "Empty List";
            } 
            else {
            //   $temp = new Node();
              $node = $this->header;
              while($node->next->next != null){
                $temp = $node->next;
              }
              $lastNode = $node->next;
              $lastNode->pre=null;
              $temp->next = null; 
              $lastNode = null;
            }
          }
          else{
              echo "List Already Empty";
          }
        
          self::$numberOfNodes--;
    }

    public function deleteAtGiven($position){
        if($this->header!=null){
                if($position>=1 && $position<=self::$numberOfNodes){
                    $previoustarger= $this->header;
                    $target = $this->header;

                    if($position==1){
                        $delete=$this->header;
                        $this->header=$this->header->next;
                        $this->header->pre=null;
                        $delete=null;
                    }
                    for($i=1;$i<$position-1;$i++){
                        $previous=$target;
                        $target=$target->next;
                    }

                   $delete = $target;
                   $target->next=$target->next->next;
                   $previous->next=$target->next;
                   $target->pre=$previous;
                   $delete=null;
                   self::$numberOfNodes--;
                }
                else{
                    echo "The possition is Incorrect you have only ". self::$numberOfNodes." Node";
                }
        }
    }

    public function update($Item,$position){
        // $node = new Node($Item);
        if ($position < 1 || $position >= self::$numberOfNodes +1) {
            echo "Invalid Possition";
        } else if ($position == 1) {
            $this->head->data=$Item;
        } else {
            //   node privious to possition
            $temp = new Node($Item);
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                if ($temp != null) {
                    $temp = $temp->next;
                }
            }

                $temp->next->data=$Item;
            
        }
    }
    
    public function deleteByValue($item)
    {
        $current = $previous = $this->head;

        while ($current->data != $item) {
            $previous = $current;
            $current = $current->next;
        }

        // if you are deleting the first node of the linked list
        if ($current == $previous) {
            $deleteNode = $current;
            $this->head = $current->next;
            $deleteNode=null;
        }
        $current->next->pre=$previous->next;
        $previous->next = $current->next;

        self::$numberOfNodes--;
    }

    
    public function printList(){
        $node=$this->header;
        while($node!=null){
            echo $node->data ."<->";
            $node=$node->next;
        }
    }

    public function numberOfNode(){
        echo "The number of Nodes is : ".self::$numberOfNodes;
    }
}

$doublyList=new DoublyLinkList();
$doublyList->insertNodeAtFirst(5);
$doublyList->insertNodeAtFirst(4);
$doublyList->insertNodeAtFirst(3);
$doublyList->insertNodeAtLast(6);
$doublyList->insertNodeAtFirst(2);
$doublyList->insertNodeAtGivenPosition(2,5);
$doublyList->insertNodeAtFirst(1);
$doublyList->printList();
?>