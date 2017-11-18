
<html>
<head></head>
<body>

	<?php
	require('../db.inc');

	insert_promotionItem();

	function insert_promotionItem()
	{

		connect_and_select_db(DB_SERVER, DB_UN, DB_PWD,DB_NAME);

		$itemNumber = $_POST['itemId'];

		$promoCode = $_POST['promoCodeInput'];

		$itemResult = mysql_query("SELECT * FROM Item WHERE ItemNumber = '$itemNumber'");
		$promoResult = mysql_query("SELECT * FROM Promotion WHERE PromoCode = '$promoCode'");

		$item = mysql_fetch_assoc($itemResult);
		$promo = mysql_fetch_assoc($promoResult);
		$itemName = $item["ItemDescription"];
		if($promo['PromoType'] == 'Dollar'){
			$newPrice = $item["PurchaseCost"] - $promo["AmountOff"];
		}
		elseif($promo['PromoType'] == "Percent"){
			$newPrice = $item["PurchaseCost"] - ( $item["PurchaseCost"] * $promo["AmountOff"]);
		}
		


		if($newPrice<0){
			echo "<script>
			alert('The price can not be negative.');
			window.history.go(-1);
			</script>";
			
		}
		$newPrice = number_format( $newPrice, 2 );
		$query = "Insert PromotionItem (PromoCode, ItemNumber, SalePrice)
		values ( '$promoCode', '$itemNumber', '$newPrice')";


		$result = mysql_query($query);

		$message = "";
		$id = mysql_insert_id();
		if (!$result) 
		{
			$message = "Error in adding Promotion Item $promoCode:  ". mysql_error();
		}
		else
		{
			$message = "Promotion Item: $promoCode inserted successfully. The new price of Item $itemNumber: $itemName is \$ $newPrice  ";

		}


		echo '<form method = "POST" action = "../view/add_promo_to_item_result.php#start"> <input name = "message" type = "hidden" value = "'. htmlentities($message) . '"/>
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
