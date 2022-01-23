<?php
class Calculator
{
    public int $var1;
    public int $var2;
    public function __construct($var1,$var2){
        $this->var1=$var1;
        $this->var2 = $var2;
    }
function addition(){
    echo "The addition of ".$this->var1." and ".$this->var2 . " is : " .($this->var1+$this->var2).'<br>' ;
}    
function subtraction(){
    echo "The subtraction of ".$this->var1." and ".$this->var2 . " is : " .($this->var1-$this->var2).'<br>' ;
}    
function multiplication(){
    echo "The multiplication of ".$this->var1." and ".$this->var2 . " is : " .($this->var1*$this->var2).'<br>' ;
}    
function division(){
    echo "The division of ".$this->var1." and ".$this->var2 . " is : " .($this->var1/$this->var2).'<br>' ;
}    
function modulus(){
    echo "The modulus of ".$this->var1." and ".$this->var2 . " is : " .($this->var1%$this->var2).'<br>' ;
}    
function power(){
    echo "The power of ".$this->var1." and ".$this->var2 . " is : " .(pow($this->var1,$this->var2)).'<br>' ;
}    
function max(){
    echo "The max of ".$this->var1." and ".$this->var2 . " is : " .max($this->var1,$this->var2).'<br>' ;
}    
function min(){
    echo "The min of ".$this->var1." and ".$this->var2 . " is : " .min($this->var1,$this->var2).'<br>' ;
}    
    
}
$obj= new Calculator(5,6);
$obj->addition();
$obj->subtraction();
$obj->multiplication();
$obj->division();
$obj->modulus();
$obj->power();
$obj->max();
$obj->min();

?>