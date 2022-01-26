<?php
function fun($n){
if(n>0){
    echo $n." ";
    fun($n-1);
}
}
fun(5);
?>