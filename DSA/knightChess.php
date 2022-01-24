<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
define ("n",8);
$r=8;
$c=8;
$chess[n][n]=array();
for($i=0;$i<n;$i++){
    for($j=0;$j<n;$j++){
        $chess[$i][$j]=0;
    }
}

$move=1;

function printKnightTour($chess,$r,$c,$move):bool
{
    if($r<0||$c<0||$r>=n||$c>=n||$chess[$r][$c]>0 )
    {
        // return;
    }
    else if($move==n*n){
        return true;
    
    }
    else{
    $chess[$r][$c]=$move;

    printKnightTour($chess,$r-2,$c+1,$move++);
    printKnightTour($chess,$r-1,$c+2,$move++);
    printKnightTour($chess,$r+1,$c+2,$move++);
    printKnightTour($chess,$r+2,$c+1,$move++);
    printKnightTour($chess,$r+2,$c-1,$move++);
    printKnightTour($chess,$r+1,$c-2,$move++);
    printKnightTour($chess,$r-1,$c-2,$move++);
    printKnightTour($chess,$r-2,$c-1,$move++);
    }
    return false;
}

if(printKnightTour($chess,5,5,1)){
echo "Solution Possible";
}
else{
    echo "Solution is not possible";
}
?>