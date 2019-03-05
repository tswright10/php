<!-- WC Handler - Multi Array
		By: Timothy Wright -->
<?php
  

//Exercise types

$exercise_type=array(
   0=>"Aerobic exericse",
   1=>'Sports',
   2=>'Strength training',
   3=>'Stretching/flexibility',
);

//This is where we keep our exercises

$exercise_array=
 array(
        0=>array( 0=>'Biking/cycling', 1=>'Running', 2=>'Rowing', 3=>'Stairclimber', 4=>'Walking' ),
        1=>array( 0=>'Basketball', 1=>'Ice hockey', 2=>'Soccer/football', 3=>'Table tennis' ),
        2=>array( 0=>'Calisthenics', 1=>'Weightlifting (light)', 2=>'Weightlifting (strenuous)' ),
        3=>array( 0=>'Pilates', 1=>'Tai chi', 2=>'Yoga' )
);

//This is the array we keep our duration data
$duration_array = array(
        0=>array( 0=>'5 hours and 40 minutes', 1=>'4 hours and 30 minutes', 2=>'4 hours and 10 minutes' , 3=>'5 hours'   , 4=>'10 hours and 10 minutes' ),
        1=>array( 0=>'5 hours', 1=>'5 hours', 2=>'4 hours and 30 minutes' , 3=>'10 hours and 10 minutes' ),
        2=>array( 0=>'6 hours and 30 minutes', 1=>'13 hours and 30 minutes', 2=>'7 hours and 30 minutes'  ),
        3=>array( 0=>'8 hours and 45 minutes', 1=>'10 hours and 10 minutes', 2=>'16 hours' )
);


//Now step through the exercises and see which ones they chose


//Again, here $_POST contains at least one element, i.e., submit; and $_POST['exercise'] is any array, actually, a 2d one.
if(is_array($_POST)&&count($_POST)>1 && is_array($_POST['exercise'])){
  $message='<p>';
  //Notice here $_POST['exercise'] is an 2d array. If an assciated check box is checked, the associated  value will be turned to 1.
  // A typical entry would be (key, val)=(0, 1) for exercise[0][0].
  
  //Thus, we now have a two dimensional array of checkboxes with its name being exercise type of length, in this case, 4. exercise(0=>(0=>1, 2=>1), 2=>(0=>1)) if we pick up biking, and rowing under Aerobic exercise;                   //Calisthenics    under Strength training. 

  //The following foreach loop will go through all the elments of this exercise 2d array.

  //Go through an exercise type $key_1 =0 for Aerobic exercise, when $val is an array of 5 pices, going from biking to walking.
  foreach($_POST['exercise'] as $key_1=>$val){
    //$val should be an array
    if(!is_array($val))
      $message.="Something is wrong--value not array</p><BR>";
    else {
      //Add in an heading
          $heading=$exercise_type[$key_1];
          $message.="</p?\n<p><B>$heading:</B> ";
          //We now go through this array, element by element, to see if any has been checked off
          foreach($val as $key_2=>$val_2){
            if($val_2==1){
              $exercise_name=$exercise_array[$key_1][$key_2];
              $hours=$duration_array[$key_1][$key_2];
              $message.="</p?\n<p>It would take $hours of $exercise_name to burn one pound of fat. ";
            }
         }
   }
  //Every type will begin with a new line.
  $message.="<BR><BR>";
  }
  //$message.="<\p>";
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
     <p>The workout calculator says: $message  </p>
   </Td>
  </Tr>
 </Table>   
</body>
</Html>
EOPAGE;

echo $page_str;
?>