<?php
function fibonacc($n)
{
    $F = array();
    for ($i = 0; $i < 100; $i++) {
       $F[$i] = -1;
    }
    if ($n <=1) {
        $F[$n] = $n;

        return $n;
    } 
    else 
    {
        if ($F[($n - 1)] == -1){
        $F[$n - 1] = fibonacc($n - 1);
        }

        if ($F[($n - 2)] == -1){
        $F[$n - 2] = fibonacc($n - 2);
        }

        $F[$n] = $F[$n - 2] + $F[$n - 1];

        // echo $F[$n-1]+$F[$n-2]." ";
        return $F[$n - 1] + $F[$n - 2];
    }
    
}
?>