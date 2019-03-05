<!-- Test String Operations Lab work 3.6
		By: Timothy Wright -->
		
<HTML>
<head>
<Title>Test String Operations</Title>
</head>
<body>
<p>--- This lab will test the concatenation operator. ---</p>

<?php

$first_statement="My favorite sport is football, ";
$second_statement=" And my favorite team is the New England Patriots.";
print($first_statement . "..." . $second_statement);
?>
<p>--- Another way to concatenate uses the ".=" ---</p>
<?php
$first_statement="My favorite sport is football,";
$second_statement=" And my favorite team is the New England Patriots.";
$first_statement.= $second_statement;
print($first_statement);
?>
<p>--- The final way to concatenate uses: ---</p>
<?php
$string_variable= <<<EOT
My favorite sport is football, 
And my favorite team is the New England Patriots. 
This is the final line about my favorite sport and team.
EOT;
echo $string_variable;
?>
<p>--- To construct a simple form, the heredoc feature may be used. ---</p>
<?php
$first="Timothy";
echo <<<ENDOFFORM
<Form Method=Post Action="{$_SERVER["PHP_SELF"]}">
<Input Type=text Name=FirstName Value=$first>
<Input Type=SUBMIT Name=SUBMIT Value=SUBMIT>
</Form>

ENDOFFORM;
?>
</body>
</HTML>