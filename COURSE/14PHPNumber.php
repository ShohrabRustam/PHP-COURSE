<h2>PHP Number</h2>
<p>In this chapter we will look in depth into Integer, Floats and Number Strings.</p>
<h3>PHP Number</h3>
<p>One thing to notice about PHP is that it provide automatic data type conversion.</p>
<p>So, if you assign an integer value to a variable will automatically be an integer. Then, if you assign a string to the same variable, the type will change to a string.</p>
<p>This automatic conversion can sometimes break your code.</p>
<h2>PHP Integers</h2>
<p>2, 256,-256,10358,-179567 are all integer</p>
<p>An integer is a number without any decimal part.</p>
<p>An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. A value greater (or lower) than </p>
<p><b>Note:</b> Another important thing to know is that even if 4*2.5 is 10, the result is stored as float, because one of the operands is a float (2.5)/</p>
<ul>
    <p>Here are some rules for integers</p>
    <li>An integer must have at least one digit.</li>
    <li>An integer must NOT have a decimal point.</li>
    <li>An integer can be either possitive or negative.</li>
    <li>Integer can be specified in three formats:
        <li>decimal (10 based)</li>
        <li>hexadecimal(16-based-prefixed with 0x)</li>
        <li>octal (8-based-prefixed with 0)</li>
    </li>
</ul>
<p>PHP has following predefine constants for integer</p>
<ul>
    <li>PHP_INT_MAX - The largest integer supported</li>
    <li>PHP_INT_MIN - The samllest integer support</li>
    <li>PHP_INT_SIZE - The size of an integer in bytes</li>
</ul>
<p>PHP has the following functions to check if the type of a variable is integer:</p>
<ul>
    <li>is_int()</li>
    <li>is_integer()-alias of is_int()</li>
    <li>is_long() - alias of is_int()</li>
</ul>
<h5>Example</h5>
<p>check if the type of a variable is integer</p>
<?php
$x = 285;
echo '<pre>';
var_dump(is_int($x));
echo'</pre>';

$x = 9.5;
echo '<pre>';
var_dump(is_int($x));
echo'</pre>';
?>
<h5>PHP Floats</h5>
<p>A float is a number with a decimal point or a number in exponential form.</p>
<p>2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.</p>
<ul>
    <p>PHP has the following predefined constants for floats (from PHP 7.2):</p>
    <li>PHP_FLOAT_MAX - The largest representable floating point number</li>
    <li> PHP_FLOAT_MIN - The smallest representable positive floating point number </li>
    <li>PHP_FLOAT_MAX - The smallest representable negative floating point number    </li>
    <li> PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss</li>
<li>  PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0</li>
</ul>
<p>PHP has the following functions to check if the type of a variable is float </p>
<ul>
    <li>is_float()</li>
    <li>is_double() - alias of is_float()</li>
</ul>
<?php
$x = 10.365;
var_dump(is_float($x));
?>
<h2>PHP Infinity </h2>
<p>A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.</p>
<p>PHP has the following functions to check if a numeric value is finite or infinite:</p>
<ul>
    <li>is_finite()</li>
    <li>is_infinite()</li>
</ul>
<p>However, the PHP var_dump() function returns the data type and value:</p>
<h4>Example</h4>
<p>Check id the numeric values is fimite or infinite</p>
<?php
$x = 1.9e411;
var_dump($x);
?>
<h2>PHP NaN</h2>
<p>NaN stands for Not a Number</p>
<p>NaN us used for impossible mathematical operations.</p>
<ul>
    <li>is_nan()</li>
</ul>
<h4>Example</h4>
<p>Invalid calculation will return a NaN value:</p>
<?php
$x = acos(8);
var_dump($x);
?>
<h2>PHP Numerical Strings</h2>
<p>The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.</p>
<h4>Example</h4>
<p>Check if the variable is numeric:</p>
<?php
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>
<h2>PHP Casting Strings and Floats to Integers</h2>
<p>Sometimes you need to cast a numerical value into another data type.</p>
<p>The (int), (integer), or intval() function are often used to convert a value to an integer.</p>
<h4>Example</h4>
<p>Cast float and string to integer:</p>
<?php
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>