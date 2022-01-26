<?php

function taylorSeries($x,$n){
static $power=1,$fact=1;
if($n==0){
    return 1;
}else{
    $r=taylorSeries($x,$n-1);
    $power*=$x;
    $fact*=$n;
    return $r + $power/$fact;
}
}
echo taylorSeries(2,5);

echo "<h1>Better aproch to find the tailor series </h1>";
// function Taylor($x,$n){
//      $s=1;
//      for(;$n>0;$n--){
//         $s=1+ (($x/$n) *$s);

//      }
//      return $s;
// }
function Taylor($x,$n){
    static $s=1;
    if($n==0){
        return $s;
    }else{
        $s=1+ (($x/$n) *$s);
        return Taylor($x,$n-1);
}
}
echo Taylor(2,5);
?>