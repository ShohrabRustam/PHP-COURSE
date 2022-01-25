<?php
// Anonymous recursive function

// $func = function ($limit = NULL) use ($func) {
    function func(){
	static $current = 10;
	
	// if condition to check value of $current.
	if ($current <= 0) {
		//break the recursion
		return FALSE;
	}
	
	// Print value of $current.
	echo "$current<br>";
	
	$current--;
	
	func();
};

// Function call
func();
?>
