<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Variable Scope</title>
</head>
<body>
    <h3>Php Variable Scope</h3>
    <p>In PHP, variables can be declared anywhere in the script.</p>
    <p>The scope of a variable is the part of the script where the variable can be referenced/used.</p>

    <h3>PHP has three different variable scopes:</h3>
    <ul>
        <li>local</li>
        <li>global</li>
        <li>static</li>
    </ul>
    <h3>Global and Local Scope</h3>
    <p>A variable declare <strong>outside</strong> a function has a <strong>GLOBAL SCOPE</strong> and can only be accessed outside a function:</p>
    <p>A variable declare <strong>inside</strong> a function has a <strong>LOCAL SCOPE</strong> and can only be accessed within that function:</p>


    <?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: </p>";
}
myTest();
echo "<p>Variable x outside function is: $x</p>";
?>
<h2>The global keyword </h2>
<p>The <strong>global</strong> keyword is used to access a global variable from within a function.</p>
<p>To do this, use the <strong>global</strong> keyword before the variable(inside the function) to access the variable </p>
<h4>Output</h4>
<?php
$x = 5;
$y = 10;

function myTest2() {
  global $x, $y;
  $y = $x + $y;
}

myTest2();
echo $y; // outputs 15
?>
<h4>The Other way to access the varible as a Global</h4>
<p>Php also stores all globals variable in an array called  <strong>$GLOBALS[index]</strong>. The index holds the name of the variable. This array also accessible from within function and can be update global variable directly</p>
<h4>Output</h4>
<?php
$x = 5;
$y = 20;

function myTest3() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest3();
echo $y; // outputs 15
?>
<h4>The staic keyword</h4>
<p>Normally, when a dunction is completed/executed , all of its variables are deleted. However sometimes we want a locak variable not to be deleted. we need it for further job</p>
<p>To do this, use the <strong>static</strong> keyword when you first declare the variable.</p>
<h4>Output</h4>
<?php
function mytest4(){
    static $x=0;
    echo $x.' ';
    $x++;
}
myTest4();
mytest4();
mytest4();
?>
<p>Then, each time the function is called that variable will still have the information it contains from the last time the function was called</p>
</body>
</html>