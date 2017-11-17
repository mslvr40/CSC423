<?php

function show_report1_result($result, $output, $date)
{

	echo "<HTML>";
	echo "<HEAD>";
	echo "</HEAD>";
	echo "<BODY>";

	echo "<script type='text/javascript'>alert('a');</script>";
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
	<table border = "2">
	<tr>
	<th>Promotion Name</th>
	<th>Event Name</th>
	</tr>';
	echo "<script type='text/javascript'>alert('b');</script>";
	while($row = mysql_fetch_array ($result)){
		echo'
		<tr>
		<td>'.htmlspecialchars ($row [0]).'</td>
		<td>'.htmlspecialchars ($row [1]).'</td>
		</tr>
		<script type="text/javascript">alert("c");</script>';
	}









	echo <<<UPTOEND
	<BR/><BR/>
	<center>
	<input type="button" value="Return to Main Menu" 
	onClick="window.location='../view/index.html'"/>
	</center>
	UPTOEND;

	echo "</BODY>";
	echo "</HTML>";
}
?>