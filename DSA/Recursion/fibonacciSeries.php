<?php
function Fib($n){
    if($n==0){
        return 0;
    }
    else if($n==1 || $n==2){
        return 1;
    }
    else{
        return Fib($n-1) + Fib($n-2);
    }
}
echo Fib(5);
?>