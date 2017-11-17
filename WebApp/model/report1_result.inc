<?php

function show_report1_result($result, $output, $date)
{

  echo "<HTML>";
  echo "<HEAD>";
  echo "</HEAD>";
  echo "<BODY>";

  
  if ($message)
  {
    if ($message != "")
       {
	 echo '<center><font color="blue">'.$message.'</font></center><br />';
       }
  }

echo '
  <BR/><BR/>
  <center>
  <table>
	<tr>
		<th>Promotion Name</th>
		<th>Event Name</th>
	</tr>'
	
	while($row = mysql_fetch_array ($result){
		echo'
		<tr>
	<td>'.htmlspecialchars ($row [0]).'</td>
	<td>'.htmlspecialchars ($row [1]).'</td>
	</tr>'
	}
	
	
	
  
  
  
  
  
  
  echo '
  <input type="button" value="Return to Main Menu" 
	onClick="window.location='../view/index.html'"/>
  </center>
'

 echo "</BODY>";
 echo "</HTML>";
}
?>
