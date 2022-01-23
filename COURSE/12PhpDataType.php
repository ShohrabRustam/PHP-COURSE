<h2>PHP Data Type </h2>
<p>Variable can store data of different types, and different data type can do things.</p>
<p>PHP supports the following data type : </p>
<ul>
    <li>String</li>
    <li>Integer</li>
    <li>Float (floating point number - also called double)</li>
    <li>Boolean</li>
    <li>Object</li>
    <li>NULL</li>
    <li>Resource</li>
</ul>
<h3>PHP String</h3>
<p>A string is a sequence of characters, like "Hello world!".</p>
<p>A string can be any text inside quotes. You can use single or double quotes :</p>
<?php
$x= "Hello World!";
$y = 'Hello World!';
echo $x;
echo '<br>';
echo $y;
?>
<h2>PHP Integer</h2>
<p>An integer data type is a non-decimal number</p>
<p>Rules of integer:</p>
<ul>
    <li>An integer must have at least one digit</li>
    <li>An integer must not have decimal point</li>
    <li>An integer can be either possitive or negative</li>
    <li>Integers can be specified in : decimal (base 10), hexadecimal(base 16), octal (base 6), or binary (base 2) notation</li>
</ul>
<p>The PHP <strong>var_dump()</strong> function returns the data type and values </p>
<?php
$x = 5585;
var_dump($x);
?>
<h2>PHP Float</h2>
<p>A float (floating point number) is a number with a decimal point or a number in exponential form.</p>
<p>In the following example <strong>var_dump()</strong> function returns the datatype as well as value </p>
<?php
$x =10.365;
var_dump($x);
?>
<h2>PHP Boolean</h2>
<p>A Boolean represents two possible states: <strong>TRUE</strong> or <strong>FALSE</strong></p>
<?php
$x = true;
$y =false;
echo $x.'<br>';
echo $y.'<br>';
?>
<p>Booleans are often used in conditional testing. You will learn more about conditional testing in a later chapter of this tutorials </p>
<h2>PHP Array</h2>
<p>An array stores multiple values in one single variable </p>
<p>In the following example <b>$cars</b> is an array. The PHP var_dump() function returns the data type and value:</p>
<?php
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
?>
<p>You will learn more about array comming lactures</p>
<h2>PHP Object</h2>

<p>Classes and Objects are two main aspects of object-oriented programming.</p>

<p>When  the individual objects are created, they inherit all the properties and behaviour from the class, but each object will have different values for the properties.</p>

<p>Let's assume we have a class named Car. A Car can have properties like model, color , etc. We can define Variable like $model, $color, and so on, to hold the values of these properties.</p>

<p>When the individual objects (Volvo, BMW, Toyota,etc) are created, they inherit all the properties and behaviours from the class, but each object will have diffferent values for the properties</p>

<p>if you create a__construct() function, PHP will automatically cakk this function when you create an object from a class</p>

<?php 
class Car{
    public $color;
    public $model;
    public function __construct($color,$model)
    {
        $this->color=$color;
        $this->model=$model;
    }
    public function message(){
        return "My car is a ". $this->color. " " .$this->model."!";
    }
}
$mycar = new Car("black","Toyota");
echo "The First car detals is : <br>";
echo '<h5>'.$mycar->message().'</h5>'.'<br>';

$mycar1 = new Car("White","BMW");
echo "The Second Car detals is : <br>";
echo '<h5>'.$mycar1->message().'</h5>';
?>
<h2>PHP NULL Value</h2>
<p>Null is a special data type which can have only one value: NULL</p>
<p>A variable of data type NULL is a variable that has no value assigned to it.</p>
<p><b>Tip:</b> if a variable is created without a value, it is automatically assigned a value of NULL.</p>
<p>Variable can also be emptied by setting the value to NULL:</p>
<?php
$x = "Hello World!";
$x = null;
var_dump($x);
?>
<h2>PHP Resource</h2>
<p>The special resource type is not an actual data type. it is the storing of a reference to function and resources external to PHP.</p>
<p>A common example of using the resource data type is a database call</p>
<h5>We will not talk about the resource type here, since it is an advance tipic</h5>
