<!-- Multiplication Table 
		By: Timothy Wright -->
<HTML>
<HEAD>
<TITLE>Multiplication Table Test</TITLE>
</HEAD>
<BODY>

<p>Multiplication Table Code </p>
<?php
$start_num = 1;
$end_num = 9;
?>
<H2>- Multiplication table -</H2>
<!--Table Start --> 
<TABLE border=4.5 bordercolor=Orange>
<?php
//<TR> start first row 
print("<TR>");
//First empty row 
print("<TH> </TH>");


for ($count_1 = $start_num; $count_1 <= $end_num; $count_1++)
print("<TH>$count_1</TH>");
//end of the first row
print("</TR>");
//Now the content of the table, a two level loop
for ($count_1 = $start_num; $count_1 <= $end_num; $count_1++){
//Start another row, with a specific value ranging from 1 to 10, placed
//in the first column of this row.
print("<TR><TH>$count_1</TH>");
//start yet another column
for ($count_2 = $start_num; $count_2 <= $end_num; $count_2++){
$result = $count_1 * $count_2;
//Now the content for that cell, notice .3f means that exactly three
//digits after the decimal point.
if($count_2>$count_1) {
	print(" ");
}
else
printf("<TD>%.3f</TD>",
$result); 
}

//end of this row, and going back to the beginning of the second level loop
print("</TR>\n");
}
?>

</TABLE>
</BODY>
</HTML>