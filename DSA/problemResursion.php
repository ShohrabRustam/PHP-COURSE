<h2>if the number is ever print the number if number is prime print the number othewise print the nearest fibonacci series number </h2>
<?php
function prime($n)
{
    $flag =1;
    if($n<=1){
        return 0;
    }
    else{
        for($i=3;$i<=sqrt($n);$i=$i+2){
            if($n%$i==0){
                return 0;
            }
        }
        return 1;
    }
}

function printPrime(){
    for($i=2;$i<=n;$i++){
        if(prime($i)){
            echo $i ." ";
        }
    }
}
function nearFib($n)
{
	$a=0;
    $b=1;
    $c=0;
	while ($c <= $n) {

		$a = $b;

		$b = $c;

		$c = $a + $b;
	}

	 $ans = abs($c - $n)>= abs($b - $n)? $b: $c;

	echo $ans;
}
function numberTask(){
    $a = (int)readline('Enter an integer: ');
    if($a%2==0){
        echo $a;
    }
    else if(prime($a)){
        echo $a;
    }
    else{
        nearFib($a);
    }

}




?>