<html>
<head></head>
<body>
	<?php
	require('../view/report4_result.inc');
	require('../db.inc');
	insert_promo();
	function insert_promo()
	{
		connect_and_select_db(DB_SERVER, DB_UN, DB_PWD, DB_NAME);
	      $query = "SELECT AdEvent.Name AS AdEvent_Name, Item.ItemNumber, Item.ItemDescription, Item.FullRetailPrice, PromotionItem.SalePrice, (Item.FullRetailPrice-PromotionItem.SalePrice) AS Savings
              FROM Item
              INNER JOIN PromotionItem ON Item.ItemNumber = PromotionItem.ItemNumber
              INNER JOIN Promotion ON PromotionItem.PromoCode = Promotion.PromoCode
              INNER JOIN AdEventPromotion ON PromotionItem.PromoCode = AdEventPromotion.PromoCode
              INNER JOIN AdEvent ON AdEventPromotion.EventCode = AdEvent.EventCode
              ORDER BY (Item.FullRetailPrice - PromotionItem.SalePrice) DESC
              LIMIT 50";
		#$query = "SELECT * FROM Item LIMIT 50;
		$result = mysql_query($query);
		$output = "";
		if (!$result){
			$output = "Error in finding promo with these variables: $off, $type : ". mysql_error();
		}
		
		show_report4_result($result);
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
