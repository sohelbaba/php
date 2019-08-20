<!DOCTYPE html>
<html>
<head>
	<title>Calculate Form</title>
</head>
<body>
	<form action="" method="post">
	<table border="1">
		<tr>
			CALCULATE SIMPLE INTEREST<br>
		</tr>
		<tr>
			<td>Basic Amount</td>
			<td>
				<input type="text" name="basic">
			</td>
		</tr>
		<tr>
			<td>Rate Of Interest</td>
			<td>
				<input type="text" name="rti">
			</td>
		</tr>
		<tr>
			<td>No of Days</td>
			<td>
				<input type="text" name="nod">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit">
			</td>
		</tr>
	</table>
	</form>

	<h3>Total Interest</h3>
	<?php

	$ba = $_POST["basic"];
	$rate = $_POST["rti"];
	$nod= $_POST["nod"];

	$simple = ($ba * $rate *$nod)/100;
	echo $simple;
	?>
</body>
</html>