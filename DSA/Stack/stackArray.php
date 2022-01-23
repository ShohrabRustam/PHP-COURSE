<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class StackArray{
            public $stackArray;
            public int $size;
            public static int $elementPresent=0;
            public function __construct($size=10)
            {
                $this->stackArray=array();
                $this->size=$size;
            }
            public function push($data){
                if(self::$elementPresent<$this->size){
                array_unshift($this->stackArray, $data);
                self::$elementPresent++;
                }
                else{
                    throw new RunTimeException("Stack Overflow!!!") ;
                }
            }

            public function pop(){
                if(self::$elementPresent==0){
                    throw new RuntimeException("Stack Underflow");
                }
                else{
                    self::$elementPresent--;
                    return array_shift($this->stackArray);
                }
            }
            public function elementPresent(){
                echo "Present element in stack is : ".self::$elementPresent;
            }
            
            public function spacePresent(){
                return $this->size-self::$elementPresent;
            }

            public function isempty(){
                if(count($this->stackArray)==0){
                    return 1;
                }
                else{
                    return 0;
                }

            }

            public function peek(){
                echo "The top element is : ".current($this->stackArray);
            }

            public function printStack(){
                for($i=0;$i<self::$elementPresent;$i++){
                    echo $this->stackArray[$i]."^".'<br>';
                }
            }
}
$stack=new StackArray(5);
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
$stack->peek();

?>