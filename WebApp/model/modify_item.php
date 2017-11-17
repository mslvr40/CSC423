
<html>
<head></head>
<body>
	
	<?php
	require('../db.inc');

	insert_teacher();

	function insert_teacher()
	{

		connect_and_select_db(DB_SERVER, DB_UN, DB_PWD,DB_NAME);
		$number = $_POST['itemNumber'];
		$desMessage = $_POST['itemDescription'];
		$description = mysql_real_escape_string($_POST['itemDescription']);
		$category = mysql_real_escape_string($_POST['itemCategory']);
		$department = mysql_real_escape_string($_POST['itemDepartment']);
		$purchaseCost = mysql_real_escape_string($_POST['itemPurchaseCost']);
		$retailPrice = mysql_real_escape_string($_POST['itemRetailPrice']);
		

		$query = "UPDATE Item SET ItemDescription = '$description', Category = '$category', DepartmentName = '$department',
		PurchaseCost = '$purchaseCost', FullRetailPrice = '$retailPrice' WHERE  itemNumber = $number";
		
		

		$result = mysql_query($query);

		$message = "";

		if (!$result) 
		{
			$message = "Error in modifying Item $number: $desMessage: ". mysql_error();
		}
		else
		{
			$message = "Item $number: $desMessage: was modified successfully.";
			
		}
		
		echo '<form method = "POST" action = "../view/modify_item_result.php"> <input name = "message" type = "hidden" value = "'. htmlentities($message) . '"/>
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