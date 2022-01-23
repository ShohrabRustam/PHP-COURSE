<h2>PHP Math</h2>
<p>PHP has a set of math functions that allows you to perform mathematical tasks on numbers.</p>
<h2>PHP pi() Function</h2>
<p>The <b>pi()</b> function returns the value of PI.</p>
<h4>Example</h4>
<?php
echo(pi()); // returns 3.1415926535898
?>
<h2>PHP min() and max() Functions</h2>
<p>The <b>min()</b> and <b>max()</b> functions can be used to find the lowest or highest value in a list of arguments:</p>
<h4>Example</h4>
<?php
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150
?>
<h2>PHP abs() Function</h2>
<p>The <b>abs()</b> function returns the absolute (positive) value of a number:</p>
<?php
echo(abs(-6.7));  // returns 6.7
?>
<h2>PHP sqrt() Function</h2>
<p>The <b>sqrt()</b>  function returns the square root of a number:</p>
<h4>Example</h4>
<?php
echo(sqrt(64));  // returns 8
?>
<h2>PHP round() Function</h2>
<p>The <b>round()</b> function rounds a floating-point number to its nearest integer:</p>
<?php
echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0
?>
<h2>Random Numbers</h2>
<p>The <b>rand()</b>  function generates a random number:</p>
<h4>Example</h4>
<?php
echo(rand());
?>
<p>To get more control over the random number, you can add the optional min and max parameters to specify the lowest integer and the highest integer to be returned.</p>
<p>For example, if you want a random integer between 10 and 100 (inclusive), use rand(10, 100):</p>
<h4>Example</h4>
<?php
echo(rand(10, 100));
?>
