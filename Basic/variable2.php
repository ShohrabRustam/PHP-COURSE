<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable </title>
</head>
<body>
    <h1>Some function for variable</h1>
    <ul>
        <li>echo gettype($variable)</li><br>
        <li>var_demp($var1,$var2,....)</li>
    </ul>
    <h2>Using gettype()</h2>
    <?php
        $name = "Rustam";
        $age = 21;
         $height = 5.8;
        $isMale = true;
        $salary = null ;
        global $c;
        // $name = 11;
        echo gettype($name)."<br>";
        echo gettype($age)."<br>";
        echo gettype($height)."<br>";
        echo gettype($isMale)."<br>";
        echo gettype($salary)."<br>"; 
        echo "<h2> using the var_dump()</h2><br>";
        echo var_dump($name,$age,$height,$isMale,$salary)."<br>";
        echo "<h2> isstring(var) </h2><br>";
        echo "<h2> declared or not use <strong>isset()</strong></h2><br>";
        echo "<h2> Constant define('PI',3.14)</h2><br>";
        define('PI',3.14);
        echo PI."<br>"; 
 
    ?>
    
</body>
</html>