<!-- WC Array Check Boxes
		By: Timothy Wright -->
<Html>
<head>
<Style Type="text/css">

</Style>
</head>

<body>

 <Table Border=0 cellPadding=10 Width=100%>
  <Tr>
   <Td BGColor="F0F8FF" Align=Center VAlign=top Width=150> </Td>
   <Td BGColor="FFFFFF" Align=Left VAlign=Top Width=83%>

   <H1>Top 10 Quarterbacks in the NFL Currently Week 6 of the 2015 season</H1>
     <p>Have questions about the quarterbacks? Just click one or more of the following quarterbacks, and we'll show you what team they play for and their current qb rating (0-100)</p>

     <Form Method="POST" Action="wc_handler_arrays.php">
       <table>
          <tr>
             <td><input type="checkbox"
                        name="player[0]" value="1">&nbsp; 1. Carson Palmer<td>
          </tr><tr>
		  
             <td><input type="checkbox"
                        name="player[1]" value="1">&nbsp; 2. Tom Brady<td>
          </tr><tr>
		  
             <td><input type="checkbox"
                        name="player[2]" value="1">&nbsp; 3. Andy Dalton<td>
          </tr><tr>

             <td><input type="checkbox"
                        name="player[3]" value="1">&nbsp; 4. Aaron Rodgers<td>
          </tr><tr>

             <td><input type="checkbox"
                        name="player[4]" value="1">&nbsp; 5. Tyrod Taylor<td>
          </tr><tr>
		  
		    <td><input type="checkbox"
                        name="player[5]" value="1">&nbsp; 6. Matt Ryan<td>
          </tr><tr>
		  
		    <td><input type="checkbox"
                        name="player[6]" value="1">&nbsp; 7. Russell Wilson<td>
          </tr><tr>
		  
		    <td><input type="checkbox"
                        name="player[7]" value="1">&nbsp; 8. Derek Carr<td>
          </tr><tr>
		  
		    <td><input type="checkbox"
                        name="player[8]" value="1">&nbsp; 9. Josh McCown<td>
          </tr><tr>
		  
		    <td><input type="checkbox"
                        name="player[9]" value="1">&nbsp; 10. Teddy Bridgewater<td>
          </tr><tr>
		  
		  
		  
		  
                 <td>&nbsp;</td>
          </tr>
          <tr>
             <td><input type="submit"
                        name="submit" value="Check Quarterbacks!"></td>
          </tr>
      </table>
     </Form>
   </Td>
  </Tr>
 </Table>   
</body>

</Html>
