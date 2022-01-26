<?php
$a=25;
$salary = function($a)
{
    echo "The salary is : " . $a*20;
}
$var = function($a) use ($salary){
    echo "The age and salary is : " .$a ,$salary;
};
echo $var;
?>