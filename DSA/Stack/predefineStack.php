<?php
 
// PHP program to illustrate the
// Ds\stack::pop() function
 
// Create a Stack instance
$stack = new \Ds\Stack();
 
// Pushing elements to Stack
$stack->push("Welcome");
$stack->push("to");
$stack->push("GfG");
 
// Print the initial Stack
print_r($stack);
 
// Print the top element and remove it
print_r($stack->pop());
 
// Print the Stack again
print_r($stack);
 
?>