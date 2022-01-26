<?php
function fun($n){
    if($n>100){
        return $n-10;
    }else{
        return fun(fun($n+11));
    }
}
echo fun(95);
?>