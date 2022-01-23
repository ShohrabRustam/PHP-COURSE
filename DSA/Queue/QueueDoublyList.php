<?php
//Queue Using Doubly link List 

use QueueDoublyList as GlobalQueueDoublyList;

class Node
{
	public $data;
	public $next;
	public $prev;
    //Constuctor of the Node 
	public	function __construct($data, $prev)
	{
		$this->data = $data;
		$this->next = NULL;
		$this->prev = $prev;
	}

}


class QueueDoublyList
{
    // set front and rear initially null
	public $front=null;//for the starting node 
	public $rear=null;//for the last node 
	public $size=0;
	
	// Add a new node into queue at last and set Rear at last 
	public	function enqueue($data)
	{
		// Create a new node

		$node = new Node($data, $this->rear);

		if ($this->front == NULL)
		{
			// When adding a first node of queue
			$this->front = $node;
			$this->size = 1;
		}
		else
		{
			$this->rear->next = $node;
			$this->size = $this->size + 1;
		}
		$this->rear = $node;
	}

    //check Queue is empty or not 
	public	function isEmpty()
	{
		if ($this->size == 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	// Get a front element of queue
	public	function peek()
	{
		if ($this->isEmpty() == true)
		{
			echo "\n Empty Queue\n";
			// When stack is empty
			return -1;
		}
		else
		{
			return $this->front->data;
		}
	}

    //size of the Queue 
	public	function Size()
	{
		return $this->size;
	}

	// Remove a front node of the queue
	public	function dequeue()
	{
		if ($this->isEmpty() == true)
		{
			// When queue is empty
			return -1;
		}
		else
		{
			$data = $this->peek();
			if ($this->front == $this->rear)
			{
				// When queue contains only one node
				$this->rear = NULL;
				$this->front = NULL;
			}
			else
			{
				$this->front = $this->front->next;
				$this->front->prev = NULL;
			}
			// Change queue size
			$this->size--;
			// Delete node value
			return $data;
		}
	}


	// Print elements of queue
	public	function printQ()
	{
		$node = $this->front;
		echo "<br> Queue Element<br>";
		while ($node != NULL)
		{
			echo " ".($node->data);
			$node = $node->next;
		}
		print("<br><hr>");
	}
	public static
	function main()
	{
		$q = new QueueDoublyList();
		// Add queue element
		$q->enqueue(1);
        $q->printQ();
		$q->enqueue(2);
        $q->printQ();
		$q->enqueue(3);
        $q->printQ();
		$q->enqueue(4);
        $q->printQ();
		$q->enqueue(5);
		$q->printQ();
		echo " Size : ".($q->Size());
		// Remove queue element
		echo "<br> Dequeue Node : ".($q->dequeue())."<br><hr>";
        $q->printQ();
		echo "<br> Dequeue Node : ".($q->dequeue())."<br><hr>";
        $q->printQ();
		echo "<br> Dequeue Node : ".($q->dequeue())."<br><hr>";
		$q->printQ();
		echo " Size : ".($q->Size());
	}

}
QueueDoublyList::main();
?>