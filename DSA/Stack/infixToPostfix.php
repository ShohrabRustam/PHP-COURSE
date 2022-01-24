<?php
// Infix to postfix conversion
// Stack node
class StackNode
{
	// Stack data
	public $element;
	public $next;
	public	function __construct($element)
	{
		$this->element = $element;
		$this->next = null;
	}

}

// Stack
class MyStack
{
	public $top;
	public $size;
	public	function __construct()
	{
		$this->top = NULL;
		$this->size = 0;
	}
	// Add node at the top of stack
	public	function push($element)
	{
        $newNode=new StackNode($element);
        if($this->top=null){
		$this->top = $newNode;
        }
        else{
        $newNode->next=$this->top;
        $this->top=$newNode;
        }
		$this->size++;
	}

    //Check the stack is Empty or Not 
	public	function isEmpty()
	{
        // condition for check  the stack is not empty 
		if ($this->size > 0 && $this->top != NULL)
		{
			return false;
		}
		else
		{
			return true;
		}
	}

    // Remove top element of stack which is head / top 
	public	function pop()
	{
		if ($this->size > 0 && $this->top != NULL)
		{
			$temp = $this->top;
			// Change top element of stack
			$this->top = $temp->next;
			$this->size--;
            return $temp;
		}
        else{
            return -1;
        }
	}

	// Return top element of stack it means last entered element 
	public	function peek()
	{
		if ($this->top == NULL)
		{
			return 'Stack is empty ';
		}
		return $this->top->element;
	}

}
