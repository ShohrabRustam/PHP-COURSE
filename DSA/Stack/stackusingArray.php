<?php
class stackUsingArray{
    public $stack;
    public $capacity;

public function __construct($capacity)
{
//  initialize the stack with an empty array
$this->stack = array();
// stack can only contain this many elements
$this->capacity = $capacity;
}

public function push($element)
{
// check for stack overflow
if (count($this->stack) < $this->capacity) {
// prepend element to the start of the stack array
array_unshift($this->stack, $element);
} 
else {
throw new RuntimeException('Stack overflow!!!');
}
}

public function pop()
{
// check for stack underflow
if (empty($this->stack)) {
throw new RuntimeException('Stack underflow!!!');
} else {
// pop an element from the start of the stack array
return array_shift($this->stack);
}
}

public function peek()
{
return current($this->stack);
}
}
?>