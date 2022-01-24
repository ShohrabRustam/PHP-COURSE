<?php

class Nodes {
    public $data;
    public $next;
    public function __construct($data){
        $this->data=$data;
        $this->next=null;
    }  
}
class LinkList{
        public $head=null;
        public function insertAtFirst($item){
            $newnode = new Nodes($item);
            if($this->head==null){
                $this->head=$newnode;
            }
            else{
            // $newnode=$this->head;   
            $newnode->next=$this->head;  
            $this->head=$newnode;  
         }
      }
      public function deleteAtFirst(){
          if($this->head==null){
            echo "List Already Empty";
          }
          else if($this->head->next==null){
              $this->head=null;
          }
          else{
              $first=$this->head;
              $this->head=$this->head->next;
              $first->next=null;

          }

      }
      public function insertAtLast($item){
          $newnode = new Nodes($item);
          $reachedLast=$this->head;
          if($this->head==null){
              $this->head = $newnode;
          }
          else
          {
          while($reachedLast->next!=null){
              $reachedLast=$reachedLast->next;
              $reachedLast=$newnode;
          }
        }
      }
      public function deleteAtLast(){
          
      }

}
$mylist=new LinkList();
$mylist->insertAtFirst(5);
$mylist->insertAtFirst(6);
$mylist->insertAtFirst(7);


?>
