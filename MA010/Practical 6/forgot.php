<?php
	require_once('config.php');
	if(isset($_POST['submit']))
	{
		$secque = $_POST['secque'];
		$secans = $_POST['secans'];

		$sql ="select * from usertbl where Secret_ques like '".$secque."' and Secret_ans like '".$secans."'";
		if(mysqli_query($conn,$sql))
		{
			echo "good";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
<form action="" method="POST">
	<table border="1" align="center"> 
		<tr>
			<td>Secret Question</td>
			<td>
				<select name="secque">
					<opttion value="Select">Select</opttion>
					<option value="School Name?">School Name</option>
					<option value="Father Name?">Father Name</option>
					<option value="Mother Name?">Mother Name</option>
					<option value="pet Name?">pet Name</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Secret Answer</td>
			<td><input type="text" name="secans"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit"></td>
			<td><input type="submit" name="cancel" value="Cancel"></td>
		</tr>
	</table>
	<a href="login.php">Login</a>
</form>
</body>
</html>
