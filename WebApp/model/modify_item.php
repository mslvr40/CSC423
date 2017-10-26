
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
		$number = $_POST['itemNumber'];
		$description = $_POST['itemDescription'];
		$category = $_POST['itemCategory'];
		$department = $_POST['itemDepartment'];
		$purchaseCost = $_POST['itemPurchaseCost'];
		$retailPrice = $_POST['itemRetailPrice'];
		

		$query = "UPDATE Item SET ItemDescription = '$description', Category = '$category', DepartmentName = '$department',
				PurchaseCost = '$purchaseCost', FullRetailPrice = '$retailPrice' WHERE  itemNumber = $number";
		
		

		$result = mysql_query($query);

		$message = "";

		if (!$result) 
		{
			$message = "Error in modifying Item: $number: ". mysql_error();
		}
		else
		{
			$message = "Item: $number was modified successfully.";
			
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