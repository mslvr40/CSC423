<html>
<head></head>
	<body>
<?php
require('../view/new_promotion_result.inc');
require('../db.inc');

insert_promo();

function insert_promo()
{
	
	connect_and_select_db(DB_SERVER, DB_UN, DB_PWD, DB_NAME);
	$nameMessage = $_POST['promoName'];
	$name = mysql_real_escape_string($_POST['promoName']);
	$amount = mysql_real_escape_string($_POST['promoAmount']);
	$type = mysql_real_escape_string($_POST['typeOff']);
	$description = mysql_real_escape_string($_POST['promoDescription']);
	
	$query = "Insert Promotion (Name, Description, AmountOff, PromoType)
	values ('$name', '$description', '$amount', '$type')";
	
	$result = mysql_query($query);
	$output = "";
	$id = mysql_insert_id();
	if (!$result){
		$output = "Error in inserting Promotion $id: $nameMessage: ". mysql_error();
	}
	else{
		$output = "Promotion $id: $nameMessage: inserted successfully.";
	}
	
	show_promo_result($output, $name, $description, $amount, $type);
	
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
