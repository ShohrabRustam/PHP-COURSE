<?php
// function pattern($n){
// for($i=0;$i<$n;$i++){
//     for($j=0;$j<=$i;$j++){
//         echo "*";
//     }
//     echo "<br>";
// }
// }
// pattern(5);
// echo "<hr>";
// function expen
// ($base, $a) {
//     if ($a != 0)
//         return ($base * expen($base, $a - 1));
//     else
//         return 1;
// }
// echo exp(2,3);
// function patternRev($n){
//     for($i=0;$i<$n;$i++){
//         for($j=0;$j<$n;$j++){
//             if($j>=$n-1-$i){
//                 echo "*";
//             }else{
//                 echo "1 ";
//             }
//         }
//         echo "<br>";
//     }
//     }
// function pattern2($n){
//     for($i=0;$i<$n;$i++){
//         for($j=0;$j<2*$n;$j++){
//             if($j<=$i){
//                 echo "*";
//             }
//             else if($j<=(2*$n-$i-1)){
//                 echo "*";
//             }
//         else{
//             echo " ";
//         }
//     }
//     echo "<br>";
//     }
// }
// pattern2(5);

function Swaped($a,$b){
    $c=$a;
    $a=$b;
    $b=$c;
}
function bubbleSort($Arr){
    $len=count($Arr);
    for($i=0;$i<$len;$i++){
        for($j=0;$i<$len-1-$i;$j++){
            if($Arr[$j]>$Arr[$j+1]){
                Swaped($Arr[$j],$Arr[$j+1]);
            }
        }
    }
    for($i=0;$i<count($Arr);$i++){
        echo $Arr[$i]." ";
    }
}
// $A=array(2,3,4,5,6,2,1);
// bubbleSort($A);
$a=15;
$b=16;
Swaped($a,$b);
echo $a." ".$b;
?>
