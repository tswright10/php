<!-- Lab Assignment 3.3 
By Timothy Wright -->

<HTML>
<HEAD>
<TITLE>Test out logical operators</TITLE>
</HEAD>
<BODY>
<?php

$first=3; 
$second=6; 
$third=9;

echo "The three numbers are:  "; 

echo $first, ',  ',$second, ' and ',$third, '.';

if ($first > $second && $first > $third) {
	echo "   The First Number is the Greatest";
} 
else if ($second > $first && $second > $third) {
	echo "   The Second Number is the Greatest.";
}
else {
	echo "   The Third Number is the Greatest.";
}
	
?>
</BODY>
</HTML>