<!-- Labwork 3.9 Test Recursion 
		By: Timothy Wright  -->

<?php
function factorialCounter($num_arg){
		$start = 1;
		 if($num_arg>0&&$start<=20){
			for($x = 1; $x <= $num_arg; $x++)
				$start = $start * $x;
			echo ("<BR>The factorial of $num_arg is $start");
			$num_arg * factorialCounter($num_arg - 1);
		}

	}
	factorialCounter(20);
	

?>
