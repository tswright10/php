<!-- Labwork 4.2 Factorials - Post Method
		By: Timothy Wright -->

<HTML>
<HEAD>

<TITLE>Factorials</TITLE>
<Style type="text/css">

</Style>
</HEAD>
<BODY>

<p>Your number: <?php echo $_POST["Integer"]; ?> </p>

<?php
function factorial($arg){
if($arg==0)
return (1);
else return (factorial($arg-1)*$arg);
}
?>
<p>The factorial of <?php echo $_POST["Integer"]; ?> is <?php echo factorial($_POST["Integer"]); ?>
</BODY>
</HTML>