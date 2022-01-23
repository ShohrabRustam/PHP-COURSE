<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2</title>
</head>

<body>
    <h5>Write a function to calculate the factorial of a number (a non-negative integer). The function
        accepts the number as an argument.</h5>
    <?php
    function fact($a)
    {
        $result = 1;
        for ($i = 1; $i <= $a; $i++) {
            $result *= $i;
        }
        echo "The fact of $a is : $result <br>";
    }
    fact(5);
    ?>
    <h5>Write a function to check whether a number is prime or not.</h5>
    <?php

    function check_prime($num)
    {
        if ($num == 1)
            return 0;
        for ($i = 2; $i <= $num / 2; $i++) {
            if ($num % $i == 0)
                return 0;
        }
        return 1;
    }
    $num = 47;
    $flag_val = check_prime($num);
    if ($flag_val == 1)
        echo "$num is a prime number";
    else
        echo "$num is a non-prime number"
    ?>
    <h5>Write a function to reverse a string.</h5>
    <?php
    function reverse($str)
    {

        $result = strrev($str);
        echo "The reverse of <strong> $str </strong> is :" . "</strong> <strong> $result</strong></h2>";
    }
    reverse("Welcome to portal");
    ?>

    <h5>Write a function to sort an array.</h5>
    <?php
    function sortArray()
    {
        $inputArray = array(19, 5, 90, 4, 5);
        $outArray = array();
        for ($x = 1; $x <= 100; $x++) {
            if (in_array($x, $inputArray)) {
                array_push($outArray, $x);
            }
        }
        return $outArray;
    }
    $sortArray = sortArray();
    foreach ($sortArray as $value) {
        echo $value . "<br />";
    }

    ?>
    <h5>Write a PHP function that checks whether a string is all lowercase</h5>
    <?php
    function lowercase($str1)
    {
        $flag =0;
        for ($sc = 0; $sc < strlen($str1); $sc++) {
            if (ord($str1[$sc]) >= ord('A') && ord($str1[$sc]) <= ord('Z')) 
            {
                $flag =1;
                break;
            }
        }
        if($flag ==1){
            echo "The string <strong> $str1 </strong> is not in lower case ";
        }
        else{
            echo "The string <strong> $str1 </strong> is in lower case ";
        }
    }
    echo lowercase("hello i am rustam");

    ?>
    <h5>6Write a PHP fu. nction that checks whether a passed string is a palindrome or not?</h5>
    <?php
    function palindrome($str){
        if($str==strrev($str)){
            echo "The string $str is palindrome";
        }
        else{
            echo "The string $str is not palindrome";

        }
    }
    palindrome("LALAL");
    echo '<br>';
    palindrome("Rustam");
    ?>
</body>

</html>