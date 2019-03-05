<!-- Square Roots of Numbers 1-100
		By: Timothy Wright -->
<HTML>
<HEAD>
<TITLE>Squares of Numbers 1-100</TITLE>
</HEAD>
<BODY>
<p>Below shows the squares for numbers 1 to 100.</p>
<?php
//The Limit 
$limit=101;
//The First number to square
$to_test=1;

while(TRUE){
//Break if number being squared is greater than 100
if($to_test>$limit)
break;

//This will test if the number is less than 100, and then square it and return it to the user
while(TRUE){
//If statement to test if less than 100
if($to_test<$limit){
	echo($to_test*$to_test);
	print(" , ");
}
break;
//if
} //inside while
//Loop to the next number to be squared
$to_test++;

}  //outwhile
?>
</BODY>
</HTML>