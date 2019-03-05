<!-- Labwork 4.1.2 Factorials - Get Method
		By: Timothy Wright -->

<HTML>
<HEAD>

<TITLE>Factorials</TITLE>
<Style type="text/css">

</Style>
</HEAD>
<BODY>

<p>Your number: <?php echo $_GET["Integer"]; ?> </p>

<?php
function factorial($arg){
if($arg==0)
return (1);
else return (factorial($arg-1)*$arg);
}
?>
<p>The factorial of <?php echo $_GET["Integer"]; ?> is <?php echo factorial($_GET["Integer"]); ?>
</BODY>
</HTML>