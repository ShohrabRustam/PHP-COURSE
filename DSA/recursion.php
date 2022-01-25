<h3>Factorial of a Number Using Recursion</h3>
<?php
function factorial($n)
{
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
$n = 5;
echo "The factorial of $n is : " . factorial($n);
echo "<hr>";
?>
<h3>fibonacci number</h3>
<?php
function fibonacci($n)
{
    $F = array();
    for ($i = 0; $i < 100; $i++) {
        $F[$i] = -1;
    }
    if ($n <=1) {
        $F[$n] = $n;

        return $n;
    } 
    else 
    {
        if ($F[($n - 1)] == -1)
        $F[$n - 1] = fibonacci($n - 1);

        if ($F[($n - 2)] == -1)
        $F[$n - 2] = fibonacci($n - 2);
        $F[$n] = $F[$n - 2] + $F[$n - 1];

        return $F[$n - 1] + $F[$n - 2];
    }
    
}

$n = 5;
echo fibonacci($n);
echo "<hr>";

echo  "<h2>other</h2>";
function fibonacc($n)
{
    $F = array();
    for ($i = 0; $i < 100; $i++) {
        $F[$i] = -1;
    }
    if ($n <=1) {
        $F[$n] = $n;

        return $n;
    } 
    else 
    {
        if ($F[($n - 1)] == -1)
        $F[$n - 1] = fibonacc($n - 1);

        if ($F[($n - 2)] == -1)
        $F[$n - 2] = fibonacc($n - 2);
        $F[$n] = $F[$n - 2] + $F[$n - 1];
        echo $F[$n-1]+$F[$n-2]." ";
        return $F[$n - 1] + $F[$n - 2];
    }
    
}


?>
<h2>Recursive program to check if number is palindrome or not</h2>
<?php
function palindrome($num){
    static $temp=0;
   
    if($num==0){
        return $temp;
    }
    else{
        $temp= ($temp*10) + (int)($num%10);
        $num=(int)$num/10;
    }
    return Palindrome($num);
}
function isPalindrome($str,$start,$end){
if($start>=$end){
    echo "$str is palindrome<br>";
    return true;
}
if($str[$start]!=$str[$end-1]){
    echo "The $str is not palindrome<br>";
    return false;
}

return isPalindrome($str,$start+1,$end-1);
}
isPalindrome($str,0,strlen($str));

$n=121;
$m=Palindrome($n)/10;
if($n===$m){
    echo "The number $n is Palindrome";
}
else{
    echo "The number $n is not palindrome";
}
echo '<hr>';
$str = (string)$n;
echo "Converting String ";
isPalindrome($str,0,strlen($str));
echo "<hr>";
?>
<h3>Linear search using recursion</h3>
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
$arr=Array(2,4,6,7,8,9,0,10);
$key=6;
linearSearch($arr,count($arr),$key)

?>

<?php
// <!-- Nth odd Number -->
function odd($n){
for( $i=1;$i<=$n;$i=$i+2){
    echo $i." ";
}
}
// 
// <!-- Nth Prime  -->
// function prime($n){
//     $flag =1;
//     if($n<=1){
//         return 0;
//     }
//     else{
//     for($i=3;$i<=sqrt($n);$i=$i+2){
//         if($n%$i==0){
//             return 0;
//         }
//         }
//         return 1;
//     }
// }
function printPrime(){
    for($i=2;$i<=n;$i++){
        if(prime($i)){
            echo $i ." ";
        }
    }
}

// <!-- Number Task -->
function prime($n)
{
    $flag =1;
    if($n<=1){
        return 0;
    }
    else{
    for($i=3;$i<=sqrt($n);$i=$i+2){
        if($n%$i==0){
            return 0;
        }
        }
        return 1;
    }
}
function nearFib($n)
{
	$a=0;
    $b=1;
    $c=0;
	while ($c <= $n) {

		$a = $b;

		$b = $c;

		$c = $a + $b;
	}

	 $ans = abs($c - $n)>= abs($b - $n)? $b: $c;

	echo $ans;
}


function numberTask(){
    $a = (int)readline('Enter an integer: ');
    if($a%2==0){
        echo $a;
    }
    else if(prime($a)){
        echo $a;
    }
    else{
        nearFib($a);
    }

}

function binary($arr,$f,$l,$key)
{
    if ($f >= $l) {
         $mid = ($f - $l) / 2;

        if ($arr[$mid] == $key)
            return $mid;

        if ($arr[$mid] > $key)
            return binary($arr, $f, $mid - 1, $key);

        return binary($arr, $mid + $f, $l, $key);
    }
    return 0;
}

?>