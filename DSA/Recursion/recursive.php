<?php

//Our recursive function.

function recursive($num){
    //Print out the number.
    echo $num, '   ';
    //If the number is less or equal to 50.
    if($num < 50){
        //Call the function again. Increment number by one.
        return recursive($num + 1);
    }
    
}

//Set our start number to 1.
$startNum = 1;

//Call our recursive function.
recursive($startNum);
?>