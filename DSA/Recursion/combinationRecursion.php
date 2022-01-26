<?php
    function nCr($n,$r){
        $num=$r;
        if($n==$r || $r==0){
            return 1;
        }
        // by pascal's triangle 
        return nCr($n-1,$r-1)+ nCr($n-1,$r);
    }
    echo nCr(5,4);
?>