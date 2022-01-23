<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
$counter=0;<br>
while ($counter<10){<br>
echo $counter.'<br>';<br>
}<br>
do{<br>
    echo $counter++.'<br>';<br>
}while($counter<10);<br>
</body>
</html>
<?php
$counter=0;
while ($counter<10){
echo $counter.'<br>';
$counter++;
}
echo "<h2>The Do While loop is <br></h2>";
do{
    echo $counter++.'<br>';

}while($counter<10);
echo '<br>';

for($i=0;$i<10; $i++){
echo $i. '<br>';
}
?>