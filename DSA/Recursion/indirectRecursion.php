<?php
function A($n){
if($n>0){
    echo $n." ";
    B($n-1);
}
return 0;
}
function B($n){
    if($n>1){
        echo $n." ";
        C(intval($n/2));
    }
}
function C($n){
    if($n>1){
        echo ($n+1)." ";
        A($n-1);
    }
    return 0;   
}
A(20);
?>