<?php
// function to demonstrate
// working of recursion
function printFun($test)
{
	if ($test < 1)
		return;
	else
	{
		echo(" $test ");
		
		// statement 2
		printFun($test-1);
		
		echo("$test ");
		return;
	}
}

// Driver Code
$test = 3;
printFun($test);

?>
