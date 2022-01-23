<?php
/*
  Php Program for
  Implement queue using linked list
*/
// Create Q node
class Node
{
	public $data;
	public $next;

	function __construct($value)
	{
		$this->data = $value;
		$this->next = NULL;
	}
}
class QueueLinkListHeadTail
{
	public $head=null;
	public $tail=null;
	public $count=0;
	
	//size of the queue at last 
	public	function size()
	{
		return $this->count;
	}

	//check stack empty / not empty 
	public	function isEmpty()
	{
		return $this->count == 0;
	}

	// Add new node of queue at last 
	public	function enqueue($value)
	{
		// Create a new node
		$node = new Node($value);
		if ($this->head == NULL)
		{
			// Add first element into queue
			$this->head = $node;
			$this->tail = $node;
		}
		else
		{
			// Add node at the end using tail 
			$this->tail->next = $node;
			$this->tail = $node;

		}
		$this->count++;
	}

	// Delete a element into queue at first node
	function dequeue()
	{
		if ($this->isEmpty())
		{
			echo "Empty Queue", "<br>";
			return 0;
		}
		//first node in temp for return 
		$temp = $this->head;

		// head shift ahead for point next node 
		$this->head = $this->head->next;

		//reduce the counter 
		$this->count--;

		//check after delete
		if ($this->isEmpty())
		{
			// if there is no element in the queue tail should be null
			$this->tail = NULL;
		}
		return $temp->data;
	}


	// Get front node becase that isert at first 
	public	function peek()
	{
		if ($this->head == NULL)
		{
			echo "Empty Queue", "<br>";
			return 0;
		}

		return $this->head->data;
	}


	public function Show()
	{
		$p=$this->head;
		while($p!=null){
			echo $p->data ." ";
			$p=$p->next;
		}
	}

	public function clearQueue(){
		$this->head=null;
		$this->tail=null;
	}

	public static function operation($args)
	{
		$task = new QueueLinkListHeadTail();
		// Initially number of element
		echo "isEmpty : ".strval($task->isEmpty()), "<br><hr>";
		// Add element into queue

		$task->enqueue(10);
		$task->Show();
		echo "<br><hr>";
		$task->enqueue(20);
		$task->Show();
		echo "<br><hr>";
		$task->enqueue(30);
		$task->Show();
		echo "<br><hr>";
		$task->enqueue(40);
		$task->Show();
		echo "<br><hr>";
		$task->enqueue(50);
		$task->Show();
		echo "<br><hr>";
		// Test other function
		echo "size : ".$task->size(). "<br>";
		$task->Show();
		echo "<br><hr>";
		echo "peek : ".$task->peek(). "<br>";
		$task->Show();
		echo "<br><hr>";
		echo "dequeue : ".$task->dequeue(). "<br>";
		$task->Show();
		echo "<br><hr>";
		echo "size : ".$task->size(). "<br>";
		$task->Show();
		echo "<br><hr>";
		echo "peek : ".$task->peek(). "<br>";
		$task->Show();
		echo "<br><hr>";
		echo "isEmpty : ".$task->isEmpty()."<br>";
	}
}
QueueLinkListHeadTail::operation(array());
?>