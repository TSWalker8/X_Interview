<html
<?php
	function fibonacci($num){
		$fib=[];
		$fib[0]=0;
		$fib[1]=1;
		$check = 0;
		$i=2;
		while($check<$num){
			$check=$fib[$i-1]+$fib[$i-2];
			if($check>$num){
				break;
			}
			$fib[$i]=$check;
			$i++;
		}
		print_r($fib);
		$odd=0;
		foreach ($fib as $adder){
			if($adder%2!=0){
				$odd=$odd+$adder;
			}
		}
		print_r($odd);
		return;
	}

	fibonacci(22);

?>