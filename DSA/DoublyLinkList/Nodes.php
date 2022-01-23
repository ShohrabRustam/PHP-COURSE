<?php
class Node{
    public $data;
    public $previous;
    public $next;
    public function __construct($item)
    {
        $this->data=$item;
        $this->pre=null;
        $this->next=null;
    }
}
?>