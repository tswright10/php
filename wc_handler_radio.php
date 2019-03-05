<!-- WC Handler Radio Buttons
		By: Timothy Wright -->
<?php
  

//this is the array where we keep our exercise names

$name_array=array(
   0=>"Biking/cycling",
   1=>'Running',
   2=>'Soccer/football',
   3=>'Stairclimber',
   4=>'Weightlifting'
);

//This is the array we keep our duration data
$duration_array = array(
   0=>'5 hours and 40 minutes',
   1=>'4 hours and 30 minutes',
   2=>'4 hours and 30 minutes',
   3=>'5 hours',
   4=>'7 hours and 30 minutes'
);



//Now pull out the chosen exercise from the submission

if(is_array($_POST)&&count($_POST)>1){
  $exercise_value=$_POST['exercise'];
  $exercise_name=$name_array[$exercise_value];
  $hours=$duration_array[$exercise_value];
}  //Usually you'd test an array for count of 0, but 
   //here there is 1 automatic POST element, i.e., $_POST['submit'].


//Construct a sentence

if(isSet($hours)){
  $message='It would take '. $hours. ' of '. $exercise_name. ' to burn one pound of fat.';
}
else  $message='Ummm, did you pick an exercise?';

//Now lay out the message

$page_str=<<<EOPAGE
<Html>
<head>
<Style Type="text/css">
<!--
  Body, P  {color: black; font-family: verdana; font-size: 10 pt}
  H1 {color: black; font-family: arial; font-size:12 pt}
-->
</Style>
</head>

<body>
 <Table Border=0 cellPadding=10 Width=100%>
  <Tr>
   <Td BGColor="F0F8FF" Align=Center VAlign=top Width=150> </Td>
   <Td BGColor="FFFFFF" Align=Left VAlign=Top Width=83%>

   <H1>Workout calculator handler (radio buttons with arrays) </H1>
     <p>The workout calculator says, $message  </p>
   </Td>
  </Tr>
 </Table>   
</body>
</Html>
EOPAGE;

echo $page_str;
?>