<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops 2</title>
</head>
<body>
    <h3>
    <p>
    $fruits = ['Banana','Apple','Orange'];<br>
    foreach($fruits as $fruit){<br>
        echo $fruit . '<br>';
    }
    <br>
</p>
<p>
    $fruits = ['Banana','Apple','Orange'];<br>
    echo '<h2> for each using i </h2><br>';
    foreach($fruits as $i=>$fruit){<br>
        echo $i .' ' .$fruit . '<br>';<br>
    }<br>
    </p>
    <h3>
    ,<h2>For each Result </h2>
    <?php
    $fruits = ['Banana','Apple','Orange'];
    foreach($fruits as $fruit){
        echo $fruit . '<br>';
    }
    $fruits = ['Banana','Apple','Orange'];
    echo '<h2> for each using i </h2><br>';
    foreach($fruits as $i=>$fruit){
        echo $i .' ' .$fruit . '<br>';
    }
    
    ?>
</body>
</html>