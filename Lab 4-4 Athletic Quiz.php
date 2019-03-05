<?php
/******************************************************
* "How athletic are you?. *

******************************************************/
//testQuiz.php - How athletic are you
// Lab Work 4.4 
//By: Timothy Wright

//--------------------------------------
$header_str = <<<EOHEADER
<HTML
<HEAD>
<Style Type="text/css">
<!--
Body, P, TD {color: black; font-family: verdana; font-size: 9 pt}
H1 {color: black; font-family:arial; font-size: 12pt}
-->
</Style>
</HEAD>
<Body>
<Table Border=0 CellPadding=10 Width=100%>
<Tr>
<!--the width of the light blue stuff-->
<Td BGColor="#F0F8FF" Align=Center VAlign=top Width=150>
</Td>
<!--The second item, the main panel-->
<Td BGColor="FFFFFF" Align=Left VAlign=Top width=83%>
<table cellspacing=0 cellpadding=20 border=0 width="530">
<tr>
<td valign=top>
EOHEADER;


$footer_str=<<< EOFOOTER
</td>
</tr>
</table>
</Td>
</Tr>
</Table>
</Body>
</HTML>
EOFOOTER;

$quiz_str=<<< EOQUIZ
<h2>How athletic or physically active are you?</h2>
<h3>Read the following questions and check the box for yes or leave it blank for no</h3>
<form action="testQuiz.php" method="POST">
<br /><br />

1. Do you enjoy running often?<br />
Yes <Input type="checkbox" name="affirm[0]" value="1"/>
<!--one spacing -->
<br /><br />
2. Do you participate in cardio activity more then 4 times a week?<br />
Yes <Input type="checkbox" name="affirm[1]" value="1"/>
<br /><br />
3. Do you have a gym membership or home/school gym you go to?<br />
Yes <Input type="checkbox" name="affirm[2]" value="1"/>
<br /><br />
4. Have you participated in group cardio training?<br />
Yes <Input type="checkbox" name="affirm[3]" value="1"/>
<br /><br />
5. Do you lift weights or do any other strength building activity?<br />
Yes <Input type="checkbox" name="affirm[4]" value="1"/>
<br /><br />
6. Do you lift weights/strength train more than 4 times a week?<br />
Yes <Input type="checkbox" name="affirm[5]" value="1"/>
<br /><br />
7. Are you a healthy eater for the most part?<br />
Yes <Input type="checkbox" name="affirm[6]" value="1"/>

<br /><br />
8. Do you go to sleep early in order to wake up for a early morning workout?<br />
Yes <Input type="checkbox" name="affirm[7]" value="1"/>
<br /><br />
9. Have you participated on a sports team?<br />
Yes <Input type="checkbox" name="affirm[8]" value="1"/>
<br /><br />
10. For cardio training do you do any of the following: run, bike or swim?<br />
Yes <Input type="checkbox" name="affirm[9]" value="1"/>
<br /><br />
<input type ="submit" name="submit" value="Evaluate">
</form>
EOQUIZ;

echo $header_str;

if (!isSet($_POST["submit"])){

echo $quiz_str;
}

elseif ($_POST["submit"]=="Evaluate"){

$num_affirm=count($_POST["affirm"]);

if($num_affirm>=0 && $num_affirm<=3)
$result_str="<p>You are not the very physical type</p>\n";
elseif ($num_affirm>=4 && $num_affirm<=6)
$result_str= "<p>You are quite active, continue to work hard.</p>\n";
elseif ($num_affirm>=7 && $num_affirm<=8)
$result_str= "<p>You are active but you have not achieved professional level.</p>\n";
elseif ($num_affirm>=9 && $num_affirm<=10)
$result_str= "<p>You can consider yourself amongst the professionals!</p>\n";

echo $result_str;
}


echo $footer_str;
?>
