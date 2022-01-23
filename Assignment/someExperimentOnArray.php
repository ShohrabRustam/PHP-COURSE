<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Some Advance Understanding An Array</title>
</head>
<body>
    <h2>Some Understanding On Array </h2>
    <?php
    // $i=0;
    $Arr = [];

    $Arr []= "This is the First Index of the Array";
    $Arr [] = "This is the Second Index of the Array";
    $Arr[] = "This is the third Index of the Array ";

    // echo $Arr[0][5]
    
    foreach($Arr  as $ArrValue)
    {
            echo $ArrValue;
        echo "<br>";
        echo "hello";
    }
    
    ?>
    
</body>
</html>