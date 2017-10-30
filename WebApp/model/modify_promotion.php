
<html>
<head></head>
<body>
	
	<?php
	require('../view/modify_item_result.inc');
	require('../db.inc');

	insert_teacher();

	function insert_teacher()
	{

		connect_and_select_db(DB_SERVER, DB_UN, DB_PWD,DB_NAME);
		$code = $_POST['promoCode'];
		$nameMessage = $_POST['name'];
		$name = mysql_real_escape_string($_POST['name']);
		$description = mysql_real_escape_string($_POST['description']);
		$amount = mysql_real_escape_string($_POST['amount']);
		$type = mysql_real_escape_string($_POST['typeOff']);
	
		

		$query = "UPDATE Promotion SET Name = '$name', Description = '$description', AmountOff = '$amount',
				PromoType = '$type' WHERE  PromoCode = '$code'";
		
		

		$result = mysql_query($query);

		$message = "";

		if (!$result) 
		{
			$message = "Error in modifying Promotion $code: $nameMessage: ". mysql_error();
		}
		else
		{
			$message = "Promotion $code: $nameMessage: was modified successfully.";
			
		}
		
		show_item_result($message);
		
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