<h2>With PHP , There are two basic way to get output echo and print</h2>
<p>In this practice session we use echo or print in almost every example. So this chapter contain a little more info about those two output statements. </p>
<h2>PHP echo and print Statements</h2>
<p>echo and print are more and less the same. They are both used to output data to the screen.</p><br>
<p>The differences are small echo has no return value while print has a return value of 1 so it can be used expressions.</p>
<p>echo can take multiple parameters (althrough such usage is rare) while print can take one argument. echo is marginally faster than print.</p>
<h2>The PHP echo Statement</h2>
<p>The echo statement can be used with or without parentheses <b>echo</b> or <b>echo()</b></p>
<h4>Display Text</h4>
<p>The following example shows how to output text with the echo command (notice that the text can contain HTML markup)</p>
<?php
echo '<h4>PHP is Fun </h4>';
echo "Hello World! <br>";
echo "I'm about to learn PHP<br>";
echo "This ", "string ", "was ","made ","with multiple parameter.<br>";
echo '<h2>The following example of echo statements</h2>';
$txt1 = "Learn PHP";
$txt2 = "Learning hub";
$x=5;
$y=4;
echo "<h3>$txt2</h3>";
echo "Study  PHP at $txt2 <br>";
echo $x+$y;
echo '<h2>The PHP print Statement</h2>';
echo '<p>The print statemnt can be used with or without parentheses: print or print().</p>';
echo '<h4>Display Text</h4>';
echo '<p>The following example shows how to output text with the <b>print</b> command (notice that the text can contain HTML markup)</p>';
print "<h2>PHP is fun </h2>";
print("Hello World!<br>");
print "I'm about to learn PHP!";
echo '<h4>Display Variable</h4>';
echo '<p>The following example shows how to output text and variable with the <b>print</b> statement.</p>';
$txt1 = "Learn PHP";
$txt2 = "Learning hub";
$x=5;
$y=4;
print "<h3>$txt2</h3>";
print "Study  PHP at $txt2 <br>";
print $x+$y;
?>
