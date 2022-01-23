<?php
function sum(...$nums){
$sum =0;
foreach($nums as $n)
{
    $sum+=$n;

} 
return $sum;
 }
echo sum(1,2,3,4,5,6);

?>