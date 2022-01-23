<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
<h2>Declare Array</h2>
    <ul>
        <li>$fruits = ["Banana", "Apple", "Orange"]</li>
        <li>echo <pre>echo var_dump($fruits) echo </pre></li>
    </ul>
    <?php
            $fruits = ["Banana", "Apple", "Orange"];
            echo '<pre>';
                     var_dump($fruits)."<br>"; 
            echo '</pre>';
    ?>

    <h2>Some Operation on array</h2>
    <ul>
        <li>Sort(arrayname)</li><br>
        <li>rsort(arrayname)</li><br>
        <li>array_push(arrayname,element)</li><br>
        <li>array_unshift(arrayname, element)</li><br>
        <li>array_shift(arrayname)</li><br>
        <li>array_pop(arrayname)</li><br>
        <li>count(arrayname)</li><br>
        <li>$string = "Bnana,Apple,Peach"</li><br>
        <li>explode(',',$string)</li><br>
        <li>implode("&",$fruits)</li><br>
    </ul>
<h2>Associate Arrays</h2>

<ul>
    <li>$person=[</li>
    <li>'name'=>'Brad',</li>
    <li>'surname'=> 'Traversy',</li>
    <li>'age' => 15</li>
    <li>'hobbies'=>['Tennis','Video Games'],</li>
    <li>];</li>

</ul>
<?php
$person=
[
'name'=>'Brad',
'surname'=> 'Traversy',
'age' => 15,
'hobbies'=>['Tennis','Video Games'],
];
?>
</body>
</html>