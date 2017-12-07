<?php

function show_report1_result($result, $output, $date)
{

	echo "<HTML>";
	echo "<HEAD>";
	echo '<style>
{
  box-sizing: border-box;
}



#myTable {
  border-collapse: collapse;
  width: 50%;
  border: 1px solid #ddd;
  font-size: 12px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>';
	echo "</HEAD>";
	echo "<BODY>";

	echo '
	<BR/><BR/>
	<center>
	<table id = "myTable" border = "1">
	<tr>
	<th>Ad/Event Name</th>
	<th>Promotion Name</th>
	</tr>';
	while($row = mysql_fetch_array ($result)){
		echo'
		<tr>
		<td>'.htmlspecialchars ($row [0]).'</td>
		<td>'.htmlspecialchars ($row [1]).'</td>
		</tr>';
	}

echo <<<UPTOEND

  <input type="button" value="Return to Main Menu" 
	onClick="window.location='../view/report_ui.php#start'"/>
 
UPTOEND;

	echo "</BODY>";
	echo "</HTML>";

}
?>
