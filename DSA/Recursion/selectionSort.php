<?php
function minIndex($arr, $s,$e)
{
    $sml = -1223214241;
    for ($i = $s; $i < $e; $i++) {
        if ($sml > $arr[$i]) {
            $sml = $arr[$i];
            $mindex = $i;
        }
    }
    return $mindex;
}
 
function fun2($arr, $start_index, $end_index)
{
    if ($start_index >= $end_index)
        return;
    $min_index=0;
    $temp=0;
 
    // minIndex() returns index of minimum value in
    // array arr[start_index...end_index]
    $min_index = minIndex($arr, $start_index, $end_index);
 
    // swap the element at start_index and min_index
    swap($arr[$start_index], $arr[$min_index]);
 
    fun2($arr, $start_index + 1, $end_index);
}

?>