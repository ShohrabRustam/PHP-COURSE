<?php
function binary($arr,$f,$l,$key)
{
    if ($f >= $l) {
         $mid = ($f - $l) / 2;

        if ($arr[$mid] == $key)
            return $mid;

        if ($arr[$mid] > $key){
            return binary($arr, $f, $mid - 1, $key);
        }

        return binary($arr, $mid + $f, $l, $key);
    }
    return 0;
}
?>