<?php
class Node
{
    public $data;
    public $next;
    public $pre;
    public function __construct($value)
    {
        $this->data = $value;
        $this->next = null;
        $this->pre=null;
 
   }
   
}
class DoublyLinkList
{
    public $head = null;

    // static variable to get number of nodes in List
    private static $numberOfNodes = 0;

    public function numberOfNodes()
    {
        echo "The number of nodes is : ".self::$numberOfNodes;
    }

    public function insertAtFirst($Item)
    {  /*Condition for the empty list */
        $node = new Node($Item);
  //   if List is empty make the node as head 
  if($this->head == null) {
    $this->head = $node;
  }
   else {
    $this->head->prev = $node;
    $node->next = $this->head;
    $this->head = $node;
  }
        self::$numberOfNodes++;
    }

    public function insertAtLast($Item)
    {
        $node = new DoublyLinkList($Item);
        if ($this->head === null) { // if the linked list is empty
            $this->head = $node;
        } else { // when the linked list is non-empty
            $current = $this->head;

            while ($current->next != null) {
                $current = $current->next;
                $node->pre = $current;
            } // after while loop terminates, current points to the last Node
            $current->next = new Node($Item);

        }
        self::$numberOfNodes++;
    }

    public function InsertAtGivenPossition($Item, $position)
    {
        $node = new Node($Item);
        if ($position < 1 || $position >= self::$numberOfNodes + 1) {
            echo "Invalid Possition";
        } else if ($position == 1) {
            $node->next = $this->head;
            $this->head = $node;
        } else {
            //   node privious to possition
            $temp = new Node($Item);
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                if ($temp != null) {
                    $temp = $temp->next;
                }
            }
            if ($temp != null) {
                $node->pre = $temp;
                $node->next = $temp->next;
                $temp->next = $node;
            } else {

                //6. When the previous node is null
                echo "\nThe previous node is null.";
            }
        }
        self::$numberOfNodes++;
    }
  

    public function deleteByValue($item)
    {
        // $nodeDelete = new Node($item);
        $current = $previous = $this->head;

        while ($current->data != $item) {
            $previous = $current;
            $current = $current->next;
        }

        // if you are deleting the first node of the linked list
        if ($current == $previous) {
            $this->head = $current->next;
        }

        $previous->next = $current->next;
        $current->pre=$previous;

        self::$numberOfNodes--;
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

    public function printList()
    {
        $items = [];
        $current = $this->head;
        while ($current != null) {
            array_push($items, $current->data);
            $current = $current->next;
        }

        $str = '';
        foreach ($items as $item) {
            $str .= $item . '<->';
        }

        echo $str;
        echo '<hr>';
    }

}
$linklist=new DoublyLinkList();
$linklist->insertAtFirst(20);
$linklist->insertAtFirst(30);
$linklist->insertAtLast(3);
// $linklist->update(5,1);
$linklist->deleteByValue(30);
$linklist->InsertAtGivenPossition(5,2);
// $linklist->deleteByValue(20);

$linklist->printList();
?>