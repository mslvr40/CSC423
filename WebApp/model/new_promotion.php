<html>
<head></head>
<body>
	<?php
	require('../db.inc');

	insert_promo();

	function insert_promo()
	{

		connect_and_select_db(DB_SERVER, DB_UN, DB_PWD, DB_NAME);
		$id = mysql_real_escape_string($_POST['promoCode']);
		$nameMessage = $_POST['promoName'];
		$name = mysql_real_escape_string($_POST['promoName']);
		$amount = mysql_real_escape_string($_POST['promoAmount']);
		$type = mysql_real_escape_string($_POST['typeOff']);
		$description = mysql_real_escape_string($_POST['promoDescription']);

		$query = "Insert Promotion (Name, Description, AmountOff, PromoType)
		values ('$name', '$description', '$amount', '$type')";

		$result = mysql_query($query);
		$message = "";
		if (!$result){
			$message = "Error in inserting Promotion $id: $nameMessage: ". mysql_error();
		}
		else{
			$message = "Promotion $id: $nameMessage: inserted successfully.";
		}
		$num = mysql_num_rows(mysql_query("SELECT * FROM Promotion WHERE PromoCode = $id"));
		if($num !=0)
		{
			$message = "The Promotion Code you entered is already active. Please try again with a unique code";
		}

		echo '<form method = "POST" action = "../view/new_promotion_result.php#start"> <input name = "message" type = "hidden" value = "'. htmlentities($message) . '"/>
		<script> document.getElementsByTagName("form")[0].submit()</script>';

	}

	function connect_and_select_db($server, $username, $pwd, $dbname){
		$conn = mysql_connect($server, $username, $pwd);

		if(!$conn){
			echo "Unable to connect to DB: " . mysql_error();
			exit;
		}

		$dbh = mysql_select_db($dbname);
		if(!$dbh){
			echo "Unable to select ".$dbname.": " . mysql_error();
			exit;
		}
	}
	?>
</body>
</html>
