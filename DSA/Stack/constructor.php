<?php
class Nodes {
    public $data;
    public $next;
    public function __construct($a)
    {
        $this->data=$a;
        $this->next=null;
        echo $this->data;
        echo "This is cons".$this->next;
    }
}
$newnode = new Nodes(5);
// $newnode->assignvaluefordata(5);
?>