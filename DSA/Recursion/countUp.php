<?php
function countUp($n){
    if($n<0){
        return 0;
    }
    countUp($n-1);
    echo $n ." ";
}
countUp(5);
?>