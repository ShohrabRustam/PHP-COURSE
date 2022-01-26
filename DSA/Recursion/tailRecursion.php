<?php
function fun($n){
if(n>0){
    fun($n-1);
    echo $n." ";
}
}
fun(5);
?>