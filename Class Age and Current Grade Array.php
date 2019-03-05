<HTML>
<HEAD>
<TITLE>Class Age and Current Grade</TITLE>
</HEAD>
<BODY>
<!-- Table Title-->
<EM>Class Age and Grade Information</EM>
<TABLE border="1" width="50%">

<!-- Creates the headings -->
<tr><th>Student</th><th>Gender</th><th>Age</th><th>Grade</th></tr>

<?php
//Create the array of students (each student represented by a letter of the alphabet) 
$students=array("A"=>array(),"B"=>array(),
"C"=>array(),"D"=>array(),"E"=>array(),"F"=>array());

//Populate the students info
$students["A"]["Gender"]="<p align=\"center\">F";
$students["A"]["Age"]="<p align=\"center\">19";
$students["A"]["Grade"]="<p align=\"center\">B";

$students["B"]["Gender"]="<p align=\"center\">M";
$students["B"]["Age"]="<p align=\"center\">21";
$students["B"]["Grade"]="<p align=\"center\">C";

$students["C"]["Gender"]="<p align=\"center\">F";
$students["C"]["Age"]="<p align=\"center\">20";
$students["C"]["Grade"]="<p align=\"center\">A";

$students["D"]["Gender"]="<p align=\"center\">F";
$students["D"]["Age"]="<p align=\"center\">19";
$students["D"]["Grade"]="<p align=\"center\">C";

$students["E"]["Gender"]="<p align=\"center\">M";
$students["E"]["Age"]="<p align=\"center\">19";
$students["E"]["Grade"]="<p align=\"center\">A";

$students["F"]["Gender"]="<p align=\"center\">F";
$students["F"]["Age"]="<p align=\"center\">20";
$students["F"]["Grade"]="<p align=\"center\">C";

$students["G"]["Gender"]="<p align=\"center\">M";
$students["G"]["Age"]="<p align=\"center\">19";
$students["G"]["Grade"]="<p align=\"center\">B";

$students["H"]["Gender"]="<p align=\"center\">F";
$students["H"]["Age"]="<p align=\"center\">21";
$students["H"]["Grade"]="<p align=\"center\">A";

$students["I"]["Gender"]="<p align=\"center\">F";
$students["I"]["Age"]="<p align=\"center\">19";
$students["I"]["Grade"]="<p align=\"center\">B";

$students["J"]["Gender"]="<p align=\"center\">M";
$students["J"]["Age"]="<p align=\"center\">19";
$students["J"]["Grade"]="<p align=\"center\">C";

$students["K"]["Gender"]="<p align=\"center\">M";
$students["K"]["Age"]="<p align=\"center\">20";
$students["K"]["Grade"]="<p align=\"center\">A";

//Populate each array with data into new array $studentinfo
foreach($students as $list => $studentinfo)
{
echo("<tr><td>$list</td>");
//Move to second layer of the loop
foreach($studentinfo as $infoList)

{
//Finally print the entire list 
echo("<td>$infoList</td>");
}
echo("</tr>");
}
?>
</TABLE>
</BODY>
</HTML>