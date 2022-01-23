<?php
class Node{
    public $pre;
    public $data;
    public $next;
    public function __construct($data){
        $this->pre=null;
        $this->data=$data;
        $this->next=null;

    }
}
class QueueDoublyList{

    public $head=null;
    public $tail=null;

    public function isEmpty(){
        if ($this->count==0){
            return 1;
        }
        return 0;
    }
    


}





    
    
    

?>