
<html>
<head></head>
<body>

	<?php
	require('../db.inc');

	insert_teacher();

	function insert_teacher()
	{

		connect_and_select_db(DB_SERVER, DB_UN, DB_PWD,DB_NAME);
		$id = mysql_real_escape_string($_POST['itemNumber']);
		$desMessage = $_POST['itemDescription'];
		$description = mysql_real_escape_string($_POST['itemDescription']);
		$category = mysql_real_escape_string($_POST['itemCategory']);
		$department = mysql_real_escape_string($_POST['itemDepartment']);
		$purchaseCost = mysql_real_escape_string($_POST['itemPurchaseCost']);
		$retailPrice = mysql_real_escape_string($_POST['itemRetailPrice']);

		$query = "Insert Item (ItemNumber, ItemDescription, Category, DepartmentName, PurchaseCost, FullRetailPrice)
		values ( '$id', '$description', '$category', '$department', '$purchaseCost', '$retailPrice')";

		$result = mysql_query($query);

		$message = "";
		if (!$result) 
		{
			$message = "Error in inserting Item: $desMessage: ". mysql_error();
		}
		else
		{
			$message = "Item $id: $desMessage inserted successfully.";

		}
		$num = mysql_num_rows(mysql_query("SELECT * FROM Item WHERE ItemNumber = $id"));
		if($num !=0)
		{
			$message = "The item number you entered is already active. Please try again with a unique number";
		}


		echo '<form method = "POST" action = "../view/new_item_result.php#start"> <input name = "message" type = "hidden" value = "'. htmlentities($message) . '"/>
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
