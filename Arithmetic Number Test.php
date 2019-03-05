<HTML>
<HEAD>
<TITLE> Arithmetic Number Test  </TITLE>
</HEAD>

<BODY>

<BR>
<BR>
<?php
$result1=5+6*2-3+1;
$result2=5+6*(2-3)+1;
print("5+6*2-3+1=$result1, while ");
print("5+6(2-3)+1=$result2<BR><BR>" );
?>

<?php
//We now define a constant
define("myAnswer", 15);
print("The value of a constant myAnswer is <BR>");
print(myAnswer); //Outputs the value of myAnswer
print("<BR>"); //New line
define("CONSTANT", "Hello world.");
echo CONSTANT; // Outputs the value of CONSTANT"
echo Constant; // outputs "Constant" and issues a notice.
?>
</BODY>
</HTML>
