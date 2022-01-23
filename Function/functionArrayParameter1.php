<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArrayParametr</title>
</head>
<body>
    <p>
    function sum(...$nums){<br>
$sum =0;<br>
return array_reduce($nums, fn($carry,$n)=>$carry + $n);<br>

 }<br>
echo sum(1,2,3,4,5,6);<br>
    </p>
    <br>
    <h2>Output</h2>
<?php
function sum(...$nums){
$sum =0;
return array_reduce($nums, fn($carry,$n)=>$carry + $n);

 }
echo sum(1,2,3,4,5,6);

?>
</body>
</html>