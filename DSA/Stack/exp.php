<?php
// get understand push 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$a=array();
$a[]=5;
$a[]=6;
// var_dump($a);
array_unshift($a, 7);
var_dump($a);
?>