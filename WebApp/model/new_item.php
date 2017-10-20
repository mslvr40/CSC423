
<html>
<head></head>
    <body>
    
<?php
require('../view/new_item_result.inc');
require('../db.inc');

insert_teacher();

function insert_teacher()
{

	connect_and_select_db(DB_SERVER, DB_UN, DB_PWD,DB_NAME);

	$description = $_POST['itemDescription'];
	$category = $_POST['itemCategory'];
	$department = $_POST['itemDepartment'];
	$purchaseCost = $_POST['itemPurchaseCost'];
    $retailPrice = $_POST['itemRetailPrice'];
        

	$query = "Insert Item (ItemDescription, Category, DepartmentName, PurchaseCost, FullRetailPrice)
    values ( '$description', '$category', '$department', '$purchaseCost', '$retailPrice')";

	$result = mysql_query($query);

	$message = "";

	if (!$result) 
	{
  	  $message = "Error in inserting Item: $description: ". mysql_error();
	}
	else
	{
	  $message = "Item: $description inserted successfully.";
	  
	}
  
	show_item_result($message, $description, $category, $department, $purchaseCost, $retailPrice);
			   
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