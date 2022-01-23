<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Stack
{
public $stack;
public $capacity;
public static $presentElement;
public function __construct($capacity)
{
// initialize the stack with an empty array
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
self::$presentElement++;
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
self::$presentElement--;
return array_shift($this->stack);
echo $this->stack ." "; 

}
}
 public function print(){
     foreach($this->stack as $item){
         echo $item ." ";
     }
 }
 
 public function reverse(){
     $reversestack= new stack(count($this->count));
        for($i=count($this->stack)-1;$i>=0;$i--){
            $reversestack->push($this->stack[$i]);
        }
 }

 public function elementPresent(){
     return self::$presentElement;
 }

public function spacePresent(){
    return $this->capacity - self::$presentElement;
}

public function peek()
{
return current($this->stack);
}

}
$stack =new Stack(10);
$stack->push(5);
$stack->push(3);
// $stack->print();
// $stack->reverse();
echo $stack->peek();
?>