<?php
function fun1($x, $y)
{
	if ($x == 0)
		return $y;
	else
		return fun1($x - 1, $x + $y);
}

?>