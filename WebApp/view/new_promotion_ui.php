<html>
<head>
	<title>New Promotion</title>
</head>
<body>

<center>
		<h2>ADD A NEW PROMOTION</h2>
		<form action='../model/new_promotion.php' method='post'>
			<table>
				<tr>
					<td>Amount off:</td>
					<td><input type="text" name="promoAmount" id="promoAmount"></td>
				</tr>
				<tr>
					<td>Type:</td>
					<td><select name="typeOff" id="typeOff"></td>
						<option selected="selected">Select the discount type</option>
						<option>%</option>
						<option>$</option>
						</select>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>
