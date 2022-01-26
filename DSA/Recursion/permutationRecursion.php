<?php
function nPr($n,$r){
    if($n==$r || $r==0){
        return 1;
    }
    else{
    

        return $n*nPr($n-1,$r);
    
}
}
echo nPr(5,2);
?>