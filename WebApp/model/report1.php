<html>
<head></head>
<body>
	<?php
	echo "<script type='text/javascript'>alert('1');</script>";
	require('../view/report1_result.inc');
	echo "<script type='text/javascript'>alert('2');</script>";
	require('../db.inc');
	echo "<script type='text/javascript'>alert('3');</script>";

	insert_promo();

	function insert_promo()
	{
		echo "<script type='text/javascript'>alert('4');</script>";
		connect_and_select_db(DB_SERVER, DB_UN, DB_PWD, DB_NAME);
		$date = $_POST['date'];
		
		
		$query = "SELECT AdEvent.Name, Promotion.Name FROM AdEvent, AdEventPromotion, Promotion WHERE AdEventPromotion.PromoCode = Promotion.PromoCode AND AdEventPromotion.EventCode = AdEvent.EventCode AND '$date' BETWEEN AdEvent.StartDate AND AdEvent.EndDate";
		
		$result = mysql_query($query);
		$output = "";
		
		if (!$result){
			$output = "Error in inserting Promotion $id: $nameMessage: ". mysql_error();
		}
		else{
			$output = "Promotion $id: $nameMessage: inserted successfully.";
		}
		
		show_report1_result($result, $output, $date);
		
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
