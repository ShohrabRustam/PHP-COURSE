<?php
class QueueArray {
    // Queue array
    public $dataStore=array();

    //dataStaore as an Array using Constructor 
    public function __construct()
    {
        $this->dataStore=array();
    }

    //Length of the queue as the length of the Array 
    public function getLength() {
        return count($this->dataStore);
    }

    //check the queue is empty by using the size the array
    public function isEmpty() {
        return $this->getLength() === 0;
    }
    

    //Add the data in Queue
    public function enqueue($element) {
        //This work as the data insert at the last 
        $this->dataStore[] = $element;
        
        // array_push($this->dataStore, $element);
    }
    
    //Delete the element form the queue 
    public function dequeue() {
        if (!$this->isEmpty()) {
            return array_shift($this->dataStore);
        }
        return false;
    }

    // Traverse the queue for get output output
    public function printQueue() {
        if (!$this->isEmpty()) {
            for ($i = 0; $i < $this->getLength(); $i++) {
                echo $this->dataStore[$i] . PHP_EOL;
            }
        } else {
            return "empty";
        }
    }

    // show the element which insert at last 
       public  function showFront(){
        return $this->dataStore[0];
    }

    //show the last element which insert al first 
    public function showRear(){
        return $this->dataStore[count($this->dataStore)-1];
    }

    // to delete the entire queue 
    public function clearQueue() {
        // unset($this->dataStore);
        $this->dataStore=null;
    }
    
}
$q = new QueueArray();
$q->enqueue('a');
$q->enqueue('b');
$q->enqueue('c');
echo 'The length of the queue : ' . $q->getLength();
echo "</br>";
echo 'The queue is: ';
$q->printQueue();
echo "</br>";
$q->dequeue();
echo "</br>";
echo "Out of the queue: ";
$q->printQueue();

echo '<br>The front element is : '.$q->showFront()."<br>";

echo "The last elemet of queue is ".$q->showRear()."<br>";
$q->clearQueue();
echo "After clearing , the queue is" . $q->printQueue()."<br>";
$q->enqueue('d');
$q->enqueue('e');
$q->enqueue('f');
echo 'The length of the queue : ' . $q->getLength();
echo "</br>";
echo 'The queue is: ';
$q->printQueue();
echo "</br>";
$q->dequeue();
echo "</br>";
echo "Out of the queue: ";
$q->printQueue();

echo '<br>The front element is : '.$q->showFront()."<br>";

echo "The last elemet of queue is ".$q->showRear()."<br>";
die;


?>