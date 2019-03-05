<!-- TestStringFunction Lab Work 3.6 (2)
		By: Timothy Wright  -->
		
<Html>
<head>
<Title>Test String Function</Title>
</head>
<body>
<p>--- (1)The first string operator is the inspection operator. ---</p>
<?php
$short_string="This String in my lab has 39 characters";
echo("\"$short_string\"<BR>");
print("It indeed does have " . strlen($short_string) . " characters!!");
?>
<p>--- (2)The next string operator is the "strpos" function, which returns the position of a substring. ---</p>

<?php
$twister = "Computer Science is the best major";
echo("\"$twister\"<BR>");
print("location of ’S’ is:  " . strpos($twister, "S"));
print("  and the location of ’S’ in the reversed side is:  " . strrpos($twister, "S"));
print("...  The Location of ’best’ in the reversed side is:  " . strrpos($twister, "best"));
print("  and the location of ’best’ is:  " . strpos($twister, "best"));
?>
<p>--- (3)The next operator changes the content of a string ---</p>
<!-- The string operator will replace the index of the charterer
	in the given string 1234567 and replace the 4th and 5th index with A and BR
	respectfully --> 
<?php
$myString="1234567";
echo("\"$myString\"<BR>");
$myString[5]="A";
echo("\"$myString\"<BR>");
$myString[4]="B";
echo("\"$myString\"<BR>");
?>
<p>--- (4)The next operator is the comparator function ---</p>
<?php
$s1="There";
$s2="Their";
$s3="They're";
$s4="There";
echo("\"$s1\"<BR>");
echo("\"$s2\"<BR>");
echo("\"$s3\"<BR>");
echo("\"$s4\"<BR>");
if(!strcmp($s1, $s1))
print("<BR>$s1 ". "is the same as: ". "$s1");
else print("<BR>$s1 ". "is not the same as:   ". "$s1");
if(strcasecmp($s1, $s2))
print("<BR>$s1 ". "is the same as: ". "$s2");
else print("<BR>$s1 ". "is not the same as:   ". "$s2");
if(!strcmp($s1, $s3))
print("<BR>$s1 ". "is the same as: ". "$s3");
else print("<BR>$s1 ". "is not the same as:   ". "$s3");
if(!strcmp($s1, $s4))
print("<BR>$s1 ". "is the same as: ". "$s4");
else print("<BR>$s1 ". "is not the same as:   ". "$s4");
?>

<p>--- (5)The next operator is the searching function, "strstr" which contains the first occurence of a target. ---</p>
<?php
$s1="computerscienceisawesome";
$s2="science";
$s3="is";
print("Result of looking for $s2: ". strstr($s1, $s2). "<BR>");
print("Result of looking for $s3: ". strstr($s1, $s2). "<BR>");
?>
<p>--- (6)The next operator is the string slicing function ---</p>
<?php
$s1="Computer Science is great major here at PSU<BR>";
print $s1;
print ( substr($s1, 23));
print (substr($s1, 5, 13))."<BR>";

$alphabetTest="abcdefghijklmnopqrstuvwxyz";
echo "<BR>Given the following string: ". "$alphabetTest<BR><BR>";
print("(5: )" . substr($alphabetTest, 5). "<BR>");
print("(-5: )" . substr($alphabetTest, -5). "<BR>");
print("(5, 4: )" . substr($alphabetTest, 5, 4). "<BR>");
print("(5, -4: )" . substr($alphabetTest, 5, -4). "<BR>");
print("(-5, -4: )" . substr($alphabetTest, -5, -4). "<BR>");
print("(-5, 4: )" . substr($alphabetTest, -5, 4). "<BR>");
?>
<p>--- (7)The next step is comparing the strstr, substr and strpos</p>
<?php
$containing="Computerscienceisawesome";
$contained="is";
print("Result of strstr($containing, $contained): "
. strstr($containing, $contained). "<BR>");

print("<BR>Result of substr($containing, strpos($containing, $contained): "
. substr($containing, strpos($containing, $contained)). "<BR>");
?>

<p>--- (8)The string clean up function is the next operator used ---</p>
<?php
$original="    Computer Science is awesome      ";
$chopped=chop($original);
$ltrimmed=ltrim($original);
$trimmed=trim($original);
print("<BR>The original is: " . "$original");
print("<BR>Its length is: " . strlen($original));
print("<BR>The chopped version is: " . "$chopped");
print("<BR>Its length is: " . strlen($chopped));
print("<BR>The ltrimmed version is: " . "$ltrimmed");
print("<BR>Its length is: " . strlen($ltrimmed));
print("<BR>The trimmed version is: " . "$trimmed");
print("<BR>Its length is: " . strlen($trimmed));
?>
<p>--- (9)More String clean up functions ---</p>

<?php
$firstEdition="New Hampshire is similar to Vermont in at least one way.";
$secondEdition=str_replace("Vermont", "Maine", $firstEdition);
$thirdEdition=str_replace("New Hampshire", "Mass", $secondEdition);
print($firstEdition . "<BR>");
print($secondEdition . "<BR>");
print($thirdEdition . "<BR>");
$trickyString="ABA is part of ABABA";
$maybeTricked=str_replace("ABA", "DEF", $trickyString);
print("<BR>Substitution result is '$maybeTricked'<BR>");
?>

<p>--- (10)Some more functions we can use are; "substr_replace","strrev" and "str_repeat" ---</p>
</p>
<?php
print(substr_replace("1234567", "ABA", 3, 4));
echo "<BR>";
print(strrev("1234567"));
echo "<BR>";
print(str_repeat("1234567", 5));
?>
<p>--- (11)The next operators we can use are some case related functions such as; "strtolower","strtoupper","ucfirst" and "ucwords" ---</p>
<?php
$original="Computer Science is the greatest major";
echo strtolower($original);
$s1="Computer Science!!";
echo "<BR><B>strtoupper($s1)</B><BR>";
$s2="Here at plymouth state we have a great computer program";
echo ucfirst($s2);
$s3="Computer Science";
echo "<BR>While $s3 is a great major, ". ucwords($s3) . " is also very challenging.<BR>";
sprintf("<BR>While $s3 is a great major, ". ucwords($s3) . " is also very challenging.<BR>");
?>
<p>--- (12)The next operator is the quotemeta function ---</p>
<?php
$literalString="These characters ($ *) are very special to me \n<BR>";
$qmString=quotemeta($literalString);
echo $qmString;
?>

<p>--- (13)Test out the addslashes(string) and stripslashes functions. ---</p>

<?php
	print("<BR>What is your name?");
	$str = "<BR>What 'is your' 'name ?";
	echo addslashes($str);
	echo stripslashes($str);
?>
<!-- Notice the differences in the numbers and how many decimal points they will display. --> 
<pre>
<?php
$value=3.1415926;
printf("%f, %10f, %-010f, %2.2f\n", $value, $value, $value, $value);
?>
</pre>
</body>
</Html>
