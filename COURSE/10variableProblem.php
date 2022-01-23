<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable Problem</title>
</head>
<body>
    <h1 style="color: blue;background-color:aquamarine;text-align:center">Some Problem for the variable </h1>
    <?php
   echo '<h1>find the Factorial of the given number </h1>';
    $n=5;
    $ans=1;
    for($i=1;$i<=$n;$i++){
        $ans*=$i;
    }
    echo "The factorial of $n is : $ans <br>";
    echo '<h1>find the power of 2 series of the given range </h1>';
    $n=10;
    $a=0;
    $b=1;
    $c=0;
    echo '<p style="background-color:yellow;color:red;">This is the great logic atleast once you have to go through it </p>';
    for($i=0;$i<$n;$i++){
    echo $c." ";
    $a=$b;
    $c = $a+$b;
    $b=$c;
    }
    echo "<h1>The febinochi series of the given range </h1>";
    $n=10;
    $a=0;
    $b=1;
    $c=0;
    for($i=0;$i<$n;$i++){
    echo $c." ";
    $a=$b;
    $b=$c;
    $c = $a+$b;
    }
    echo "<h1>Reverse of the number using for loop </h1>";
    $rev=0;
    $n=112233;
    $m=$n;
    for( ;$m != 0; $m=(int)($m/10))   
{  
 $r = ($m % 10);  
//  echo $r.'<br>';
 $rev = ($rev * 10) + $r;  

}  
echo "The reverse of $n is $rev <br>";
echo '<h1>Using while loop check the number is prime or not </h1>';
$n=13;
$flag =1;
$i=2;
if($n<=1){
    echo "$n is not Prime number";
}
else{
while($i && $i<=sqrt($n)){
if($n<2)
{
    $flag=0;
    break;
}
else if((($n%$i)==0) && ($n!=2)){
$i=0;
$flag=0;
break;
}
else{

}
$i++;
}
if($flag ==0){
    echo "The $n is not prime ";
}
else{
    echo "The $n is Prime";
}
}
?>
    

</body>
</html>