<?php
function fun1($n){
    if($n>0){
        return fun1($n-1)+$n;
    }
    return 0;
}
function fun2($n){
    static $x=0;
    if($n>0){
        return fun2($n-1)+$x++;
    }
    return 0;
}
?>
<?php
function factorial($n)
{
    static $i=1;
    if ($n < 1) {
        return 1;
    } else {
        return $i++ * factorial($n - 1);
    }
}
$n = 5;
echo "The factorial of $n is : " . factorial($n);
echo "<hr>";
?>
