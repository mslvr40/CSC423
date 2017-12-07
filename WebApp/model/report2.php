<html>
<head></head>
<body>
	<?php
	require('../view/report2_result.inc');
	require('../db.inc');

	insert_promo();

	function insert_promo()
	{
		connect_and_select_db(DB_SERVER, DB_UN, DB_PWD, DB_NAME);
		$off = $_POST['amountOff'];
        $type = $_POST['typeOff'];


		$query = "SELECT Promotion.PromoCode, Promotion.Name, Promotion.Description, Promotion.AmountOff, Promotion.PromoType Promotion WHERE Promotion.AmountOff = $off AND Promotion.PromoType = '$type'";

		$result = mysql_query($query);
		$output = "";

		if (!$result){
			$output = "Error in finding promo with these variables: $off, $type : ". mysql_error();
		}
		\
		show_report2_result($result, $output, $off, $type);

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
