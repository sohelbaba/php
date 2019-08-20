<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	
	<form action="" method="POST">
		<table border="1">
			<tr>
				<td>Name : </td>
				<td><input type="text" name="nm"></td>
			</tr>
			<tr>
				<td>Password : </td>
				<td><input type="text" name="ps"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>
			</tr>
		</table>

	</form>
</body>
</html>
<?php

	if(isset($_POST['submit']))
	{
		$nm = $_POST['nm'];
		$ps = $_POST['ps'];
		date_default_timezone_set("Asia/Calcutta");

		$set = setcookie("Name",date("h:i:sa"), time() + (86400 * 30), "/"); // 86400 = 1 day
		header('Location:showcookie.php');
	}
?>
