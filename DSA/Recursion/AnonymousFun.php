<?php
// Anonymous recursive function
$factorial = function( $num ) use ( &$factorial ) {
	
	// Base condition of recursion
	if( $num == 1 )
		return 1;

	// return statement when $m is not equals to 1.
	return $factorial( $num - 1 ) * $num;
};

// Function call
 printf($factorial( 6 )) ;
?>
