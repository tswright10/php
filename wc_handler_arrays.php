<!-- WC Handler Arrays
		By: Timothy Wright -->
<?php
  

$quarterback_array=array(
   0=>"Carson Palmer",
   1=>"Tom Brady",
   2=>"Andy Dalton",
   3=>"Aaron Rodgers",
   4=>"Tyrod Taylor",
   5=>"Matt Ryan",
   6=>"Russell Wilson",
   7=>"Derek Carr",
   8=>"Josh McCown,",
   9=>"Teddy Bridgewater",
   
);


$team_array = array(
   0=>"The Arizona Cardinals, and he is ranked 91.2",
   1=>"The New England Patriots, and he is ranked 90.3",
   2=>"The Cincinnati Bengals, and he is ranked 90.1",
   3=>"The Green Bay Packers, and he is ranked 87.4",
   4=>"The Buffalo Bills, and he is ranked 78.0",
   5=>"The Atlanta Falcons, and he is ranked 77.3",
   6=>"The Seattle Seahawks,, and he is ranked 77.0",
   7=>"The Oakland Raiders, and he is ranked 76.1",
   8=>"The Cleveland Browns, and he is ranked 75.1",
   9=>"The Minnesota Vikings, and he is ranked 74.6",
);



if(is_array($_POST)&&count($_POST)>1){
  $message="<p>";

  foreach($_POST["player"] as $key=>$val){
    if($val==1){
      $player_name=$quarterback_array[$key];
      $hours=$team_array[$key]; 
      $message.="</p?\n<p>Currently $player_name plays for $hours in the 2015 season.<BR><BR>"; 
    }
  }
}
else  $message="--(No Player Selected - Please go back and select at least one.)--";


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

   <H1>NFL Top 10 Quarterbacks Database</H1>
     <p>For the NFL 2015 Season: $message  </p>
   </Td>
  </Tr>
 </Table>   
</body>
</Html>
EOPAGE;

echo $page_str;
?>