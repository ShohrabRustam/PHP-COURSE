<?php

function abc(){
    $x= 10;
    echo "<br>Local Variable ".$x++."<br>";
    static $y =10;
    echo "<br>Static Variable ".$y++."<br>";
}
abc();
abc();
abc();
?>