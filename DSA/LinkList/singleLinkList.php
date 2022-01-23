<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("node.php");
?>
<?php
class singlyLinkList 
{
    public $head = null;
    //To count the number of node 
    public static $numberOfNodes = 0;
    // Add the node at the first at link list                
    public function insertNodeAtFirst($item)
    {
        $newNode = new Node($item);
        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $newNode->next = $this->head;
            $this->head = $newNode;
        }
        // self::$numberOfNodes++;
    }
    //Add at the last position 
    public function insertNodeAtLast($item)
    {
        $newNode = new Node($item);
        if ($this->head == null) { // if the linked list is empty
            $this->head = $newNode;
        } else {
            $node = $this->head;
            while ($node->next != null) { // when the linked list is non-empty
                $node = $node->next;
            } // after while loop terminates, current points to the last Node
            $node->next = $newNode;
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
            $newnode->next = $this->head;
            $this->head = $newnode;
        }
        //   node at after 1st possition 
        else {
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                if ($temp != null) {
                    $temp = $temp->next;
                }
            }
            if ($temp->next != null) {
                $newnode->next = $temp->next;
                $temp->next = $newnode;
            } 
            else {

                //6. When the previous node is null
                $temp->next=$newnode;
            }
        }
        self::$numberOfNodes++;
    }

    function deleteAtFirst(){
        if($this->head==null){
            echo "The list already Empty";
        }
        else{
            $firstNode=$this->head;
            $this->head=$this->head->next;
            unset($firstNode);
        }
        self ::$numberOfNodes--;
    }

     public function deleteAtLast()
    {
        if($this->head != null) {
            if($this->head->next == null) {
              $this->head = null;
              echo "Empty List";
            } else {
            //   $temp = new Node();
              $temp = $this->head;
              while($temp->next->next != null){
                $temp = $temp->next;
              }
              $lastNode = $temp->next;
              $temp->next = null; 
              $lastNode = null;
            }
            self::$numberOfNodes--;
          }
          else{
              echo "List Already Empty";
          }
        
    }

    public function deleteAtGiven($position){
        if($this->head!=null){
                if($position>=1 && $position<=self::$numberOfNodes){
                    $node = $this->head;
                    if($position==1){
                        $delete=$this->head;
                        $this->head=$this->head->next;
                        $delete=null;
                    }
                    for($i=1;$i<$position-1;$i++){
                        $node=$node->next;
                    }
                   $delete = $node;
                   $node->next=$node->next->next;
                   $delete=null;
                   self::$numberOfNodes--;
                }
                else{
                    echo "The possition is Incorrect you have only ". self::$numberOfNodes." Node";
                }
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
            $this->head = $current->next;
        }

        $previous->next = $current->next;
        $current=null;

        self::$numberOfNodes--;
    }

    public function search($item){
        if($this->header==null){
            echo "List is empty ";
        }
        else{
            $node=$this->header;
            while($node->next!=null){
                if($node->data==$item){
                    echo $item ."is Found in Link List ";
                    echo "<hr>";
                    break;
                }
                $node=$node->next;
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
    
    public function printList()
    {
        $items = [];
        $current = $this->head;
        while ($current != null) 
        {
        $items[]= $current->data;
            $current = $current->next;
        }

        foreach ($items as $item) {
            echo  $item . '->';
        }
        echo "<hr>";
    }


    public function numberOfNodes()
    {
        echo "The number of nodes is : ".self::$numberOfNodes;
    }

    
}

$linklist=new singlyLinkList();
$linklist->insertNodeAtFirst(1);
$linklist->insertNodeAtLast(5);
$linklist->insertNodeAtGivenPosition(2,2);
$linklist->printList();

?>