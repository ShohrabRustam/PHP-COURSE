<?php
function decimalToBinary($n){
    static $result=0;
    if($n==0){
        return $result;
    }else{
        $result=($n%2)+$result*10;
        return decimalToBinary(intval(($n/2)));
    }
}
echo decimalToBinary(17);
?>