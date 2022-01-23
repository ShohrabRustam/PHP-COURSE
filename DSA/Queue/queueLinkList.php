<?php
require_once "Node.php";
?>
<?php
// Queue class
class queueLinkList 
{
    private $head=null;
   

    // Queue is empty or not 
    public function isEmpty() 
    {
        if ($this->head== null) { // empty
            return true;
        }
        return false;
    }

    // //Node add data at the end of the team.
    public function enqueue($item) 
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

    
    }
    // // Remove form the head 
    public function dequeue() 
    {
        if ($this->isEmpty()) 
        {
            //Queue is Empty 
            return false;
         } 
         else 
         { // delete the head from the queue 
            $element=$this->head;
            $this->head = $this->head->next;
            
        }
        // echo "The deleted element from queue is : <>";
        return $element;
       
    }

    // // Clear queue
    public function clear() 
    {
        $this->head = null;
    }


    // // Show elements in queue
    public function show(){
        if($this->isEmpty()){
            return false;
        }
        else{
            $node=$this->head;
            while($node!=null){
                echo ' '.$node->data." ";
                $node=$node->next;
            }
        }

    }
   
}

// test
$q = new queueLinkList();
$q->enqueue('a');
echo "The queue is: ";
$q->show();
echo "<br>";
$q->enqueue('b');
echo "The queue is: ";
$q->show();
echo "<br>";
$q->enqueue('c');
echo "The queue is: ";
$q->show();
echo "<br>";
echo "Dequeue Execuete : <br>";
echo "after dequeue Out of the queue : ";
$q->dequeue();
$q->show();
echo "</br>";
$q->clear();
echo "After clearing the queue, the queue is :<br>";
$q->show();
?>