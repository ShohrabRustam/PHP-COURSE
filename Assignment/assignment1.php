<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $var="PHP Tutorial"; echo $var;?></title>
</head>
<body>
    <h5>Ans 1</h5>
    <?php
        echo '<pre>';
        // echo phpinfo();
        echo '</pre>';
    ?>
    <h5>Ans 2</h5>
    <?php
    echo "Tommorrow ".'I \'ll learn PHP global variable<br>';
    echo "This is a bad command : del c: /*.* "
    ?>
    <h5>Ans 3</h5>
    <a href=""></a>
    <?php
    $var = "PHP Tutorial";
    echo "<h5>$var</h5>";
    echo "<p>PHP script to get the directory path used for temporary files., an acronym for Hypertext Preprocessor, is a widely-used open sourcegeneral-purpose scripting language. It is a cross-platform, HTML embeddedserver-side scripting language and is especially suited for web development.</p>";
    echo "<a href='https://www.javatpoint.com/php-tutorial'>Go to the PHP Tutorial</a>";
    ?>
    <h5>Ans 5</h5>
    <form method='POST'>
   <h2>Please enter your name:</h2>
 <input type="text" name="entername" placeholder="Enter Name">
 <input type="submit" value="Submit Name">
 </form>
<?php
//Retrieve name from query string and store to a local variable
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($_POST['name']){
    echo "<br> your enter name is : ".$_POST['entername'].'<br>';
    }
    else{
    echo "<br>The Name is Required<br>";
    }
}
?>
<h5>Ans 5</h5>
<?php
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
echo get_client_ip();
?>
<h5>Ans 6</h5>
<?php
echo $_SERVER['HTTP_USER_AGENT'].'<br>';
$mybrowser = get_browser();
print_r($mybrowser);
?>
<h5>Ans 7</h5>
<?php
echo basename($_SERVER["SCRIPT_FILENAME"], '.php');
?>
<h5>Ans 8</h5>
<style>
    p::first-letter{
        color: red;
    }
    .clor{
        color: blue;
        border: 1px solid black;
    }
    td{
        border: 1px solid black;
    }
</style>
<?php
$text = 'First Letter';
// $text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo '<p>'. $text.'</p>';
?>
<h5>Ans 9</h5>
<?php
    if(isset($_SERVER['HTTPS'])){
        echo "The Page is https <br>";
        echo "The Connection is secured<br>";
        }
        else{
            echo "page is http <br>";
            echo "The connection is not secured <br>";
        }
?>
<h5>Ans 10</h5>
<?php
$email = "john.doe@example.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}
?>
<h5>Ans 11</h5>
<table>
<?php
    echo '<tr><td class="clor">Salary of Mr. A is </td><td>1000$</tr></tr>';
    echo '<tr><td class = "clor">Salary of Mr. B is </td><td>1000$</tr></tr>';
    echo '<tr><td class = "clor">Salary of Mr. C is </td><td>1000$</tr></tr>';

?>
</table>
<h5>Ans 12</h5>

<?php
$code = file('http://localhost/php%20course/Assignment/assignment1.php');
foreach ($code as $line_num => $line)
 {
 	echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "\n";
 }

?>
<h5>Ans 13</h5>
<?php
$fileName = basename($_SERVER['PHP_SELF']); 
$lines = count(file($fileName)); 
echo "There are $lines lines in $fileName"."\n";
?>
<h5>Ans 14</h5>
<?php
echo "The Php version is : ",phpversion();
?>
<h5>Ans 15</h5>
<?php
// current time
  echo date('h:i:s') . "\n";
  // wake up
  sleep(5);
  //current time
  echo date('h:i:s')."\n";
?>
<h5>Ans 16</h5>
<?php
$str= 'A00';
  for ($n=0; $n<5; $n++)
{
echo ++$str ."\n";
}
?>
<h5>Ans 17</h5>
<?php
echo $err;
echo '<pre>';
var_dump(error_get_last());
echo '</pre>';
?>
<h5>Ans 18</h5>
<?php
function trinary($n){
$r = $n > 30
? "greater than 30"
: ($n > 20
? "greater than 20"
: ($n >10
? "greater than 10"
: "Input a number atleast greater than 10!")); 
echo $n." : ".$r."\n";
}
trinary(12);
?>
<h5>Ans 19</h5>
<?php
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  echo $url;
?>
<h5>Ans 20</h5>
<?php
if (version_compare(PHP_VERSION, '6.0.0') >= 0) {
echo 'I am at least PHP version 6.0.0, my version: ' . PHP_VERSION . "\n";
}
else if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
echo 'I am at least PHP version 5.3.0, my version: ' . PHP_VERSION . "\n";
}

else if (version_compare(PHP_VERSION, '5.0.0', '>=')) {
echo 'I am using PHP 5, my version: ' . PHP_VERSION . "\n";
}

else if (version_compare(PHP_VERSION, '5.0.0', '<')) {
echo 'I am using PHP 4, my version: ' . PHP_VERSION . "\n";
}
?>
<h5>Ans 21</h5>
<?php
$rd = getenv('DOCUMENT_ROOT');
echo $rd;
?> script to get the directory path used for temporary files.
<h5>Ans 22</h5>
<?php
 echo php_uname();
echo PHP_OS;
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
echo 'This is a server using Windows!';
} else {
echo 'This is a server not using Windows!';
}
?>
<h5>Ans 23 </h5>
<?php
// Create a temporary file in the temporary 
// files directory using sys_get_temp_dir()
$temp_file = tempnam(sys_get_temp_dir(), 'Tux');
echo $temp_file;
?>
<h5>Ans 24</h5>
<?php
echo "Last modified: ". date ("F d Y H:i:s.", getlastmod());
?>
<h5>An 25</h5>
<?php
$a=20;
$b=30;
echo "The value of the a = $a and the value of b = $b <br>";
$c=$a;
$a=$b;
$b=$c;
echo "after swap the value of a and b is <br>";
echo "The value of the a = $a and the value of b = $b <br>";

?>
</body>
</html>