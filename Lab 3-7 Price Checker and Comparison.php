<!-- Test Function Lab Work 3.7
		By: Timothy Wright -->
<HTML> 
<HEAD>
<TITLE>Price Checker and Comparison</TITLE>
</HEAD>
<BODY>


<?php

//assign variables
$a = 15;
$b = 20;
$c = 25;
//Print out the costs of each item to the user
print("The cost of the items you are viewing are: ". $a . " , " . $b . " , " . $c);

//To find the highest cost we use the "max" function
print("<BR>The highest cost item is: ");
echo max($a, $b, $c);
//Next to find the min we use the min function
print("<BR>The lowest cost item is: ");
echo min($a, $b, $c);
//Next we will find the sq root of our prices
//To do this we will use the sqrt function
print("<BR>The square root of the first number 15 is: ");
	echo sqrt($a);
print("<BR>The square root of the second number 20 is: ");
	echo sqrt($b);	
print("<BR>The square root of the third number 25 is: ");
	echo sqrt($c);
//Finally the last function we will use is the exp 
print("<BR>15 raised to the power of e is: ");
echo exp(15);
print("<BR>20 raised to the power of e is: ");
echo exp(20);
print("<BR>25 raised to the power of e is: ");
echo exp(25);
?>
</BODY>
</HTML>
