
<html>
<head></head>
<body>

	<?php
	require('../db.inc');

	insert_promotionItem();

	function insert_promotionItem()
	{

		connect_and_select_db(DB_SERVER, DB_UN, DB_PWD,DB_NAME);

		$promoCode = $_POST['promoCode'];

		$eventCode = $_POST['eventCodeInput'];

		
		$query = "Insert AdEventPromotion (EventCode, PromoCode)
		values ( '$eventCode', '$promoCode')";


		$result = mysql_query($query);

		$message = "";
		$id = mysql_insert_id();
		if (!$result) 
		{
			$message = "Error in adding Promotion to Ad/Event:  ". mysql_error();
		}
		else
		{
			$message =   "Promotion: $promoCode successfully added to Ad/Event: $eventCode";

		}


		echo '<form method = "POST" action = "../view/add_event_to_promo_result.php#start"> <input name = "message" type = "hidden" value = "'. htmlentities($message) . '"/>
		<script> document.getElementsByTagName("form")[0].submit()</script>';

	}

	function connect_and_select_db($server, $username, $pwd, $dbname){

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
