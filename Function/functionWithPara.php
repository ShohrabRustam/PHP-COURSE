<?php
echo "first function of name <br>";
function hello($name){
    echo "My name is : ".$name.'<br>';
}
hello ("Rustam");
hello("shohrab ");
echo '<br>'."Second Function for addition <br>";
function sum($a,$b){
return $a+$b;

}
echo sum(15,18);
echo'<br>';
echo sum(90,190);
?>