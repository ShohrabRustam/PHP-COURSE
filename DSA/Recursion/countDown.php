<?php
function countDown($n){
    if($n<0){
        return 0;
    }
    echo $n ." ";
    countDown($n-1);
}
countDown(5);
?>