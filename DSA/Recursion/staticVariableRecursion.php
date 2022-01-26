<?php
function fun($n){
    if($n>0){
        return fun($n-1)+$n;
    }
    else{
        return 0;
    }
}
echo fun (5)."<br><hr>";
// static variable 
// using static variabl
function fun2($n){
    static $x=1;
    if($n>0){
        return fun2($n-1)+ $x++;
    }
    return 0;
}
echo fun2(5);
?>