<html>
<head></head>
<body>
	
	<?php
	require('../db.inc');
	insert_teacher();
	function insert_teacher()
	{
		connect_and_select_db(DB_SERVER, DB_UN, DB_PWD,DB_NAME);
		$desMessage = $_POST['AdName'];
		$number = $_POST['AdCode'];
  		$adCode = mysql_real_escape_string($_POST['AdCode']);
		$adName = mysql_real_escape_string($_POST['AdName']);
		$adStart = mysql_real_escape_string($_POST['AdStart']);
		$adEnd = mysql_real_escape_string($_POST['AdEnd']);
		$adDesc = mysql_real_escape_string($_POST['AdDesc']);
		$adEventType = mysql_real_escape_string($_POST['AdEventType']);
		$query = "UPDATE AdEvent SET EventCode = '$adCode', Name = '$adName', StartDate = '$adStart', 
		EndDate = '$adEnd', Description = '$adDesc', AdType = '$adEventType' WHERE EventCode = '$number'";

		$result = mysql_query($query);
		$message = "";
		if (!$result) 
		{
			$message = "Error in modifying Ad Event $desMessage: $number : ". mysql_error();
		}
		else
		{
			$message = "Ad Event $desMessage: $number: was modified successfully.";
			
		}
		
		echo '<form method = "POST" action = "../view/modify_adevent_result.php#start"> <input name = "message" type = "hidden" value = "'. htmlentities($message) . '"/>
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
