<h2>PHP String </h2>
<p>A string is a sequence of characters, like "Hello World!"</p>
<h2>PHP String Functions</h2>
<p>In this chapter we will look at some commonly used functions to maniplate strings </p>
<h2>strlen() - Return the Length of the String</h2>
<p>The PHP <b>strlen()</b> function returns the length of a string </p>
<h3>Example</h3>
<p>Return the length of the string "Hello World"</p>
<?php
$word = "Hello World!";
echo "the length of the $word using function is : strlen($word)<br>";
?>
<h2>str_word_count() - Count words in a String</h2>
<p>The PHP <b>str_word_count()</b> function counts the number of words in a string</p>
<?php
$sentence = "Hello I am Rustam";
echo "This string <b>$sentence</b> have ".  str_word_count($sentence) ." words"; 
?>
<h2>strrev() - Reverse a String</h2>
<p>The PHP <b>strrev()</b> function reverse a string </p>
 <h5>Example</h5>
 <p>Reverse the string "Hello I am Rustam"</p>
 <?php
 $str = "Hello I am Rustam";
 echo "The reverse of <b>$str</b> is <b>". strrev($str)."</b>";
 ?>
 <h2>strpos() - Search For a Text Within a String</h2>
 <p>The PHP <b>strpos()</b> function searches for a specific text within a string. if a match is found, the function returns the character possition of the first match, if no match found it will return false.</p>
 <h5>Example</h5>
 <p>Search for the text word "Rustam" in the String "Hello Rustam"</p>
 <?php 
 $str = "Hello Rustam";
 $word = "Rustam";
 echo strpos($str,$word);
 ?>
 <h2>str_replace() - Replace Text Within a String </h2>
 <p>The PHP <b>str_replace()</b> function replace some character with some other character in a string </p>
 <?php 
 $searchWord="Shohrab";
 $replaceWord = "Armaan";
 $str = "Shohrab Rustam";
 echo "My string is before replace <b>".$str.'</b><br>';
 echo "after replace <b>".str_replace($searchWord,$replaceWord,$str) .'</b>';

 ?>