
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
<form action="checkuser.php" method="POST">
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
			<td><input type="submit" name="submit" value="Log In"></td>
			<td><input type="submit" name="cancel" value="Cancel"></td>
		</tr>
	</table>
	<center><a href="forgot.php">Forgot Password?</a></center>
</form>
</body>
</html>
