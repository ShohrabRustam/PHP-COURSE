<?php
function abc(){
    $a=20;
    static $b=20;
    echo "the local variable is: ". $a++ .'<br>';
    echo "the static variable is: ". $b++ .'<br>';
}
echo "<h2>The first function calling </h2>";

abc();
echo "<h2>The second function calling </h2>";
abc();

?>