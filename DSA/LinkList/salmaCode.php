<?php

class Nodes{
public $data;
public $next;
public function __construct($value){
$this->data=$value;
$this->next=null;
}

}
// $newnode = new Nodes(5);
class linklist{
public $head;

public function __construct(){
    $this->head=null;
}

public function insertAtFirst($newItem){
    $newNode=new Nodes($newItem);
    if($this->head==null){
        $this->head=$newItem;
        // $newItem=$this->head;
    }else{
        $newNode->next=$this->head;
        $this->head=$newNode;
    }

}
public function printList(){
    if($this->head==null){
      echo "The List Empty ";
    }
    else{
        echo $this->head->data;
    }
}

}
$list=new linklist();
$list->insertAtFirst("Khan");
$list->printList();
echo "<br>";
$list->insertAtFirst("Salma");
$list->printList();
echo "<br>";
$list->insertAtFirst("Ulma");
$list->printList();

?>