<?php 
class Queue {
    private $data;
    private $size;
    private $front;
    private $rear;

    //Construction for the queue 
    public function __construct($size){
        $this->size = $size;
        $this->data = array();
        $this->front = -1;
        $this->rear = -1;
    }

    //insert the element in Queue at last 
    public function enqueue($element) {
        if ($this->isfull()){
        throw new Exception("Error: Queue is full");
        }
        else if ($this->isempty())
        {
            $this->front = $this->rear = 0;
        }
        else {
            $this->rear = ($this->rear + 1) % $this->size;
        }
        $this->data[$this->rear] = $element;
    }

    //Delete the element from the queue at first   
    public function dequeue() 
    {
        if ($this->isempty()) 
        {
            throw new Exception("Error: Queue is empty");
        }
        else if ($this->front == $this->rear) 
        {
            $this->front = $this->rear = -1;
        }
        echo "The Dequeue is : ".$this->data[$this->front];      
        $this->front = ($this->front + 1) % $this->size;  
    }
    

    public function isfull() {
        if ($this->front == (($this->rear+1) % $this->size)){
        return true;
        }
        return false;
    }
    
    public function isempty() 
    {
        if ($this->front == -1 && $this->rear == -1)
        {
            return true;
        }
        return false;
    }
    
    public function print() 
    {
        $f = $this->front;
        $r = $this->rear;
        
        while (true) 
        {
            echo "Index: $f, Value: ".$this->data[$f];
            echo "<br>";
            $f = ($f + 1) % $this->size;
            
            if ($f == (($r + 1) % $this->size))
            echo "<hr>";
            break;
        }
    }
}

$queue = new Queue(6);
$queuen->enqueue(1);
$queue->print();
$queue->enqueue(12);
$queue->print();
$queue->enqueue(0);
$queue->print();
$queue->enqueue(7);
$queue->print();
$queue->enqueue(01);
$queue->print();
$queue->dequeue();
$queue->print();
$queue->dequeue();
$queue->print();
$queue->dequeue();
$queue->print();
$queue->enqueue("Rustam");
$queue->print();
$queue->enqueue("Shohrab");
$queue->print();
$queue->enqueue("Armaan");
$queue->print();
?>