<?php
function merge($arr,$left,$mid,$right){
    $i=$left;
    $j=$mid+1;
    $k=$left;
    while($i<=$mid && $j<$right){
        if($arr[$i]<$arr[$j]){
            $b[$k++]=$arr[$i++];
        }else{
            $b[$k++]=$arr[$j++];
        }
    }
    if($i>$mid){
        while($j<=$right){
            $b[$k++]=$arr[$j++];
        }
    }else{
        while($i<=$mid){
            $b[$k++]=$arr[$i++];
        }
    }
    for($k=$left;$k<=$right;$k++){
        $arr[$k]=$b[$k];
    }
    return $b;
}
function merge_sort($arr,$l,$h){
    if($l<$h){
        $mid=(int)($l+$h)/2;
        merge_sort($arr,$l,$mid);
        merge_sort($arr,$mid+1,$h);
        merge($arr,$l,$mid,$h);
    }
}
$a=array(1,3,2,4,6,8,2,1,0);
var_dump(merge_sort($a,0,count($a)));
var_dump($a);
?>