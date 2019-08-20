<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
<form action="submit.php" method="POST">
	<table border="1" align="center"> 
		<tr>
			<td>Username</td>
			<td><input type="text" name="unm"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="Password" name="ps"></td>
		</tr>
		<tr>
			<td>Mobile Number</td>
			<td><input type="text" name="mobileno"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="Email" name="email"></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="text" name="gen"></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city"></td>
		</tr>
		<tr>
			<td>Occupation</td>
			<td>
				<select name="occupation">
					<opttion value="Select">Select</opttion>
					<option value="service">Service</option>
					<option value="business">Business</option>
					<option value="none">None</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td><input type="date" name="db" ></td>
		</tr>
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
	<center><a href="login.php">Login</a></center>
</form>
</body>
</html>