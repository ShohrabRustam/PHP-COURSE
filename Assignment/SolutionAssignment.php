<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>
<body>
    <h5>1. $color = array('blue ', 'green', 'black', 'white ', 'red');
Write a script which will display the following string -
The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky.
and the words 'red', 'green' and 'white' will come from $color.</h5>
    <?php
     $color = array('blue ', 'green', 'black', 'white ', 'red');
     echo "the $color[0] carpet <br>";
     echo "the $color[1] lawn <br>";
     echo "the $color[3] house <br>";
     echo "the leaden sky <br>";

    ?>
    <h5> 2. $color = array('Black', 'green', 'red')
Write a PHP script which will display the colors in the following way :
Output :
1. Black, Green, Red,
• green
• red
• white</h5>
<?php
    $color = array('Black', 'green', 'red');
    foreach($color as $i){
        echo $i.",";
    }
    echo "<ul>";
    foreach($color as $i){
        
        echo "<li> $i </li><br>";
    }
    echo "</ul>";
    
?>
<h5>3. $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the capital of the country.
Sample Output :
The capital of Netherlands is Amsterdam
The capital of Greece is Athens
The capital of Germany is Berlin</h5>
<?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
$result = array("Germany" => "Berlin", "Greece" => "Athens","Netherlands"=>"Amsterdam" );
foreach($result as $i => $res){
    echo "The Capital of the $i is $res <br>";
}
?>
<h5>4. $x = array(1, 2, 3, 4, 5);
Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.
Sample Output :
array(5) { [0]=>int(1) [1]=>int(2) [2]=>int(3) [3]=>int(4) [4]=>int(5) }
array(4) { [0]=>int(1) [1]=>int(2) [2]=>int(3) [3]=>int(5) }</h5>
<?php
$x = array(1, 2, 3, 4, 5);
echo "before delete ".var_dump($x).'<br>';
\array_splice($x, 1, 1);
echo "after delete ".var_dump($x).'<br>';
?>

<h5>
5. $color = array(4 => 'white', 6 => 'green', 11=> 'red');
Write a PHP script to get the first element of the above array.
Expected result : white
</h5>
<?php
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
// foreach($color as $i => $result)
$value = reset($color);
echo $value.'<br>';
?>
<h5>6. Write a PHP script that inserts a new item in an array in any position.
Expected Output :
Original array :
1 2 3 4 5
After inserting '$' the array is :
1 2 3 $ 4 5</h5>
<?php
$x = array(1,2,3,4,5);
$val = "$";
$pos = 3;
echo  "Original Array is : ";
for($i=0;$i<count($x);$i++)
{
    echo $x[$i]." ";
}
echo "<br>";
array_splice($x, $pos, 0, $val);
print_r($x);
echo '<br>';
?>
<h5>Write a PHP script to sort the following associative array :
array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key</h5>
<?php
$a=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
echo "Array sorted by value accending order <br>";
asort($a);
echo var_dump($a)."<br>";
echo "Array sorted by value decending order <br>";
arsort($a);
echo var_dump($a)."<br>";
echo "Array sorted by value decending order <br>";
echo var_dump($a).'<br>';

echo "sorting by key<br>";
echo "accending order <br>";
ksort($a);
echo var_dump($a)."<br>";

echo "decending order <br>";
krsort($a);
echo var_dump($a)."<br>";
?>
<h5>Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Expected Output :
Average Temperature is : 70.6
List of seven lowest temperatures : 60, 62, 63, 63, 64,
List of seven highest temperatures : 76, 78, 79, 81, 85</h5>
<?php
$a = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
sort($a);
// echo var_dump($a);
$suml=0;
$sumh=0;
$n = count($a);
for($i=0;$i<7;$i++){
$suml+=$a[$i];
$sumh+=$a[$n-1-$i];
}
$avg =($suml + $sumh)/10;
echo "Average Temperature is : $avg<br>";

echo "List of seven lowest temperatures :";
for($i=0;$i<7;$i++){
    echo $a[$i]." "; 
}
echo "<br>";
echo "List of seven highest temperatures :";
for($i=0;$i<7;$i++){
    echo $a[$n-1-$i]." "; 
}
echo "<br>";
?>

<h5>10. Write a PHP program to merge (by index) the following two arrays.
Sample arrays :
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");</h5>
<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

for($i=0;$i<count($array1);$i++){
     var_dump($array1[$i],$array2[$i]);
     echo '<br>';
}

?>
<h5>14. Write a PHP script to generate unique random numbers within a range.
Sample Range : (11, 20)
Sample Output : 17 16 13 20 14 19 18 15 11 12</h5>
<?php
$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}
echo "\n"
?>


<h5>12. Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.
Note : Do not use any PHP control statement.
Expected Output : 200,204,208,212,216,220,224,228,232,236,240,244,248</h5>

<?php
for($i=200;$i<=250;$i=$i+4){
echo $i.",";
}

?>

<h5>Write a PHP script to get the shortest/longest string length from an array.
Sample arrays : ("abcd","abc","de","hjjj","g","wer")
Expected Output : The shortest array length is 1. The longest array length is 4.</h5>
<?php
$my_array = array("abcd","abc","de","hjjj","g","wer");
function checklength($my_array)
{
$min=strlen($my_array[0]);
$max=strlen($my_array[0]);
for($i=0;$i<count($my_array);$i++){
if($min>strlen($my_array[$i])){
    $min = strlen($my_array[$i]);
}
if($max<strlen($my_array[$i])){
    $max=strlen($my_array[$i]);
}
}
echo "The shortest array length is " ,$min."<br>.";
echo "The longest array length is ",$max.'<br>.';
}
checklength($my_array);
?>
</html>