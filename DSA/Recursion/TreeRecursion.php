<?php
function treeRecursion($n){
    if($n>0){
    echo $n." ";
    treeRecursion($n-1);
    // echo "<br>";
    treeRecursion($n-1);
    }
    return 0;
}
 treeRecursion(3);
?>