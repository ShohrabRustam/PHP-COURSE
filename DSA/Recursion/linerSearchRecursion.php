<?php
function linearSearch($arr,$arraySize,$keySearch){
    if($arraySize==0){
        echo "$keySearch Present";
        return false;
    }
    else if($arr[$arraySize]==$keySearch){
        echo "$keySearch at index : ". $arraySize+1;
        return true;
    }
    else{
        return linearSearch($arr,$arraySize-1,$keySearch);
    }
}

?>