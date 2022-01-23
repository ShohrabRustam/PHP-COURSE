<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable</title>
</head>
<body>
    <h1>What is Variable ?</h1>
    <h2>Variables are "containers" for storing information.</h2>
    
    <h1>Creating (Declaring) PHP Variables</h1>
        <h2>In PHP, a variable starts with the <strong>$</strong> sign, followed by the name of the variable:</h2>
        <p>
       < <strong>?</strong>Php <br>
$txt = "Hello world!"; <br>
$x = 5; <br>
$y = 10.5; <br>
?> <br>
        </p>   
        <h1>PHP Variables</h1>
        <p>A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).</p>
        <h3>Rules for PHP variables:</h3>
        <ul>
                <li> A variable starts with the $ sign, followed by the name of the variable  </li>
                <li> A variable name must start with a letter or the underscore characters </li>
                <li>   A variable name cannot start with a number</li>
                <li> A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ ) </li>
               <li> Variable names are case-sensitive ($age and $AGE are two different variables) </li>
            </ul>
            <h2>Output Variables</h2>
            <p>The PHP echo statement is often used to output data to the screen.</p>
    <h2>PHP is a Loosely Typed language</h2>
    <p>we did not have to tell PHP which data type the variable is.</p>
    <p>In PHP 7, type declarations were added. This gives an option to specify the data type expected when declaring a function and by enabling the strict requirement , it will throw a "fatal error " on type mismatch.</p>
</body>
</html>