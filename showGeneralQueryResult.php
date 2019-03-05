<!-- Show General Query Result
		By: Timothy Wright -->
<?php
//Include all the functions needed to print out the content of a single table
include("displayQueryResult.inc");
?>
<Html>
<Head>
<Title>The result of a Query</Title>
</Head>
<Body>
<!--A table with only one row, consisting of two cells, the first being the -->
<!--left edge, 1/6; and the other contains the form, 5/6 -->
<Table Border=0 cellPadding=10 Width=100%>
<!--Now define the row-->
<Tr>
<!--The following cell gives the left cushion edge-->
<Td BGColor="F0F8FF" Align=Center VAlign=top Width=17%> </Td>
<!--The following gives the right entry form part, completely white-->
<Td BGColor="FFFFFF" Align=Left VAlign=Top Width=83%>
<?php
//Below gets the query passed over via the post method
$query_string=$_POST["query"];
//echo the query
print("The following displays the result of a query: $query_string.<BR><BR>");
//Call the predefined function, as contained in displayQueryResult.inc,
//to print out query result, with an appropriate border
display_db_query($query_string, $global_dbh, TRUE, "Border=2");
?>
</Td>
<!--end of the row definition>
</Tr>
</Table>
</Body>
</Html>
