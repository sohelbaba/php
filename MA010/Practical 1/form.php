<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form action="" method="post">
	<table border="1">
		<tr><h1>Registration Form</h1></tr>
		<tr>
			<td>
				Name
			</td>
			<td>
				<input type="text" name="sname">
			</td>
		</tr>
		<tr>
			<td>
				Branch
			</td>
			<td>
			<select name="branch">
					<option>MCA</option>
					<option>MBA</option>
					<option>BCA</option>
					<option>BBA</option>
					<option>EC</option>
					<option>IT</option>
					<option>DD</option>

				</select>
			</td>
		</tr>
		<tr>
			<td>
				Semester
			</td>
			<td>
				Sem 1<input type="radio" name="Sem" value="1">
				Sem 2<input type="radio" name="Sem" value="2">
				Sem 3<input type="radio" name="Sem" value="3">
				Sem 4<input type="radio" name="Sem" value="4">
				Sem 5<input type="radio" name="Sem" value="5">
				Sem 6<input type="radio" name="Sem" value="6">
			</td>
		</tr>
		<tr>
			<td>
				Roll Number
			</td>
			<td>
				<input type="text" name="rno">
			</td>
		</tr>
		<tr>
			<td>
				Email
			</td>
			<td>
				<input type="text" name="email">
			</td>
		</tr>
		<tr>
			<td>
				Contact Number
			</td>
			<td>
				<select name="">
					<option>+91</option>
					<option>+92</option>
					<option>+93</option>
					<option>+94</option>
					<option>+95</option>
					<option>+96</option>
					<option>+97</option>

				</select>
				<input type="text" name="cno">
			</td>
		</tr>
		<tr>
			<td>
				Subject of Interest
			</td>
			<td>
				<select name="si">
					<option>Web Designing</option>
					<option>Culture</option>
					<option>Technical</option>
					<option>Finance</option>
					<option>Publication</option>
					<option>Reception</option>
					<option>Hosting</option>

				</select>
			</td>
		</tr>
		<tr>
			<td>
				Signature
			</td>
			<td>
				<textarea name="sign"></textarea>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="Submit" name="Submit"value="Submit" onclick="">
				<input type="button" name="cancle" value="Cancle">
			</td>
		</tr>
	</table>
	</form>
	<br><br>
	<table  border="1">
		<tr>
			<td>
				Name
			</td>
			<td>
				<?php echo $_POST["sname"]; ?>				
			</td>
		</tr>
		<tr>
			<td>
				Branch
			</td>
			<td>
				<?php echo $_POST["branch"]; ?>
			</td>
		</tr>
		<tr>
			<td>
				Semester
			</td>
			<td>
				<?php echo $_POST["sem"]; ?>

			</td>
		</tr>
		<tr>
			<td>
				Roll Number
			</td>
			<td>
				<?php echo $_POST["rno"]; ?>
			</td>
		</tr>
		<tr>
			<td>
				Email
			</td>
			<td>
				<?php echo $_POST["email"]; ?>
			</td>
		</tr>
		<tr>
			<td>
				Contact Number
			</td>
			<td>
				<?php echo $_POST["cno"]; ?>

			</td>
		</tr>
		<tr>
			<td>
				Subject of Interest
			</td>
			<td>
				<?php echo $_POST["si"]; ?>
			</td>
		</tr>
	</table>
</body>
</html>
