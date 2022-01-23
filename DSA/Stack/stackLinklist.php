<?php
// Php program for
// Implementation stack using linked list

// Stack Node
class StackNode
{
	public $data;
	public $next;
	public	function __construct($data)
	{
		$this->data = $data;
		$this->next = null;
	}
}
class MyStack
{
	public $head=null;
	public static $count;
	
	// Returns the number of element in stack
	public	function size()
	{
		return self::$count;
	}


	public	function isEmpty()
	{
		if ($this->size() > 0)
		{
			return false;
		}
		else
		{
			return true;
		}
	}

	// Add a new element in stack
	public	function push($data)
	{
		// Make a new stack node
		// And set as head
        $node =new StackNode($data);
        if($this->head==null){
		$this->head =$node;
        }
        else{
            $node->next=$this->head;
            $this->head=$node;
        }
		// Increase node value
		self::$count++;
	}
	// Add a top element in stack
	public	function pop()
	{
		if ($this->isEmpty() == false)
		{
            $temp=$this->head->data;

            $this->head=$this->head->next;

        self::$count--;
            // unset($temp);
        }
		return $temp;
	}
	// Used to get top element of stack
	public	function peek()
	{
		if (!$this->isEmpty())
		{
			return $this->head->data;
		}
		else
		{
			return 0;
		}
	}
}
class Test
{
	public static
	function main($args)
	{
		// Create new stack 
		$s = new MyStack();
        echo "<pre>";
		echo "\n Is empty : ",($s->isEmpty() == 1 ? "true" : "false"), "\n";
		// Add element
		$s->push(15);
		$s->push(14);
		$s->push(31);
		$s->push(21);
		$s->push(10);
		echo "\n Top  : ",$s->peek(), "\n";
		echo " Size : ",$s->size(), "\n";
		echo "\n Is empty : ",($s->isEmpty() == 1 ? "true" : "false"), "\n";
		// Delete Stack Element
		$data = $s->pop();
		echo "\n Pop element ",($data), "\n";
		echo " Size : ",($s->size()), "\n";
		$data = $s->pop();
		echo "\n Pop element ",($data), "\n";
		echo " Size : ",($s->size()), "\n";
        echo "</pre>";
	}
}
$stack= new Test();
$stack->main(5);
?>