<html>
<head></head>
<body>

	<?php
	require('../db.inc');
	insert_adevent();
	function insert_adevent()
	{
		connect_and_select_db(DB_SERVER, DB_UN, DB_PWD,DB_NAME);
		$desMessage = $_POST['AdDesc'];
		$adCode = mysql_real_escape_string($_POST['AdCode']);
		$adName = mysql_real_escape_string($_POST['AdName']);
		$adStart = mysql_real_escape_string($_POST['AdStart']);
		$adEnd = mysql_real_escape_string($_POST['AdEnd']);
		$adDesc = mysql_real_escape_string($_POST['AdDesc']);
		$adEventType = mysql_real_escape_string($_POST['AdEventType']);
		$query = "Insert AdEvent (EventCode, Name, StartDate, EndDate, Description, AdType)
		values ( '$adCode', '$adName', '$adStart', '$adEnd', '$adDesc', '$adEventType')";
		$result = mysql_query($query);
		$message = "";
		$id = mysql_insert_id();
		if (!$result) 
		{
			$message = "Error in inserting AdEvent: $desMessage: ". mysql_error();
		}
		else
		{
			$message = "AdEvent $adCode: $desMessage inserted successfully.";
		}
		echo '<form method = "POST" action = "../view/new_adevent_result.php#start"> <input name = "message" type = "hidden" value = "'. htmlentities($message) . '"/>
		<script> document.getElementsByTagName("form")[0].submit()</script>';
	}
	function connect_and_select_db($server, $username, $pwd, $dbname)
	{
	// Connect to db server
		$conn = mysql_connect($server, $username, $pwd);
		if (!$conn) {
			echo "Unable to connect to DB: " . mysql_error();
			exit;
		}
	// Select the database	
		$dbh = mysql_select_db($dbname);
		if (!$dbh){
			echo "Unable to select ".$dbname.": " . mysql_error();
			exit;
		}
	}
	?>
</body>
</html>
