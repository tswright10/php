<!-- Say My ABC
		By: Timothy Wright -->
<?php
function SayMyABC3(){
//The following $count is initialized only once when the function is
//called for the first time.
static $count=0;
//$limit is local, it is set to the current value of $count plus 10.
$limit=$count+10;
//When the function is called first time, $limit is set to 10.
//When it is called a second time, it is set to 20
while ($count<$limit){
print(chr(ord("A")+$count));
$count++;
}
//When the loop ends, $count contains the same value as that for $limit
//Thus, for the first time, it is 10, then 20
print("<BR>Now, I know $count letters");
}
//The following $count is different from the $count ad defined in SayMyABC3
$count=0;
SayMyABC3();
//This $count still contains 0
$count++;
//Now, $count contains 1
print("Now, we have made $count calls .<BR>");
SayMyABC3();
$count++;
//It contains 2
print("Now, we have made $count calls .<BR>");
?>