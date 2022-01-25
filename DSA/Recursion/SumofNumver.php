<?php
function sumOfTotal($Array,$result=0,$n=count($Array)-1){
    if($n<0){
        return $result;
    }
    else{
        return sumOfTotal($Array,$result+=$Array[$n],$n-1);
    }
}
?>