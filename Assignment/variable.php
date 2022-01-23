<?php
for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x"."<br>";
  }
}
?>
<?php
function script($a){
    $total = 0;
    for($i=0;$i<=$a;$i++){
        $total+=$i;
    }
    echo "Total is $total <br>";
}
script(30);
?>
<?php
for($x=1;$x<=5;$x++)
{
   for ($y=1;$y<=$x;$y++)
    {
	 echo "*";
	    if($y< $x)
		 {
		   echo " ";
		 }
     }
 echo "<br>";
}
?>
<?php
$n=5;
for($i=1; $i<=$n; $i++)
{
for($j=1; $j<=$i; $j++)
{
echo ' * ';
}
echo '<br>';
}
for($i=$n; $i>=1; $i--)
{
for($j=1; $j<=$i; $j++)
{
echo ' * ';
}
echo '<br> ';
}
?>
<?php
$n = 6;
$m = 1;
for($i=1;$i<=$n-1;$i++)
{
 $m*=($i+1); 
}
echo "The factorial of  $n = $m"."<br>";
?>
<?php
for($a=0; $a< 10; $a++)
 { 
   for($b=0; $b< 10; $b++)
      {
	     echo $a.$b.", "; 
      }
 }
 echo "<br>"; 
?>