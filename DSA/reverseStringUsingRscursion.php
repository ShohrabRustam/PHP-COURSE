<?php
function reverseString($str){
    if (($str == null) ||
    (strlen($str) <= 1))
echo ($str);

else
{
    echo ($str[strlen($str) - 1]);
    reverseString(substr($str, 0, (strlen($str) - 1)));
}

}
?>