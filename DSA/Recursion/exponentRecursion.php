<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function power($m,$n){
    if($n==0){
        return 1;
    }
    else{
        return $m*power($m,$n-1);
    }
}
echo power(5,6);
echo "<h1>More better way to find the power </h2>";
function betterPower($m,$n)
{
if($n==0){
    return 1;
}
else if($n%2==0) {
    return betterPower($m*$m,$n/2);
}
else{
    return $m*betterPower($m*$m,(int)($n-1)/2);
}
}
echo betterPower(5,6);
?>