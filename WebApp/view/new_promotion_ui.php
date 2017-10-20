<html>
<head>
	<title>Add New Promotion</title>
</head>
<body>

<center>
		<h2>ADD A NEW PROMOTION</h2>
		<form action='../model/new_promotion.php' method='post'>
			<table>
				<tr>
					<td>Promotion Name:</td>
					<td><input type="text" name="promoName" id="promoName"</td>
				</tr>
				<tr>
				
				<tr>
					<td>Promotion ID:</td>
					<td><input type="text" name="promoID" id="promoID"></td>
				</tr>
				<tr>
					<td>Amount off:</td>
					<td><input type="text" name="promoAmount" id="promoAmount"></td>
				</tr>
				<tr>
					<td>Type:</td>
					<td><select name="typeOff" id="typeOff">
						<option selected disabled>Select the discount type</option>
						<option>%</option>
						<option>$</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Description:</td>
					<td><input type="text" name="promoDescription" id="promoDescription"</td>
				</tr>
			</table>
			<input type = "submit" value="Submit">
			<input type = "button" onClick="window.location='index.html'" value="Back">
		</form>
	</center>
</body>
</html>
